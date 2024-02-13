<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <?php
        foreach ( $css as $item){
            echo $item;
        }
    ?>
    <link href="<?= $basePath ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= $basePath ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= $basePath ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= $basePath ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-aside-enabled="true"
    data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true"
    class="app-default">
    <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <?php include('components/header_menu.php'); ?>

            <div class=" app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" style="margin-left:0px;margin-right:0px">
            
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        <?php include($childView); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<script src="<?= $basePath ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= $basePath ?>assets/js/scripts.bundle.js"></script>

<script src="<?= $basePath ?>assets/js/widgets.bundle.js"></script>
<script src="<?= $basePath ?>assets/js/custom/widgets.js"></script>
<script src="<?= $basePath ?>assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= $basePath ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= $basePath ?>assets/js/custom/utilities/modals/users-search.js"></script>

    <?php
        foreach ( $script as $item){
            echo $item;
        }
    ?>
<script>
   
</script>
</html>