<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>Go to <a href="https://www.facebook.com/developers/" target="_blank">https://www.facebook.com/developers/ </a>and create a new application.</li>

    <li>Fill out any required fields such as the application name and description.</li>

    <li>Put your website domain in the Site Url field. It should match with the current hostname <b><?php echo $this->request->header('host') ; ?>.</b></li>

    <li>Once you have registered, copy and past the created application credentials into this setup page.</li>
</ol>