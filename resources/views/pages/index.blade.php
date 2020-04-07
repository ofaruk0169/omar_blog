@extends('layouts.app')

@Section('content')
       {{-- <h1>{{$title}} </h1>
       <p>My name is Omar Faruk</p> --}}

       
          <!-- About section-->
          <section class="page-section bg-primary" id="about">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-10 text-center">
                          <h2 class="text-white mt-0 " id="heyscreen">Hey, Welcome to My Blog.</h2>
                          <hr class="divider light mb-4" />
                          <p class="text-white-50 mb-4">I don't really have a plan for this blog. 
                                 Honestly, I just created this to test my skills
                                 with the Laravel framework, but it could also be a place 
                                 where I could showcase my creative pursuits in terms of programming, 
                                 music and writing. Feel free to stalk me.</p>
                          
                      </div>
                  </div>
              </div>
              
          </section>
          <!-- Services section-->
          <section class="page-section" id="services">
              <div class="container">
                     <img src="/img/me.jpg" alt="this is a picture of me" height="100%" width="100%" class="homeimg">
                  <h2 class="text-center mt-5">What I love</h2>
                  <hr class="divider my-8" />
                  <div class="row">
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="mt-2">
                              <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                              <h3 class="h4 mb-2">Music</h3>
                              <p class="text-muted mb-0">One of my heroes in life is Nujabes. I hope to create some chill, lofi beats like him one day. </p>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="mt-2">
                              <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                              <h3 class="h4 mb-2">Programming</h3>
                              <p class="text-muted mb-0">I enjoy planning and thinking logically through problems. Programming has made me a better person.</p>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="mt-2">
                              <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                              <h3 class="h4 mb-2">Films</h3>
                              <p class="text-muted mb-0">One of the goals in my life is to get through all the films on my watchlist... That probably isn't happening.</p>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="mt-2">
                              <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                              <h3 class="h4 mb-2">Travel</h3>
                              <p class="text-muted mb-0">I enjoy experiencing new environments and cultures. My number one destination to visit is Japan.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
         
         
          <!-- Call to action section-->
          {{-- <section class="page-section bg-primary text-white">
              <div class="container text-center">
                  <h2 class="mb-4">dd  
                     <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-github"></i></a>
                            <a href="https://www.messenger.com/t/osmosmar" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://open.spotify.com/user/3cvol9wlqnblmxj0xv56crj8a" class="instagram"><i class="fa  fa-spotify"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-facebook-messenger "></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                          </div>
                  </h2>
                  
              </div>
          </section> --}}
          <!-- Contact section-->
          <section class="page-section" id="contact">
              <div class="container">
                     <img src="/img/space.jpg" alt="this is a cool picture i found" height="100%" width="100%" class="homeimg">
                  <div class="row justify-content-center">
                      <div class="col-lg-8 text-center">
                          <h2 class="mt-5">Let's Get In Touch!</h2>
                          <hr class="divider my-4" />
                          <p class="text-muted mb-5">If you have any enquiries for me please do not hesitate to get in touch!</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                          <div>+44 745-676-4403</div>
                      </div>
                      <div class="col-lg-4 mr-auto text-center">
                          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                          ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="ofaruk0169@gmail.com">ofaruk0169@gmail.com</a>
                      </div>
                  </div>
              </div>
          </section>
      
@endsection

