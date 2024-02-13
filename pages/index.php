<?php
    $title = 'Home';
    $childView = './_index.php';
    $basePath='../';
    $css=array("
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css'>",
"<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css'></link> ",
"<link rel='stylesheet' href='https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css'></link>",
"<link rel = 'stylesheet' href = 'http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css' />",
);
    $script=array(
        "<script src='https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js'></script>",
        "<script src='https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js '></script>",
        "<script src='https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js'></script>",
        "<script src='https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js'></script>",
        "<script src='https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js'></script>",
        "<script src = 'http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js'></script>"
);
    include('../main_layout.php');
?>