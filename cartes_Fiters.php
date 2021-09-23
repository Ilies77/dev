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
    <h2>Cartes</h2>
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