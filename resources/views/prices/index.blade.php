<x-dash>
     <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <div class="col-md-6">
                            <h2 class="card-title">Pricing Section</h2></div>
                            <div class="col-md-4">
                               <a href="{{ route('prices.create') }}" class="btn btn-success">Add Pricing</a>
                            </div>  
                        
                    </div>
                </div>
               
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-broutineed zero-configuration">
                            <thead>
                                <tr>
                                     
                                     <td>Pricing Title</td>
                                     <td>Pricing Description</td>
                                    <td>Pricing Amount</td>
                                    <td>Pricing Feature 1</td>
                                    <td>Pricing Feature 2</td>
                                    <td>Pricing Feature 3</td>
                                    <td>Pricing Feature 4</td>
                                    
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse ($prices as $price)
                                <tr>
                                        
                                      
                                        <td>{{ $price->title }}</td>
                                        <td>{{ $price->description }}</td>
                                        <td>{{ $price->price }}</td>
                                        <td>{{ $price->feature1 }}</td>
                                        <td>{{ $price->feature2 }}</td>
                                        <td>{{ $price->feature3 }}</td>
                                        <td>{{ $price->feature4 }}</td>
                                        <td><a class="success p-0" href="/prices/{{ $price->id }}/edit" data-original-title="" title="Edit">
                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                            </a>
                                            
                                            <a class="danger p-0" href="/prices/{{ $price->id }}/delete" data-original-title="" title="Delete">
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
<!--/ Zero configuration table -->

            </div>
          </div>
        </div>

        

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

</x-dash>