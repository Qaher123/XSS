<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSS</title>
  </head>
  <body>

    <form class="" action="index.php" method="post">

      <input type="text" name="searchbar" value="" placeholder="zoekopdracht">

      <button type="submit" name="button">zoek</button>

    </form>

  </body>
</html>

<?php



  if(isset($_POST['searchbar'])){

    $search = $_POST['searchbar'];

    if (empty($search)) {
      echo "Searchbar is empty!";
    }else{
      echo "De zoekopdracht is: ".$search."<br>";
      echo "Geen resultaat gevonden.";
    }




  }else{

      echo "";

  }

  //als ik Coole website <script>alert("XSS voorbeeld")</script>? in type kom een een alert in mijn browser die het volgende meld -> XSS voorbeeld.
  // er staat ook De zoek opdracht is Coole website.
  // dus je kan je php code uitvoeren in de seachtbar wat niet hoort te kunnen.

  // als ik <font color="blue"> in type komt er  het volgende staan in mijn browser -> De zoekopdracht is :
  // dus het is leeg maar dat hoort niet zo te zijn.

  //Je kan oook HTML special charachters gebruiken daarmee word de code geprint op de browser en niet uitgevoerd.
  // Een geoie maniet om een XSS injectien tegen gaan is De in input Fields te vailideren.een andere methode is escaping...
 ?>
