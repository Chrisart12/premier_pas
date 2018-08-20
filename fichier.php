<?php

$mon_age = 40;

echo $mon_age;

if ($mon_age >= 18)
{
	echo "Le visiteur est autorisé à jouer, il a " . $mon_age . " ans."
}
else
{
	echo "Le visiteur n'est pas autorisé à jouer, il a moins de 18 ans.";
}