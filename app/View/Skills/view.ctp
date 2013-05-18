
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="skills view">

			<h2><?php  echo __('Skill'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['active']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
