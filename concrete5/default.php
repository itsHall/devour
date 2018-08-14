<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>
</head>

<body>
<div class="<?= $c->getPageWrapperClass() ?>">
   <!-- Beginning of Body-->

<div id="top"></div>
   <div class="container-fluid">
      <div class="row">

<!-- Beginning of Nav -->

<nav class="navbar-fixed-top">
      <div class="navbar-header container">
          <button id="hamnav" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><span>devour</span></a>
          <button id="searchnav" class="navbar-toggle collapsed" data-target="#search" data-toggle="collapse" type="button">
            <span class="glyphicon glyphicon-search"></span>
         </button>
      </div>


         <div id="search" class="navbar-collapse collapse">
         <div class="hidden-xs navbar-form navbar-right">
            <a href="#search" class="search-form-tigger btn btn-success"  data-toggle="search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
         </div>
		 <div class="visible-xs navbar-form navbar-right">
            <input type="text" name="search" class="search form-control" placeholder="what ya lookin' for?">
         </div>
      </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            $ga = new GlobalArea('Header Nav');
            $ga->display();
            ?>
         </div>
      </nav> <!-- Closes Nav -->

         <header class="home">
            <div class="layer">
            </div>
            <div class="col-xs-offset-3 col-xs-6 text-center">
               <?php
               $a = new Area('Main');
               $a->display($c);
               ?>
            </div>
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 form-group has-feedback">
               <input type="text" class="pull-left form-control" placeholder="what ya lookin for?"/>
               <a class="pull-right" href="#">
               <span class="glyphicon glyphicon-search form-control-feedback"></span>
               </a>
            </div>
            <div class="col-xs-offset-1">
            <a href="#">Potato and Broccoli Casserole</a>
            </div>
         </header> <!-- Closes Header -->

<!-- Beginning of Categories -->

         <section class="col-xs-12 col-md-offset-1 col-md-10 dinner-recipes-main">
            <input type="checkbox" class="read-more-state" id="dinner">
            <div class="col-sm-8 row read-more-wrap">
            <div class="col-xs-12 text-center">
               <div class="layer"></div>
               <a href="dinner-recipes.html">
                  <h2>Dinner Recipes</h2>
                  <p>categories</p>
               </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>soup</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="pizza-sliders.html">
               <div>
                     <p>sandwich</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>meat</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>salad</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>seafood</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>pasta</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>pizza</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>healthy</p>
               </div>
            </a>
            </div>
            <label for="dinner" class="col-xs-12 text-center read-more-trigger visible-xs">
               more categories...
            </label>
         </div>

         <div class="hidden-xs col-sm-4 text-center">
            <ul>
               <li><a href="">seafood</a></li>
               <li><a href="">pasta</a></li>
               <li><a href="">pizza</a></li>
               <li><a href="">healthy</a></li>
               <li><a href="">popular</a></li>
            </ul>
         </div>
         </section>

<!-- Beginning of Dessert Recipes -->

         <section class="col-xs-12 col-md-offset-1 col-md-10 dessert-recipes-main">
            <input type="checkbox" class="read-more-state" id="dessert">
            <div class="col-sm-8 row read-more-wrap">
            <div class="col-xs-12 text-center">
            <a href="#">
               <div class="layer"></div>
                  <h2>Dessert Recipes</h2>
                  <p>categories</p>
               </a>
            </div>
            <div class="col-xs-6">
            <a href="#">
               <div>
                     <p>pastry</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
            <a href="#">
               <div>
                     <p>cake</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
            <a href="#">
               <div>
                     <p>ice cream</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
            <a href="#">
               <div>
                     <p>muffin</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
            <a href="#">
               <div>
                     <p>pie</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
            <a href="#">
               <div>
                     <p>cookie</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
            <a href="#">
               <div>
                     <p>brownie</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
            <a href="#">
               <div>
                     <p>healthy</p>
               </div>
            </a>
            </div>
            <label for="dessert" class="col-xs-12 text-center read-more-trigger visible-xs">
               more categories...
            </label>
         </div>
            <div class="hidden-xs col-sm-4 text-center">
               <ul>
                  <li><a href="">pie</a></li>
                  <li><a href="">cookies</a></li>
                  <li><a href="">brownies</a></li>
                  <li><a href="">healthy</a></li>
                  <li><a href="">popular</a></li>
               </ul>
            </div>
         </section>

         <!-- Beginning of Ingredients -->

         <section class="col-xs-12 col-md-offset-1 col-md-10 ingredients-main">
            <input type="checkbox" class="read-more-state" id="ingredients">
            <div class="col-sm-8 row read-more-wrap">
            <div class="col-xs-12 text-center">
               <div class="layer"></div>
               <a href="#">
                  <h2>Ingredients</h2>
                  <p>categories</p>
               </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>chicken</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>beef</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>shrimp</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6">
               <a href="#">
               <div>
                     <p>pork</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>eggs</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>ham</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>chocolate</p>
               </div>
            </a>
            </div>
            <div class="col-xs-6 read-more-target">
               <a href="#">
               <div>
                     <p>turkey</p>
               </div>
            </a>
            </div>
            <label for="ingredients" class="col-xs-12 text-center read-more-trigger visible-xs">
               more categories...
            </label>
         </div>
            <div class="hidden-xs col-sm-4 text-center">
               <ul>
                  <li><a href="">eggs</a></li>
                  <li><a href="">ham</a></li>
                  <li><a href="">chocolate</a></li>
                  <li><a href="">turkey</a></li>
                  <li><a href="">popular</a></li>
               </ul>
            </div>
         </section>

<!-- Beginning of Article -->

         <article class="col-xs-12">
            <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-2">
               <h3>spotlight</h3>
               <h4>Coconuts are fat?</h4>
               <p>the new source of fat all the kids are talking about - coconuts. seriously.</p>
               <a href="#">more news</a>
            </div>
            <img class="pull-right img-responsive col-xs-6 col-md-4 pull-left" src="<?php echo $this->getThemePath(); ?>/images/coconut.jpg" alt="A coconut that is broken up shown resting on a beach">
         </article>
         <?php $this->inc('elements/footer.php'); ?>

</body>
</html>
