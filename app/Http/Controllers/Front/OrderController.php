<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use function Laravel\Prompts\error;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try{
            // 1. Gələn məlumatları doğrula
            Log::info('burada: ', $request->all());
            // dd($request->all());
            $validated = $request->validate([
                'city' => 'required|string|max:255',
                'address' => 'required|string|max:500',
                'phone' => 'required|string|max:20',
                'cart' => 'required|array',
                'cart.*.id' => 'required|integer|exists:products,id',
                'cart.*.quantity' => 'required|integer|min:1',
                'cart.*.price' => 'required|numeric|min:0',
            ]);
            Log::info('validate :   ', $validated);
            // dd($validated);
        
            $user = Auth::user();

            
            // 2. Order yaradın
            $order = Order::create([
                'user_id' => $user->id,
                'city' => $validated['city'],
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'total_price' => collect($validated['cart'])->sum(function ($item) {
                    return $item['price'] * $item['quantity'];
                }),
            ]);


            Log::info('null:  ',[$order->id]);
        
            // 3. Order məhsullarını əlavə edin
            foreach ($validated['cart'] as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }
        
            // 4. Uğurlu nəticə qaytar
            return response()->json([
                'success' => true,
                'message' => 'Sifariş uğurla tamamlandı!'
            ]);
        }catch(\Exception $e){
            Log::error('xeta: ',[$e]);
            return redirect()->back();
        }
    }
    
    
}
