<?php include 'header.php'; ?>
<nav>

<ul id="nav-mobile-account" class="side-nav">
  <li class="profile">
    <div class="li-profile-info">
      <img src="img/profile.jpg" alt="profile">
      <h2>Jane Doe</h2>
      <div class="emailprofile">Janedoe@maildomain.com</div>
      <div class="balance">
         Balance : <span>$1200</span>
      </div>
    </div>
    <div class="bg-profile-li" style="background-image: url(img/bg-profile.jpg);">
    </div>
  </li>
  <li>
    <a class="waves-effect waves-blue" href="homepage.html"><i class="fas fa-home"></i>Home</a>
  </li>
  <li>
    <a href="wish-list.html"><i class="fas fa-heart"></i>Wish list</a>
  </li>
  <li>
    <a href="gallery.html"><i class="fas fa-camera-retro"></i>Gallery</a>
  </li>
  <li>
    <a href="setting.html"><i class="fas fa-cog"></i>Setting</a>
  </li>
  <li>
    <ul class="collapsible collapsible-accordion">
      <li>
        <div class="collapsible-header">
          <i class="fas fa-columns"></i>Pages <span><i class="fas fa-caret-down"></i></span>
        </div>
        <div class="collapsible-body">
          <ul>
            <li>
              <a class="waves-effect waves-blue" href="homepage.html"><i class="fas fa-angle-right"></i>Home</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="setting.html"><i class="fas fa-angle-right"></i>Setting</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="404.html"><i class="fas fa-angle-right"></i>404</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="login.html"><i class="fas fa-angle-right"></i>Sign In</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="signup.html"><i class="fas fa-angle-right"></i>Sign Up</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="single-page.html"><i class="fas fa-angle-right"></i>Single page</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Detail</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="contact.html"><i class="fas fa-angle-right"></i>Contact Us</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <a href="contact.html"><i class="fas fa-envelope"></i>Contact Us</a>
  </li>
  <li>
    <a href="login.html"><i class="fas fa-sign-in-alt"></i>Sign in</a>
  </li>
  <li>
    <a href="404.html"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
  </li>
</ul>
<!-- END SIDENAV ACCOUNT--></nav>
<!-- END SIDENAV-->
<!-- CONTENT -->
<div id="page-content">
  <div class="setting-page">
    <div class="container">
      <div class="row ">
        <div class="col s12 m12 l12 ">
          <div class="section-title">
            <span class="theme-secondary-color">Setting</span> Account
          </div>
        </div>
      </div>
      <form>
        <div class="row">
          <div class="col s12 m12 l12 ">
            <div class="sphoto-text">Photo ( 130 x 130 )</div>
            <div class="setting-photo">
              <img alt="avatar" src="img/profile.jpg">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12 m12 l12">
            <div class="btn">
              <span>File</span>
              <input type="file" multiple></div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload one or more files"></div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12 ">
            <input value="Jane" id="user-firstname" type="text" class="validate">
            <label for="user-firstname">First Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12 ">
            <input value="Doe" id="user-lastname" type="text" class="validate">
            <label for="user-lastname">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12 ">
            <input value="jonedoe@domain.com" id="user-email" type="email" class="validate">
            <label for="user-email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12 ">
            <input value="+628570000000" id="user-phone" type="tel" class="validate">
            <label for="user-phone">Phone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12 ">
            <textarea id="user-address" class="materialize-textarea">Karangwaru St, Yogyakarta, Indonesia</textarea>
            <label for="user-address">Address</label>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
              <input class="waves-effect waves-light btn" value="SUBMIT" type="submit"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>