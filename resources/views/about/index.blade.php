<x-dash>
     <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h2 class="card-title">About Section</h2>
                    </div>
                </div>
               
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-broutineed zero-configuration">
                            <thead>
                                <tr>
                                     <td>About Photo</td>
                                     <td>About Heading</td>
                                     <td>About Who We Are Tab</td>
                                     <td>About Vision Tab</td>
                                     <td>About Mision Tab</td>
                                  
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    @unless (!$about)
                                    
                                        <td><img class="about-image" src="{{  asset('/storage/'.$about->photo) }}" alt="No Photo"></td>
                                        <td>{{ $about->heading }}</td>
                                        <td>{{ $about->who_we_are }}</td>
                                         <td>{{ $about->vision }}</td>
                                          <td>{{ $about->mission }}</td>
                                        <td><a class="success p-0" href="/about/{{ $about->id }}/edit" data-original-title="" title="Edit">
                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                            </a>
                                            
                                            <a class="danger p-0" href="/about/{{ $about->id }}/delete" data-original-title="" title="Delete">
                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                            </a></td>
                                        
                                    @endunless 
                                </tr>
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->

            </div>
          </div>
        </div>

        

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

</x-dash>