<x-dash>

<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Pricing</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="{{ route('prices.store')}}" method="POST"class="form-horizontal" novalidate enctype="multipart/form-data">
                              @csrf
                              
                            <div class="row">
                                   
                                <div class="col-md-12">
                                    
                                    <div class="form-group">
                                        <h5>Pricing Title </h5>
                                        <div class="controls">
                                            <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('title')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5>Pricing  Description</h5>
                                        <div class="controls">
                                            <textarea name="description" id="textarea" class="form-control" required placeholder="description"></textarea>
                                              @error('description')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Price </h5>
                                        <div class="controls">
                                            <input type="number" name="price" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('price')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Feature 1 </h5>
                                        <div class="controls">
                                            <input type="text" name="feature1" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('feature1')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Feature 2 </h5>
                                        <div class="controls">
                                            <input type="text" name="feature2" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('feature2')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Feature 3 </h5>
                                        <div class="controls">
                                            <input type="text" name="feature3" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('feature3')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Feature 4</h5>
                                        <div class="controls">
                                            <input type="text" name="feature4" class="form-control" required data-validation-required-message="This field is required" >
                                        </div>
                                        @error('feature4')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                        <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-dash>




 