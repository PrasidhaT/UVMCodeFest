<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Room Mate</title>
<meta charset="utf-8">
<meta name="author" content="Nkanginieme">
<meta name="description" content="A website dedicated to making sure uvm students can find good roomates.">

<link rel="stylesheet" href="CSS/style.css" media="screen">
        <?php
            $debug = false;

 //%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP
//

        
        $domain = "//";

        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");

        $domain .= $server;

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

        $path_parts = pathinfo($phpSelf);

        if ($debug) {
            print "<p>Domain: " . $domain;
            print "<p>php Self: " . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre></p>";
        }

// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// inlcude all libraries. 
// 
// Common mistake: not have the lib folder with these files.
// Google the difference between require and include
//
        print "<!-- include libraries -->";

        require_once('lib/security.php');

        // notice this if statemtent only includes the functions if it is 
        // form page. A common mistake is to make a form and call the page
        // join.php which means you need to change it below (or delete the if)
        if ($path_parts['filename'] == "form") {
            print "<!-- include form libraries -->";
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }

        print "<!-- finished including libraries -->";
        ?>	

    </head>
    <!-- ################ body section ######################### -->

    <?php
    print '<body id="' . $path_parts['filename'] . '">';

    include "header.php";
    include "nav.php";
    ?>
