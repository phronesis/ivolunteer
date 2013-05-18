
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add'), array('class' => '')); ?></li>						<li><?php echo $this->Html->link(__('List Project Statuses'), array('controller' => 'project_statuses', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Status'), array('controller' => 'project_statuses', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Images'), array('controller' => 'project_images', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Locations'), array('controller' => 'project_locations', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Location'), array('controller' => 'project_locations', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Materials'), array('controller' => 'project_materials', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Material'), array('controller' => 'project_materials', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Skills'), array('controller' => 'project_skills', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Skill'), array('controller' => 'project_skills', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Users'), array('controller' => 'project_users', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project User'), array('controller' => 'project_users', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Project Categories'), array('controller' => 'project_categories', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project Category'), array('controller' => 'project_categories', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="projects index">
		
			<h2><?php echo __('Projects'); ?></h2>
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('title'); ?></th>
											<th><?php echo $this->Paginator->sort('description'); ?></th>
											<th><?php echo $this->Paginator->sort('start_date'); ?></th>
											<th><?php echo $this->Paginator->sort('end_date'); ?></th>
											<th><?php echo $this->Paginator->sort('project_status_id'); ?></th>
											<th><?php echo $this->Paginator->sort('created'); ?></th>
											<th><?php echo $this->Paginator->sort('modified'); ?></th>
											<th><?php echo $this->Paginator->sort('no_of_volunteers'); ?></th>
											<th><?php echo $this->Paginator->sort('user_id'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['title']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['description']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['end_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['ProjectStatus']['name'], array('controller' => 'project_statuses', 'action' => 'view', $project['ProjectStatus']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['created']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['modified']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['no_of_volunteers']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
			</table>
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<div class="pagination">
				<ul>
					<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
				</ul>
			</div><!-- .pagination -->
			
		</div><!-- .index -->
	
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
