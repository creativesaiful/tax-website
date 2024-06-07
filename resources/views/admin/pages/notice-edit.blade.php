@extends('admin.layouts.admin')

@section('title', 'Edit Notice')

@section('content')

<div class="row">
    <div class="col-8">
        
        <div class="card">
            <div class="card-body">
                
    
                <form action="{{ route('notices.update', $notice->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    
                    @csrf
    
                    @method('PUT')
    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Notice Title</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="{{ $notice->title }}" >
    
                            @error('title')
    
                        <span class="text-danger">{{ $message }}</span>
                        
                             @enderror
                        </div>
    
                        
                    </div>
    
    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Notice Descrition</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="5" name="description">{{ $notice->description }}</textarea>
                      
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
                        <div class="offset-2 col-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
    
                </form>
    
            </div>
        </div>



</div>
  


@endsection