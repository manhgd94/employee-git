<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Department</h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('Department'); ?>
				<?php
					echo $this->Form->input('id', array('class'=>'form-control'));
					echo $this->Form->input('name', array('class'=>'form-control'));
					echo $this->Form->input('office_phone', array('class'=>'form-control'));
					echo $this->Form->input('employee_id', array(
	                	'type' => 'select',
						'options' => $options, // typically set from $this->find('list') in controller 
						'label'=> 'Manager',
						'selected'=> $manager,
						'escape' => false,  // prevent HTML being automatically escaped
						'error' => false,
						'class' => 'form-control'
					));
				?>
				<br>
			<?php
				echo $this->Form->submit(__('Update',true), array('class'=>'btn btn-success')); 
		    	echo $this->Form->end();
		     ?>
		</div>
	</div>
</div>