@include('layouts.matecss')
<nav>
    <div class="nav-wrapper" style="background-color: #546e7a">
        <a href="/" class="brand-logo" style="text-decoration: underline;"><i>Fitness logo</i></a>


        <ul class="right hide-on-med-and-down" >
            <li><a href="/..">{{trans("navbar.home")}}</a></li>
            <li><a href="contact">{{trans("navbar.contact")}}</a></li>

            @if (Auth::guest())
            @if (Route::has('login'))
            <li><a href="{{ url('/login') }}">{{trans("navbar.login")}}</a></li>
            <li><a href="{{ url('/regist') }}">Register</a></li>
            @endif
             @else
             <li>   <a href="#" data-activates="slide-out" class="user">
              <i class="material-icons">menu</i></a> </li>

                        @endif
        </ul>
    </div>


 <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="/picture/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="/picture/user.jpg"></a>
      @if (Auth::check())
      <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
      <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
    @endif
    </div></li>
    @if (Auth::guest())
@else
 @if (Auth::check())
           @role('admin')
           <li><a href="{{ url('/role_permission') }}">{{trans("navbar.rolePermission")}}</a></li>
           <li><a href="{{ URL::route('roles.index') }}">{{trans("navbar.roles")}}</a></li>
           <li><a href="{{ URL::route('permissions.index') }}">{{trans("navbar.permission")}}</a></li>
          <li><a href="{{ URL::route('users.index') }}">{{trans("navbar.users")}}</a></li>
          <li><a href="company">{{trans("navbar.company")}}</a></li>
           @endrole
           @role('editor')
           <li><a href="books">{{trans("navbar.books")}}</a></li>
           <li><a href="coachLesson">{{trans("navbar.coachLesson")}}</a></li>
           @endrole
            <li><a href="{{route('userbooks')}}">{{trans("navbar.lessons")}}</a></li>


                    @endif
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
<!--<script>$(".user").sideNav();</script>-->
<script type="text/javascript">
  $('.user').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );</script>
