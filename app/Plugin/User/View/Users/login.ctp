
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">



        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="users form">
            <?php
            echo $this->Form->create();
            ?>
            <fieldset> 
                <h2><?php echo __('Login'); ?></h2>

                <?php
                echo $this->Form->input('email');
                echo $this->Form->input('password');
                ?>
            </fieldset>
                <?php
                echo $this->Form->end('Login');
                ?>

                <a href="<?php echo $this->Html->url('/forgotPassword'); ?>">Forgot Password? Click Here</a><br/>
                <a href="<?php echo $this->Html->url('/sign_up'); ?>">Not Registered? Register</a>
        </div>
    </div>
</div>