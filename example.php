<?php
/**
 * The example file for social-share.
 */

require_once('src/SocialShare/Preview.php');
require_once('src/SocialShare/SocialMedia/Social.php');
require_once('src/SocialShare/SocialMedia/Unknown.php');
require_once('src/SocialShare/SocialMedia/Facebook.php');
require_once('src/SocialShare/SocialMedia/LinkedIn.php');
require_once('src/SocialShare/SocialMedia/Twitter.php');

use SocialShare\Preview;

$preview = new Preview();
$preview->setTitle("This is my example title");
$preview->setDescription("This is my example description");
$preview->setImageUrl("https://source.unsplash.com/random");
$preview->setUrl("https://example.com");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Example social share page</title>
    <link rel="stylesheet" href="/css/social-share-preview.css"/>
    <style>
        body {
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<h1>Example social share page</h1>

<h2>Facebook</h2>
<?php
    $preview->setType("facebook");
    echo $preview->generate();
?>

<h2>Twitter</h2>
<?php
$preview->setType("twitter");
echo $preview->generate();
?>

<h2>LinkedIn</h2>
<?php
$preview->setType("linkedIn");
echo $preview->generate();
?>

<h2>Unknown</h2>
<?php
$preview->setType("");
echo $preview->generate();
?>

<h2>Code debug</h2>
<pre>
<?php var_dump($preview); ?>
</pre>

</body>
</html>

