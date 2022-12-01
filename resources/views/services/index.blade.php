<x-dash>
  
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <div class="row">
                            <div class="col-md-8"><h2 class="card-title">Service Section</h2></div>
                            <div class="col-md-4">
                               <a href="{{ route('services.create') }}" class="btn btn-success">Add Service</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-broutineed zero-configuration">
                            <thead>
                                <tr>
                                     <td>Service Icon</td>
                                     <td>Service Title</td>
                                     <td>Service Description</td>
                                  
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse ($services as $service )
                                <tr>
                                        
                                        <td><img style="max-width: 100px;" src="{{ $service->icon? asset('storage/'.$service->icon): asset('bootstrap.png') }}" alt="No Icon"></td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->description }}</td>
                                        
                                        <td><a class="success p-0" href="/services/{{ $service->id }}/edit" data-original-title="" title="Edit">
                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                            </a>
                                            
                                            <a class="danger p-0" href="/services/{{ $service->id }}/delete" data-original-title="" title="Delete">
                                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                            </a></td>
                                        </tr>
                                    @empty
                                        
                                    @endforelse
 
                                
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


            </div>
          </div>
        </div>
      </div>
    </div>
</x-dash>