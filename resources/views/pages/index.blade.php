@extends('layouts.app')

@Section('content')
       {{-- <h1>{{$title}} </h1>
       <p>My name is Omar Faruk</p> --}}

       
          <!-- About section-->
          <section class="page-section bg-primary" id="about">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-10 text-center">
                          <h2 class="text-white mt-0 ">Hey, Welcome to My Blog.</h2>
                          <hr class="divider light mb-4" />
                          <p class="text-white-50 mb-4">I don't really have a plan for this blog. 
                                 Honestly, I just created this to test my skills
                                 with the Laravel framework, but it could also be a place 
                                 where I showcase my creative pursuits in terms of programming, 
                                 music and writing.</p>
                          
                      </div>
                  </div>
              </div>
              
          </section>

        
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">Omar <span class="text-primary">Faruk</span></h1>
            <div class="subheading mb-5">  · +44 (0) 74567-64403 · <a href="mailto:ofaruk0169@gmail.com">ofaruk0169@gmail.com</a></div>
            <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
            <div class="social-icons">
                <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a><a class="social-icon" href="#"><i class="fab fa-github"></i></a><a class="social-icon" href="#"><i class="fab fa-twitter"></i></a><a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
   
    <hr class="m-0" />
    <!-- Education-->
    
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3">Programming Languages & Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item text-primary"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item"><i class="fab fa-vuejs"></i></li>
                <li class="list-inline-item"><i class="fab fa-react"></i></li>
                <li class="list-inline-item"><i class="fab fa-python"></i></li>
                <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                <li class="list-inline-item"><i class="fab fa-git"></i></li>
                <li class="list-inline-item"><i class="fab fa-github"></i></li>
                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
            </ul>
            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>Mobile-First, Responsive Design
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>Cross Browser Testing & Debugging
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>Cross Functional Teams
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>Agile Development & Scrum
                </li>
            </ul>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Interests</h2>
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
                        <p class="text-muted mb-0">A goal of mine is to create an app people use in their everyday life. I love programming!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-2">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Films</h3>
                        <p class="text-muted mb-0">Another in my life is to get through all the films on my watchlist... That probably isn't happening.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-2">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Travel</h3>
                        <p class="text-muted mb-0">I enjoy experiencing new cultures. My number one destination to visit is Japan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
</div>























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
                          <div>+44 (0) 74567 64403</div>
                      </div>
                      <div class="col-lg-4 mr-auto text-center">
                          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                          ><a class="d-block" href="mailto:ofaruk0169@gmail.com">ofaruk0169@gmail.com</a>
                      </div>
                  </div>
              </div>
          </section>


          
      
@endsection

