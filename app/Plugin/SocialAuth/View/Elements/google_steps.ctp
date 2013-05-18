<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>Go to <a href="https://code.google.com/apis/console/" target="_blank">https://code.google.com/apis/console/</a> and <b>create a new application.</b></li>

    <li>Fill out any required fields such as the application name and description.</li>

    <li>On the "Create Client ID" popup switch to advanced settings by clicking on (more options).</li>

    <li>Provide this URL as the Callback URL for your application:
<?php echo $this->request->header('host'); ?>/social_auth/SetUp/index?hauth.done=Google
    </li>

    <li>Once you have registered, copy and past the created application credentials into this setup page.</li>


