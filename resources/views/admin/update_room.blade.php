<!DOCTYPE html>
<html>
<head>

<base href = "/public">
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
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
    <div class="form-container">
      <h1>Update Room</h1>
      <form action="{{ url('edit_room',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="title">Room Title</label>
          <input type="text" name="title" id="title" value="{{$data->room_title}}">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description">{{$data->description}}</textarea>
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" id="price" value="{{$data->price}}">
        </div>

        <div class="form-group">
          <label for="type">Room Type</label>
          <select name="type" id="type">
            <option selected value = "{{$data->room_type}}">{{$data->room_type}}</option>
            <option value="regular" selected>Regular</option>
            <option value="premium">Premium</option>
            <option value="deluxe">Deluxe</option>
          </select>
        </div>

        <div class="form-group">
          <label for="wifi">Free Wifi</label>
          <select name="wifi" id="wifi">
            <option selected value = "{{$data->wifi}}">{{$data->wifi}}</option>
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="form-group" style="padding-left: 40%;">
          <label for="image">Current Image</label>
          <img width = "100" src="/room/{{$data->image}}">
        </div>

        <div class="form-group">
          <label for="image">Upload Image</label>
          <input type="file" name="image" id="image">
        </div>

        <button type="submit" class="btn-submit" value = "Update Room">Update Room</button>
      </form>
    </div>
  </div>

  @include('admin.footer')
</body>
</html>