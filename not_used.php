<?
echo "<div>You are logged in.  <a href='logout.php'>Log out</a>.</div>";
echo "<div>Your unique identifier is <b>" . htmlspecialchars($_SESSION["user"]["identity"]) . "</b>.</div>";

if (isset($_SESSION["user"]["fullname"]))
    echo "<div>Your full name is <b>" 	  . htmlspecialchars($_SESSION["user"]["fullname"]) . "</b>.</div>";

if (isset($_SESSION["user"]["email"]))
    echo "<div>Your email address is <b>" . htmlspecialchars($_SESSION["user"]["email"]) . "</b>.</div>";
?>