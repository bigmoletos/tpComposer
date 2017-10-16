<?php
require "vendor/autoload.php";
//pour eviter qu'il y ait des contraintes composer crée un namespace'

use Michelf\Markdown;

$my_text="bonjour **tout le monde** ceci est un contenu *markdow*";

$my_html= Markdown::defaultTransform($my_text);

//echo "bonjour ***tout le monde ** ceci est un contenu *markdow*";
echo $my_html;

?>