<?php
// error reporting
ini_set('error_reporting', E_STRICT);
ini_set('display_errors', 'on');

// this makes our life easier when dealing with paths.
// everything is relative to the application root now.
chdir(dirname(__DIR__));

// autoloading
require_once 'vendor/autoload.php';

use Flex\Random\Text\RandomAdjective;
use Flex\Random\Text\RandomChar;
use Flex\Random\Text\RandomLastname;
use Flex\Random\Text\RandomProject;
use Flex\Random\Text\RandomSentence;
use Flex\Random\Text\RandomText;
use Flex\Random\Text\RandomWord;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>elnebuloso/flex-random</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <h1>flex-random
        <small>elnebuloso</small>
    </h1>

    <table class="table table-striped table-bordered">
        <tbody>
        <tr>
            <td>RandomChar::get()</td>
            <td><?php echo RandomChar::get(); ?></td>
        </tr>
        <tr>
            <td>RandomAdjective::getLastname()</td>
            <td><?php echo RandomLastname::getLastname(); ?></td>
        </tr>
        <tr>
            <td>RandomAdjective::getAdjective()</td>
            <td><?php echo RandomAdjective::getAdjective(); ?></td>
        </tr>
        <tr>
            <td>RandomProject::getProjectNameMale()</td>
            <td><?php echo RandomProject::getProjectNameMale(); ?></td>
        </tr>
        <tr>
            <td>RandomProject::getProjectNameFemale()</td>
            <td><?php echo RandomProject::getProjectNameFemale(); ?></td>
        </tr>
        <tr>
            <td>RandomWord::get()</td>
            <td><?php echo RandomWord::get(); ?></td>
        </tr>
        <tr>
            <td>RandomWord::consonant()</td>
            <td><?php echo RandomWord::consonant(); ?></td>
        </tr>
        <tr>
            <td>RandomWord::vowel()</td>
            <td><?php echo RandomWord::vowel(); ?></td>
        </tr>
        <tr>
            <td>RandomSentence::get()</td>
            <td><?php echo RandomSentence::get(); ?></td>
        </tr>
        <tr>
            <td>RandomText::get()</td>
            <td><?php echo RandomText::get(); ?></td>
        </tr>
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>