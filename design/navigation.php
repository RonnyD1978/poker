<div class="navigation">

<?php
$navigation = "";

$previousPage = $page - 1;
$previousPageFile = "page" . $previousPage . ".php";

if (file_exists($previousPageFile))
{
    $navigation .= "<a href='index.php?page=$previousPage'>Previous</a>";
}

if (strlen($navigation ) > 0)
{
    $navigation .= " | ";
}

$navigation .= "Page " . $page;

$nextPage = $page + 1;
$nextPageFile = "page2.php";

if (file_exists($nextPageFile))
{
    $navigation .= " | <a href='index.php?page=$nextPage'>Next</a>";
}

if (strlen($navigation) > 0)
{
    $navigation .= "<hr/>";
}

echo $navigation;
?>

</div>
