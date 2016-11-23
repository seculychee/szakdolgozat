<html>
<head>
    <title> {{trans('welcome.Message')}} </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')

<div>
    <h5 class="center-align">Sikeres Belépés</h5>
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


