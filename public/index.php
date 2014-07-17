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
use Flex\Random\Text\RandomWord;
use Flex\Random\Text\RandomSentence;
use Flex\Random\Text\RandomText;
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

    <h2>RandomChar::get()
        <small> <?php echo RandomChar::get(); ?></small>
    </h2>

    <h2>RandomAdjective::getAdjective()
        <small> <?php echo RandomAdjective::getAdjective(); ?></small>
    </h2>

    <h2>RandomWord::get()
        <small> <?php echo RandomWord::get(); ?></small>
    </h2>

    <h2>RandomWord::consonant()
        <small> <?php echo RandomWord::consonant(); ?></small>
    </h2>

    <h2>RandomWord::vowel()
        <small> <?php echo RandomWord::vowel(); ?></small>
    </h2>

    <h2>RandomSentence::get()
        <small> <?php echo RandomSentence::get(); ?></small>
    </h2>

    <h2>RandomText::get()
        <small> <?php echo RandomText::get(); ?></small>
    </h2>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>