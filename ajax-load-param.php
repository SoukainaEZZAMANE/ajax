<?php

$login = $_POST['login'];

sleep(2);

$logins = array('fabrice','emilien','rodolphe');

if(in_array($login,$logins)) {
	echo '<p class="highlight2">Le login <b>'.$login.'</b> existe déjà.</p>';
} else {
	echo '<p class="highlight">Le login <b>'.$login.'</b> est libre.</p>';
}


?>