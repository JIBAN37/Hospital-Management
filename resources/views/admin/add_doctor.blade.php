<!DOCTYPE html>
<html lang="en">
  <head>
     <style type="text/css">

      label{
       display: inline-block;
       width: 200px;
       }
     

     </style>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">

       
          

          <div class="container" align="center" style="padding-top:100px">
          @if (session()->has('message'))
         
       <div class="alert success">
        <button type="button" class="close" data-dismiss="alert">

        </button>

         {{session()->get('message')}}

       </div>


       @endif

          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
              @csrf

          <div style="padding: 15px;">
          <label>Doctor name</label>
          <input type="text" style="color:black;" name="name" placeholder="write the name">

          </div>

          
       

<div style="padding: 15px;">
<label>Phone</label>
<input type="number" style="color:black;" name="number" placeholder="write the number">

</div>



<div style="padding: 15px;">
<label>Speciality</label>
<select name="speciality" style="color:black; width:200px;">
<option>----select---</option>
<option value="skin">skin</option>
<option value="heart">heart</option>
<option value="nose">nose</option>
<option value="eye">eye</option>

</select>

</div>



<div style="padding: 15px;">
<label>Doctor room</label>
<input type="text" style="color:black;" name="room" placeholder="write the room number">

</div>



<div style="padding: 15px;">
<label>Doctor image</label>
<input type="file" name="file">

</div>



<div style="padding: 15px;">

<input type="Submit" class="btn btn-success">

</div>
</form>

</div>






        </div>
        
      @include('admin.script')


    <!-- End custom js for this page -->
  </body>
</html>