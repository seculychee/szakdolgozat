<html>
<head>
    <title> {{trans("login.title")}} </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')


<div class="valign-wrapper">
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{trans("login.title")}}</span>
                <div class="row">
                    <form method="post" action="" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">{{trans("login.User")}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">{{trans("login.Pass")}}</label>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                        <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="login">{{trans("login.title")}}
                        </button>
                        </div>
                    </div>

            </div>
            <div class="card-action" >
                {{ csrf_field() }}
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="regist">{{trans("registration.title")}}
                </button>
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="forgot_pass">{{trans("login.ForgotPass")}}
                </button>
            </div>
        </div>
    </div>

    </form>
</div>

<div class="valign-wrapper">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-image">
                <img src="picture/8.jpg">
                <span class="card-title">{{trans("login.MotivationTitle")}}</span>
            </div>
            <div class="card-content">
                <p>{!!  trans('login.MotivationBody') !!}</p>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>


