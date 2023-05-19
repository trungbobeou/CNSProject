<!DOCTYPE html>
<html lang="en">

<?php include 'pages/header.php'; ?>

<body>
    <div class="container-fluid">
        <div class="card mt-2">
            <h5 class="card-header">
                ADD DNS
            </h5>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tên Record</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNameRecord">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Loại Record</label>
                    <div class="col-sm-10">
                        <div class="select">
                            <select>
                                <option>A</option>
                                <option>AAAA</option>
                                <option>CNAME</option>
                                <option>MX</option>
                                <option>URL Redirect</option>
                                <option>URL Frame</option>
                                <option>TXT</option>
                                <option>SRV</option>
                                <option>SPF</option>
                                <option>CAA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Giá trị Record</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRecordValue">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"  data-inputmask="'mask': '9999 9999 9999 9999'">Giá trị TTL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTTL">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mô tả Record</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDes">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-warning" id="btnaddDNS">ADD</button>
            </div>
        </div>
        <?php
        foreach ($objdnsout as $value) {
            //print_r($value->type . "/");
            ?>
             <div class="card mt-2">
            <h5 class="card-header">
                <?php echo $value->type ?>
            </h5>
            <div class="card-body">
                
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>