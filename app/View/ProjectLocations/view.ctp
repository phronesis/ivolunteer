
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Project Location'), array('action' => 'edit', $projectLocation['ProjectLocation']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Location'), array('action' => 'delete', $projectLocation['ProjectLocation']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $projectLocation['ProjectLocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Locations'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Location'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="projectLocations view">

			<h2><?php  echo __('Project Location'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Location Lat'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['location_lat']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Location Long'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['location_long']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($projectLocation['ProjectLocation']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Project'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($projectLocation['Project']['title'], array('controller' => 'projects', 'action' => 'view', $projectLocation['Project']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('City'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($projectLocation['City']['name'], array('controller' => 'cities', 'action' => 'view', $projectLocation['City']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
