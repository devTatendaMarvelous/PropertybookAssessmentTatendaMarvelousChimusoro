<x-dash>
                        <div class="row">
                         <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">Welcome {{ Auth::user()->name }}</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="icon-cup font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                             <div class=" col-8 pb-3">
                                                 <em>Click On The Section Button For A Quick Edit</em>
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>

                          <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media col-12">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">Hero Section</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="icon-directions font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                             <div class=" col-8 pb-3">
                                                  <a class="btn btn-success p-1" href="/hero/{{ $hero->id }}/edit" data-original-title="" title="Edit">
                                               {{ $hero->heading }} 
                                            </a>
                                                  
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                          <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">About Section</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="ft-file-text font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                             <div class=" col-8 pb-3">
                                                  <a class="btn btn-success p-1" href="/about/{{ $about->id }}/edit" data-original-title="" title="Edit">
                                               {{ $about->heading }} 
                                            </a>
                                                  
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                          <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">Services Section</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="ft-server font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                              <div class=" col-8 pb-3">
                                                  @forelse ($services as $service )
                                                       <a class="btn btn-success p-1" href="/services/{{ $service->id }}/edit" data-original-title="" title="Edit">
                                               {{ $service->title }} 
                                            </a>
                                                  @empty
                                                       
                                                  @endforelse
                                                  
                                                  
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                          <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">Pricing Section</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="icon-wallet font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                             <div class=" col-8 pb-3">
                                                  @forelse ($prices as $price )
                                                       <a class="btn btn-success p-1" href="/prices/{{ $price->id }}/edit" data-original-title="" title="Edit">
                                               {{ $price->title }} 
                                            </a>
                                                  @empty
                                                       
                                                  @endforelse
                                                  
                                                  
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                          <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media ">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0"></h4>
                                                       <span class="grey darken-1">Footer Section</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="ft-file-minus font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                             <div class=" col-8 pb-3">
                                                  <a class="btn btn-success p-1" href="/footer/{{ $footer->id }}/edit" data-original-title="" title="Edit">
                                               {{ $footer->tag_line }} 
                                            </a>
                                                  
                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                          
                         
                        
                    </div>
                    <!--Statistics cards Ends-->

</x-dash>