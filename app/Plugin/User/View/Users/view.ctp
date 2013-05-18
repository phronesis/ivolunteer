
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Images'), array('controller' => 'project_images', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Skills'), array('controller' => 'user_skills', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Skill'), array('controller' => 'user_skills', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Social Auths'), array('controller' => 'user_social_auths', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Social Auth'), array('controller' => 'user_social_auths', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password'); ?></strong></td>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Full Name'); ?></strong></td>
		<td>
			<?php echo h($user['User']['full_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone'); ?></strong></td>
		<td>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Picture'); ?></strong></td>
		<td>
			<?php echo h($user['User']['picture']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Verified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['verified']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

					
			<div class="related">

				<h3><?php echo __('Related Project Comments'); ?></h3>
				
				<?php if (!empty($user['ProjectComment'])): ?>
				
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
								foreach ($user['ProjectComment'] as $projectComment): ?>
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
				
				<?php if (!empty($user['ProjectImage'])): ?>
				
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
								foreach ($user['ProjectImage'] as $projectImage): ?>
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

				<h3><?php echo __('Related Projects'); ?></h3>
				
				<?php if (!empty($user['Project'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Project Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('No Of Volunteers'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($user['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['title']; ?></td>
			<td><?php echo $project['description']; ?></td>
			<td><?php echo $project['start_date']; ?></td>
			<td><?php echo $project['end_date']; ?></td>
			<td><?php echo $project['project_status_id']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td><?php echo $project['no_of_volunteers']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related User Skills'); ?></h3>
				
				<?php if (!empty($user['UserSkill'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Skill Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($user['UserSkill'] as $userSkill): ?>
		<tr>
			<td><?php echo $userSkill['user_id']; ?></td>
			<td><?php echo $userSkill['skill_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_skills', 'action' => 'view', $userSkill['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_skills', 'action' => 'edit', $userSkill['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_skills', 'action' => 'delete', $userSkill['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $userSkill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New User Skill'), array('controller' => 'user_skills', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related User Social Auths'); ?></h3>
				
				<?php if (!empty($user['UserSocialAuth'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Provider'); ?></th>
		<th><?php echo __('Provider Uid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Profile Url'); ?></th>
		<th><?php echo __('Website Url'); ?></th>
		<th><?php echo __('Display Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($user['UserSocialAuth'] as $userSocialAuth): ?>
		<tr>
			<td><?php echo $userSocialAuth['id']; ?></td>
			<td><?php echo $userSocialAuth['provider']; ?></td>
			<td><?php echo $userSocialAuth['provider_uid']; ?></td>
			<td><?php echo $userSocialAuth['user_id']; ?></td>
			<td><?php echo $userSocialAuth['email_address']; ?></td>
			<td><?php echo $userSocialAuth['first_name']; ?></td>
			<td><?php echo $userSocialAuth['last_name']; ?></td>
			<td><?php echo $userSocialAuth['profile_url']; ?></td>
			<td><?php echo $userSocialAuth['website_url']; ?></td>
			<td><?php echo $userSocialAuth['display_name']; ?></td>
			<td><?php echo $userSocialAuth['created']; ?></td>
			<td><?php echo $userSocialAuth['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_social_auths', 'action' => 'view', $userSocialAuth['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_social_auths', 'action' => 'edit', $userSocialAuth['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_social_auths', 'action' => 'delete', $userSocialAuth['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $userSocialAuth['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New User Social Auth'), array('controller' => 'user_social_auths', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
