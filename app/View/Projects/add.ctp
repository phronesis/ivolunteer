
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Project Statuses'), array('controller' => 'project_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Status'), array('controller' => 'project_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Images'), array('controller' => 'project_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Locations'), array('controller' => 'project_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Location'), array('controller' => 'project_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Materials'), array('controller' => 'project_materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Material'), array('controller' => 'project_materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Skills'), array('controller' => 'project_skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Skill'), array('controller' => 'project_skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Users'), array('controller' => 'project_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project User'), array('controller' => 'project_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Categories'), array('controller' => 'project_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Category'), array('controller' => 'project_categories', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="projects form">
		
			<?php echo $this->Form->create('Project', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Add Project'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('Title', 'Title', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('title', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Description', 'Description', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('description', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Start Date', 'Start Date', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('start_date', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('End Date', 'End Date', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('end_date', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('Project Status Id', 'Project Status Id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('project_status_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('No Of Volunteers', 'No Of Volunteers', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('no_of_volunteers', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('User Id', 'User Id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('user_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

		<?php echo $this->Form->input('ProjectCategory');?>
				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
