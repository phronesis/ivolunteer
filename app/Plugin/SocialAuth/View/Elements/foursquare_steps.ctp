<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>Go to <a href="https://www.foursquare.com/oauth/">https://www.foursquare.com/oauth/</a> and create a new application.
    </li>
    <li>

        Fill out any required fields such as the application name and description.

    </li>
    <li>Provide this URL as the Callback URL for your application:
      <b><?php echo $this->request->header('host'); ?>/social_auth/SetUp/index?hauth.done=Foursquare</b>


    </li>
    <li>Once you have registered, copy and past the created application credentials into this setup page
    </li>
</ol>