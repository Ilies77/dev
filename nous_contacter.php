<html> 
  <head>
      <title>Nous contacter</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
       <link rel= "stylesheet" type="texte/css" href="style-form.css">
        <!-- pour appeler la fonction Boostrap: -->
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body >
    <h2>Contacter Nous</h2>
    <form class="row g-3"  action="mail.php" method="post" >
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control"name="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputTel4" class="form-label">téléphone</label>
        <input type="tel" class="form-control"  name="inputTel4" maxlength="10" placeholder="ex:0601020304">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Société / Nom</label>
        <input type="text" class="form-control" name="inputName">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Addresse</label>
        <input type="text" class="form-control" name="inputAddress" >
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Ville</label>
        <input type="text" class="form-control" name="inputCity">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Code Postal</label>
        <input  type="text" class="form-control" name="inputCP" maxlength="5" >
      </div>
    </br></br></br></br>
      <div class="col-12">
        <div class="form-check">
        <textarea placeholder="Message..." cols="120" rows="5" id="message" name="message" required maxlength="500" max></textarea>
        <p id="counterBlock"></p>
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </form>

  <body>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <script>

// On selectionne l'element textarea et l'élement p#counterBlock
var textarea = document.querySelector('#message');
var blockCount = document.getElementById('counterBlock');

function count() {
    // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
    var count = 500-textarea.value.length;
    // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML
    blockCount.innerHTML= count;

   // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock
   if(count<0) {
        blockCount.classList.add("red");
   } 
   else if(count>=0) {
         blockCount.classList.remove("red");
   }
   else{}
}

// on pose un écouteur d'évènement keyup sur le textarea.
// On déclenche la fonction count quand l'évènement se produit et au chargement de la page
textarea.addEventListener('keyup', count);
count();


</script>
  </body>
</html>