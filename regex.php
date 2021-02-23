<?php

/**
 * Pour plus d'informations concernant les REGEX, n'hésitez pas à aller voir le cours de PHP
 * sur Openclassroom concernant ce sujet : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2
 */

//la valeur qui va être testée
$value = '33000';

//Si c'est un code postal
if (preg_match('#^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$#', $value)) {
	echo 'Un code postal';
} else if (preg_match('#^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$#', $value)) {
	echo 'Un email';
} else if (preg_match('#^0[1-68][0-9]{8}$#', $value)) {
	echo 'Un numéro de téléphone';
}

?>

