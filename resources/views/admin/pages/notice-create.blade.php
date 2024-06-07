@extends('admin.layouts.admin')
@section('title', 'Add New Notice')

@section('content')

    <div class="row">
        <div class="col-8">
            <div class="card-box">



                <div class="row">
                    <div class="col-12">
                        <div>
                            <form class="form-horizontal" method="post" action="{{ route('notices.store') }}"
                            enctype="multipart/form-data" role="form">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Notice Title</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="title" placeholder="Title" >

                                        @error('title')

                                    <span class="text-danger">{{ $message }}</span>
                                    
                                         @enderror
                                    </div>

                                    
                                </div>




                                <div class="form-group row">
                                    <label class="col-2 col-form-label"> Notice Descrition</label>
                                    <div class="col-10">
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                  
                                        @error('description')

                                        <span class="text-danger">{{ $message }}</span>
                                        
                                    @enderror

                                  
                                    </div>

                                  

                                </div>


                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Upload File</label>
                                    <div class="col-10">
                                        <input type="file" class="form-control" name="file_path" >

                                       
                                        @error('file_path')

                                        <span class="text-danger">{{ $message }}</span>
                                            
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label"></label>
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-lg btn-primary mb-2">Submit</button>
                                    </div>
                                </div>




                               
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

@endsection


