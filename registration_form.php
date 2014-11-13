<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 11/12/2014
 * Time: 3:24 PM
 */

// Going to include a CCS example

/*
 * 3 Ways to specify CSS
 *
 * External File (.css)
 *
 * Internal
 * <style> tag i.e. in <head>
 *
 * Inline - Style attribute
 *
 *
 *
 * Next assignment:
 *
 * PHP script to output HTML for users
 * must use @least 1 data support able
 * w/ a submit button
 * action attributes on form tag
 * Should be using some CSS to make it look good.
 *
 * PHP script to "process" #1
 * output a table of all values & rows from the table we just added a row to.
 *
 * Submit a text doc that lists all the urls needed to run the scripts. And any running procedures
 * required for the system.
 *
 */

?>

<html>
<head>
    <style type="text/css">
        p {border:red solid .5in;
            font-size:25}
    </style>
</head>
<body style="background-image:url(php03_logo.png);background-repeat:no-repeat">
    <p style="padding:.1in;border:red .5in;margin:.25in">
        This is a test of padding, border, and margin styles.
    </p>
<div style="height:2in;width:1in;scroll:auto;overflow:scroll">
    <p>
        This paragraph tag is within a div tag.
    </p>
</div>
<p>
    <input type="radio"> option 1 </input>
    <span style="position:relative;left:.5in">
        <input type="radio"> option 2 </input>
    </span>
    <input type="radio"> option 3 </input>
</p>
</body>
</html>