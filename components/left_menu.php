<?php

$menuItems=[

	[ "name"=>"Alerts","href"=>"#","icon"=>"ki-notification-on","active"=>true ],
	[ "name"=>"All","href"=>"#","icon"=>"ki-notification-on" ,"active"=>false],
	[ "name"=>"Device Pool","href"=>"#","icon"=>"ki-notification-on" ,"active"=>false],
];

?>


<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
	data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

	<div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper">
		<div class="hover-scroll-y my-5 my-lg-2 mx-4" data-kt-scroll="true"
			data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
			data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
			data-kt-scroll-offset="5px">

			<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
				class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-3 mb-5">
				<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
					<?php foreach($menuItems as $item) { ?>
						<div class="menu-item">
							<a class="menu-link <?= $item['active'] ?  'active' : '' ?>" href="<?= $item["href"] ?>">
								<i class="ki-outline <?= $item["icon"] ?> fs-1 me-2"></i>
								<span class="menu-title">
									<?= $item["name"] ?>
								</span>
							</a>
						</div>
					<?php	} ?>
				</div>
			</div>
		</div>
	</div>

</div>