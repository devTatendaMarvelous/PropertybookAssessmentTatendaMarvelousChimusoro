<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Propertybook Assessment | By Tatenda Marvelous Chimusoro</title>
     <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/feather/style.min.css') }}">
         <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
                  <link rel="stylesheet" type="text/css" href="{{ asset('assets/feather/style.css')}}">
    
     
</head>
<body  id="top">
     <section id="hero">
         


               <div class="text-white">
                <nav class="p-4 ">
                    <div class="row">
                         <div class="logo  col-md-3">
                               <h1 class="logo-text "><img class="logo "src="{{ asset('logo.png') }}" alt="">
                              Business</h1>
                         </div>
                         <div class="nav-bar-links col-md-9">
                               <ul>
                                   <li ><a  class="nav-link"  href="#hero">Home</a> </li>
                                   <li ><a class="nav-link" href="#services">Services</a> </li>
                                   <li ><a class="nav-link" href="#pricing">Pricing</a> </li>
                               </ul>
                         </div>
                    </div>
                   
                </nav>
                <div class="hero-content">
                    <div class="row">
                         <div class="left-hero-content col-md-6">
                              <h1 class="hero-heading">{{ $hero->heading }}</h1>
                              <p class="cop-text">{{ $hero->paragraph }}</p>
                              <div class="row p-4">
                                   <div class="col-md-3">
                                        <button class="hero-button mb-3">GET STARTED</button>
                                   </div>
                                    <div class="col-md-6">
                                        <div class="intro">
                                             <a  href="#"><span class="hero-play mt-5 text-center" ><i class="ft-play"></i></span> <span class="intro-text ml-3 ">Watch Intro</span>  </a>
                                             {{-- <a  href="#"><span  ><img class="hero-play mb-3 " src="{{ asset('play.png') }}" alt=""></span> <span class="intro-text ml-3 ">Watch Intro</span>  </a> --}}
                                            
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="right-hero-content col-md-6">
                              <div >
                                   <img class="hero-image" src="{{$hero->photo? asset('storage/'.$hero->photo): asset('storage/defaults/her.png') }}" alt="">
                              </div>
                         </div>
                    </div>
                </div>
                </div>

     </section>
     <section id="about">
               <div class="row">
                    <div class="col-md-6">
                         <img src="{{ $about->photo? asset('storage/'.$about->photo): asset('storage/defaults/about.png') }}" alt="" class="ml-3 about-image">
                    </div>
                    <div class="col-md-6"><br>
                        <hr class="blue-line"><h1 class="story"> OUR STORY</h1><br>
                         <h1 class="about-heading">
                              {{ $about->heading }}
                         </h1>
                         <div class="about-content">
                               <div id="tabs">

  </div>
</div>
                              <div class="tabs">
                                   


                                   <div class="tab">
                                        <button class="btn btn-primary about-btn tablinks " onclick="openTab(event, 'who')" id="defaultOpen"><span class="btn-text">Who We Are</span></button>
                                        <button class="tablinks btn btn-light about-btn " onclick="openTab(event, 'vision')"><span class="btn-text"> Our Vision</button>
                                        <button class="tablinks btn btn-light about-btn " onclick="openTab(event, 'history')"><span class="btn-text">Our History</span></button>
                                   </div>
                              </div>
                              <!-- Tab content -->
                              <div id="who" class="tabcontent">
                              
                              <p class="about-text">{{ $about->who_we_are }}</p>
                              </div>

                              <div id="vision" class="tabcontent">
                              
                              <p class="about-text">{{ $about->vision }}</p>
                              </div>

                              <div id="history" class="tabcontent">
                              
                              <p class="about-text">{{ $about->mission }}</p>
                              </div> 
                              <div id="who-we-are">
                                   <p class="about-text">
                                       
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
     </section>
     <section id="services" >
          <h3 class="services-heading"> <span> Services</span></h3>

          <div class="row service-items">
               @forelse ($services as $service )
                 <div class="col-md-4">
                    <div class="card  service">
                         <div class="service-icon">
                              <img src="{{ $service->icon? asset('storage/'.$service->icon): asset('bootstrap.PNG') }}"  >
                         </div>
                         <h3 class="service-header">
                              {{ $service->title }}
                         </h3>
                         <p class="about-text">
                              {{$service->description}}
                         </p>
                         
                    </div>
               </div>
               @empty
                 
               @endforelse
            
              
               
          </div>
     </section >
   
     <section id="pricing">
                <h3 class="services-heading"> <span> Pricing</span></h3>
                <div class="prices">
                    <div class="row">
                      @php
                        $count=1;
                      @endphp
                      @forelse ($prices as $price )
                        <div class="col-md-4">
                              <div class="card price mx-4 p-4">
                                   <h3 class="{{ $count===2? 'exclusive-heading':'services-heading' }}"> <span> {{ $price->title }}</span></h3>
                                   <p class="about-text text-center ">
                                       {{ $price->description }}
                                   </p>
                                   <p class="about-text text-center">
                                       <span class="sign">$</span><span class="amount">{{ $price->price }}</span>/mo
                                   </p>
                                   <div class="text-center">
                                         <button class="{{ $count===2? 'exclusive-trial':'trial' }}">START FREE TRIAL</button>
                                   </div>
                                   <div class="features about-text mt-5  ml-3">
                                        <h5><span class="feature-icon active-feature "><i class="ft-check"></i></span> {{ $price->feature1 }}</h5>
                                        <h5><span class="feature-icon active-feature"><i class="ft-check"></i></span> {{ $price->feature2 }}</h5>
                                        <h5><span class="feature-icon {{ $count>1? 'active-feature':'' }}"><i class="ft-check"></i></span> {{ $price->feature3 }}</h5>
                                        <h5><span class="feature-icon {{ $count >2? 'active-feature':'' }}"><i class="ft-check"></i></span> {{ $price->feature4 }}</h5>
                                   </div>


                              </div>
                         </div>
                         @php
                        $count++;
                      @endphp
                      @empty
                        
                      @endforelse
                         
                        
                        
                          
                    </div>
                </div>
     </section>

     <footer id="footer">
          <div class="text-center col-md-7 container">
               <div class="bg-circle"></div>
               <h2 class="footer-tagline ">
                    {{ $footer->tag_line }}
               </h2>
               <p class="footer-text">
                      {{ $footer->paragraph }}
               </p>
          </div>
     </footer>
   {{-- <a href="#top" id="goToTop" onclick="scrollToTop();return false">Back to Top &uarr;</a> --}}
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top &uarr; </button> 

<script src="assets/js/landing.js"></script>
</body>
</html>