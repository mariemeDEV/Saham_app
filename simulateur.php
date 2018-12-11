<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


<!--<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>-->

    <div class="top-content"><!--begin-top container-->
        <div class="card">
            <div class="card-header">Simulation</div>
            <div class="card-body">
                <form class="col s12 simulation-form">
                <div class="row">
                    <div class="input-field col s4">
                    <input type="date" class="dateMiseEnCirculation" id="dms" placeholder="Date de mise en circulation" required="required">
                    </div>
                    <div class="input-field col s4">
                    <input type="number"  class="validate" name="p" placeholder="Puissance" required="required">
                    </div>
                    <div class="input-field col s4">
                    <input type="number" class="validate" name="vd" placeholder="Valeur déclarée" required="required">
                    </div>
                </div>
                </form>
                <button class="waves-effect waves-light btn btn_submit" onClick="myFunc()">button</button>
            </div>
        </div>
    </div><!--top container-->
                  
    <div class="center-content">
        <div class="row packs">
            <div class="col s4"><!--Begin pack mini-->
            <div class="card card-simul" id="pack-mini">
                <p class="pack">PACK MINI</p><p class="montant">82 667 TTC</p>
                <div class="card-body pack-body">
                    <div class="buttons">
                        <button class="btn">CRÉER UN DÉVIS</button>
                        <button class="btn btn2">DÉVIS RAPIDE</button>
                    </div>
                    <h6 class="pack-title">Argumentaire de vente</h6>
                    <ul class="collection pack-mini-collection">
                        <li class="collection-item"><p>Pack mini est un choix simple qui couvre les dommages causésaux tierces et qui vous assiste judiciairement.Il offre par ailleurs.</p></li>
                        <li class="collection-item"><p>Une protection du conducteur</p></li>
                        <li class="collection-item"><p>Une assistance automobile aide au constat amiable et remorquage gratuit en cas d'accident</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li>
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Résponsabilité civile</span><span><div class="material-icons help tooltip">help<span class="tooltiptext">Tooltip text lokijuhygfdfgthyjuiko</span></div></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Défense et recours</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Personnes transportées option 3</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Assistance auto avantage</span><span><i class="material-icons help">help</i></span></li>
                    </ul>
                </div>    
            </div>
            </div><!--end pack mini-->

            <div class="col s4"><!--Begin pack classique-->
            <div class="card card-simul" id="pack-classique">
                <p class="pack">PACK CLASSIQUE</p><p class="montant">82 667 TTC</p>
                <div class="card-body pack-body">
                    <div class="buttons">
                        <button class="btn">CRÉER UN DÉVIS</button>
                        <button class="btn btn2"><!--<i class="material-icons">add</i>-->DÉVIS RAPIDE</button>
                    </div>
                    <h6 class="pack-title">Argumentaire de vente</h6>

                    <ul class="collection pack-classique-collection">
                        <li class="collection-item"><p>Le pack clasique vous offre :</p></li>
                        <li class="collection-item"><p>Une couverture des tiers</p></li>
                        <li class="collection-item"><p>Une répartition des dommages subis(dégats materiéls,bris de clace,incendie que vous ayez raison ou tort jusqu'au capital choisi.</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li>
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Résponsabilité civile</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Défense et recours</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Incendie</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Vol</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Avance et recours</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Bris de glace</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Personnes transportées</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Assistance auto confort</span><span><i class="material-icons help">help</i></span></li>
                    </ul>
                </div>    
            </div>
            </div><!--end pack classique-->

            <div class="col s4"><!--Begin pack libérté-->
            <div class="card card-simul" id="pack-liberte">
                <p class="pack">PACK LIBÉRTÉ</p><p class="montant">82 667 TTC</p>
                <div class="card-body pack-body">
                    <div class="buttons">
                        <button class="btn">CRÉER UN DÉVIS</button>
                        <button class="btn btn2"><!--<i class="material-icons">add</i>-->DÉVIS RAPIDE</button>
                    </div>
                    <h6 class="pack-title">Argumentaire de vente</h6>
                    <ul class="collection pack-liberte-collection">
                        <li class="collection-item"><p>Pack mini est un choix simple qui couvre les dommages causésaux tierces et qui vous assiste judiciairement.Il offre par ailleurs.</p></li>
                        <li class="collection-item"><p>Une protection du conducteur</p></li>
                        <li class="collection-item"><p>Une assistance automobile aide au constat amiable et remorquage gratuit en cas d'accident</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li>
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Résponsabilité civile</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Défense et recours</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Incendie</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Vol</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Tiérce complete</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Bris de glace</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Personnes transportées</span><span><i class="material-icons help">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>Assistance auto liberté</span><span><i class="material-icons help">help</i></span></li>
                    </ul>
                </div>    
            </div>
            </div><!--end pack liberté-->

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>