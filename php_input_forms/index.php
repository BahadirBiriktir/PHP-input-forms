<!-- HTML Anfang-->
<form action="index.php" method="GET">
  Vorname: <input type="text" name="Vorname">
  
  Nachname: <input type="text" name="Nachname">
  
  Alter: <input type="text" name="Alter"><br> <br>

  Geburtsdatum: <input type="text" name="Geburtsdatum">
  
  Groesse: <input type="text" name="Groesse">
  
  LieblingsEssen: <input type="text" name="LieblingsEssen"><br> <br>

  LieblingsFarbe: <input type="text" name="LieblingsFarbe">
  
  LieblingsTier: <input type="text" name="LieblingsTier">
  <input type="submit">
</form>


<!-- HTML Ende-->
<?php
if (isset($_GET["Vorname"])) {
  echo $_GET["Vorname"] . "<br>";
}
if (isset($_GET["Nachname"])) {
  echo $_GET["Nachname"] . "<br>";
}
if (isset($_GET["Alter"])) {
  echo $_GET["Alter"] . "<br>";
}
if (isset($_GET["Geburtsdatum"])) {
  echo $_GET["Geburtsdatum"] . "<br>";
}
if (isset($_GET["Groesse"])) {
  echo $_GET["Groesse"] . "<br>";
}
if (isset($_GET["LieblingsEssen"])) {
  echo $_GET["LieblingsEssen"] . "<br>";
}
if (isset($_GET["LieblingsFarbe"])) {
  echo $_GET["LieblingsFarbe"] . "<br>";
}
if (isset($_GET["LieblingsTier"])) {
  echo $_GET["LieblingsTier"] . "<br>";
}
?>
