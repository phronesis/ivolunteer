<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>
Go to <a href="https://manage.dev.live.com/ApplicationOverview.aspx">https://manage.dev.live.com/ApplicationOverview.aspx </a>and create a new application.
    </li>
    <li>
Fill out any required fields such as the application name and description.
   </li>
    <li>Put your website domain in the <b>Redirect Domain</b> field. It should match with the current hostname <b><?php echo $this->request->header('host'); ?></b>.

</li>
    <li>Once you have registered, copy and past the created application credentials into this setup page.
    </li>
</ol>