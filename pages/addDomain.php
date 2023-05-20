<!DOCTYPE html>
<html lang="en">
<?php include 'pages/header.php'; ?>

<body>
    <div class="container">
        <div class="card mt-2">
            <h5 class="card-header">
                ADD DOMAIN
            </h5>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Domain</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDomain" data-inputmask="'mask': '*{1,}.a{1,}'">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUsername">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-warning" id="btnaddDomain">ADD</button>
            </div>
        </div>
    </div>
</body>

</html>