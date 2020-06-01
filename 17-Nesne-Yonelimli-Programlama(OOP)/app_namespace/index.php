<?php

require __DIR__. '/controller/video.php';
require __DIR__. '/helper/video.php';

use app_namespace\helper\video as h_video;

$controller_video  = new \app_namespace\controller\video;
echo '<br>';
$helper_video      = new h_video();