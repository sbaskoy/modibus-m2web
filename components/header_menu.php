<?php 
$alerts=[
    array("title"=>"Project Alice","description"=>"Phase 1 development","date"=>"1 hr","status"=>"bg-light-primary"),
    array("title"=>"HR Confidential","description"=>"Confidential staff documents","date"=>"1 hr","status"=>"bg-light-danger"),
    array("title"=>"Company HR","description"=>"Corporeate staff profiles","date"=>"5 hr","status"=>"bg-light-warning"),
    array("title"=>"Project Redux","description"=>"New frontend admin theme","date"=>"5 hr","status"=>"bg-light-success"),

];


$logs=[
    [ "title"=> "200 OK","description"=>"New order","date"=>"Just now","status"=>"badge-light-success" ],
    [ "title"=> "500 ERR","description"=>"New customer","date"=>"Just now","status"=>"badge-light-danger" ],
    [ "title"=> "200 OK","description"=>"New order","date"=>"Just now","status"=>"badge-light-success" ],
    [ "title"=> "200 OK","description"=>"Payment order","date"=>"5 hrs","status"=>"badge-light-warning" ],
];

$quickLinks=[
    ["title"=>"Accounting","description"=>"eCommerce","icon"=>"ki-dollar"],
    ["title"=>"Accounting","description"=>"eCommerce","icon"=>"ki-dollar"],
    ["title"=>"Projects","description"=>"Pending Tasks","icon"=>"ki-abstract-41"],
    ["title"=>"Administration","description"=>"Console","icon"=>"ki-sms"],
];


$name = "Salim Başköy";
$email = "test@gmail.com";
$photo = "assets/media/avatars/300-2.jpg";

?>
<div id="kt_app_header" class="app-header d-flex flex-column flex-stack">

    <div class="d-flex flex-stack flex-grow-1">
        <div class="app-header-logo d-flex align-items-center ps-lg-12" id="kt_app_header_logo">

            <div id="kt_app_sidebar_toggle"
                class="app-sidebar-toggle btn btn-sm btn-icon bg-body btn-color-gray-500 btn-active-color-primary w-30px h-30px ms-n2 me-4 d-none d-lg-flex"
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-outline ki-abstract-14 fs-3 mt-1"></i>
            </div>

            <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                id="kt_app_sidebar_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
            <a href="../../demo39/dist/index.html" class="app-sidebar-logo">
                <img alt="Logo" src="<?= $basePath ?>assets/media/logos/demo39.svg" class="h-25px theme-light-show" />
                <img alt="Logo" src="<?= $basePath ?>assets/media/logos/demo39-dark.svg"
                    class="h-25px theme-dark-show" />
            </a>
        </div>
        <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
            <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px"
                    data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                    data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto"
                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                    <div data-kt-search-element="toggle"
                        class="search-toggle-mobile d-flex d-lg-none align-items-center">
                        <div class="d-flex">
                            <i class="ki-outline ki-magnifier fs-1 fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-2 ms-lg-6">
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-notification-on fs-1"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
                </div>

                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                    id="kt_menu_notifications">

                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                        style="background-image:url('<?= $basePath ?>assets/media/misc/menu-header-bg.jpg')">

                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                            <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">

                            <div class="scroll-y mh-325px my-5 px-8">
                                <?php foreach($alerts  as $alert){ ?>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label <?= $alert['status'] ?> ">
                                                <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">
                                                <?=$alert["title"]?>
                                            </a>
                                            <div class="text-gray-400 fs-7">
                                                <?=$alert["description"]?>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">
                                        <?= $alert["date"] ?>
                                    </span>
                                </div>
                                <?php  } ?>
                            </div>

                            <div class="py-3 text-center border-top">
                                <a href="../../demo39/dist/pages/user-profile/activity.html"
                                    class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-outline ki-arrow-right fs-5"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-2 ms-lg-6">
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">

                    <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                        style="background-image:url('<?= $basePath ?>assets/media/misc/menu-header-bg.jpg')">

                        <h3 class="text-white fw-semibold mb-3">Quick Links</h3>

                        <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending
                            tasks</span>

                    </div>

                    <div class="row g-0">
                        <?php foreach($quickLinks as $link) { ?>
                        <div class="col-6">
                            <a href="../../demo39/dist/apps/projects/budget.html"
                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                <i class="ki-outline <?= $link["icon"] ?> fs-3x text-primary mb-2"></i>
                                <span class="fs-5 fw-semibold text-gray-800 mb-0">
                                    <?= $link["title"] ?>
                                </span>
                                <span class="fs-7 text-gray-400">
                                    <?= $link["description"] ?>
                                </span>
                            </a>
                        </div>
                        <?php } ?>
                    </div>


                    <div class="py-2 text-center border-top">
                        <a href="../../demo39/dist/pages/user-profile/activity.html"
                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                            <i class="ki-outline ki-arrow-right fs-5"></i></a>
                    </div>

                </div>

            </div>

            <div class="app-navbar-item ms-2 ms-lg-6" id="kt_header_user_menu_toggle">

                <div class="cursor-pointer symbol symbol-circle symbol-30px symbol-lg-45px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <img src="<?= $basePath ?><?= $photo ?>" alt="user" />
                </div>

                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">

                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5"> <?= $name ?>
                                    <!-- <span
                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> -->
                                </div>
                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                    <?= $email ?>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="separator my-2"></div>

                    <div class="menu-item px-5">
                        <a href="../../demo39/dist/account/overview.html" class="menu-link px-5">My
                            Profile</a>
                    </div>


                    <div class="menu-item px-5">
                        <a href="../../demo39/dist/authentication/layouts/corporate/sign-in.html"
                            class="menu-link px-5">Sign Out</a>
                    </div>

                </div>

            </div>

            <div class="app-navbar-item ms-2 ms-lg-6 me-lg-6">

                <a href="../../demo39/dist/authentication/layouts/corporate/sign-in.html"
                    class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                    <i class="ki-outline ki-exit-right fs-1"></i>
                </a>

            </div>

            <div class="app-navbar-item ms-2 ms-lg-6 ms-n2 me-3 d-flex d-lg-none">
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    id="kt_app_aside_mobile_toggle">
                    <i class="ki-outline ki-burger-menu-2 fs-2"></i>
                </div>
            </div>

        </div>

    </div>



</div>