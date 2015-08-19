<?php
$loader = require "vendor/autoload.php";
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);
