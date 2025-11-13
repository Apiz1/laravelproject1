<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

    <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #000000; /* Changed to black */
    margin: 0;
    padding: 0;
    color: #ffffff; /* Optional: makes text readable on black background */
  }

  .page-content {
    padding: 30px;
  }

  .table-container {
    max-width: 90%;
    margin: auto;
    background-color: #1c1c1c; /* Darker container for contrast */
    box-shadow: 0 4px 8px rgba(255,255,255,0.1); /* Light shadow for visibility */
    border-radius: 8px;
    overflow-y: auto;
    max-height: 500px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    color: #ffffff; /* Ensures table text is visible */
  }

  thead {
    background-color: #333333; /* Dark header */
    color: #ffffff;
    position: sticky;
    top: 0;
    z-index: 1;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #444444; /* Subtle border */
  }

  th {
    font-weight: 600;
  }

  tr:hover {
    background-color: #2a2a2a; /* Hover effect on dark background */
  }

  img {
    width: 80px;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(255,255,255,0.1);
  }

  @media screen and (max-width: 768px) {
    th, td {
      padding: 12px;
    }

    img {
      width: 60px;
    }
  }
</style>
  </head>
  <body>
    @include ('admin.header')
    
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


           <table>
        <thead>
          <tr>
            <th>Room_id</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Arrival Date</th>
            <th>Leaving Date</th>
            <th>Status</th>
            <th>Room Title</th>
            <th>Price</th>
            <th>Images</th>
            <th>Delete</th>
            <th>Status Update</th>
          </tr>
        </thead>
        <tbody>
         
        @foreach($data as $data)

          <tr>
            <td>{{$data->room_id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->start_date}}</td>
            <td>{{$data->end_date}}</td>
            <td>  

            @if($data->status == 'approve')
            <span style = "color: skyblue;">Approve</span>
            @endif

            @if($data->status == 'rejected')
            <span style = "color: red;">Rejected</span>
            @endif

            @if($data->status == 'waiting')
            <span style = "color: yellow;">waiting</span>
            @endif

            </td>
            <td>{{$data->room->room_title}}</td>
            <td>{{$data->room->price}}</td>
            <td>
                <img src="/room/{{$data->room->image}}">
            </td>
            <td>
              <a onclick="return confirm('Are Sure Want To Delete ?');" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a>
            </td>
            <td>
            <span style="padding-bottom: 10px;">
            <a class = "btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a>
            </span>
            <a class = "btn btn-warning"href="{{url('reject_book',$data->id)}}">Rejected</a>

            </td>

          </tr>

          @endforeach

    
        </tbody>
      </table>



        </div>
    </div>      
</div>
       @include('admin.footer')
  </body>
</html>