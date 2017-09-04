
<?php include('components/header.php') ?>

<body class="login">

<div class="form-signin">
    <div class="text-center">
        <img src="assets/images/logo.jpeg" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="">
                <p class="text-muted text-center">
                    Choisir le type de tableau de bord
                </p>
                <select class="form-control top">
                    <option>Administration</option>
                </select>
                <hr>
                <a href="admin.php" class="btn btn-lg btn-primary btn-block" type="submit">Tableau de bord</a>
            </form>
        </div>
    </div>
  </div>


<?php include('components/footer.php') ?>

