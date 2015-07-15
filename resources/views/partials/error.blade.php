@if($errors->count() > 0)
   <div class="row">
       <div class="alert alert-danger">
           @foreach($errors->all() as $error)
               <p>{{ $error }}</p>
           @endforeach

       </div>
   </div>
@endif

@if(Session::has('success'))
    <div class="row">
        <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>

        </div>
    </div>
@endif