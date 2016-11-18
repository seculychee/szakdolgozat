@include('layouts.matejs')
<nav>
    <div class="nav-wrapper" style="background-color: #546e7a">
        <a href="/" class="brand-logo" style="text-decoration: underline;">Fitness logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="/..">Kezd?lap</a></li>
            <li><a href="contact">Kapcsolat</a></li>
            <li><a href="login">Bejelentkezés</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav" >
            <li><a href="index">Kezd?lap</a></li>
            <li><a href="contact">Kapcsolat</a></li>
            <li><a href="login">Bejelentkezés</a></li>
        </ul>
    </div>
</nav><script>
    // mobil nézet
    $(".button-collapse").sideNav();
</script> 