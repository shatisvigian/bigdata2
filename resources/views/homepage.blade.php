{{-- <!DOCTYPE html>
<html lang="en"> --}}
@extends('layouts.app')
@section('content')

<head>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    

</head>

<body>
<div class='container'>
    <form action="/formpengguna" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-5">             
                <label>Name</label>
                 <input type='text' name='name' class='form-control' value='{{ old('name') }}'>
            </div>
                <div class="form-group col-md-5">             
                <label>IC</label>
                     <input type='text' name='IC' class='form-control' value='{{ old('IC') }}'>
                </div>
                        <div class="form-group col-md-5">             
                            <label>Address</label>
                            <input type='text' name='Address' class='form-control' value='{{ old('Address') }}'>
                        </div>
                                    <div class="form-group col-md-3">
                                        <button type="submit" class="btn btn-dark">submit</button>
                                    </div>
                                </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name='file' class="custom-file-input" id="inputGroupFile01">
                                            </div>
                                        </div>

    </form>

</div>
</body>

 
{{-- <script>
$(document).ready(function() {
  $('#summernote').summernote();
});

</script> 

@endsection --}}

{{-- </html> --}}
        
        


    
    




