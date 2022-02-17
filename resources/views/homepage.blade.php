@extends('layouts.app')
@section('content')
<div class='container'>
    <form action="/formpengguna" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-5">             
                <label>Name</label>
                 <input type='text' name='name' class='form-control' value=''>
            </div>
            <div class="form-group col-md-5">             
                <label>IC</label>
                 <input type='text' name='IC' class='form-control' value=''>
            </div>
            <div class="form-group col-md-5">             
                <label>Address</label>
                 <input type='text' name='Address' class='form-control' value=''>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-dark">submit</button>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>


    
    
    </form>

</div>

@endsection




