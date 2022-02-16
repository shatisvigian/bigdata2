<label for="email">Name</label>
 
<input id="email"
    type="email"
    class="@error('email', 'login') is-invalid @enderror">
 
@error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div>

<label for="email">IC</label>
<input id="email"
type="email"
class="@error('email', 'login') is-invalid @enderror">

@error('email', 'login')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<h1>><button>Submit</button></h1