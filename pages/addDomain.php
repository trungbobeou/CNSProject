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
                <form method="post" id="domainForm">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Domain</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDomain" name="inputDomain">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsername" name="inputUsername">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-warning" id="btnaddDomain" name="btnaddDomain">ADD</button>
            </div>
            </form>
        </div>
    </div>
    <script src="js/jquerydomain.js"></script>
</body>

</html>