<?php

Router::connect('/login',array('controller'=>'users','action'=>'login','plugin'=>'user'));
Router::connect('/logout',array('controller'=>'users','action'=>'logout','plugin'=>'user'));
Router::connect('/sign_up',array('controller'=>'users','action'=>'add','plugin'=>'user'));
Router::connect('/forgot_password',array('controller'=>'users','action'=>'forgotPassword','plugin'=>'user_management'));
Router::connect('/social_login',array('controller'=>'users','action'=>'socialAuth','plugin'=>'User_management'));

?>
