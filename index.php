<?php
include("includes/Header.php");

?>
<h1> Kontaktai </h1>

<form action="store.php" method="POST">
    <input type="text" name="name" placeholder="Name" id="name">
    <br>
    <input type="text" name="surname" placeholder="Surname">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="number" name="phone" placeholder="Phone number">
    <br>
    <input type="text" name="subject" placeholder="Subject">
    <br>
    <input type="text" name="message" placeholder="Messsage">
    <br>
    <input type="submit" value="submit" name="submit">
</form>