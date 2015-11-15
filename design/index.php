<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KataPokerHands</title>

    <link rel="stylesheet" href="styles.css" type="text/css"/>

</head>
<body>

<?php
$page = 1;

if (isset($_GET["page"]))
{
    $page = $_GET["page"];
}

if ($page <= 0)
{
    $page = 1;
}
?>

<a name="top"></a>

<h1>KataPokerHands</h1>

<?php include("navigation.php"); ?>

<?php include("page" . $page . ".php"); ?>

<hr/>

<a href="#top">Back to top</a>

</body>
</html>