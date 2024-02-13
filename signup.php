<!DOCTYPE html>

<html lang="en" data-bs-theme-mode="dark">
<head>
	<base href="" />
	<title>Sign Up | MDS - Web Panel</title>
	<meta charset="utf-8" />
	<meta name="description" content="Modibus Distrubution Server - Web Panel" />
	<meta name="keywords" content="Modibus Distrubution Server - Web Panel" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Modibus Distrubution Server - Web Panel" />
	<meta property="og:url" content="WILLCheck" />
	<meta property="og:site_name" content="KModibus Distrubution Server - Web Panel" />
	<link rel="shortcut icon" href="/public/mds/assets/media/logos/favicon.ico" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="/public/mds/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/public/mds/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/public/mds/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/public/mds/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script>
		if (window.top != window.self) {
			window.top.location.replace(window.self.location.href);
		}
	</script>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
<?php include './public/mds/partials/theme-mode/_init.php'; ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">

	<style>
		body {
			background-image: url('/public/mds/assets/media/auth/bg10.jpeg');
		}

		[data-bs-theme="dark"] body {
			background-image: url('/public/mds/assets/media/auth/bg10-dark.jpeg');
		}
	</style>


	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		
		<div class="d-flex flex-lg-row-fluid">
			
			<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">

				<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
					 src="/public/mds/assets/media/auth/mds_temp.png" alt="" />
				<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
					 src="/public/mds/assets/media/auth/mds_temp.png" alt="" />

				
				
				<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
				
				
				<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
					<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
					<br />and provides some background information about
					<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
					<br />work following this is a transcript of the interview.</div>
				
			</div>
			
		</div>
		
		
		<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
			
			<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
				
				<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
					
					<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
						
						<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="/signup" action="#">

							<div class="text-center mb-11">

								<div class="text-gray-500 fw-semibold fs-6">
									<a href="/">
										<img alt="Modibus" src="/public/mds/assets/media/logos/custom-1.png" class="h-60px h-lg-75px"/>
									</a>
								</div>



								<div class="text-gray-500 fw-semibold fs-6">Web Management</div>

							</div>




							<div class="fv-row mb-8">
								<input type="text" placeholder="Account ID" name="mds_account_id" autocomplete="off" class="form-control bg-transparent" />
							</div>

							<div class="fv-row mb-8">
								<input type="text" placeholder="Username (E-Mail)"  name="mds_username" autocomplete="off" class="form-control bg-transparent" />
							</div>

							<div class="fv-row mb-8" data-kt-password-meter="true">
								
								<div class="mb-1">
									
									<div class="position-relative mb-3">
										<input class="form-control bg-transparent" type="mds_password" placeholder="Password" name="password" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
													<i class="ki-duotone ki-eye-slash fs-2"></i>
													<i class="ki-duotone ki-eye fs-2 d-none"></i>
												</span>
									</div>
									
									
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									
								</div>
								
								
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
								
							</div>
							
							
							<div class="fv-row mb-8">
								
								<input placeholder="Repeat Password" name="mds_password_confirm" type="password" autocomplete="off" class="form-control bg-transparent" />
								
							</div>
							
							
							<div class="fv-row mb-8">
								<label class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="toc" value="1" />
									<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
											<a href="#" class="ms-1 link-primary">Terms</a></span>
								</label>
							</div>
							
							
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
									
									<span class="indicator-label">Sign up</span>
									
									
									<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									
								</button>
							</div>
							
							
							<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
								<a href="/login" class="link-primary fw-semibold">Sign in</a></div>
							
						</form>
						
					</div>
					

					<div class="d-flex flex-stack">

						<div class="me-10">

							<button
								class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
								data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
									 src="/public/mds/assets/media/flags/united-states.svg" alt="" />
								<span data-kt-element="current-lang-name" class="me-1">English</span>
								<i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
							</button>


							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
								 data-kt-menu="true" id="kt_auth_lang_menu">

								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
													 src="/public/mds/assets/media/flags/united-states.svg" alt="" />
                                            </span>
										<span data-kt-element="lang-name">English</span>
									</a>
								</div>


								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
													 src="/public/mds/assets/media/flags/turkey.svg" alt="" />
                                            </span>
										<span data-kt-element="lang-name">Turkish</span>
									</a>
								</div>


								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
													 src="/public/mds/assets/media/flags/germany.svg" alt="" />
                                            </span>
										<span data-kt-element="lang-name">German</span>
									</a>
								</div>


							</div>

						</div>


						<div class="d-flex fw-semibold text-primary fs-base gap-5">
							<a href="/terms" target="_blank">Terms</a>
							<a href="/contact-us" target="_blank">Contact Us</a>
						</div>

					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>


<script>var hostUrl = "/public/mds/assets/";</script>

<script src="/public/mds/assets/plugins/global/plugins.bundle.js"></script>
<script src="/public/mds/assets/js/scripts.bundle.js"></script>


<script src="/public/mds/assets/js/custom/authentication/sign-up/general.js"></script>


</body>



</html>
