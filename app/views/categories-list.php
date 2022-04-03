<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">
<head>
	<title>Categories List - Pages | Admin Dashboard</title>
	<?php
		include_once __DIR__. '/components/dashMeta.php';
		include_once __DIR__. '/components/upperDashScripts.php';
	?>
</head>
<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">

			<!-- Aside Menu -->
			<?php include_once __DIR__. '/components/dashAside.php';?>
			<!-- /Aside Menu -->

			<!-- Layout container -->
			<div class="layout-page">

				<!-- Navbar -->
				<?php include_once __DIR__. '/components/dhashNav.php'; ?>
				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">

					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>الصلاحيات</h4>

						<!-- Bordered Table -->
						<div class="card"> 
							<div class="card-body">
								<div class="table-responsive text-nowrap">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>اسم الصنف</th>
												<th>الأيقونة</th>
												<th>الحالة</th>
												<th>العمليات</th>
											</tr>
										</thead>
										<tbody> 
											<?php foreach($params as $category){?>
												<tr>
													<td><?php echo $category['name'];  		?></td>
													<td><?php echo $category['image'];  		?></td>
													<td><?php if($category['is_active'] == 1){ ?>    
															<span class="badge bg-label-success me-1">مفعل</span>
														<?php }
															else {?>
															<span class="badge bg-label-danger me-1">موقف</span>
														<?php } ?>
													</td>
													<td><a href="/admin/edit_category?<?php echo $role['id']; ?>" class="btn btn-icon btn-outline-dribbble">
															<i class="tf-icons bx bx-edit-alt me-1"></i>
														</a>
														<button type="button" class="btn btn-icon btn-outline-dribbble">
															<i class="tf-icons bx bx-trash me-1"></i>
														</button>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/ Bordered Table -->
					</div>
					<!-- / Content -->

					<!-- Footer -->
					<?php include_once __DIR__. '/components/dashFooter.php'; ?>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- Layout container -->

			<!-- Overlay -->
			<div class="layout-overlay layout-menu-toggle"></div>

			<!-- Drag Target Area To SlideIn Menu On Small Screens -->
			<div class="drag-target"></div>
		</div>
		<!-- / Layout wrapper -->
	</div>

	<!-- Core JS -->
	<?php include_once __DIR__. '/components/lowerDashScript.php'; ?>
	<!-- /Core JS -->
</body>
</html>
