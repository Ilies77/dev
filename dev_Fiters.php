<html>
  <head>
    <title>Todo App</title>
    <link rel="stylesheet" href="css_Fiters.css" type="text/css" charset="utf-8">    
  </head>
  <body>
    <div class="container">
      <p>
        <label for="new-task">Ajouter une nouvelle liste</label><input id="new-task" type="text"><button>Ajouter</button>
      </p>
      
      <h3>Listes</h3>
      <ul id="incomplete-tasks">
        <li><input type="checkbox"><label>Courses</label><input type="text"><button class="edit">Modifier</button><button class="delete">Supprimer </button></li>
        <li><input type="checkbox"><label>Tache ménagères</label><input type="text"><button class="edit">Modifier</button><button class="delete">Supprimer </button></li>        
      </ul>
      
      <h3>List completées</h3>
      <ul id="completed-tasks">
      </ul>
    </div>

    <div id="modalOne" class="modal">
      <div class="modal-content">
          <div class="contact-form">
          <a class="close">&times;</a>
          <?php include "cartes_Fiters.php" ?>
          </div>
      </div>
  </div>     


<script type="text/javascript" src="js_Fiters.js"></script>
  </body>
</html>
