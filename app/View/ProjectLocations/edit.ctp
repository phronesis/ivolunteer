
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjectLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjectLocation.id'))); ?></li>
										<li><?php echo $this->Html->link(__('List Project Locations'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="projectLocations form">
		
			<?php echo $this->Form->create('ProjectLocation', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit Project Location'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('id', 'id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('address', 'address', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('address', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('location_lat', 'location_lat', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('location_lat', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('location_long', 'location_long', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('location_long', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('project_id', 'project_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('project_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('city_id', 'city_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('city_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
