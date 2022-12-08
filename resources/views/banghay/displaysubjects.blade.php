@extends('layouts.reg')

@section('content')


<div class="modal-body text-center">
        <form action="{{url('uploadfile')}}" method="post" enctype="multipart/form-data">
          @csrf
          
            <label for="file">Choose a image file:</label>
            <input type="file" name="file" class="upload-file form-control @error('file') is-invalid @enderror">
            @error('file')
            <div class="invalid-feedback">{{ $message }} </div>
            @enderror
            <input type="submit" value="Upload" id="upload" class="upload">
            
          </fieldset>

        </form>

@endsection