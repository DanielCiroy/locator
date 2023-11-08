<?php
if (
    (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_GET['message']) || empty($_GET['message']))
    )
{
	echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}