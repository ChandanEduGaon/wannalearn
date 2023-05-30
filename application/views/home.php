<div class="intro-section" id="home-section">
      <input type="hidden" value="<?=isset($_SESSION['user'])?>" id="user">
      <div class="slide-1" style="background-image: url('<?=base_url()?>public/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>

                </div>

                <div class="col-lg-5 ml-auto" id="form" data-aos="fade-up" data-aos-delay="500">
                  <div method="post" class="form-box" id="form1">
                    <h3 class="h4 text-black mb-4">Sign Up</h3>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <input type="text" id="email" name="email" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" id="re_pass" name="re_pass" class="form-control" placeholder="Re-type Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" id="signup" value="Sign up">
                    </div>
                    <span>Already have an account? <code id="signin_form">Sign In</code></span>
                  </div>
                  <div method="post" class="form-box" id="form2" style="display:none;">
                    <h3 class="h4 text-black mb-4">Sign In</h3>
                    <div class="form-group">
                      <input type="text" id="l_email" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" id="l_pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" id="signin" value="Sign in">
                    </div>
                    <span>Don`t have an account? <code id="signup_form">Sign Up</code></span>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
</div>