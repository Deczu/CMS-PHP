<?php

require 'core/bstrap.php';


require Router::load('routes.php')->direct(Request::uri(),Request::method());