
<!DOCTYPE html>
<html>

  <?php
    session_start();

    if (isset($_GET['lang'])) {
      $_SESSION['lang'] = $_GET['lang'];
    }

    if (!isset($_SESSION['lang'])) {
      $_SESSION['lang'] = 'en'; // Par défaut anglais
    }

    require_once 'assets/php/'.$_SESSION['lang'].'.php';

    require_once __DIR__ . "/assets/models/Projet.php";

    $table = new Projet();

    if (isset($_POST['Title']) && isset($_POST['Type']) && isset($_POST['Description'])){
      $table->createPost($_POST['Title'], $_POST['Type'], $_POST['Description']);
    }

    if(isset($_GET['Research'])){
      $projets = $table->getProjectsFilter($_GET['Research']);
    }
    else $projets = $table->getAllProjects();

  ?>

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Projet Web</title>
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

      <script src="assets/js/Form.js" defer ></script>
  </head>

  <body>
    
    <main>

      <section id="home" class="page" >

        <header>
          <div>
            <a href="?lang=fr"><img src="assets/img/france.png" alt="Français"></a>
            <h2> <?php echo $lang['my_portfolio'];?></h2>
            <a href="?lang=en"><img src="assets/img/united-kingdom.png" alt="English"></a>
          </div>
          
          <ul>
            <li><a class="link-1" href="#home"><?php echo $lang['home'];?></a></li>
            <li><a class="link-1" href="#about"><?php echo $lang['about'];?></a></li>
            <li><a class="link-1" href="#work"><?php echo $lang['work'];?></a></li>
            <li><a class="link-1" href="#contact"><?php echo $lang['contact'];?></a></li>
          </ul>
        </header>

        <section>
          <div>
            <img src="assets/img/loutre.png" alt="Photo de profil de loutre">
          </div>
          <h2>Arnaud GOETZ</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quae inventore iusto commodi modi soluta. Amet ex voluptates aliquam ipsam dolores blanditiis beatae eligendi sequi. Provident amet tempore at suscipit!</p>
        </section>

        <footer>  
          <a href="#" class="fa fa-facebook fa-x"></a>
          <a href="#" class="fa fa-twitter fa-x"></a>
          <a href="#" class="fa fa-instagram fa-x"> </a>
          <a href="#" class="fa fa-linkedin fa-x"> </a>
        </footer>

      </section>

      <section id = "about" class="page">

        
        <section>

          <h2><?php echo $lang['about'];?> </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque voluptas quisquam perferendis omnis tempore vel blanditiis minima alias, sequi necessitatibus? Exercitationem veniam tempore omnis necessitatibus quia dolore, amet totam.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia mollitia consequuntur libero architecto tenetur rem nemo! Cum, magnam est omnis repellat eligendi, et facilis sed voluptas, debitis ratione animi itaque!</p>    
        
          <div>
            <img src="assets/img/blend2.png" alt="Logo de blender">
          </div>

          <h2> <?php echo $lang['my_skills'];?> </h2>
          
          <ul>
            <li> Blender  </li>
            <li> C  </li>
            <li> Python </li>
            <li> Java </li>
            <li> Blender  </li>
            <li> C  </li>
            <li> Python </li>
            <li> Java </li>
            <li> Et bientôt ...</li>
          </ul>
            
        </section>

      </section>

      <section id = "work">
        <header>
          <h2><?php echo $lang['work'];?></h2>
        </header>
        <div>
          <form action ="#work" method="get" id ="GetForm">
            <label for="Research" >
              <?php echo $lang['form_search'];?>:
            </label>
            <input name="Research" type="text" class="input" id ="Research"/>
            <p id="MessErreur"></p>

            <label for="submit">
              <input type="submit" value=" <?php echo $lang['form_search'];?>" />
            </label>
          </form>
        </div>
        <nav>
          <?php
            foreach($projets as $projet) :
              ?>
              <div> 
                <img src="<?= $projet['Image'] ?>" alt=" Logo Blender">
                
                <section>
                  <h3><?= $projet['Title'] ?></h3> 
                  <p> <?= $projet['Description'] ?></p>
                </section>
              </div>
          <?php
            endforeach;
          ?>

        </nav>

        <footer>

          <button class="button"> <?php echo $lang['load_more_projects'];?></button>

        </footer>

      </section>

      <section id="contact" class="page">
        <div>
          <h2><?php echo $lang['create_projects'];?></h2>
          <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ad similique ipsam quo aut qui natus ut, aspernatur enim suscipit ex neque aliquid tempore architecto quidem laboriosam numquam tempora nobis!</p>
        </div>

        <div>
          <h2><?php echo $lang['form'];?></h2>

          <form method="post" id ="PostForm" >
            <label for="Title">
              <?php echo $lang['form_title'];?>
              <input name="Title" type="text" class="input" id="nom" />
            </label>  

            <label for="Type">
              <?php echo $lang['form_type'];?>
              <input name="Type" type="text" class="input" id="type"  />
            </label>
            <p></p>

            <label for="Description">
              <?php echo $lang['form_description'];?>
              <textarea name="Description" class="input" id="desc" ></textarea>
            </label>

            <p id ="message"></p>
            
            <label for="submit">
              <input type="submit" value="<?php echo $lang['form_submit'];?>" />
            </label>

          </form>
        </div>

      </section>

    </main>

    <footer>
      <p> © 2023 - Portfolio - Made by Arnaud GOETZ </p>
    </footer>

  </body>
</html>
