@extends('layouts.app')

@Section('content')
       {{-- <h1>{{$title}} </h1>
       <p>My name is Omar Faruk</p> --}}

       
          <!-- About section-->
          <section class="page-section bg-primary" id="about">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8 text-center">
                          <h2 class="text-white mt-4">Hey, welcome to my blog.</h2>
                          <hr class="divider light my-4" />
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
                  <h2 class="text-center mt-0">What I love</h2>
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
          <section class="page-section bg-primary text-white">
              <div class="container text-center">
                  <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                  
              </div>
          </section>
          <!-- Contact section-->
          <section class="page-section" id="contact">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8 text-center">
                          <h2 class="mt-0">Let's Get In Touch!</h2>
                          <hr class="divider my-4" />
                          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                          <div>+1 (555) 123-4567</div>
                      </div>
                      <div class="col-lg-4 mr-auto text-center">
                          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                          ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                      </div>
                  </div>
              </div>
          </section>
      
@endsection

