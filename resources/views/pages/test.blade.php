<html>
<head>
    <title> �dv�z�lj�k </title>
    @include('layouts.matecss')
<meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')


<div class="container">
<div class="row">
    <div class="col s11 m5">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Bejelentkez�s</span>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" type="text" name="first_name" class="validate">
                                <label for="first_name">Vezet�kn�v</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="last_name" type="text" name="last_name" class="validate">
                                <label for="last_name">Keresztn�v</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="country" type="text" name="country" class="validate">
                                <label for="country">Orsz�g</label>
                            </div>
                        </div>

                        <div class="row">
                        <div class="input-field col s12">
                            <input id="street" type="text" name="street" class="validate">
                            <label for="street">Utca</label>
                        </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



        <div class="col s11 m6" style="width: 520px; height: 500px">
            <div class="card">
                <div class="card-image">
                    <img src="picture/9.jpg">
                    <span class="card-title">Teljes�ts vel�k</span>
                </div>
                <div class="card-content">
                    <p>
                        <input type="checkbox" id="test5" />
                        <label for="test5">A  <a  href="#modal1">regisztr�ci�s felt�teleket</a> elfogadom .</label></p>
                    <p>
                        <input type="checkbox" id="test6" />
                        <label for="test6"> H�rlev�lre feliratkozom.</label></p>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light" style="background-color: #009688" type="submit" name="action">Regisztr�ci�
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Regisztr�ci�s felt�telek</h4>
        <p>Itt meg a t�bbi sz�veg</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>



@include('layouts.matejs')
<script>
    $(document).ready(function() {
        $('.modal').modal();
    });
</script>
</body>
</html>


