<?php

require_once __DIR__.'/database/config.php';
require_once __DIR__.'/database/default.php';
require_once __DIR__.'/includes/renderingHelper.php';

$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName, $user, $pass);
prepareData($dbh,$dataToDb);

$topArticles = $dbh->query('SELECT * from articles WHERE `category-id` = 1')->fetchAll(\PDO::FETCH_ASSOC);
$bottomArticles = $dbh->query('SELECT * from articles WHERE `category-id` = 2')->fetchAll(\PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Roku - Home
    </title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" type="image/png" href="images/favicon.png">
  	<link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/index.css">
    	<!--[if lt IE 9]>
    		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
  </head>
  <body>
    <div class="wrap">
        <!-- HEADER -->
        <header class="header">
            <div class="navbar">
              <div class="navbar__logo">
                <p class="logo">
                  Roku
                  <span class="orange">
                    F
                  </span>
                  <span class="crimson_red">
                    l
                  </span>
                  <span class="green_yellow">
                    a
                  </span>
                  <span class="sea_green">
                    s
                  </span>
                  <span class="turquoise">
                    h
                  </span>
                  <span class="sea_green">
                    b
                  </span>
                  <span class="green_yellow">
                    a
                  </span>
                  <span class="crimson_red">
                    c
                  </span>
                  <span class="orange">
                    k
                  </span>
                </p>
              </div>
              <nav class="nav">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      Home
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      Account
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      Settings
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      Help
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      About
                    </a>
                  </li>
                </ul>
              </nav>
              <span class="btn--menu">
                &#9776;
              </span>
            </div>
            <div class="header__title">
              <h1>
                Roku
                <span class="orange">
                  F
                </span>
                <span class="crimson_red">
                  l
                </span>
                <span class="green_yellow">
                  a
                </span>
                <span class="sea_green">
                  s
                </span>
                <span class="turquoise">
                  h
                </span>
                <span class="sea_green">
                  b
                </span>
                <span class="green_yellow">
                  a
                </span>
                <span class="crimson_red">
                  c
                </span>
                <span class="orange">
                  k
                </span>
              </h1>
            </div>
            <div class="media">
              <div class="media__row--1">
                  <?php
                    echo renderArticle($topArticles);
                  ?>
              </div>
              <div class="media__row--2">
              </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- TEAM   -->
        <section class="team">
          <div class="team__wrap">
              <img  
                class="team__person" 
                src="images/team-1.png" 
                alt="person"
                >
              <img  
                class="team__person" 
                src="images/team-2.png" 
                alt="person"
                >
              <img  
                class="team__person" 
                src="images/team-3.png" 
                alt="person"
                >
              <img  
                class="team__person" 
                src="images/team-4.png" 
                alt="person"
                >
              <img  
                class="team__person" 
                src="images/team-1.png" 
                alt="person"
                >
              <img  
                class="team__person" 
                src="images/team-2.png" 
                alt="person"
                >
          </div>
        </section>
        <!-- END TEAM   -->

        <!-- TABS   -->
        <div class="tabs">
            <div class="tabs__row--1">
                <div class="tabs__box">
                  <div class="tabs__info">
                    <d>
                    <div class="tabs__title">
                        News Clips
                    </div>
                    <div class="tabs__text">
                        Explore famous headlines 
                    </div>
                    <button class="tabs__btn">
                      Read
                    </button>
                  </div>
                </div>
                <div class="tabs__box">
                  <div class="tabs__info">
                    <div class="tabs__title">
                        Trivia
                    </div>
                    <div class="tabs__text">
                        How well do you know the past?
                    </div>
                    <button class="tabs__btn">
                      Play
                    </button>
                  </div>
                </div>
              </div>
            <div class="tabs__row--1">
                  <div class="tabs__box">
                    <div class="tabs__info">
                      <d>
                      <div class="tabs__title">
                          Quotes
                      </div>
                      <div class="tabs__text">
                          Did they really say that?! 
                      </div>
                      <button class="tabs__btn">
                          Find Out 
                      </button>
                    </div>
                  </div>
                  <div class="tabs__box">
                    <div class="tabs__info">
                      <div class="tabs__title">
                          Interviews
                      </div>
                      <div class="tabs__text">
                          Featuring past interviews of your 
                          favourite celebrities and movie stars.
                      </div>
                      <button class="tabs__btn">
                          Take Me There
                      </button>
                    </div>
                  </div>
                </div>
            <div class="tabs__row--2">
                    <div class="tabs__box">
                      <div class="tabs__info">
                        <d>
                        <div class="tabs__title">
                            Recipes
                        </div>
                        <div class="tabs__text">
                            Popular recipes by the decade - try 
                            something retro for dinner tonight! 
                        </div>
                        <button class="tabs__btn">
                            Yummy!
                        </button>
                      </div>
                    </div>
                    <div class="tabs__box--alfa" id="tpansparent">
                      <div class="tabs__info">
                        <div class="tabs__title">
                        </div>
                        <div class="tabs__text">
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        <!--END TABS   -->


        <!-- FOOTER -->
        <footer class="footer">
          <div class="footer__logo">
            <p class="logo">
              Roku
              <span class="orange">
                F
              </span>
              <span class="crimson_red">
                l
              </span>
              <span class="green_yellow">
                a
              </span>
              <span class="sea_green">
                s
              </span>
              <span class="turquoise">
                h
              </span>
              <span class="sea_green">
                b
              </span>
              <span class="green_yellow">
                a
              </span>
              <span class="crimson_red">
                c
              </span>
              <span class="orange">
                k
              </span>
            </p>
          </div>
        </footer>
        <!-- END FOOTER -->
    </div>
  </body>
</html>
