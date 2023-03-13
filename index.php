<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre ICI</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
  
  <main>

    <section id="home" class="page" >

      <header>
        <h2> My Portfolio</h2>
        <ul>
          <li><a class="link-1" href="#home">HOME</a></li>
          <li><a class="link-1" href="#about">ABOUT</a></li>
          <li><a class="link-1" href="#work">WORK</a></li>
          <li><a class="link-1" href="#contact">CONTACT</a></li>
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

        <h2>About me</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque voluptas quisquam perferendis omnis tempore vel blanditiis minima alias, sequi necessitatibus? Exercitationem veniam tempore omnis necessitatibus quia dolore, amet totam.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia mollitia consequuntur libero architecto tenetur rem nemo! Cum, magnam est omnis repellat eligendi, et facilis sed voluptas, debitis ratione animi itaque!</p>    
      
        <div>
          <img src="assets/img/blend2.png" alt="Logo de blender">
        </div>

        <h2> My Skills </h2>
        
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

    <section id = "work" >
      <header>
        <h2> MY WORK</h2>
      </header>
      <nav>
        <?php
          require_once __DIR__ . "/assets/models/Projet.php";
          $tab = new Projet();
          foreach($tab->getAllProjects() as $projet) :
            ?>
            <div> 
              
              <img src="<?= $projet['Image'] ?>" alt=" Logo Blender">
              
              <section>
                <h3><?= $projet['Titre'] ?></h3> 
                <p> <?= $projet['Description'] ?></p>
              </section>
            </div>
        <?php
          endforeach;
        ?>

      </nav>

      <footer>
          <button class="button"> Load more projects </button>
          
          <form action="get">

              <label for="text" >
                <input name="Research" type="text" class="input"/>
              </label>
              
              <label for="submit">
                <input type="submit"value="Search" />
              </label>

          </form>

      </footer>

    </section>

    <section id="contact" class="page">
      <div>
        <h2> CREATE PROJECTS</h2>
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ad similique ipsam quo aut qui natus ut, aspernatur enim suscipit ex neque aliquid tempore architecto quidem laboriosam numquam tempora nobis!</p>
      </div>

      <div>
        <h2>Formulaire</h2>
        <form method="post" >
          <label for="nom">
            <input name="Nom du projet" type="text" class="input" placeholder="Title" />
          </label>  

          <label for="type">
            <input name="Type de projet" type="text" class="input" id="type" placeholder="Type" />
          </label>
          <p></p>

          <label for="text">
            <textarea name="Description du projet" class="input" placeholder="Description"></textarea>
          </label>
          
          <label for="">
            <input type="submit"value="SUBMIT" />
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