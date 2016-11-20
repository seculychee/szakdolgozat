<html>
<head>
    <title> {{trans('welcome.Welcome Message')}} </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')

<div class="slider">
    <ul class="slides">
        <li>
            <img src="picture/3.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Fedezze fel az �nben rejl? er?t!</h3>
                <h5 class="light grey-text text-lighten-3">Szem�lyi edz?ink mindig rendelkez�s�re �llnak.</h5>
            </div>
        </li>
        <li>
            <img src="picture/7.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h3>Mindig fitten tarjuk!</h3>
                <h5 class="light grey-text text-lighten-3">T�bb mint 100 eszk�z �ll rendelkez�s�re n�lunk amivel fejlesztheti izomzat�t.</h5>
            </div>
        </li>
        <li>
            <img src="picture/2.jpg"> <!-- random image -->
            <div class="caption right-align">
                <h3>Edzen vel�nk!</h3>
                <h5 class="light grey-text text-lighten-3">Ak�r szem�lyi edz? ak�r csapatban val� r�szvetlre is szeretettel v�rjuk.</h5>
            </div>
        </li>
        <li>
            <img src="picture/6.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Csatlakozzon �n is hozz�nk!</h3>
                <h5 class="light grey-text text-lighten-3">B�rlet v�s�rl�s eset�n edz?ink �r�rira iratkozhat.</h5>
            </div>
        </li>
    </ul>
</div>

<div>
    <h5 class="center-align">{!! trans('Welcome.Message') !!}</h5>
</div>


@include('layouts.matejs')
<script>
    $(document).ready(function(){
        $(".button-collepse").sideNav();
        $('.slider').slider({full_width: true});
    });
</script>
</body>
</html>


