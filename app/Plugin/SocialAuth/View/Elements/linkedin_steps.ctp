<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>Go to <a href="https://www.linkedin.com/secure/developer"target="_blank">https://www.linkedin.com/secure/developer</a> and <b>create a new application.</b>
    </li>
    <li>
        Fill out any required fields such as the application name and description.
    </li>
    <li>
        Put your website domain in the <b>Integration URL</b> field. It should match with the current hostname <b><?php echo $this->request->header('host'); ?></b>..

    </li>
    <li>Set the <b>Application Type to Web Application.</b>

    </li>
    <li>Once you have registered, copy and paste the created application credentials into this setup page.
    </li>
</ol>