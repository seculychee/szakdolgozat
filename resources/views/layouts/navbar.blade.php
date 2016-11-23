@include('layouts.matejs')
<nav>
    <div class="nav-wrapper" style="background-color: #546e7a">
        <a href="/" class="brand-logo" style="text-decoration: underline;">Fitness logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="/..">{{trans("navbar.home")}}</a></li>
            <li><a href="contact">{{trans("navbar.contact")}}</a></li>
            <li><a href="login">{{trans("navbar.login")}}</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav" >
            <li><a href="/..">{{trans("navbar.home")}}</a></li>
            <li><a href="contact">{{trans("navbar.contact")}}</a></li>
            <li><a href="login">{{trans("navbar.login")}}</a></li>
        </ul>
    </div>
</nav><script>
    // mobil nézet
    $(".button-collapse").sideNav();
</script> 