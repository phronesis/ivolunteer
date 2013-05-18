
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
										<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Images'), array('controller' => 'project_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Skills'), array('controller' => 'user_skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Skill'), array('controller' => 'user_skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Social Auths'), array('controller' => 'user_social_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Social Auth'), array('controller' => 'user_social_auths', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="users form">
		
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit User'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('Id', 'Id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
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
	<?php echo $this->Form->label('Full Name', 'Full Name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('full_name', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Phone', 'Phone', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('phone', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Picture', 'Picture', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('picture', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Active', 'Active', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('active', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Verified', 'Verified', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('verified', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
