<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-k">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="/">
                         <img src="{{asset('assets/images/rentraction-logo-122x129.png')}}" alt="RentRaction" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-5" href="/">{{config('app.name','RentRaction')}}</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="/tenant">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/tenant/available-property">Properties</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/terms&docs">Terms & Docs</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/tenant/requestMaintenance">Maintenance</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/tenant/pay-rent">Pay Rent</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/chatting">Chat</a></li>
               
            @if (session()->has('userName')&& session('userName')==0 )
                <li class="nav-item"><a class="link text-white display-4" href="/tenant/myProfile">Hello,{{session('userName')}}</a></li>
                @else
            @endif
        </ul>
        <div class="navbar-buttons mbr-section-btn">
            @if (session()->has('userName') && session('userName')==0)
            
            <a class="btn btn-sm btn-primary display-4 " href="/logoutM">Logout
                <span class="mbr-iconfont mbr-iconfont-btn "></span></a></div>  
            
                
                @else
                    <a class="btn btn-sm btn-primary display-4" href="/customerLogin">Login
                        <span class="mbr-iconfont mbr-iconfont-btn "></span></a></div>
            @endif
                
                
        </div>
    </nav>
</section>
