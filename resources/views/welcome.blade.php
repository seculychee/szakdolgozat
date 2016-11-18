<html>
<head>
    <title> Üdvözöljük </title>
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
                <h3>Fedezze fel az önben rejl? er?t!</h3>
                <h5 class="light grey-text text-lighten-3">Személyi edz?ink mindig rendelkezésére állnak.</h5>
            </div>
        </li>
        <li>
            <img src="picture/7.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h3>Mindig fitten tarjuk!</h3>
                <h5 class="light grey-text text-lighten-3">Több mint 100 eszköz áll rendelkezésére nálunk amivel fejlesztheti izomzatát.</h5>
            </div>
        </li>
        <li>
            <img src="picture/2.jpg"> <!-- random image -->
            <div class="caption right-align">
                <h3>Edzen velünk!</h3>
                <h5 class="light grey-text text-lighten-3">Akár személyi edz? akár csapatban való részvetlre is szeretettel várjuk.</h5>
            </div>
        </li>
        <li>
            <img src="picture/6.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Csatlakozzon ön is hozzánk!</h3>
                <h5 class="light grey-text text-lighten-3">Bérlet vásárlás esetén edz?ink órárira iratkozhat.</h5>
            </div>
        </li>
    </ul>
</div>

<div>
    <h5 class="center-align">Üdvözöljük nálunk</h5>
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


