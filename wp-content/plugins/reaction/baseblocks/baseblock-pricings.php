<?php
/**
 * Template Name: Pricings
 * Template Post Type: baseblock
* @package _rebase
 */
get_header(); 
?>

<section class="b-block p-2 border-0" id="navigator">
  <div class="container-fluid">
    <p class="m-0 text-center">
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/cta">Call to action</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/contacts">Contacts</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/contents">Contents</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/css">Typography</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/features">Features</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/footers">Footers</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/forms">Forms</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/headers">Headers</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/pricings">Pricings</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/teams">Teams</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/testimonials">Testimonials</a>
    </p>
  </div>
</section>

<article>
  
  <?php if (isset($_GET['index'])) { ?>
    <a href="<?php the_permalink(); ?>" class="btn w-50 m-auto d-block text-center"><h3>See Fullscreen</h3></a>
  <?php } else { ?>
    <a href="<?php echo bloginfo('url'); ?>/baseblock/index/#pricings" class="mt-4 btn w-50 ml-auto mr-auto d-block text-center"><h3>See Contained</h3></a>
  <?php } ?>  

  <h2 class="mb-0">Pricing 01</h2>
  <?php /* Pricing 01 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-center">
        <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center">
          <div class="bg-dark pb-5 pt-5 pl-3 pr-3 br">
            <h2 class="font-weight-light">Hobby</h2>
            <p class="text-h2"><strong>$9 / month</strong></p>
            <p class="text-h3">Even the all-powerful Pointing has no control about the blind texts.</p>

            <ul class="text-left mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p><a href="#" class="btn mt-4">Subscribe</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="bg-dark pb-5 pt-5 pl-3 pr-3 b-touch br">
            <h2 class="font-weight-light">Professional</h2>
            <p class="text-h2"><strong>$19 / month</strong></p>
            <p class="text-h3">Far far away, behind the word mountains, far from the countries.</p>

            <ul class="text-left mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p><a href="#" class="btn mt-4">Subscribe</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="bg-dark pb-5 pt-5 pl-3 pr-3 br">
            <h2 class="font-weight-light">Business</h2>
            <p class="text-h2"><strong>$49 / month</strong></p>
            <p class="text-h3">Wild Question Marks, but the Little Blind Text didn’t listen.</p>

            <ul class="text-left mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p><a href="#" class="btn mt-4">Subscribe</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 01 End */ ?>   

  <h2 class="mb-0">Pricing 02</h2>
  <?php /* Pricing 02 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-center">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left">
          <div class="b-box b-touch p-5 br">
            <h2>Hobby <strong class="float-xl-right d-lg-block d-xl-inline">$99</strong></h2>
            <p class="text-h3"><em>Copy Writers ambushed her, made her drunk with Longe.</em></p>

            <ul class="text-left pl-3 mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-left pt-4"><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="b-box b-touch p-5 br">
            <h2>Advanced <strong class="float-xl-right d-lg-block d-xl-inline">$349</strong></h2>
            <p class="text-h3"><em>Separated they live in Bookmarks right at the coast.</em></p>

            <ul class="text-left pl-3 mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-left pt-4"><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="b-box b-touch p-5 br">
            <h2>Business <strong class="float-xl-right d-lg-block d-xl-inline">$849</strong></h2>
            <p class="text-h3"><em>A small river named Duden flows by their place.</em></p>

            <ul class="text-left pl-3 mt-5 mb-5">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-left pt-4"><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 02 End */ ?>   

  <h2 class="mb-0">Pricing 03</h2>
  <?php /* Pricing 03 Start */ ?>   
  <section class="b-block bg-dark" style="background-image: url(<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>bg_0.svg);">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-center">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center">
          <div class="b-box b-touch p-4 br">
            <h2>Hobby</h2>
            <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>

            <p class="text-h1 mt-5 mb-5">$99</p>

            <p><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="b-box b-touch p-4 br">
            <h2>Advanced</h2>
            <p class="text-h3">Separated they live in Bookmarksgrove right at the coast, a large language ocean.</p>

            <p class="text-h1 mt-5 mb-5">$299</p>

            <p><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="b-box b-touch p-4 br">
            <h2>Business</h2>
            <p class="text-h3">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>

            <p class="text-h1 mb-5 mt-5">$799</p>

            <p><a href="#" class="btn">Buy Now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 03 End */ ?>   

  <h2 class="mb-0">Pricing 04</h2>
  <?php /* Pricing 04 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-top">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h2 class="font-weight-light">Startup</h2>
            <hr>
            <p class="text-h2"><strong>$9.90</strong></p>
            <p class="text-h4">Far far away, behind the word mountains, far from the countries.</p>
            <hr>
            <p class="text-right"><em>Unlimited calls</em></p>
            <p class="text-right"><em>Free hosting</em></p>
            <p class="text-right"><em>40MB of storage</em></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p class="text-center pt-4"><a href="#" class="btn btn-round">Choose Plan</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h2 class="font-weight-light">Standard</h2>
            <hr>
            <p class="text-h2"><strong>$29.90</strong></p>
            <p class="text-h4">The copy warned the Blind Text, that it would have been rewritten</p>
            <hr>
            <p class="text-right"><em>Unlimited calls</em></p>
            <p class="text-right"><em>Free hosting</em></p>
            <p class="text-right"><em>1GB of storage</em></p>
            <p class="text-right"><em>10 hours of support</em></p>
            <p class="text-right"><em>Custom domain</em></p>
            <p><br></p>
            <p class="text-center pt-4"><a href="#" class="btn btn-round">Choose Plan</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h2 class="font-weight-light">Professional</h2>
            <hr>
            <p class="text-h2"><strong>$59.90</strong></p>
            <p class="text-h4"> the headline of Alphabet Village and the subline of her own road.</p>
            <hr>
            <p class="text-right"><em>Unlimited calls</em></p>
            <p class="text-right"><em>Free hosting</em></p>
            <p class="text-right"><em>1GB of storage</em></p>
            <p class="text-right"><em>20 hours of support</em></p>
            <p class="text-right"><em>Custom domain</em></p>
            <p class="text-right"><em>Analytics and SEO</em></p>

            <p class="text-center pt-4"><a href="#" class="btn btn-round">Choose Plan</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 04 End */ ?>   

  <h2 class="mb-0">Pricing 05</h2>
  <?php /* Pricing 05 Start */ ?>   
  <section class="b-block bg-dark" style="background-image: url(<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>bg_1.svg);">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-center no-gutters">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4">
            <h2 class="font-weight-light">Basic</h2>

            <p class="text-h1 mt-5 mb-5"><strong>$19</strong> <span class="text-h4">/month</span></p>

            <ul class="text-left">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-center pt-4"><a href="#" class="btn btn-round btn-white btn-shadow">Choose Plan</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 ml-auto mr-auto col-lg-4 text-center mt-4 mt-lg-0 sl-1 pt-0 pt-lg-3 pb-0 pb-lg-3 bg-gray b-touch">
          <div class="pb-5 pt-5 pl-4 pr-4">
            <h2 class="font-weight-light">Standard</h2>

            <p class="text-h1 mt-5 mb-5"><strong>$49</strong> <span class="text-h4">/month</span></p>

            <ul class="text-left">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-center pt-4"><a href="#" class="btn btn-round btn-shadow">Choose Plan</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 ml-auto mr-auto col-lg-4 text-center mt-4 mt-lg-0">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4">
            <h2 class="font-weight-light">OEM</h2>

            <p class="text-h1 mt-5 mb-5"><strong>$99</strong> <span class="text-h4">/month</span></p>

            <ul class="text-left">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>

            <p class="text-center pt-4"><a href="#" class="btn btn-round btn-white btn-shadow">Choose Plan</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 05 End */ ?>   

  <h2 class="mb-0">Pricing 06</h2>
  <?php /* Pricing 06 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-top">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left">
          <div class="br">
            <div class="bg-dark p-3 text-center">
              <h2 class="font-weight-light">Startup</h2>
              <p class="text-h2"><strong>$9.90</strong></p>
            </div>

            <div class="bg-gray p-5 text-center">
              <p><img alt="image" height="40" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg"></p>
              <p class="text-h4"><strong>For small companies</strong></p>
              <p><br></p>
              <p>10 hours of support</p>
              <p>40MB of storage</p>
              <p>Subdomain</p>

              <p class="text-center pt-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="br">
            <div class="bg-dark p-3 text-center">
              <h2 class="font-weight-light">Standard</h2>
              <p class="text-h2"><strong>$19.90</strong></p>
            </div>

            <div class="bg-gray p-5 text-center">
              <p><img alt="image" height="40" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg"></p>
              <p class="text-h4"><strong>For medium companies</strong></p>
              <p><br></p>
              <p>10 hours of support</p>
              <p>40MB of storage</p>
              <p>Subdomain</p>

              <p class="text-center pt-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-left pt-4 pt-lg-0">
          <div class="br">
            <div class="bg-dark p-3 text-center">
              <h2 class="font-weight-light">Business</h2>
              <p class="text-h2"><strong>$29.90</strong></p>
            </div>

            <div class="bg-gray p-5 text-center">
              <p><img alt="image" height="40" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg"></p>
              <p class="text-h4"><strong>For large companies</strong></p>
              <p><br></p>
              <p>10 hours of support</p>
              <p>40MB of storage</p>
              <p>Subdomain</p>

              <p class="text-center pt-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 06 End */ ?>   

  <h2 class="mb-0">Pricing 07</h2>
  <?php /* Pricing 07 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-top">
        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h3><strong>Startup</strong></h3>
            <p class="text-h4">&lt; 10 employees</p>

            <p class="text-h1 mt-5">$9.90 <span class="text-h3">/ month</span></p>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            <hr>
            <p><em>Unlimited calls</em></p>
            <p><em>Free hosting</em></p>
            <p><em>40MB of storage</em></p>

            <p class="text-center pt-5"><a href="#" class="btn btn-round">Subscribe</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h3><strong>Agency</strong></h3>
            <p class="text-h4">10-100 employees</p>

            <p class="text-h1 mt-5">$19.90 <span class="text-h3">/ month</span></p>
            <p>And if she hasn’t been rewritten, then they are still using her.</p>
            <hr>
            <p><em>Unlimited calls</em></p>
            <p><em>Free hosting</em></p>
            <p><em>40MB of storage</em></p>

            <p class="text-center pt-5"><a href="#" class="btn btn-round">Subscribe</a></p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="bg-gray pb-5 pt-5 pl-4 pr-4 br">
            <h3><strong>Business</strong></h3>
            <p class="text-h4">>100 employees</p>

            <p class="text-h1 mt-5">$99.90 <span class="text-h3">/ month</span></p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
            <hr>
            <p><em>Unlimited calls</em></p>
            <p><em>Free hosting</em></p>
            <p><em>40MB of storage</em></p>

            <p class="text-center pt-5"><a href="#" class="btn btn-round">Subscribe</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 07 End */ ?>   

  <h2 class="mb-0">Pricing 08</h2>
  <?php /* Pricing 08 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-top">
        <div class="col-12 col-md-8 m-auto col-lg-4 text-center">
          <img alt="image" height="80" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
          <h2><strong>Startup</strong></h2>
          <p class="text-h3 mb-4 mb-lg-5"><em>$9 / month</em></p>

          <p>10 hours of support</p>
          <p>40MB of storage</p>
          <p>Subdomain</p>

          <p class="text-center mt-4 mt-lg-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
        </div>

        <div class="col-12 col-md-8 col-lg-4 text-center m-auto pt-5 pt-lg-0">
          <img alt="image" height="80" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
          <h2><strong>Advanced</strong></h2>
          <p class="text-h3 mb-4 mb-lg-5"><em>$19 / month</em></p>

          <p>10 hours of support</p>
          <p>40MB of storage</p>
          <p>Subdomain</p>

          <p class="text-center mt-4 mt-lg-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
        </div>

        <div class="col-12 col-md-8 m-auto col-lg-4 text-center pt-5 pt-lg-0">
          <img alt="image" height="80" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
          <h2><strong>Business</strong></h2>
          <p class="text-h3 mb-4 mb-lg-5"><em>$29 / month</em></p>

          <p>10 hours of support</p>
          <p>40MB of storage</p>
          <p>Subdomain</p>

          <p class="text-center mt-4 mt-lg-5"><a href="#" class="btn btn-round">Choose Plan</a></p>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 08 End */ ?>   

  <h2 class="mb-0">Pricing 09</h2>
  <?php /* Pricing 09 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <div class="row mt-5 align-items-top">
        <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left">
          <div class="bg-gray p-3 text-center br sl-1">
            <h2 class="font-weight-light">Startup</h2>
            <p class="text-h2">$99</p>
            <p class="text-center"><a href="#" class="btn btn-empty">Buy Now</a></p>

            <hr class="mt-5 mb-5">

            <p>10 hours of support</p>
            <p>40MB of storage</p>
            <p>Subdomain</p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-md-0">
          <div class="bg-gray p-3 text-center br sl-1">
            <h2 class="font-weight-light">Advanced</h2>
            <p class="text-h2">$399</p>
            <p class="text-center"><a href="#" class="btn">Buy Now</a></p>

            <hr class="mt-5 mb-5">

            <p>10 hours of support</p>
            <p>40MB of storage</p>
            <p>Subdomain</p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-xl-0">
          <div class="bg-gray p-3 text-center br sl-1">
            <h2 class="font-weight-light">Business</h2>
            <p class="text-h2">$999</p>
            <p class="text-center"><a href="#" class="btn btn-empty">Buy Now</a></p>

            <hr class="mt-5 mb-5">

            <p>10 hours of support</p>
            <p>40MB of storage</p>
            <p>Subdomain</p>
          </div>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-xl-0">
          <div class="bg-gray p-3 text-center br sl-1">
            <h2 class="font-weight-light">Enterprise</h2>
            <p class="text-h2">Call Us</p>
            <p class="text-center"><a href="#" class="btn btn-empty">Contact</a></p>

            <hr class="mt-5 mb-5">

            <p>10 hours of support</p>
            <p>40MB of storage</p>
            <p>Subdomain</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Pricing 09 End */ ?>   
  
  <h2 class="mb-0">Pricing 10</h2>
  <?php /* Pricing 10 Start */ ?>   
  <section class="b-block">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>Pricing Plans</h1>
        </div>
      </div>

      <table class="table text-center mt-5 d-none d-lg-table">
        <tbody>
          <tr class="no-border">
            <th scope="row"></th>
            <td class="text-center">
              <h2 class="font-weight-light">Hobby</h2>
              <p class="text-h2">$99</p>
              <p><a href="#" class="btn btn-empty">Buy Now</a></p>
            </td>
            <td class="text-center">
              <h2 class="font-weight-light">Professional</h2>
              <p class="text-h2">$399</p>
              <p><a href="#" class="btn btn-empty">Buy Now</a></p>
            </td>
            <td class="text-center">
              <h2 class="font-weight-light">Business</h2>
              <p class="text-h2">$899</p>
              <p><a href="#" class="btn">Buy Now</a></p>
            </td>
            <td class="text-center">
              <h2 class="font-weight-light">Enterprise</h2>
              <p class="text-h2">Call us</p>
              <p><a href="#" class="btn btn-empty">Contact</a></p>
            </td>
          </tr>
          <tr>
            <th scope="row">Support</th>
            <td>3 months</td>
            <td>6 months</td>
            <td>12 months</td>
            <td>Custom</td>
          </tr>
          <tr>
            <th scope="row">Full source code</th>
            <td>✓</td>
            <td>✓</td>
            <td>✓</td>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">SaaS / Subscription</th>
            <td>✓</td>
            <td>✓</td>
            <td>✓</td>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Intranet</th>
            <td></td>
            <td>✓</td>
            <td>✓</td>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Downloadable Software</th>
            <td></td>
            <td></td>
            <td>✓</td>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Redistribute</th>
            <td></td>
            <td></td>
            <td></td>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Custom code</th>
            <td></td>
            <td></td>
            <td></td>
            <td>✓</td>
          </tr>
        </tbody>
      </table>

      <table class="table text-center mt-5 d-table d-lg-none">
        <tbody>
          <tr class="no-border">
            <td class="text-center" colspan="2">
              <h2 class="font-weight-light">Hobby</h2>
              <p class="text-h2">$99</p>
              <p><a href="#" class="btn btn-empty">Buy Now</a></p>
            </td>
          </tr>
          <tr>
            <th scope="row">Support</th>
            <td>3 months</td>
          </tr>
          <tr>
            <th scope="row">Full source code</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">SaaS / Subscription</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Intranet</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Downloadable Software</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Redistribute</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Custom code</th>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="table text-center mt-5 d-table d-lg-none">
        <tbody>
          <tr class="no-border">
            <td class="text-center" colspan="2">
              <h2 class="font-weight-light">Professional</h2>
              <p class="text-h2">$399</p>
              <p><a href="#" class="btn btn-empty">Buy Now</a></p>
            </td>
          </tr>
          <tr>
            <th scope="row">Support</th>
            <td>6 months</td>
          </tr>
          <tr>
            <th scope="row">Full source code</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">SaaS / Subscription</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Intranet</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Downloadable Software</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Redistribute</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Custom code</th>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="table text-center mt-5 d-table d-lg-none">
        <tbody>
          <tr class="no-border">
            <td class="text-center" colspan="2">
              <h2 class="font-weight-light">Business</h2>
              <p class="text-h2">$899</p>
              <p><a href="#" class="btn">Buy Now</a></p>
            </td>
          </tr>
          <tr>
            <th scope="row">Support</th>
            <td>12 months</td>
          </tr>
          <tr>
            <th scope="row">Full source code</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">SaaS / Subscription</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Intranet</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Downloadable Software</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Redistribute</th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Custom code</th>
            <td></td>
          </tr>
        </tbody>
      </table>

      <table class="table text-center mt-5 d-table d-lg-none">
        <tbody>
          <tr class="no-border">
            <td class="text-center" colspan="2">
              <h2 class="font-weight-light">Enterprise</h2>
              <p class="text-h2">Call us</p>
              <p><a href="#" class="btn btn-empty">Contact</a></p>
            </td>
          </tr>
          <tr>
            <th scope="row">Support</th>
            <td>Custom</td>
          </tr>
          <tr>
            <th scope="row">Full source code</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">SaaS / Subscription</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Intranet</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Downloadable Software</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Redistribute</th>
            <td>✓</td>
          </tr>
          <tr>
            <th scope="row">Custom code</th>
            <td>✓</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <?php /* Pricing 10 End */ ?>   

</article>

<?php
  get_footer();
