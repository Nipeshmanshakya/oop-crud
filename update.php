<?php
include  'classes/Enquiry.php';

$enquiry = new Enquiry();
$enquiry->setId( $_GET['id']);
$enquiry->setFirstName( $_POST['first_name']);
$enquiry->setLastName( $_POST['last_name']);
$enquiry->setEmail( $_POST['email']);
$enquiry->setMessage( $_POST['message']);
$enquiry->save();