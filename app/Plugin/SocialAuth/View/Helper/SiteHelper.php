<?php

class SiteHelper extends AppHelper {

    public function displayError($errorArray) {
       
        $errorString = '<div class="error">';
        foreach ($errorArray as $error) {
            $errorString .= $error . '<br/>';
        }
        $errorString .= '</div>';
        return $errorString;
    }

    

}

?>
