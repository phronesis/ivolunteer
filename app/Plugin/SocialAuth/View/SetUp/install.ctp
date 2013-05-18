<style>
    form div {
        clear:none;
    }
</style>
<div>
    <?php
  
    if (isset($requirementErrors)) {
       
        echo $this->Site->displayError($requirementErrors);
    }
    
    $defaultProviders = Configure::read('HybridAuth.defaultProviders');
    ?>
    <h4>Important notices</h4>

    <ul>
        <li >For security reason, manage access control to 'Install' action as soon as you complete the installation process, You could allow only super admins access to that action or rename the .ctp file to something else and rename back to install.ctp when you need it. Thanks</li>
        <li >HybridAuth includes by default <?php echo count($defaultProviders)?> providers. If you want even more, please go to to HybridAuth web site and download the <a href="http://hybridauth.sourceforge.net/download.html">Additional Providers Package</a>.</li>
        <li >Visit the <a href="http://hybridauth.sourceforge.net/#installer">HybridAuth</a> home page to make sure if there is a newer version.</li>
    </ul>
    <br/>
    <br/>
    <br/>
    <div>
        <?php
        echo $this->Form->create();
        foreach ($defaultProviders as $provider):
           $enabled = isset($configData[$provider['label']]['enabled']) ?$configData[$provider['label']]['enabled']:false;
            $socialId = isset($configData[$provider['label']]['keys']['id'])?$configData[$provider['label']]['keys']['id']: '';
            $secret = isset($configData[$provider['label']]['keys']['secret'])?$configData[$provider['label']]['keys']['secret']: '';
            ?>
            <fieldset>
                <legend><?php echo $provider['provider_name']; ?></legend>
                <div style="width:40%; float:left;">
                    <?php echo $this->Form->label($provider['label'] . ' Adapter Status'); ?>
                    <?php $optionsArray = array(true => 'Enabled', false => 'Disabled'); ?>
                    <?php echo $this->Form->input('', array('type' => 'select', 'name' => strtoupper($provider['label']) . '_ADAPTER_STATUS', 'options' => $optionsArray, 'selected' => $enabled)); ?>
                    <?php
                    if (isset($provider['new_app_link'])):
                        if (isset($provider['require_client_id'])):
                            echo $this->Form->input('application_id', array(
                                'label' => 'Application ID',
                                'name' => strtoupper($provider['label']) . '_APPLICATION_APP_ID',
                                'type' => 'text',
                                'value' => $socialId));
                        else:
                            echo $this->Form->input('application_key', array(
                                'label' => 'Application Key', 'name' => strtoupper($provider['label']).'_APPLICATION_KEY',
                                'value' => $secret));

                        endif;
                        echo $this->Form->input('application_secret', array('label' => 'Application Secret', 'name' => strtoupper($provider['label']) . '_APPLICATION_SECRET','value'=>$secret));

                    endif;
                    ?>
                </div>
                <div style="width:50%; float:right;">
                    <? echo $this->element(strtolower($provider['label']) . '_steps'); ?>
                </div>
            </fieldset>
        <?php endforeach; ?>
        <?php
        echo $this->Form->submit('Setup HybridAuth');
        echo $this->Form->end();
        ?>
    </div>
</div>

