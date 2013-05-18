<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ol>
    <li>
        Go to <a href="http://www.developer.myspace.com/" target="_blank">http://www.developer.myspace.com/</a> and <b>create a new application</b>.
    </li>
    <li>

        Fill out any required fields such as the application name and description.

    </li>
    <li>Put your website domain in the <b>External Url</b> and <b>External Callback Validation</b> fields. It should match with the current hostname <b><?php echo $this->request->header('host'); ?></b>.

    </li>
    <li>Once you have registered, copy and past the created application credentials into this setup page.
    </li>
</ol>