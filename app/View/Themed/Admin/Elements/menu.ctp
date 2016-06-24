<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <?php echo $this->Html->link('Employee Directory',array('controller'=>'employees', 'action'=>'index'), array('class'=>'navbar-brand')) ?>
    </div>
    <ul class="nav navbar-nav">
		<li><?php echo $this->Html->link('Employees',array('controller'=>'employees', 'action'=>'index')) ?></li>
		<li><?php echo $this->Html->link('Departments',array('controller'=>'departments', 'action'=>'index')) ?></li>
    <?php if(isset($userlogin)): ?>
      <li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')) ?></li>
    <?php endif ?>
    <?php if(!isset($userlogin)): ?>
		  <li><?php echo $this->Html->link('Login',array('controller'=>'users', 'action'=>'login')) ?></li>
    <?php endif ?>
    </ul>
  </div>
</nav>