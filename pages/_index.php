<?php 

$columns=array(
    [
        "id"=>"id",
        "name"=>"Id",
        "fn"=> function (string $param) : string {
            return  $param;
        }
    ],
    [
        "id"=>"name",
        "name"=>"Name",
        "fn"=> function ( $param) : string {
              return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
      [
        "id"=>"description",
        "name"=>"Date",
        "fn"=> function (string $param) : string {
            return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
     [
        "id"=>"serial_number",
        "name"=>"Serial number",
        "fn"=> function (string $param) : string {
          return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
     [
        "id"=>"version",
        "name"=>"Version",
        "fn"=> function (string $param) : string {
          return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
     [
        "id"=>"last_seen",
        "name"=>"Last seen online",
        "fn"=> function (string $param) : string {
          return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
     [
        "id"=>"last_seen",
        "name"=>"Last seen offline",
        "fn"=> function (string $param) : string {
          return  "<span class='text-dark fw-bold text-hover-primary fs-6'>$param</span>";
        }
    ],
    [
        "id"=>"status",
        "name"=>"Status",
        "fn"=> function (string $param) : string {
            if($param == "OFFLINE"){
                return "<span class='badge badge-light-warning'>$param</span>";
            }
            if($param == "UNREGISTERED"){
                return "<span class='badge badge-light-danger'>$param</span>";
            }
            return  "<span class='badge badge-light-success'>$param</span>";
        }
    ],
        [
        "id"=>"custom_column_1",
        "name"=>"Custom Column",
        "fn"=> function (string $param) : string {
           return $param;
        }
    ],
        [
        "id"=>"custom_column_2",
        "name"=>"Custom Column 2",
        "fn"=> function (string $param) : string {
           return $param;
        }
    ],
         [
        "id"=>"image",
        "name"=>"Image",
        "fn"=> function (string $param) : string {
           return $param;
        }
    ],
);

$rows=array(
        array( "1", "CopCihaz","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "UNREGISTERED","","","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0" ),
        array( "2", "CopCihaz","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "UNREGISTERED" ,"","","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0"),
        array( "3", "Salimcihaz","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "UNREGISTERED","","","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0" ),
        array( "4", "test ","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "UNREGISTERED","","","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0" ),
        array( "5", "CopCihaz","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "OFFLINE","","","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0" ),
        array( "6", "CopCihaz","Polonya Celik Tek","1747-0422-22","13.0s0","Dec 14, 2020, 11:26:57 AM", "Dec 14, 2020, 11:26:58 AM", "OFFLINE","","custom","https://m2web.talk2m.com/ui/assets/images/product/Cosy%20131_Ethernet.png?v=24.2.3-0" ),
  
);

?>

<div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">

    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">

        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                    All Devices
                </h1>
            </div>


        </div>
    </div>
</div>
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card card-xl-stretch mb-xl-8">
            <div class="card-header border-0 pt-5">


                <div class="row">
                    <div class="col-xxl-7">
                        <div class="position-relative w-md-400px me-md-2 flex-1">
                            <i
                                class="ki-outline ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"></i>
                            <input type="text" class="form-control form-control-solid ps-10" name="search" value=""
                                placeholder="Search" id="search" />
                        </div>
                    </div>
                </div>

                <div class="card-toolbar d-flex" style="gap:5px">
                    <div class="row g-8">
                        <div class="col-lg-6">

                            <select class="form-select form-select-solid" data-control="select1"
                                data-placeholder="In Status" data-hide-search="true" id="statusFilter">
                                <option value="OFFLINE">OFFLINE</option>
                                <option value="ONLINE">ONLINE</option>
                                <option value="UNREGISTERED">UNREGISTERED</option>
                                <option value="All" selected="selected">All</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="col-lg-6">

                            <select class="form-select form-select-solid" data-control="select3"
                                data-placeholder="In Progress" data-hide-search="true" id="nameFilter">
                                <?php  foreach($rows as $row){ ?>
                                <option value="<?= $row[1] ?>"><?= $row[1] ?></option>
                                <?php } ?>
                                <option value="All" selected="selected">All</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active"
                                data-bs-toggle="tab" href="#kt_table_tab">Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                data-bs-toggle="tab" href="#kt_grid_tab">Grid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                data-bs-toggle="tab" href="#kt_map_tab">Map</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_table_tab">
                        <?php include('../components/table.php') ?>
                    </div>
                    <div class="tab-pane fade" id="kt_grid_tab">
                        <div class="row" id="gridRows">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_map_tab">
                        <div id="myMap" style="width:100%; height:600px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
window.onload = () => {
    const searchInput = document.getElementById("search");
    const statusFilter = document.getElementById("statusFilter");
    const nameFilter = document.getElementById("nameFilter");
    const gridRows = document.getElementById("gridRows");
    const mapElement = document.getElementById('myMap')
    DataTable.ext.search.push(function(settings, data, dataIndex) {
        const [id, name, description, serial_number, version, last_seen_online, last_seen_offline, status] =
        data;
        const selectedStatus = statusFilter.value;
        if (selectedStatus != "All") {
            return status == selectedStatus;
        }
        return true;
    });
    DataTable.ext.search.push(function(settings, data, dataIndex) {
        const [id, name, description, serial_number, version, last_seen_online, last_seen_offline, status] =
        data;
        const selectedName = nameFilter.value;
        if (selectedName != "All") {
            return name == selectedName;
        }
        return true;
    });

    const table = new DataTable('#myTable', {
        dom: 'Bfrtip',
        buttons: ['colvis'],
        searching: true,
        paging: false,
        fixedHeader: true,
        info: true,
        columnDefs: [{
                target: 8,
                visible: false,
            },
            {
                target: 9,
                visible: false
            },
            {
                target: 10,
                visible: false
            }
        ]
    });
    searchInput.addEventListener('input', function() {
        const text = searchInput.value;
        console.log(text);
        table.search(text);
        table.draw();
    });

    statusFilter.addEventListener('change', function() {
        table.draw();
    });
    nameFilter.addEventListener('change', function() {
        table.draw();
    });
    table.on('search.dt', function() {
        createGrid();
    })

    const createGrid = () => {
        const data = table.rows({
            filter: 'applied'
        }).data();
        gridRows.innerHTML = "";
        table.rows({
            "search": "applied"
        }).every(function() {
            var data = this.data();
            const [id, name, description, serial_number, version, last_seen_online, last_seen_offline,
                status, custom_field1, custom_field2, image
            ] = data;
            const item = `
                            <div class="card col-4">
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <div class="symbol symbol-200px symbol-circle mb-5">
                                        <img src="${image}"
                                            alt="image">
                                    </div>
                                    ${name}
                                    <div class="fw-semibold text-gray-400 mb-6">${description}</div>
                                    <div class="d-flex flex-center flex-wrap">
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            ${status}
                                        </div>
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            ${version}
                                        </div>
                                    </div>
                                </div>
                            </div>
            `;
            gridRows.innerHTML += item;
        });
    }
    const createMap = () => {


        var mymap = L.map(mapElement).setView([51.505, -0.09], 13)

        // add the OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                subdomains: ['a', 'b', 'c']
            })
            .addTo(mymap)
    }
    createGrid();
    setTimeout(() => {
        createMap();
    }, 1000);
}
</script>
<style>
#myTable_filter {
    display: none;
}
</style>