<x-dash>

<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Hero</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="{{ route('hero.update',[$hero->id]) }}" method="POST"class="form-horizontal" novalidate enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <div class="row">
                                   
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <h5>Hero Heading</h5>
                                        <div class="controls">
                                            <input type="text" name="heading" class="form-control" required data-validation-required-message="This field is required" value="{{ $hero->heading }}">
                                        </div>
                                        @error('heading')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5>Change Hero Photo</h5>
                                        <div class="controls">
                                            <input type="file" name="photo" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                        @error('photo')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                   
                                  

                                    <div class="form-group">
                                        <h5>Hero Paragraph</h5>
                                        <div class="controls">
                                            <textarea name="paragraph" id="textarea" class="form-control" required placeholder="paragraph">{{ $hero->paragraph }}</textarea>
                                              @error('paragraph')
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




 