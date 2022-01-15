<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

   <style>
     label{
       display:inline-block;
       width:200px;

     }
   </style>

   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
    @include('admin.sidebar')
    
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">
       @if (session()->has('message'))
       <div class="alert success">
        <button type="button" class="close" data-dismiss="alert">

        </button>

         {{session()->get('message')}}

       </div>


       @endif
       
       <div class="container" align="center" style="padding:100px">

<form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
  @csrf

<div style="padding:15px">
<label>Doctor Name</label>
<input type="text" style="color:black;" name="name" value="{{$data->name}}">
</div>

<div style="padding:15px">
<label>Phone</label>
<input type="number" name="phone" style="color:black;" value="{{$data->phone}}">
</div>

<div style="padding:15px">
<label>Speciality</label>
<input type="text" name="speciality" style="color:black;" value="{{$data->Speciality}}">
</div>

<div style="padding:15px">
<label>Room</label>
<input type="text" name="room" style="color:black;" value="{{$data->Room}}">
</div>


<div style="padding:15px">
<label>Old Image</label>
<img  height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
</div>


<div style="padding:15px">
<label>Change Image</label>
<input type="file" name="file">
</div>


<div style="padding:15px">

<input type="submit" name="btn btn-primary">
</div>



 </form>


 </div>
     


</div>

     

      

        @include('admin.script')


        
          
  </body>
</html>