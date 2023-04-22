<?php
include "header.php";
include "db.php";
?>
 <article>

<!-- 
  - #HERO
-->

<section class="hero">
  <div class="container">

    <div class="hero-content">

    <div class="movie-card">

<div class="title-wrapper"><center>
<form action="reqcon.php" method="post">
<label class="card-title"  for="fname">Нэр</label>
<input type="text"  name="nick_name">
<label class="card-title"for="lname">И-мейл </label>
<input type="Email" name="email">
<label class="card-title" for="lname">Мессеж</label><br>
<textarea name="msg"></textarea>
<button onclick="val()" name="submit" class="btn btn-primary">
<ion-icon name="play"></ion-icon>
<span>ОК</span>
</button>
</center>
</form>
 

</div>


  </div>

    </div>

  </div>
</section>
</article>  
<script >
function val(){
    name=document.forms["form1"]["nick_name"].value;
    email=document.froms["form1"]["email"].value;
    msg=document.froms["form1"]['msg'].value;
    if (name == "")
    {
        alert ("please enter username..")

    }
    if (email == "")
    {
        alert ("please enter email..")

    }
    if (msg == "")
    {
        alert ("please enter massage..")

    }
}
</script>





