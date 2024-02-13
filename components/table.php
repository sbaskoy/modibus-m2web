



        <div class="table-responsive">
            <table id="myTable" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <thead>
                    <tr class="fw-bold text-muted">
                     
                        <?php  foreach($columns as $col){ ?>
                            <th class="min-w-150px"><?= $col['name'] ?></th>
                        <?php }  ?>
                      
                    </tr>
                </thead>
                <tbody>
                     <?php 
                        foreach ($rows as $row) { ?>
                    <tr>
                        <?php  foreach($columns as $index => $col){ ?>
                        <th><?= $col["fn"]($row[$index]) ?></th>
                        <?php }  ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


