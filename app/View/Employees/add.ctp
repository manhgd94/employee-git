<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Add Employee</h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('Employee', array('type' => 'file')); ?>
				<div class="avatar">
					<?php 
						echo $this->Html->image('cake_logo.png', array('alt' => 'avatar'));
						echo $this->Form->input('photo', array('label'=>false, 'type'=>'file'));
					?>
				</div>
				<div class="info">
					<?php
						echo $this->Form->input('name', array('label'=>'Employee name', 'class'=>'form-control'));
						echo $this->Form->input('department_id', array('class'=>'form-control'));
						echo $this->Form->input('job_title', array('class'=>'form-control'));
						echo $this->Form->input('cellphone', array('class'=>'form-control'));
						echo $this->Form->input('email', array('class'=>'form-control'));
					?>
					<br>
					<?php
						echo $this->Form->submit(__('Submit',true), array('class'=>'btn btn-success')); 
				    	echo $this->Form->end();
				     ?>
		     </div>
		</div>
	</div>
</div>