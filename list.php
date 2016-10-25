<?php
    include 'classes/Enquiry.php';

$all = (new Enquiry())->getAll();
?>

<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>

<body>

<div class="container">
    <div class="row">
        <table class="table">

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>

        <?php foreach ( $all as $query ) {?>
            <tr>
                <td><?php echo $query->getName(); ?></td>
                <td><?php echo $query->getEmail(); ?></td>
                <td><?php echo $query->getMessage(); ?></td>
                <td>Action</td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>

ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC8XfscRHhdn5tPZjycNTFlfJqqF4TazzJS2V6TD0xm                                                                                                                040dFuvoRTyeRm7sD+EeOKJFixzYs1XTfjqezSELY5mHIJCrbgVaF15MIOoPIxOGZbIAS28s3OOSY1ly                                                                                                                dAz5/vCw/Z6ERv6o5LawaRnBOqe63GNS76L6zZ09ZKNxhUkOva/TPoVWoiSa2/WHFhLycdcQ68zM9O2j                                                                                                                JYtaOQJkIzyT/IFdGhZvk4COWxLyrjjBrlH+TOcOs/63Xfop8y6g9O4U6juJH0e3orVEZSLJcXCPg89qLQuVUILtg2iECfWPLrYos2PwpPng9H+0cbqkJC4PbqcyXMOMkIdD0TLAj+65 Nipesh@Nipes