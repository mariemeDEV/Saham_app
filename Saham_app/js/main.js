  
    $(document).ready(function(){
      var url       = window.location.href
      var url_split = url.split('/')
      var assertion = true
      var tabValu    = [];
      var checked=false

      inter_fr = {
        cancel: 'Annuler',
        done:    'Ok',
        previousMonth:    '‹',
        nextMonth:    '›',
        
        months:    [
            'Janvier',
            'Fevrier',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Aout',
            'Septembre',
            'Octobre',
            'Novembre',
            'Decembre'
        ],
        monthsShort:    [
            'Jan',
            'Fev',
            'Mar',
            'Avr',
            'Mai',
            'Jui',
            'Jul',
            'Aou',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],

        weekdays:    [
            'Dimanche',
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
            'Samedi'
        ],

        weekdaysShort:    [
            'Dim',
            'Lun',
            'Mar',
            'Mer',
            'Jeu',
            'Ven',
            'Sam'
        ],

        weekdaysAbbrev:    ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        format: 'dd, m, yyyy',
    };


    var options = {
      i18n: inter_fr,
    };
    var elem = document.querySelector('.datepicker');
    var instance = M.Datepicker.init(elem, options);

      $('.tooltipped').tooltip();
      $('select').formSelect();
      $('.collapsible').collapsible({
        accordion : false
      });

      $.ajax({
        url :'contrat.php',
        type:'GET',
        success: function(data){
          var idClicked = sessionStorage.getItem('clicked')
          var prime     = "5000"
          if(idClicked==="d1"){
            $("#produit").val("PACK MINI")
            $('#data_table').append("<tr><td>DEFENSE ET RECOURS</td><td></td><td></td><td>Gratuit</td></tr><tr><td>PERSONNES TRANSPORTEES option 3</td><td></td><td></td><td>5000</td></tr><tr><td>ASSISTANCE AUTO AVANTAGE</td><td></td><td></td><td>Gratuit</td></tr>")
          }else if(idClicked==="d2"){
            $("#produit").val("PACK CLASSIQUE")
            var primeVI_PCl         = (parseInt(sessionStorage.getItem("valeurDeclaree"))*20)/100
            prime_DR = 0; prime_I   = primeVI_PCl; prime_V = primeVI_PCl ;avance_SR = 10000; bris_DG = 10000; personnes_T = 5000; pack = 10000
            var total               = parseInt(prime_DR + prime_I + prime_V + avance_SR + bris_DG + personnes_T + pack)
            $('#data_table').append("<tr><td>DEFENSE ET RECOURS</td><td>200.000</td><td></td><td>Gratuit</td></tr><tr><td>INCENDIE</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td></td><td>"+prime_I+"</td></tr><tr><td>VOL</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td>36.000</td><td>"+prime_V+"</td></tr><tr><td>AVANCE SUR RECOURS</td><td>1.000.000</td><td>36000</td><td>"+avance_SR+"</td></tr><tr><td>BRIS DE GLACE</td><td>200.000</td><td></td><td>"+bris_DG+"</td></tr><tr><td>PERSONNES TRANSPORTÉES</td><td>3.000.000</td><td></td><td>"+personnes_T+"</td></tr><tr><td>PACK</td><td>2 interventions /année</td><td></td><td>"+pack+"</td></tr><tr class='totalRow'><td >TOTAL HT</td><td></td><td></td><td>"+parseFloat(total)+" FCFA</td></tr><tr>Accessoires</tr>")
          }else if(idClicked==="d3"){
            $("#produit").val("PACK LIBÉRTÉ")
            var primeI_PConf       = (parseInt(sessionStorage.getItem("valeurDeclaree"))*20)/100
            prime_DR = 0; prime_I  =  primeI_PConf; prime_V =  primeI_PConf; avance_SR = 10000; bris_DG = 10000; personnes_T = 5000; pack = 15000
            primeTC_PConf          =  (parseInt(sessionStorage.getItem("valeurDeclaree"))*2)/100
            var total              = parseInt(prime_DR + prime_I + prime_V + avance_SR + bris_DG + personnes_T + pack)     
            $('#data_table').append("<tr><td>DEFENSE ET RECOURS</td><td>200.000</td><td></td><td>Gratuit</td></tr><tr><td>INCENDIE</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td></td><td>"+prime_I+"</td></tr><tr><td>VOL</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td>36.000</td><td>"+prime_V+"</td></tr><tr><td>TIERCE COLLISION</td><td>"+primeTC_PConf+"</td><td>36000</td><td>"+avance_SR+"</td></tr><tr><td>BRIS DE GLACE</td><td>10.000</td><td></td><td>"+bris_DG+"</td></tr><tr><td>PERSONNES TRANSPORTÉES</td><td>10.000</td><td></td><td>"+personnes_T+"</td></tr><tr><td>PACK</td><td>2 interventions /année</td><td></td><td>"+pack+"</td></tr><tr class='totalRow'><td >TOTAL HT</td><td></td><td></td><td style='color:#f7ba00;font-weight:bold'>"+parseFloat(total)+" FCFA</td></tr><tr>Accessoires</tr>")
            }else if(idClicked==="d4"){
            $("#produit").val("PACK CONFORT")
            var primeI_PLib        = (parseInt(sessionStorage.getItem("valeurDeclaree"))*20)/100
            prime_DR = 0; prime_I  =  primeI_PLib  ; prime_V =  primeI_PLib; avance_SR = 10000; bris_DG = 10000; personnes_T = 5000; pack = 15000
            primeTC_PLib           =  (parseInt(sessionStorage.getItem("valeurDeclaree"))*3)/100
            var total              = parseInt(prime_DR + prime_I + prime_V + avance_SR + bris_DG + personnes_T + pack)  
            $('#data_table').append("<tr><td>DEFENSE ET RECOURS</td><td>200.000</td><td></td><td>Gratuit</td></tr><tr><td>INCENDIE</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td></td><td>"+prime_I+"</td></tr><tr><td>VOL</td><td>"+sessionStorage.getItem("valeurDeclaree")+"</td><td>36.000</td><td>"+prime_V+"</td></tr><tr><td>TIERCE COLLISION</td><td>"+primeTC_PLib+"</td><td>36000</td><td>"+avance_SR+"</td></tr><tr><td>BRIS DE GLACE</td><td>10.000</td><td></td><td>"+bris_DG+"</td></tr><tr><td>PERSONNES TRANSPORTÉES</td><td>10.000</td><td></td><td>"+personnes_T+"</td></tr><tr><td>PACK</td><td>2 interventions /année</td><td></td><td>"+pack+"</td></tr><tr class='totalRow'><td>TOTAL HT</td><td></td><td></td><td style='color:#f7ba00;font-weight:bold'>"+parseFloat(total)+" FCFA</td></tr><tr>Accessoires</tr>")
          }
      
        },  
        error: function(){
          console.log('Un probléme est survenu.')
        }
      });


      $('.btn_devis').each(function(){
        $(this).on("click",function(){
          $('#simulator_data input').each(function() {
            tabValu.push($(this).val());
          })
          
          sessionStorage.setItem('clicked',$(this).attr('id'))
          sessionStorage.setItem("date",tabValu[2])
          sessionStorage.setItem("puissanceFiscale",tabValu[3])
          sessionStorage.setItem("valeurDeclaree",tabValu[4])
          sessionStorage.setItem("valeurAneuf",tabValu[5])

          // console.log(tabValu)

          // return false;
        })
      })

      if(url_split[4]=="contrat.php") {
        $('#v_declaree').val(sessionStorage.getItem("valeurDeclaree"))
        $("#v_a_neuf").val(sessionStorage.getItem("valeurAneuf"))
        $("#puissace").val(sessionStorage.getItem("puissanceFiscale"))
        $("#d_mise_en_circulation").val(sessionStorage.getItem("date"))
      }
  
      
      })
     


  //Ecrire les differents primes
  function writeData(element1Id,element2Id,element3Id,element4Id,prime){
    document.getElementById(element1Id).innerText = prime + " TTC"
    document.getElementById(element2Id).innerText = prime + " TTC"
    document.getElementById(element3Id).innerText = prime + " TTC"
    document.getElementById(element4Id).innerText = prime + " TTC"
  }

  //Afficher la date d'échéance
  function getDateEcheance(){
    var date_choisie = document.getElementById('date_effet').value
    var dateEffet    = new Date(date_choisie)

    var dateSimple = new Date();
    // var minutes = dateSimple.getMinutes();
    // var hour = dateSimple.getHours();
    // var hour = dateSimple.getDay();

    curentYear = dateSimple.getFullYear();
    console.log(curentYear, dateEffet.getFullYear());

    if(curentYear > dateEffet.getFullYear()) {
      $('#date_echance').fadeOut();
      alert('La date choisie est invalide.');
    }else {
      $('#date_echance').fadeIn();
      $("#date_echance").text("Votre contrat prend fin le : "+parseInt(dateEffet.getDate() - 1)+"/"+parseInt(dateEffet.getMonth()+1)+"/"+parseInt(dateEffet.getFullYear()+1)+" à 23H 59min")
    }
    

  }

  //Faire apparaître les champs cachés
  function getHiddenInputs(){
    var dateSaisie       = document.getElementById("dms").value;
    var varDate          = new Date(dateSaisie);
    var d                = new Date(dateSaisie);
    var age              = new Number((new Date().getTime() - d.getTime()) / 31536000000).toFixed(0);
    if(age<10){
      $(".v1,.v2").css("display","inline-block")
    }else{
      $(".v1,.v2").css("display","none")
    }
  }

  //Tester les valeurs pour afficher les differentes primes
  function getPacks(){
    var dateSaisie       = document.getElementById("dms").value; 
    var varDate          = new Date(dateSaisie);
    var puissanceFiscale = document.getElementById("pf").value;
    var today            = new Date();
    today.setHours(0,0,0,0);
  //Si rien n'est saisi
    if(dateSaisie=="" || puissanceFiscale=="0"){
      alert("Veuillez remplir les champs s'il vous plaît")
  //Si une valeur est saisie
    }else{
      var d   = new Date(dateSaisie);
      var age = new Number((new Date().getTime() - d.getTime()) / 31536000000).toFixed(0);
  //Les primes pour les differents packs
      function getPrimes(){
        if(puissanceFiscale==2){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","37.601")
        }else if(puissanceFiscale>=3 && puissanceFiscale<=6){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","45.181")
        }else if(puissanceFiscale>=7 && puissanceFiscale<=10){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","51.078")
        }else if(puissanceFiscale>=11 && puissanceFiscale<=14){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","65.677")
        }else if(puissanceFiscale>=15 && puissanceFiscale<=23){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","86.456")
        }else if(puissanceFiscale>=24){
          writeData("prime_pack_mini","prime_pack_classique","prime_pack_liberte","prime_pack_confort","104.143")
        }
      }
  //Si la date saisie est supérieure à la date actuelle
      if(varDate >= today){
        alert("La date de mise en circulation ne peut être supérieure à la date actuelle.")
  //Si la date calculée est correcte, on affiche le package en fonction de l'âge de la voiture
      }else{
  //tarifs pack mini
        if(age > 10){
          getPrimes();
          $("#pack-mini").css("display","inline-block");
          $("#pack-classique,#pack-liberte,#pack-confort").css("display","none");
        }
  //tarifs pack mini + pack classique
        else if(age > 3 && age <= 10){
          getPrimes();
          $("#pack-mini,#pack-classique").css("display","inline-block");
          $("#pack-liberte,#pack-confort").css("display","none");
        }
        else if(age <= 3){
          getPrimes();
          $("#pack-mini,#pack-classique,#pack-liberte,#pack-confort").css("display","inline-block");
        }
      }
    }    
  }
    
