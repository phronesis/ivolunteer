
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Statuses'), array('controller' => 'project_statuses', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Status'), array('controller' => 'project_statuses', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Images'), array('controller' => 'project_images', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Locations'), array('controller' => 'project_locations', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Location'), array('controller' => 'project_locations', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Materials'), array('controller' => 'project_materials', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Material'), array('controller' => 'project_materials', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Skills'), array('controller' => 'project_skills', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Skill'), array('controller' => 'project_skills', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Users'), array('controller' => 'project_users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project User'), array('controller' => 'project_users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Categories'), array('controller' => 'project_categories', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Category'), array('controller' => 'project_categories', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="projects view">

			<h2><?php  echo __('Project'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Start Date'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['start_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('End Date'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['end_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Project Status'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($project['ProjectStatus']['name'], array('controller' => 'project_statuses', 'action' => 'view', $project['ProjectStatus']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('No Of Volunteers'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['no_of_volunteers']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

					
			<div class="related">

				<h3><?php echo __('Related Project Comments'); ?></h3>
				
				<?php if (!empty($project['ProjectComment'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectComment'] as $projectComment): ?>
		<tr>
			<td><?php echo $projectComment['id']; ?></td>
			<td><?php echo $projectComment['comment']; ?></td>
			<td><?php echo $projectComment['created']; ?></td>
			<td><?php echo $projectComment['modified']; ?></td>
			<td><?php echo $projectComment['active']; ?></td>
			<td><?php echo $projectComment['project_id']; ?></td>
			<td><?php echo $projectComment['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_comments', 'action' => 'view', $projectComment['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_comments', 'action' => 'edit', $projectComment['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_comments', 'action' => 'delete', $projectComment['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Images'); ?></h3>
				
				<?php if (!empty($project['ProjectImage'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectImage'] as $projectImage): ?>
		<tr>
			<td><?php echo $projectImage['id']; ?></td>
			<td><?php echo $projectImage['url']; ?></td>
			<td><?php echo $projectImage['created']; ?></td>
			<td><?php echo $projectImage['modified']; ?></td>
			<td><?php echo $projectImage['project_id']; ?></td>
			<td><?php echo $projectImage['user_id']; ?></td>
			<td><?php echo $projectImage['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_images', 'action' => 'view', $projectImage['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_images', 'action' => 'edit', $projectImage['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_images', 'action' => 'delete', $projectImage['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Image'), array('controller' => 'project_images', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Locations'); ?></h3>
				
				<?php if (!empty($project['ProjectLocation'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Location Lat'); ?></th>
		<th><?php echo __('Location Long'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectLocation'] as $projectLocation): ?>
		<tr>
			<td><?php echo $projectLocation['id']; ?></td>
			<td><?php echo $projectLocation['address']; ?></td>
			<td><?php echo $projectLocation['location_lat']; ?></td>
			<td><?php echo $projectLocation['location_long']; ?></td>
			<td><?php echo $projectLocation['created']; ?></td>
			<td><?php echo $projectLocation['modified']; ?></td>
			<td><?php echo $projectLocation['project_id']; ?></td>
			<td><?php echo $projectLocation['city_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_locations', 'action' => 'view', $projectLocation['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_locations', 'action' => 'edit', $projectLocation['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_locations', 'action' => 'delete', $projectLocation['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectLocation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Location'), array('controller' => 'project_locations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Materials'); ?></h3>
				
				<?php if (!empty($project['ProjectMaterial'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectMaterial'] as $projectMaterial): ?>
		<tr>
			<td><?php echo $projectMaterial['id']; ?></td>
			<td><?php echo $projectMaterial['name']; ?></td>
			<td><?php echo $projectMaterial['created']; ?></td>
			<td><?php echo $projectMaterial['modified']; ?></td>
			<td><?php echo $projectMaterial['project_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_materials', 'action' => 'view', $projectMaterial['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_materials', 'action' => 'edit', $projectMaterial['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_materials', 'action' => 'delete', $projectMaterial['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectMaterial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Material'), array('controller' => 'project_materials', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Skills'); ?></h3>
				
				<?php if (!empty($project['ProjectSkill'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Skills Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectSkill'] as $projectSkill): ?>
		<tr>
			<td><?php echo $projectSkill['project_id']; ?></td>
			<td><?php echo $projectSkill['skills_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_skills', 'action' => 'view', $projectSkill['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_skills', 'action' => 'edit', $projectSkill['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_skills', 'action' => 'delete', $projectSkill['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectSkill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Skill'), array('controller' => 'project_skills', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Users'); ?></h3>
				
				<?php if (!empty($project['ProjectUser'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectUser'] as $projectUser): ?>
		<tr>
			<td><?php echo $projectUser['id']; ?></td>
			<td><?php echo $projectUser['project_id']; ?></td>
			<td><?php echo $projectUser['user_id']; ?></td>
			<td><?php echo $projectUser['created']; ?></td>
			<td><?php echo $projectUser['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_users', 'action' => 'view', $projectUser['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_users', 'action' => 'edit', $projectUser['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_users', 'action' => 'delete', $projectUser['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project User'), array('controller' => 'project_users', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Project Categories'); ?></h3>
				
				<?php if (!empty($project['ProjectCategory'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($project['ProjectCategory'] as $projectCategory): ?>
		<tr>
			<td><?php echo $projectCategory['project_id']; ?></td>
			<td><?php echo $projectCategory['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_categories', 'action' => 'view', $projectCategory['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_categories', 'action' => 'edit', $projectCategory['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_categories', 'action' => 'delete', $projectCategory['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $projectCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project Category'), array('controller' => 'project_categories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
