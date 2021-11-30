@extends("layout")
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <label>Message</label></br>
        <input type="text" name="message" id="message" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop