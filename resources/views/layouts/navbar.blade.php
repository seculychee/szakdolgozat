@include('layouts.matecss')
<nav>
    <div class="nav-wrapper" style="background-color: #546e7a">
        <a href="/" class="brand-logo" style="text-decoration: underline;"><i>Fitness logo</i></a>

        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        

        <ul class="right hide-on-med-and-down" >
            <li><a href="/..">{{trans("navbar.home")}}</a></li>
            <li><a href="contact">{{trans("navbar.contact")}}</a></li>

             @if (Auth::guest())
            @if (Route::has('login'))
            <li><a href="{{ url('/login') }}">{{trans("navbar.login")}}</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
             @else 
             <li>   <a href="#" data-activates="slide-out" class="user">
              <i class="material-icons">menu</i></a> </li>

                        @endif

        


        <ul id="mobile-demo" class="side-nav" >
            <li><a href="/..">{{trans("navbar.home")}}</a></li>
            <li><a href="contact">{{trans("navbar.contact")}}</a></li>
             @if (Auth::guest())
            @if (Route::has('login'))
            <li><a href="{{ url('/login') }}">{{trans("navbar.login")}}</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
             @else
             <li><a href="/home">Adatlap</a></li>
               <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        @endif

        </ul>
    </div>
 <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="picture/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="picture/user.jpg"></a>

      
      
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    @if (Auth::guest())
@else
    </li>
                    @role('user')
                    <li><a href="/admin/user">{{trans("usernav.userManagement")}}</a></li>
                    @endrole
                    <li><a href="/admin/post">{{trans("usernav.postManagement")}}</a></li>
    <li><a href="/home">Adatlap</a></li>
              <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                                
                            </ul>
@endif
                        
</nav>   

    <script>
    // mobil nézet
    $(".button-collapse").sideNav();
    
</script> 
<script>$(".user").sideNav();</script>