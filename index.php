<?php

require ("./autoload.php");

use Compositions\CompositeGraphic;
use Graphics\Rect;
use Graphics\Triangle;
use Graphics\Circle;



$rect = new Rect();
$triangle = new Triangle();
$circle = new circle();
$circle2 = new circle();

$group1 = new CompositeGraphic();

$group1->add($rect);
$group1->add($circle);

$group2 = new CompositeGraphic();
$group2->add($triangle);

$group1->add($group2);

$group1->print();