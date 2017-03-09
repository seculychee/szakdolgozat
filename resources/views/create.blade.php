<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{trans("welcome.Message")}}</title>

</head>
<body>


 <form action="store" method="post">
   <label for="name">name</label>
   <input type="text" name="name"><br>
   
   <label for="email">email</label>
   <input type="text" name="email"><br> 
 
   
   <label for="gender">gender</label>
   <input type="radio" name="gender" value="male">  
   <input type="radio" name="gender" value="female"><br>  
   
   State&nbsp;&nbsp;&nbsp;&nbsp;
   <select name="state">
     <option value="usa">usa</option>
     <option value="eng">eng</option>
     <option value="ger">ger</option>
   </select><br>

<!--   <label for="email">title</label>
   <input type="text" name="email"><br> 
   <label for="email">body</label>
   <input type="text" name="email"><br> -->

    I Agree<input type="checkbox" name="agree" value="agree">

    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    <input type="submit" name="submit" value="submit">
 </form>
  </body>
</html>
