 <!-- Breadcumb Section Start -->
 <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{$setting ? Storage::url($setting->breadcrump_image) : ''}}" alt="book">
        </div>
        <div class="book2">
            <img src="{{ $setting ? Storage::url($setting->breadcrump_image_two) : ''}}" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>{{$title}}</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            {{$title}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>