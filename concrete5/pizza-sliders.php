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
         <!--<div class="hidden-xs navbar-form navbar-right">
            <a href="#search" class="search-form-tigger btn btn-success"  data-toggle="search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
         </div>-->
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

         <header class="col-xs-12 pizza-sliders-header">
            <div class="col-md-offset-1 col-md-10">
               <p>900 cal</p>
               <img src="<?php echo $this->getThemePath(); ?>/images/stars.svg" alt="">
            </div>
         </header>

<!-- Beginning of Recipe -->

         <section class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 pizza-sliders">
            <div>
            <a href="#">
               <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
               <div class="col-xs-9">
               <h2 class="pull-left">Pizza Sliders</h2>
            </div>
            <div class="col-xs-9">
               <h3 class="pull-left">submitted by <a href="">msrobinson</a></h3>
            </div>
            </div>

            <div class="pull-left">
               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 50.6 50.6" style="enable-background:new 0 0 50.6 50.6;" xml:space="preserve">
                 <g>
                      <path d="M27.4,7.1V4.9h6.3c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2H17c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2h6.3v2.2
                          C12.4,8.2,3.9,17.3,3.9,28.4c0,11.8,9.6,21.4,21.4,21.4s21.4-9.6,21.4-21.4C46.8,17.3,38.2,8.2,27.4,7.1z M25.3,45.7
                              C15.7,45.7,8,37.9,8,28.4S15.7,11,25.3,11c4.4,0,8.3,1.7,11.4,4.3l1.7-1.5l0.2,0.1c0.2,0.1,0.4,0.2,0.5,0.4l0,0
                                  c0.1,0.1,0.2,0.3,0.3,0.4l0.2,0.3l-0.1,0.2l-1.3,1.5c2.8,3.1,4.6,7.1,4.6,11.6C42.7,37.9,34.9,45.7,25.3,45.7z"/>
                                    <path d="M38.7,14.8c-0.1-0.1-0.1-0.1-0.2-0.2l-14.8,13c-0.2,0.6,0,1.2,0.5,1.7c0.4,0.4,1.1,0.6,1.6,0.5l13-14.8
                                        C38.8,14.9,38.7,14.8,38.7,14.8z"/>
                      </g>
                  </svg>
               <p class="pull-left">25 min</p>
               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 50.6 50.6" style="enable-background:new 0 0 50.6 50.6;" xml:space="preserve">
<g>
<path d="M43.3,13.6h-4.5l1.6-4.2C41,7.9,41,6.2,40.3,4.7c-0.7-1.5-1.9-2.7-3.4-3.2c-1.5-0.6-3.2-0.5-4.7,0.1
C30.7,2.3,29.5,3.5,29,5l-3.3,8.6H12.2l-4.8,4.8l0,0.3H7.4L9,36.5l-1.6,13h31.1h0.4l4.5-4.5l-0.7-17.5L43.3,13.6z M31.5,6
c0.3-0.8,1-1.5,1.8-1.9c0.8-0.4,1.7-0.4,2.6-0.1c0.8,0.3,1.5,1,1.9,1.8c0.4,0.8,0.4,1.8,0.1,2.6l-4,10.3h-7.3L31.5,6z M13.4,16.4
h11.2l-0.9,2.3H11L13.4,16.4z M10.4,46.8l1.3-10.2l-1.3-15.1h24.9l-0.8,4.2l1,21.1H10.4z M37.7,16.4h1L37.1,18L37.7,16.4z
M38.2,46.2l-1-20.4l1-5.1l2.1-2.1l-0.5,8.9L40.5,44L38.2,46.2z"/>
<path d="M32.6,9.2c0.3,0.1,0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.5,0.1c0.3,0.1,0.6,0.3,0.8,0.6l0.7-0.6c-0.4-0.4-0.8-0.7-1.3-0.8
c-0.3-0.1-0.5-0.1-0.7-0.1c-0.1,0-0.3,0-0.4,0C32.6,8.2,32.3,8,32,7.5L31.2,8C31.6,8.6,32.1,9.1,32.6,9.2z"/>
<path d="M31.9,11.9L31.9,11.9c-0.2,0-0.3,0-0.4,0c-0.3-0.1-0.6-0.4-0.8-0.8l-0.8,0.5c0.4,0.6,0.8,1.1,1.4,1.2
c0.3,0.1,0.5,0.1,0.7,0.1c0.1,0,0.3,0,0.5,0.1c0.3,0.1,0.6,0.3,0.8,0.6l0.7-0.6c-0.4-0.4-0.8-0.7-1.3-0.8
C32.3,11.9,32,11.9,31.9,11.9z"/>
<path d="M30.4,15.7c-0.1,0-0.3,0-0.4,0c-0.3-0.1-0.6-0.4-0.8-0.8l-0.8,0.4c0.4,0.6,0.8,1.1,1.4,1.2c0.3,0.1,0.5,0.1,0.7,0.1h0
c0.2,0,0.3,0,0.5,0.1c0.3,0.1,0.6,0.3,0.8,0.6l0.7-0.6c-0.4-0.4-0.8-0.7-1.3-0.8C30.9,15.7,30.6,15.7,30.4,15.7z"/>
</g>
</svg>
               <p class="pull-left">7</p>
               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 50.6 50.6" style="enable-background:new 0 0 50.6 50.6;" xml:space="preserve">
<g>
<path class="st0" d="M44.5,44.9c-1.1-10.8-6.6-19.4-13.7-22.4c3.7-1.9,6.2-5.8,6.2-10.2C37,6,31.9,0.8,25.5,0.8
C19.2,0.8,14,6,14,12.3c0,4.4,2.5,8.3,6.2,10.2C13.1,25.4,7.6,34.1,6.6,44.9C6.4,46,6.8,47.1,7.6,48c1,1.1,2.7,1.8,4.4,1.8H39
c1.7,0,3.4-0.7,4.4-1.8C44.2,47.1,44.6,46,44.5,44.9z M16.4,12.3c0-5,4.1-9.1,9.1-9.1s9.1,4.1,9.1,9.1s-4.1,9.1-9.1,9.1
S16.4,17.3,16.4,12.3z M41.7,46.4c-0.6,0.7-1.6,1.1-2.7,1.1H12.1c-1.1,0-2.1-0.4-2.7-1.1c-0.3-0.3-0.5-0.7-0.5-1.3
c1.2-12.1,8.3-21.3,16.6-21.3S41,32.9,42.2,45.1C42.2,45.7,41.9,46.1,41.7,46.4z"/>
</g>
</svg>
               <textarea rows="1" cols="2" class="pull-left">6</textarea>
               <p class="pull-right">novice</p>
               <p class="pull-left col-xs-12">For this recipe you'll need a pan, oven, knives, cooking spray, and aluminum foil.</p>
            </div>
         </section>

         <!-- Written Guide -->

         <section class="col-xs-12 col-sm-offset-1 col-sm-10">
            <input id="Button1" type="button" value="visual guide" onclick="switchVisible();" class="col-xs-offset-4 col-xs-4 text-center">
            <div id="Div1">
            <div class="pull-left col-xs-5">
               <h4>ingredients</h4>
               <ul>
                  <li>12 connected dinner rolls</li>
                  <li>1 cup pizza sauce</li>
                  <li>12 thin slices mozzarella cheese</li>
                  <li>24 slices pepperoni</li>
                  <li>1/2 cup butter melted</li>
                  <li>1 tsp garlic powder</li>
                  <li>1 tsp onion powder</li>
                  <li>2 tbsp dried oregano</li>
                  <li>1/4 tsp red pepper flakes</li>
                  <li>1 tbsp grated parmesan</li>
               </ul>
            </div>
            <div class="pull-left col-xs-7">
               <h4>directions</h4>
               <ul>
                  <li><span>1.</span> Preheat oven to 350 degrees F.</li>
                  <li><span>2.</span> Spray a 9 x 13-inch pan with cooking
                  spray.</li>
                  <li><span>3.</span> Slice rolls like you would a burger bun and place bottom half in the pan and set the top half aside.</li>
                  <li><span>4.</span> Spoon pizza sauce onto the bottom half of the rolls, spread out evenly.</li>
                  <li><span>5.</span> Add 6 slices of the mozzarella cheese to cover the sauce, layer with 12 slices of pepperoni, then top with the chopped bacon. Add the remaining 6 slices of mozzarella cheese, followed by the remaining 12 slices of pepperoni. Place the top half of the rolls back on top of the pepperoni.</li>
                  <li><span>6.</span> Whisk together melted butter, garlic powder, onion powder, oregano, and chili flakes and pour evenly over the top of the rolls. Cover with aluminum foil and let set for 10 minutes, transfer to the oven and bake for 10 minutes with aluminum foil on.</li>
                  <li><span>7.</span> Remove from oven and enjoy warm.</li>
               </ul>
            </div>
         </div>
         <div id="static">
         </div>

            <!-- Rating -->

            <div class="col-xs-offset-2 col-xs-8">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>

         </section>
         <?php $this->inc('elements/footer.php'); ?>
      </div>
         </body>
</html>
