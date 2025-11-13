<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
   <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #000000; /* Black background */
    margin: 0;
    padding: 0;
    color: #ffffff; /* Default text color */
  }

  .page-content {
    padding: 40px;
  }

  .form-container {
    max-width: 600px;
    margin: auto;
    background-color: #ffffff; /* White form container */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(255,255,255,0.1);
    color: #000000; /* Black text inside the form */
  }

  .form-container h1 {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #000000; /* Black heading */
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333333; /* Dark label text */
  }

  input[type="text"],
  input[type="number"],
  textarea,
  select,
  input[type="file"] {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    background-color: #fdfdfd;
    color: #000000;
  }

  textarea {
    resize: vertical;
    min-height: 80px;
  }

  .btn-submit {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-submit:hover {
    background-color: #0056b3;
  }

  @media screen and (max-width: 768px) {
    .form-container {
      padding: 20px;
    }

    .form-container h1 {
      font-size: 24px;
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
            <center>
            <h1 style="font-size: 30px; font-weight:bold;">Mail Send to {{$data->name}}</h1>

            <form action="{{url('mail',$data->id)}}" method="POST">
        @csrf

        <div class="form-group">
          <label>Greeting</label>
          <input type="text" name="greeting">
        </div>

        <div class="form-group">
          <label>Mail Body</label>
          <textarea name="body" ></textarea>
        </div>

        <div class="form-group">
          <label>Action Text</label>
          <input type="text" name="action_text" >
        </div>

        <div class="form-group">
          <label>Action Url</label>
          <input type="text" name="action_url" >
        </div>

        <div class="form-group">
          <label>End Line</label>
          <input type="text" name="endline" >
        </div>


        <button type="submit" class="btn btn-primary">Send Mail</button>
      </form>
            
            </center>
    
            <div>
        <div>
     <div>
       @include('admin.footer')

  </body>
</html>