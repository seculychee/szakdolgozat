<html>
<head>
    <title> �dv�z�lj�k </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')


<div class="valign-wrapper">
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Bejelentkez�s</span>
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
                        <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="login">Bejelentkez�s
                        </button>
                        </div>
                    </div>
            </div>
            <div class="card-action" >
                {{ csrf_field() }}
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="regist">Regisztr�ci�
                </button>
                <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="forgot_pass">Elfelejtettem a jelsz�t
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
                <span class="card-title">?k m�r megtett�k az els? l�p�seket!</span>
            </div>
            <div class="card-content">
                <p>Jelentkezz hozz�nk �s tekintsd meg a t�k�letes fitness �lm�nyt,<bn> edz edz?inkel akik k�l�nb�z? �r�k keret�ben tartanak csoportos tr�ninget.<br>
                    T�bb mint 100 el�gedett visszat�r? vend�g. Ig�nyeld n�lunk havi b�rleted �s jelentkezz fel egy �r�ra �s l�sd mire vagy k�pes.</p>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>


