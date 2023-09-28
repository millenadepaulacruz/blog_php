<?php

// it says where is the root of THE system, so that we can link images and styles 
 $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';