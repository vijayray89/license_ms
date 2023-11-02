<div class="container-scroller">

	<div class="container-fluid page-body-wrapper">
		<div class="main-panel">
			<div class="content-wrapper">
				<div class="page-header">
					<h3 class="page-title">Manage License</h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= BASE_URL.'license_ms/' ?>">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"> Manage License </li>
						</ol>
					</nav>
				</div>
				<div class="row">
					<div class="grey-bg container-fluid">
						<section id="minimal-statistics">
							<div class="row">
								<div class="col-12 mt-3 mb-1">
                                    <a href="<?= BASE_URL.'license_ms/index.php/welcome/add_license' ?>" class="btn btn-outline-primary btn-icon-text">
                                    <i class="mdi mdi-file-check mdi-plus"></i> Add License </a>
								</div>
							</div>
							
					</div>


					</section>


				</div>


				<div class="row">
					<div class="card">
						<div class="card-body">
							
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Tool Type</th>
											<th>Key</th>
											<th>Expiry Date</th>
											<th>Created On</th>
											<th>Assign To</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($component_list as $value){
											
										echo '<tr>
											<td>'.$value['tool_type'].'</td>
											<td>'.$value['license_key'].'</td>
											<td>'.$value['expiry_date'].'</td>
											<td>'.$value['created_on'].'</td>
											<td>'.$value['username'].'</td>
											<td>
												<label class="badge badge-danger">Expiring</label>
											</td>
										</tr>';
										}
										?>
										<!-- <tr>
											<td>Messsy</td>
											<td>Flash</td>
											<td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i>
											</td>
											<td>
												<label class="badge badge-warning">In progress</label>
											</td>
										</tr>
										<tr>
											<td>John</td>
											<td>Premier</td>
											<td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i>
											</td>
											<td>
												<label class="badge badge-info">Fixed</label>
											</td>
										</tr>
										<tr>
											<td>Peter</td>
											<td>After effects</td>
											<td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i>
											</td>
											<td>
												<label class="badge badge-success">Completed</label>
											</td>
										</tr>
										<tr>
											<td>Dave</td>
											<td>53275535</td>
											<td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i>
											</td>
											<td>
												<label class="badge badge-warning">In progress</label>
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
		<!-- partial:../../partials/_footer.html -->

		<!-- partial -->
	</div>
	<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<script>
	
</script>