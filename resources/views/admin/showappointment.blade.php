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
                    <th style="padding:10px;">customer name</th>
                    <th style="padding:10px;">email</th>
                    <th style="padding:10px;">phone</th>
                    <th style="padding:10px;">doctor name</th>
                    <th style="padding:10px;">date</th>
                    <th style="padding:10px;">message</th>
                    <th style="padding:10px;">status</th>
                    <th style="padding:10px;">Approved</th>
                    <th style="padding:10px;">Cancelled</th>
                    <th style="padding:10px;">Send Mail</th>
                </tr>

                @foreach($data as $appoint)

              <tr align="center" style="background-color:black;">
                  <td>{{$appoint->name}}</td>
                  <td>{{$appoint->email}}</td>
                  <td>{{$appoint->phone}}</td>
                  <td>{{$appoint->doctor}}</td>
                  <td>{{$appoint->date}}</td>
                  <td>{{$appoint->message}}</td>
                  <td>{{$appoint->status}}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>
                  </td>
                  <td>
                    <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                  </td>

              </tr>
              @endforeach






            </table>
        </div>



     </div>

     

      

        @include('admin.script')


          
  </body>
</html>