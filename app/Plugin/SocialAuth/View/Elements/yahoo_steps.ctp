<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
<li>
    Go to <a href="https://developer.apps.yahoo.com/dashboard/createKey.html" target="_blank">https://developer.apps.yahoo.com/dashboard/createKey.html</a> and <b>create a new application.</b>
</li>
<li>
Fill out any required fields such as the application name and description.
</li>
<li>
Put your website domain in the <b>Application URL</b> and <b>Application Domain</b> fields. It should match with the current hostname <b><?php echo $this->request->header('host'); ?></b>.
</li>
<li>
Set the Kind of Application to <b>Web-based</b>.
</li>
<li>
Once you have registered, copy and past the created application credentials into this setup page.
</li>
</ol>