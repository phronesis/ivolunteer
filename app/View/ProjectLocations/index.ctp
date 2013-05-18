
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('New Project Location'), array('action' => 'add'), array('class' => '')); ?></li>						<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="projectLocations index">
		
			<h2><?php echo __('Project Locations'); ?></h2>
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('address'); ?></th>
											<th><?php echo $this->Paginator->sort('location_lat'); ?></th>
											<th><?php echo $this->Paginator->sort('location_long'); ?></th>
											<th><?php echo $this->Paginator->sort('created'); ?></th>
											<th><?php echo $this->Paginator->sort('modified'); ?></th>
											<th><?php echo $this->Paginator->sort('project_id'); ?></th>
											<th><?php echo $this->Paginator->sort('city_id'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($projectLocations as $projectLocation): ?>
	<tr>
		<td><?php echo h($projectLocation['ProjectLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($projectLocation['ProjectLocation']['address']); ?>&nbsp;</td>
		<td><?php echo h($projectLocation['ProjectLocation']['location_lat']); ?>&nbsp;</td>
		<td><?php echo h($projectLocation['ProjectLocation']['location_long']); ?>&nbsp;</td>
		<td><?php echo h($projectLocation['ProjectLocation']['created']); ?>&nbsp;</td>
		<td><?php echo h($projectLocation['ProjectLocation']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectLocation['Project']['title'], array('controller' => 'projects', 'action' => 'view', $projectLocation['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projectLocation['City']['name'], array('controller' => 'cities', 'action' => 'view', $projectLocation['City']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projectLocation['ProjectLocation']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectLocation['ProjectLocation']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectLocation['ProjectLocation']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectLocation['ProjectLocation']['id'])); ?>
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
