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

<body>
<!--<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>-->
<div class="container-wrap container">


    <div class="top-content"><!--begin-top container-->
    <div class="container-fluid logo"></div>
        <div class="card">
            <div class="card-header simul_header">Simulation</div>
            <div class="card-body">
                <form class="col s12 simulation-form" id="simulator_data">
                <div class="row"><!--First row begin-->
                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <input id="dms" type="text" class="datepicker" onChange="getHiddenInputs()" name="date_de_mise_en_circulation">
                        <label for="icon_prefix">Date de mise en circulation</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">settings</i>
                        <input id="pf" type="number" class="validate" name="puissance_fiscale">
                        <label for="icon_telephone">Puissance Fiscale</label>
                    </div>
                </div><!--First row end-->

                <div class="row"><!--Second row begin-->
                    <div class="input-field col s6 v1">
                        <i class="material-icons prefix">attach_money</i>
                        <input id="vv" type="number" class="validate" name="valeur_venale">
                        <label for="icon_prefix">Valeur vénale</label>
                    </div>
                    <div class="input-field col s6 v2">
                        <i class="material-icons prefix">style</i>
                        <input id="vn" type="number" class="validate" name="valeur_a_neuf">
                        <label for="icon_telephone">Valeur à neuf</label>
                    </div>
                </div><!--Second row end-->
                </form>
                <button class="waves-effect waves-light btn btn_submit" type="submit" onClick="getPacks()">VOIR MES PACKS</button>
            </div>

            <div class="center-content"><!--begin center-content-->
        <div class="row"><!--First row-->
            <div class="col s3"><!--begin pack mini-->
            <div class="card card-simul" id="pack-mini">
                <p class="pack">PACK MINI</p><p class="montant" id="prime_pack_mini"></p>
                <div class="card-body pack-body">
                    
                    <!-- <h6 class="pack-title">Argumentaire de vente</h6> -->
                    <ul class="collection pack-mini-collection">
                        <!-- <li class="collection-item"><p>Pack mini est un choix simple qui couvre les dommages causésaux tierces et qui vous assiste judiciairement.Il offre par ailleurs.</p></li>
                        <li class="collection-item"><p>Une protection du conducteur</p></li>
                        <li class="collection-item"><p>Une assistance automobile aide au constat amiable et remorquage gratuit en cas d'accident</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li> -->
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>DEFENSE ET RECOURS</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>PERSONNES TRANSPORTÉES OPTION 3</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit aux personnes transportées dans le véhicule assuré, en cas d'accident, le remboursement des frais médicaux engagés et le versement d'un capital en cas de décès ou d'invalidité permanente dans la limite des montants assurés prévus au contrat.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>ASSISTANCE AUTO AVANTAGE</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="I am a tooltip">help</i></span></li>
                    </ul>
                </div> 
                <div class="buttons">
                        <a class="btn btn_devis" href="contrat.php" id="d1">OBTENIR UN DEVIS</a>
                    </div>   
            </div>
            </div><!--end pack mini-->
            <div class="col s3"><!--begin pack classique-->
                <div class="card card-simul" id="pack-classique">
                    <p class="pack">PACK CLASSIQUE</p><p class="montant" id="prime_pack_classique"></p>
                    <div class="card-body pack-body">
                        
                        <!-- <h6 class="pack-title">Argumentaire de vente</h6> -->

                        <ul class="collection pack-classique-collection">
                            <!-- <li class="collection-item"><p>Le pack clasique vous offre :</p></li>
                            <li class="collection-item"><p>Une couverture des tiers</p></li>
                            <li class="collection-item"><p>Une répartition des dommages subis(dégats materiéls,bris de clace,incendie que vous ayez raison ou tort jusqu'au capital choisi.</p></li>
                            <li class="collection-item"><p>Sans limitation d'âge</p></li> -->
                            <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>DÉFENSE ET RECOURS</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>INCENDIE</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>VOL</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit les dommages au véhicule assuré résultant de la détérioration du véhicule assuré à la suite d'un vol ou d'une tentative de vol ou de la disparition d'accessoires et de pièces de rechange à condition qu'ils aient été dérobés alors que le véhicule était en garage et qu'il y ait eu escalade, effraction ou violences corporelles.">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>AVANCE SUR RECOURS</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="I am a tooltip">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>BRIS DE GLACES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit exclusivement les dommages consécutifs ou non à un accident, causés au pare brise, aux glaces latérales et arrière du véhicule assuré.">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>PERSONNES TRANSPORTÉES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit aux personnes transportées dans le véhicule assuré, en cas d'accident, le remboursement des frais médicaux engagés et le versement d'un capital en cas de décès ou d'invalidité permanente dans la limite des montants assurés prévus au contrat.">help</i></span></li>
                            <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>PACK</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="I am a tooltip">help</i></span></li>
                        </ul>
                    </div>  
                    
                    <div class="buttons">
                            <a class="btn btn_devis" href="contrat.php" id="d2">OBTENIR UN DEVIS</a>
                        </div>
                </div>
            </div><!--pack classique-->

            <div class="col s3"><!--begin pack liberte-->
            <div class="card card-simul" id="pack-liberte">
                <p class="pack">PACK LIBÉRTÉ</p><p class="montant" id="prime_pack_liberte"></p>
                <div class="card-body pack-body">
                    
                    <!-- <h6 class="pack-title">Argumentaire de vente</h6> -->
                    <ul class="collection pack-liberte-collection">
                        <!-- <li class="collection-item"><p>Pack mini est un choix simple qui couvre les dommages causésaux tierces et qui vous assiste judiciairement.Il offre par ailleurs.</p></li>
                        <li class="collection-item"><p>Une protection du conducteur</p></li>
                        <li class="collection-item"><p>Une assistance automobile aide au constat amiable et remorquage gratuit en cas d'accident</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li> -->
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>DÉFENSE ET RECOURS</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>INCENDIE</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>VOL</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit les dommages au véhicule assuré résultant de la détérioration du véhicule assuré à la suite d'un vol ou d'une tentative de vol ou de la disparition d'accessoires et de pièces de rechange à condition qu'ils aient été dérobés alors que le véhicule était en garage et qu'il y ait eu escalade, effraction ou violences corporelles.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>TIÉRCE COMPLÉTE</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit la prise en charge par l'assureur des frais de réparation des dommages subis par le véhicule assuré par suite d'une collision avec un autre véhicule, de choc contre un corps fixe ou mobile, de renversement sans collision préalable, de chute dans les ravins ou cours d'eau. ">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>BRIS DE GLACES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit exclusivement les dommages consécutifs ou non à un accident, causés au pare brise, aux glaces latérales et arrière du véhicule assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>PERSONNES TRANSPORTÉES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit aux personnes transportées dans le véhicule assuré, en cas d'accident, le remboursement des frais médicaux engagés et le versement d'un capital en cas de décès ou d'invalidité permanente dans la limite des montants assurés prévus au contrat.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>ASSISTANCE AUTO LIBÉRTÉ</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="I am a tooltip">help</i></span></li>
                    </ul>
                </div>  
                
                <div class="buttons">
                        <a class="btn btn_devis" href="contrat.php" id="d3">OBTENIR UN DEVIS</a>
                    </div>
            </div>
            </div><!--end pack liberte-->

            <div class="col s3"><!--begin pack confort-->
            <div class="card card-simul" id="pack-confort">
                <p class="pack">PACK CONFORT</p><p class="montant" id="prime_pack_confort"></p>
                <div class="card-body pack-body">
                   
                    <!-- <h6 class="pack-title">Argumentaire de vente</h6> -->
                    <ul class="collection pack-confort-collection">
                        <!-- <li class="collection-item"><p>Pack mini est un choix simple qui couvre les dommages causésaux tierces et qui vous assiste judiciairement.Il offre par ailleurs.</p></li>
                        <li class="collection-item"><p>Une protection du conducteur</p></li>
                        <li class="collection-item"><p>Une assistance automobile aide au constat amiable et remorquage gratuit en cas d'accident</p></li>
                        <li class="collection-item"><p>Sans limitation d'âge</p></li> -->
                        <li class="collection-item"><h6 class="pack-title">Les garanties</h6></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>DÉFENSE ET RECOURS</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>INCENDIE</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle entraîne l'assistance, par l'Assureur, de l'assuré non responsable ou partiellement responsable, dans ses actions vis-à-vis des tiers. Elle garantit, éventuellement, la prise en charge des frais de procédure découlant de ces actions à concurrence du montant prévu au contrat. Cette garantie est également mise en œuvre dans le cadre des procédures pénales engagées contre l'assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>VOL</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit les dommages au véhicule assuré résultant de la détérioration du véhicule assuré à la suite d'un vol ou d'une tentative de vol ou de la disparition d'accessoires et de pièces de rechange à condition qu'ils aient été dérobés alors que le véhicule était en garage et qu'il y ait eu escalade, effraction ou violences corporelles.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>TIÉRCE COLLISION</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit la prise en charge par l'assureur des frais de réparation des dommages subis par le véhicule assuré par suite d'une collision avec un autre véhicule, de choc contre un corps fixe ou mobile, de renversement sans collision préalable, de chute dans les ravins ou cours d'eau. ">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>BRIS DE GLACES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit exclusivement les dommages consécutifs ou non à un accident, causés au pare brise, aux glaces latérales et arrière du véhicule assuré.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>PEERSONNES TRANSPORTÉES</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="Elle garantit aux personnes transportées dans le véhicule assuré, en cas d'accident, le remboursement des frais médicaux engagés et le versement d'un capital en cas de décès ou d'invalidité permanente dans la limite des montants assurés prévus au contrat.">help</i></span></li>
                        <li class="collection-item"><span><i class="material-icons">check_circle</i></span><span>ASSISTANCE AUTO CONFORT</span><span><i class="material-icons help tooltipped" data-position="top" data-tooltip="I am a tooltip">help</i></span></li>
                    </ul>
                </div>    


                <div class="buttons">
                        <a class="btn btn_devis" href="contrat.php" id="d4">OBTENIR UN DEVIS</a>
                    </div>
            </div>
            </div><!--end pack confort-->
        </div><!--end first row-->

          <div class="row"><!--second-row-->
           
        </div><!--end second row-->

      
    </div><!--end center content-->
        </div>
    </div><!--top container-->
                  
    
</div><!--end content wrapper-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>