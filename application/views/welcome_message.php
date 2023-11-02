<div class="container-scroller">

	<div class="container-fluid page-body-wrapper">
		<div class="main-panel">
			<div class="content-wrapper">
				<div class="page-header">
					<h3 class="page-title">Dashboard</h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<!-- <li class="breadcrumb-item active" aria-current="page"> Dashboard </li> -->
						</ol>
					</nav>
				</div>
				<!-- <div class="row">
					<div class="grey-bg container-fluid">
						<section id="minimal-statistics">
							<div class="row">
								<div class="col-12 mt-3 mb-1">
									<h4 class="text-uppercase">Minimal Statistics Cards</h4>
									<p>Statistics on minimal cards.</p>
								</div>
							</div>
							
					</div>


					</section>


				</div> -->


				<div class="row">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Hoverable Table</h4>
						
							</p>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>User</th>
											<th>Email</th>
											<th>User Role</th>
											<th>Created On</th>
											<th>Updated On</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php


												foreach($user_lists as $value){
												
												echo '<tr>
													<td>'.$value['username'].'</td>
													<td>'.$value['email'].'</td>
													<td>'.$value['username'].'</td>
													<td>'.$value['created_at'].'</td>
													<td>'.$value['updated_at'].'</td>
													<td>
														<label class="badge badge-danger">Reset Password</label>
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