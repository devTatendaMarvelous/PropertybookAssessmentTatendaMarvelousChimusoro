<x-dash>
            
<!-- Input Validation start -->
<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit service Section</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="{{ route('services.update',[$service->id]) }}" method="POST"class="form-horizontal" novalidate enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <div class="row">
                                   
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Change Service Icon </h5>
                                        <div class="controls">
                                            <input type="file" name="icon" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                        @error('icon')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Service Heading </h5>
                                        <div class="controls">
                                            <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required" value="{{ $service->title }}">
                                        </div>
                                        @error('title')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5>Service Description</h5>
                                        <div class="controls">
                                            <textarea name="description" id="textarea" class="form-control" required placeholder="description">{{ $service->description }}</textarea>
                                              @error('description')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
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




 