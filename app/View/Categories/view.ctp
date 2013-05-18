
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="categories view">

			<h2><?php  echo __('Category'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent Id'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['parent_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Lft'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['lft']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rght'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['rght']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['active']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
