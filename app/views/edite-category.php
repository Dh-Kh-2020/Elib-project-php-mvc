<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">
<head>
	<title>Edit a Category - Pages | Admin Dashboard</title>
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
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>عدل على الصنف</h4>

						<!-- Bordered Table -->
						<div class="card mb-4">
              <form class="card-body" action="/admin/edit_category/{id}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $params->id ?>">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-username">اسم الصنف</label>
                    <input name="categname" type="text" id="multicol-username" class="form-control" value="<?php echo $params->name ?>" />
                  </div>
                  <div class="col-md-6">
                    <div class="form-password-toggle">
                      <label class="form-label" for="multicol-confirm-password"> الحالة</label>
                      <div class="input-group input-group-merge">
                      <label class="switch">
                      <?php if($params->is_active == 1) {?>    
                          <input name="is_active" value="0" type="checkbox" checked class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label">مفعل</span>
                      <?php }
                      else {?>
                          <input name="is_active" value="1" type="checkbox" class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label">موقف</span>
                      <?php } ?>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

                <div class="pt-4">
                  <input type="submit" name="updateCateg" class="btn btn-primary me-sm-3 me-1" placeholder="Submit">
                  <input type="reset" name="reset" class="btn btn-label-secondary" placeholder="Cancel">
                </div>
              </form>
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
