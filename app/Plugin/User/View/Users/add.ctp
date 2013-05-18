
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="users form">
		
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Sign Up'); ?></h2>
                                        <div class="control-group">
	<?php echo $this->Form->label('Full Name', 'Full Name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('full_name', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->
			<div class="control-group">
	<?php echo $this->Form->label('Email', 'Email', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('email', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Password', 'Password', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('password', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->
<div class="control-group">
	<?php echo $this->Form->label('Confirm Password', 'Confirm Password', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('confirm_password', array('class' => 'span12','type'=>'password')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->



<div class="control-group">
	<?php echo $this->Form->label('Phone', 'Phone', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('phone', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->





				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
