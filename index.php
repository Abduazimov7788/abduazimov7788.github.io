<?php
	try{
		if (!file_exists('anti_ddos/start.php'))
			throw new Exception ('anti_ddos/start.php does not exist');
		else
			require_once('anti_ddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">'.
			'The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load '.
			'properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>


<!DOCTYPE html>
<html lang="en-ru" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="./css/min-width.css">
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1022px)" href="./css/medium-width.css">
  <link rel="stylesheet" href="./css/styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet">

  <title>-</title>
</head>

<body>

  <div class="container">
      <div class="navbar navvs">

        <div class="logo-img">
          <img src="./img/logo.svg" alt="logo">
        </div>

        <div class="cname">
          <h1>Abduazimov</h1>
        </div>

        <div class="nav navs">

          <div class="dropdown-menu">
            Menu
            <ul class="dropdown">
              <li><a href="./contact-3d.html">About</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="./contact.html">Contact</a></li>
            </ul>
        </div>

      </div>
    </div>

    <div class="card-cont">

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>
      
      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

      <div class="cards">
        <img src="./img/logo.svg" alt="img" class="cards-image">
        <h2 class="cards-title">Any Text</h2>
      </div>

    </div>


    <div class="test">
      <div class="test1">
        <img src=""  alt="">
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="si-glyph-view">
      <use xlink:href="sprite.svg#si-glyph-view" />
    </svg>

    <script>

      let showingAlert = false;
      const interval = setInterval(() => {
        document.title = showingAlert
          ? 'Abduazimov' : 'Welcome';
        showingAlert = !showingAlert;
      }, 2000);


    </script>
  </div>

</body>

</html>