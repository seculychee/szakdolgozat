<html>
<head>
    <title> Üdvözöljük </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')


<div class="valign-wrapper">
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Bejelentkezés</span>
                <div class="row">
                    <form method="post" action="" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                        <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="login">Bejelentkezés
                        </button>
                        </div>
                    </div>
            </div>
            <div class="card-action" >
                {{ csrf_field() }}
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="regist">Regisztráció
                </button>
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="forgot_pass">Elfelejtettem a jelszót
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
                <span class="card-title">?k már megtették az els? lépéseket!</span>
            </div>
            <div class="card-content">
                <p>Jelentkezz hozzánk és tekintsd meg a tökéletes fitness élményt,<bn> edz edz?inkel akik különböz? órák keretében tartanak csoportos tréninget.<br>
                    Több mint 100 elégedett visszatér? vendég. Igényeld nálunk havi bérleted és jelentkezz fel egy órára és lásd mire vagy képes.</p>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>


