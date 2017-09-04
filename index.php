
<?php include('components/header.php') ?>

<body class="login">

<div class="form-signin">
    <div class="text-center">
        <img src="assets/images/logo.jpeg" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="choix_panel.php">
                <p class="text-muted text-center">
                    Entrer nom d'utilisateur et mot de pass
                </p>
                <input type="text" placeholder="Nom d'Utilisateur" class="form-control top">
                <input type="password" placeholder="Mot de pass" class="form-control bottom">
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Mot de pass oublié</a></li>
        </ul>
    </div>
  </div>


    


<?php include('components/footer.php') ?>