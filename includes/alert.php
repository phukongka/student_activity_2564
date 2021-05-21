<?php 
	function AlertWarning($Text,$Title="Alert") {
?>
		<div class="modal fade" id="warning">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-warning"><?php echo $Title; ?></h4>
						<button class="close" data-dismiss="modal" aria-label="Close">
							&times;
						</button>
						
					</div>
					<div class="modal-body">
						<div class="alert alert-warning mb-0" role="alert">
							<?php echo $Text; ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#warning").modal("show");
			});
		</script>
<?php
	}

	function AlertSuccess($Text,$Title="Success") {
?>
		<div class="modal fade" id="success">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-success"><?php echo $Title; ?></h4>
						<button class="close" data-dismiss="modal" aria-label="Close">
							&times;
						</button>
						
					</div>
					<div class="modal-body">
						<div class="alert alert-success mb-0" role="alert">
							<?php echo $Text; ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#success").modal("show");
			});
		</script>
<?php
	}

	function AlertDanger($Text,$Title="Alert") {
?>
		<div class="modal fade" id="danger">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-danger"><?php echo $Title; ?></h4>
						<button class="close" data-dismiss="modal" aria-label="Close">
							&times;
						</button>
						
					</div>
					<div class="modal-body">
						<div class="alert alert-danger mb-0" role="alert">
							<?php echo $Text; ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#danger").modal("show");
			});
		</script>
<?php
	}

	function AlertInfo($Text,$Title="Alert") {
?>
		<div class="modal fade" id="info">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-info"><?php echo $Title; ?></h4>
						<button class="close" data-dismiss="modal" aria-label="Close">
							&times;
						</button>
						
					</div>
					<div class="modal-body">
						<div class="alert alert-info mb-0" role="alert">
							<?php echo $Text; ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#info").modal("show");
			});
		</script>
<?php
	}
?>