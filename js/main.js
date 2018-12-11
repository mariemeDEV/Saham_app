

      function myFunc(){
        var dateSaisie = document.getElementById("dms").value;//Recupération de la valeur du champ date
//Si rien n'est saisi
        if(dateSaisie==""){
          alert("Veuillez saisir une date de mise en circulation.")
//Si une valeur est saisie
        }else{
          var d          = new Date(dateSaisie);
          var age        = new Number((new Date().getTime() - d.getTime()) / 31536000000).toFixed(0);

//Si la date saisie est supérieure à la date actuelle
          if(Math.sign(age)==-1){
            alert("La date de mise en circulation ne peut être supérieure à la date actuelle.")

//Si la date calculée est correcte, on affiche le package en fonction de l'âge de la voiture
          }else{
            if(age > 10){
              $("#pack-mini").css("display","inline-block");
              $("#pack-classique,#pack-liberte").css("display","none");
            }else if(age > 3 && age <= 10){
              $("#pack-mini,#pack-classique").css("display","inline-block");
              $("#pack-liberte").css("display","none");
            }else if(age <= 3){
              console.log("pack liberté")
              $("#pack-mini,#pack-classique,#pack-liberte").css("display","inline-block");
            }
          }
        }
       
        
        console.log(age)
      }
     
 