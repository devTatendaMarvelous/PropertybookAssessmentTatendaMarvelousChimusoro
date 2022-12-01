<x-dash>
     <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h2 class="card-title">Footer Section</h2>
                    </div>
                </div>
               
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-broutineed zero-configuration">
                            <thead>
                                <tr>
                                     <td>Footer Tag Line</td>
                                     <td>Footer Paragraph</td>
                                     <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    @unless (!$footer)
                                    
                                      
                                        <td>{{ $footer->tag_line }}</td>
                                        <td>{{ $footer->paragraph }}</td>
                                         
                                        <td><a class="success p-0" href="/footer/{{ $footer->id }}/edit" data-original-title="" title="Edit">
                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                            </a>
                                            
                                            <a class="danger p-0" href="/footer/{{ $footer->id }}/delete" data-original-title="" title="Delete">
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


            </div>
          </div>
        </div>

        

      </div>
    </div>
 
</x-dash>