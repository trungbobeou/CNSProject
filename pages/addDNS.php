<!DOCTYPE html>
<html lang="en">

<?php
include 'pages/header.php';
?>

<body>
    <div class="container">
    <img src="picture/1516778494_1516762431_logo.png" class="img-fluid mx-auto d-block" alt="...">
        <div class="card mt-2">
            <h5 class="card-header bg-primary text-white fw-bold fs-3">
                ADD DNS
            </h5>
            <div class="card-body">
                <form method="post" id="dnsForm">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tên Record</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="txtIdRecord" name="txtIdRecord">
                            <input type="text" class="form-control" id="inputNameRecord" name="inputNameRecord">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Loại Record</label>
                        <div class="col-sm-10">
                            <div class="select">
                                <select id="sltTypeRecord">
                                    <option>NS</option>
                                    <option>A</option>
                                    <option>CNAME</option>
                                    <option>MX</option>
                                    <option>PTR</option>
                                    <option>TXT</option>
                                    <option>SRV</option>
                                    <option>DS</option>
                                    <option>CAA</option>
                                </select>
                            </div>
                            <input type="hidden" name="txtTypeRecord" id="txtTypeRecord">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Giá trị Record</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputValueRecord" name="inputValueRecord">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Giá trị TTL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTTL" name="inputTTL">
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="addDNS" class="btn btn-lg btn-warning" id="btnaddDNS">ADD</button>
                <button type="submit" name="updateDNS" class="btn btn-lg btn-warning" id="btnupdateDNS">UPDATE</button>
            </div>
            </form>
        </div>
        <?php
        $arraytype = ['NS', 'A', 'AAAA', 'CNAME', 'MX', 'PTR', 'TXT', 'SRV', 'DS', 'CAA'];
        $arraytype1 = [];

        foreach ($objdnsout as $value) {
            foreach ($arraytype as $value1) {
                if ($value->type == $value1 && isset($value->ttl)) {
                    $arraytype1[$value1][] = $value;
                }
            }
        }
        foreach ($arraytype1 as $key => $value) {
            ?>
            <div class="card mt-2">
                <h5 class="card-header">
                    <?php echo $key ?>
                </h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%;">STT</th>
                                <th class="text-center" style="width: 30%;">HOST</th>
                                <th class="text-center" style="width: 10%;">TYPE</th>
                                <th class="text-center" style="width: 20%;">VALUE</th>
                                <th class="text-center" style="width: 10%;">TTL</th>
                                <th class="text-center" style="width: 10%;" hidden>ID</th>
                                <th class="text-center" style="width: 10%;"></th>
                                <th class="text-center" style="width: 10%;"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($value as $_value) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $i ?>
                                    </td>
                                    <td class="text-center nameRecord"><?= $_value->host ?></td>
                                    <td class="text-center typeRecord"><?= $_value->type ?></td>
                                    <td class="text-center valueRecord"><?= $_value->value ?></td>

                                    <?php if (empty($_value->ttl)) { ?>
                                        <td class="text-center ttlRecord"></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td class="text-center ttlRecord"><?= $_value->ttl; ?></td>
                                        <?php
                                    }
                                    ?>

                                    <td class="idRecord" name="idReCord" hidden><?= $_value->id ?></td>
                                    <td class="editbtn"><a class="fa fa-pencil-square-o"></a></td>
                                    <td class="deleteDNS"><a class="fa fa-trash"></a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <script src="js/jquerydns.js"></script>
</body>
</html>