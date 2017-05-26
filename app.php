<?php

use Silex\Application;
$app = new Application();
$app['debug'] = true;
$app->run();
