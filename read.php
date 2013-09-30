<?php
 
include_once('RssParser.php'); // include the php file with the class
 
$parser = new RssParser(); // instantiate the class
$blog_feed = $parser->checkCache(array('blog' => 'http://www.reshadfarid.nl/feed.php')); // load the RSS
?>
<ul>
<?
foreach ($blog_feed as $key => $items)
{
    if ($key < 5): ?>
    <li><a href="<?= $items['link'] ?>"><?= $items['title'] ?></a></li>
    <?php
    endif;
} //endforeach
?>
</ul>