<?php

include 'classes/Enquiry.php';

$enquiry = new Enquiry();
$query = $enquiry->findById( $_GET['id']);

?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>

<body>

<div class="container">
    <div class="row">
        <form action="update.php?id=<?php echo $query->getId() ?>" class="form" method="post">
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $query->getFirstName() ?>">
            </div>
            <div class="form-group">
                <label for="">last Name</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $query->getLastName() ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $query->getEmail() ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea type="text" class="form-control" name="message"><?php echo $query->getMessage()?></textarea>
            </div>
            <div class="form-group">
                <label for=""></label>
                <button class="btn btn-success">Save</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>