
<?php $__env->startSection('site-title'); ?>
	Sms Api
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php if(count($errors) > 0): ?>
				<div class="row">
					<div class="col-md-06">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h4>
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if(Session::has('msg')): ?>
				<script>
                    $(document).ready(function() {
                        swal("<?php echo e(Session::get('msg')); ?>", "", "success");
                    });
				</script>
			<?php endif; ?>
<div class="row">
	<div class="col-md-12">
		<h2>SMS API Settings</h2>
		<hr/>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-bookmark"></i> Short Code</div>

				</div>
				<div class="portlet-body">
					<div class="table-scrollable">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th> # </th>
									<th> CODE </th>
									<th> DESCRIPTION </th>
								</tr>
							</thead>
							<tbody>


								<tr>
									<td> 1 </td>
									<td> <pre>&#123;&#123;message&#125;&#125;</pre> </td>
									<td> Details Text From Script</td>
								</tr>

								<tr>
									<td> 2 </td>
									<td> <pre>&#123;&#123;name&#125;&#125;</pre> </td>
									<td> Users Name. Will Pull From Database and Use in EMAIL text</td>
								</tr>



							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-envelope font-blue-sharp"></i>
						<span class="caption-subject font-blue-sharp bold uppercase">SMS Api</span>
					</div>
				</div>
				<div class="portlet-body form">
					<form role="form" method="POST" action="<?php echo e(route('sms.update')); ?>" >
						<?php echo e(csrf_field()); ?>

						<div class="form-body">
							<div class="form-group">
								<label>SMS API</label>
								<input type="text" name="smsapi" class="form-control" value="<?php echo e($temp->smsapi); ?>">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn green btn-block btn-lg">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>