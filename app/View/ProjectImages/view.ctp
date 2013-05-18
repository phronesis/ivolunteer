
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Project Image'), array('action' => 'edit', $projectImage['ProjectImage']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Image'), array('action' => 'delete', $projectImage['ProjectImage']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $projectImage['ProjectImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Images'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Image'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="projectImages view">

			<h2><?php  echo __('Project Image'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($projectImage['ProjectImage']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Url'); ?></strong></td>
		<td>
			<?php echo h($projectImage['ProjectImage']['url']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($projectImage['ProjectImage']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($projectImage['ProjectImage']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Project'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($projectImage['Project']['title'], array('controller' => 'projects', 'action' => 'view', $projectImage['Project']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($projectImage['User']['id'], array('controller' => 'users', 'action' => 'view', $projectImage['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($projectImage['ProjectImage']['active']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
