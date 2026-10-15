<?php
include "forms.php";

$form = new forms();
$form->set_method("POST");
$form->set_action("process.php");

$form->signup_form();
?>