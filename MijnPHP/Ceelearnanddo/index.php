<html>

<head>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">het Hoofd</div>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="index.html">inloggen</a>
            </li>
            <li> <a href="reg.php">registreren</a>
            </li>
            <li> <a href="gastenboek.php">Gastenboek</a>
            </li>
			<li> <a href="webshop.html">Gastenboek</a>
            </li>
            <li> <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</div>
<div id="main"><?php
include 'db_connect.php'; 

<form class="contact-form" action="" method="post"><input id="name" tabindex="1" size="22" type="text" value="" placeholder="Name">
<input id="email" tabindex="2" size="22" type="text" value="" placeholder="Email">
<textarea id="message" cols="39" name="message" rows="7"></textarea><input id="sendto" type="hidden" value="YOUR EMAIL HERE(Default Admin Email)">
<input id="submit" type="button" value="Post"></form>

</div>