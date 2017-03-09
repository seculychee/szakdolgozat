<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{trans("welcome.Message")}}</title>

@include('layouts.matejs')
@include('layouts.matecss')
</head>
<body>
@include('layouts.navbar')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2" style="text-shadow: 2px 2px 3px #546E7A ;">{{trans("welcome.Message")}}</h1>
        <div class="row center">
          <h4 class="header col s12 light" style="color: white; text-shadow: 2px 2px 3px #546E7A ;">{{trans("welcome.MotivationTitle4")}}</h4>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="picture/7.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">


      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">{{trans("welcome.MotivationTitle1")}}</h5>

            <p class="light">{{trans("welcome.Motivationbody1")}}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">{{trans("welcome.MotivationTitle2")}}</h5>

            <p class="light">{{trans("welcome.Motivationbody2")}}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">{{trans("welcome.MotivationTitle4")}}</h5>

            <p class="light">{{trans("welcome.Motivationbody4")}}</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light" style="color: white; text-shadow: 2px 2px 3px #546E7A ;"><strong>{{trans("welcome.MotivationTitle3")}}</strong></h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="picture/3.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>{{trans("welcome.ContactUs")}}</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light" style="text-shadow: 2px 2px 3px #546E7A ;"><strong>{{trans("welcome.Regist")}}</strong></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="picture/2.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.</p>


        </div>
<!--        <div class="col l3 s12">
          <h5 class="white-text">Adatok</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Adatok</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>-->
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  </body>
</html>
