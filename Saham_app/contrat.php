<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body class="contrat" id="contrat_body">
  
  <div class="container">
  <div class="container-fluid logo"></div>
    <div class="row">
      <div class="col s8"><!--left part begin-->
      <ul class="collapsible">
  
        <li class="active">
          <div class="collapsible-header"><i class="material-icons plus">add_circle</i>Assuré</div>
          <div class="collapsible-body">
          <form method="POST" action="sendMail.php">
          <div class="row s12 conducteur">
                <div class="input-field col s4">
                  <input name="prenomNom" id="prenomNom" type="text" class="validate">
                  <label for="first_name">Prénom et Nom</label>
                </div>
                <div class="input-field col s4">
                  <input name="mail" type="text" class="validate">
                  <label for="email">E-mail</label>
                </div>
                <div class="input-field col s4">
                  <input name="telephone" type="text" class="validate">
                  <label for="disabled">Numéro de téléphone</label>
                </div>
              </div>

              <div class="row s12 who">
                <div class="input-field col s5">
                <label>
                  <input class="with-gap" name="group1" type="radio" id="oui_conducteur" />
                  <span>Nom du(de la) conducteur(trice)</span>
                </label>
                </div>
                <div class="input-field col s2">
                <label>
                  <input class="with-gap" name="group1" type="radio" id="non_conducteur" />
                  <span>Autre</span>
                </label>
                </div>
                <div class="input-field col s5 conducteur_name">
                  <input name="nom_conducteur" id="nomConducteur" type="text" class="validate" value="coco" placeholder="">
                  <label>Nom du(de la) conducteur(trice)</label>
                </div>
              </div>

             

            </form>
          </div>
        </li>

        <li>
          <div class="collapsible-header"><i class="material-icons plus">add_circle</i>Véhicule</div>
          <div class="collapsible-body">
          <form method="POST" action="sendMail.php">
              <div class="row s12">
                <div class="input-field col s4">
                  <input id="v_declaree" type="text" class="validate" value="coco" disabled>
                  <label for="first_name">Valeur déclarée</label>
                </div>
                <div class="input-field col s4">
                  <input id="v_a_neuf" type="text" class="validate" value="coco" disabled>
                  <label for="last_name">Valeur à neuf</label>
                </div>
                <div class="input-field col s4">
                  <input id="puissace" type="text" value="coco" class="validate" disabled>
                  <label for="disabled">Puissance</label>
                </div>
              </div>

              <div class="row s12">
                <div class="input-field col s4">
                  <input id="d_mise_en_circulation" type="text" value="coco" class="validate" disabled>
                  <label for="first_name">Date de mise en circulation</label>
                </div>
                <div class="input-field col s4">
                  <input type="text" class="validate">
                  <label for="first_name">Usage</label>
                </div>
                <div class="input-field col s4">
                  <select>
                    <option disabled selected>marque de voiture</option>
                    <option>BMW</option>
                    <optioN>Citroën</option>
                    <option>Citroen</option>
                    <option>Ford</option>
                    <option>Fiat</option>
                    <option>Kya</option>
                    <option>Ranault</option>
                    <option>SsangYong</option>
                    <option>Toyota</option>
                    <option>Autre</option>

                  </select>
                  <label>Marque</label>
                </div>
              </div>

              <div class="row s12">
              
                <div class="input-field col s4">
                  <input id="immatriculation" type="text" value="" class="validate" placeholder="Ex : DK-8547-BH">
                  <label>Immatriculation</label>
                </div>
              </div>
            </form>
          </div>
        </li>

         <li class="active">
          <div class="collapsible-header"><i class="material-icons plus">add_circle</i>Garanties</div>
          <div class="collapsible-body">
          <table class="highlight" id="data_table">
                <thead>
                  <tr>
                      <th>Garantie</th>
                      <th>Limitation</th>
                      <th>Franchise</th>
                      <th>Prime</th>
                  </tr>
                </thead>
                <tbody class="data_appended"></tbody>
              </table>
              <div class="row validators">
                <div class="col s2"><a class="waves-effect waves-light btn btn_submit" href="index.php">RETOUR</a></div>
                <div class="col s10"><button class="waves-effect waves-light btn btn_submit" type="submit">OBTENIR UN CONTRAT</button></div>
              </div>
          </div>
        </li>
      </ul>
    </div>

      <div class="col s4"><!--right part begin-->
        <ul class="collapsible">
            <li class="active">
              <div class="collapsible-header"><i class="material-icons plus">add_circle</i>Couverture</div>
              <div class="collapsible-body">
              <form>
             
              <div class="row s12">
                <div class="input-field col s12">
                <input type="text" class="validate" value="coco" disabled id="produit">
                  <label>Produit</label>
                </div>
              </div>

               <div class="row s12">
                <div class="input-field col s12">
                  <input type="text" class="validate" value="1 an" disabled id="duree">
                  <label for="first_name">Durée</label>
                </div>
              </div>

              <div class="row s12">
                <div class="input-field col s12">
                <input type="text" class="validate" value="Ferme" disabled id="contrat">
                <label>Contrat</label>
                </div>
              </div>

              <div class="row s12">
                <div class="input-field col s12">
                  <input type="date" class="validate" onChange="getDateEcheance()" id="date_effet" value="">
                  <label for="first_name">Date effet</label>
                </div>
              </div>

              <div class="row s12" style="border:2px solid #f7ba00;padding:10px">Date d'échance  : <p id="date_echance" style="color:green;font-weight:bold"></p></div>
            </form>
              </div>
            </li>
        </ul>
      </div><!--right part end-->

    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>