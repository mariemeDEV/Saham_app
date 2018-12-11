<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container-fluid main-content">
        <nav><!--begin navbar top-->
            <div class="nav-wrapper">
            <!-- <span class="burg-menu">Burger</span> -->
            <a href="#" class="brand-logo"><img class="imgLogo" src="images/logo.png" alt="LOGO"/></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
            </ul>
            </div>
        </nav><!--end navbar top-->

    <form>
        <div class="container-fluid page-content"><!--begin center-content-->
            <div class="row">
            <div class="col s4 left-menu">

                <ul class="collection with-header"><!--left menu-->
                    <li class="collection-item"><div>Assure</div></li>
                    <li class="collection-item"><div>Conducteur du vehicule</div></li>
                    <li class="collection-item"><div>Période de la garantie</div></li>
                    <li class="collection-item"><div>Caracteristiques du véhicule</div></li>
                    <div class="form-caracteristiques"><!--Caracteristiques-->
                        <div class="row s12">
                            <div class="col s3"><td><input type="text" placeholder="nom"/></td></div>
                            <div class="col s3"><input type="text" placeholder="type"></div>
                            <div class="col s3"><input type="text" placeholder="immatriculation"></div>
                            <div class="col s3"><input type="text" placeholder="escape"></div>
                        </div>
                        <div class="row s12">
                            <div class="col s3"><input type="number" placeholder="0"></div>
                            <div class="col s3"><input type="text" placeholder="nom"></div>
                            <div class="col s3"><input type="text" placeholder="nom"></div>
                            <div class="col s3"><input type="text" placeholder="nom"></div>
                        </div>
                        <div class="row s12">
                            <div class="col s3"><input type="number" placeholder="0"></div>
                            <div class="col s3"><input type="number" placeholder="0 "></div>
                            <div class="col s3"><input type="text"placeholder="nom"></div>
                            <div class="col s3"><input type="text" placeholder="nom"></div>
                        </div>
                        <div class="row s12">
                            <div class="col s3"><input type="text" placeholder="chassis"></div>
                        </div>
                    </div><!--End caracterististiques-->
                    <li class="collection-item">
                        <div>Numéro attestation</div>
                        <div class="col s3"><input type="number" placeholder="0"></div>
                    </li>
                </ul>
            </div><!--end left menu-->

            <div class="col s8 center-content"><!--Begin Right content-->
                 <div class="row">
                    <div class="card top-form">
                        <div class="card-header"><p>Garanties</p></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Garanties</th>
                                    <th>Prime</th>
                                    <th>Garanties</th>
                                    <th>Prime</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><label><input type="checkbox"/><span>Responsabilité civile</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                    <td><label><input type="checkbox"/><span>Bris de glace</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                <tr>

                                <tr>
                                    <td><label><input type="checkbox"/><span>Responsabilité civile</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                    <td><label><input type="checkbox"/><span>Bris de glace</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                <tr>

                                <tr>
                                    <td><label><input type="checkbox"/><span>Responsabilité civile</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                    <td>
                                        <div class="input-field select-wrapper">
                                            <select palceholder="Faites votre choix">
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                            <select>
                                        </div>
                                    </td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                <tr>

                                    <tr>
                                    <td><label><input type="checkbox"/><span>Responsabilité civile</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number"placeholder="0"/></td>
                                    <td><label><input type="checkbox"/><span>Bris de glace</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                <tr>

                                    <tr>
                                    <td><label><input type="checkbox"/><span>Responsabilité civile</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                    <td><label><input type="checkbox"/><span>Bris de glace</span></label></td>
                                    <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                <tr>
                                </tbody>
                            </table>
                         </div>
                     </div>
                 </div><!--End right-content-->

                 <div class="row"><!--Bottom-content-->
                    <div class="col s4"><!--First col-->
                        <div class="card first-col">
                        <div class="card-header"><p>Majoration Rédiction</p></div>
                            <card-body>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th >Bonus RC</th>
                                        <th>Reduction commerciale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="number" checked="checked" class="type-number" placeholder="0"/></td>
                                        <td><input class="RC" type="text"/></td>
                                    </tr>
                                </tbody>
                            </table>
                            </card-body>
                        </div>
                    </div><!--end first col-->

                     <div class="col s8"><!--begin-bottom-->
                        <div class="card second-col">
                        <div class="card-header"><p>Décompte prime<p></div>
                            <card-body>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th >Prime net</th>
                                        <th>Accessoire</th>
                                        <th>Taxe</th>
                                        <th>FG</th>
                                        <th>Prime totale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" /></td>
                                        <td><input type="text" /></td>
                                        <td><input type="text" /></td>
                                        <td><input type="text" /></td>
                                        <td><input  class="PM" type="text"/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <card-body>
                        </div>
                        </div>
                    </div>
                </div><!--End bottom-->

                <div class="row"><!--buttons-->
                    <div class="col s1"><button class="btn waves-effect waves-light b1 bs" type="submit" name="action">ENVOYER</button></div>
                    <div class="col s3"><button class="btn waves-effect waves-light b1 br" type="reset" name="action">ANNULER</button></div>
                </div><!--end buttons-->
    </div><!--end center-content-->
    </div>
    </form>

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>