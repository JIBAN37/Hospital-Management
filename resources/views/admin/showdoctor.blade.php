<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
    @include('admin.sidebar')
    
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">
           
        <div style="padding-top:120px;" align="center">
        <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;">Doctor name</th>
                    <th style="padding:10px;">Phone</th>
                    <th style="padding:10px;">Speciality</th>
                    <th style="padding:10px;">Room no</th>
                    <th style="padding:10px;">Image</th>
                    <th style="padding:10px;">Delete</th>
                    <th style="padding:10px;">Update</th>
                   
                </tr>

                @foreach ($data as $doctor)
                <tr align="center" style="background-color:black;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td> <img height="100px;" width="100px;" src="doctorimage/{{$doctor->image}}" alt=""></td>
                    <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete </a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update </a></td>
                </tr>
                @endforeach



</div> 

</div>

     

      

        @include('admin.script')


        
          
  </body>
</html>