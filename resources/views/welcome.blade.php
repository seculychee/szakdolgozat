<html>
<head>
    <title> {{trans('welcome.Message')}} </title>
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
                <h3>{{trans("welcome.MotivationTitle1")}}</h3>
                <h5 class="light grey-text text-lighten-3">{{trans("welcome.Motivationbody1")}}</h5>
            </div>
        </li>
        <li>
            <img src="picture/7.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h3>{{trans("welcome.MotivationTitle2")}}</h3>
                <h5 class="light grey-text text-lighten-3">{{trans("welcome.Motivationbody2")}}</h5>
            </div>
        </li>
        <li>
            <img src="picture/2.jpg"> <!-- random image -->
            <div class="caption right-align">
                <h3>{{trans("welcome.MotivationTitle3")}}</h3>
                <h5 class="light grey-text text-lighten-3">{{trans("welcome.Motivationbody3")}}</h5>
            </div>
        </li>
        <li>
            <img src="picture/6.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>{{trans("welcome.MotivationTitle4")}}</h3>
                <h5 class="light grey-text text-lighten-3">{{trans("welcome.Motivationbody4")}}</h5>
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


