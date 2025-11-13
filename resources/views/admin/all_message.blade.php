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
    padding: 16px;
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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Send Email</th>

          </tr>
        </thead>
        <tbody>
       
          @foreach($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->message}}</td>
            <td>
            <a class="btn btn-success" href="{{url('send_mail',$data->id)}}">Send Email</a>
            </td>
        </tr>
        @endforeach

      </table>
            
          </div>
     </div>
</div>



       @include('admin.footer')
  </body>
</html>