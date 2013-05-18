<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand"  href="/"><?php echo Configure::read('ProjectName'); ?></a>
			<div class="nav-collapse">
				<ul class="nav">
					<?php 
if($this->Session->read('Auth.User.id'))
echo $this->Html->link('logout','/logout');  
?>
				</ul>
			</div>
		</div>
	</div>
</div>