<x-dash>
            
<!-- Input Validation start -->
<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit About Section</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="{{ route('about.update',[$about->id]) }}" method="POST"class="form-horizontal" novalidate enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <div class="row">
                                   
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Change about Photo </h5>
                                        <div class="controls">
                                            <input type="file" name="photo" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                        @error('photo')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>about Heading </h5>
                                        <div class="controls">
                                            <input type="text" name="heading" class="form-control" required data-validation-required-message="This field is required" value="{{ $about->heading }}">
                                        </div>
                                        @error('heading')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5>Who We Are </h5>
                                        <div class="controls">
                                            <textarea name="who_we_are" id="textarea" class="form-control" required placeholder="who_we_are">{{ $about->who_we_are }}</textarea>
                                              @error('who_we_are')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Vision </h5>
                                        <div class="controls">
                                            <textarea name="vision" id="textarea" class="form-control" required placeholder="vision">{{ $about->vision }}</textarea>
                                              @error('vision')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Mission </h5>
                                        <div class="controls">
                                            <textarea name="mission" id="textarea" class="form-control" required placeholder="mission">{{ $about->mission }}</textarea>
                                              @error('mission')
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




 