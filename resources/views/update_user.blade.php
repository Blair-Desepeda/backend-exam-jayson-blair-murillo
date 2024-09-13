
@include('layouts.header')


<form action="{{url('/user/'.$edit_data->id.'/update/')}}" method="post">
@csrf
@method('PUT')    


<div class="outer-div">
        <div class="container-update">
            
            <hr style="margin: 7% 0 0 0;">
            <label id="update-data-title">Update data</label>
            <hr>
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$edit_data->name}}"required placeholder="Name">
              </div>
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="email" value="{{$edit_data->email}}"required placeholder="Email">
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="form-control" name="password" value="{{$edit_data->password}}"required placeholder="Password">
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" required placeholder="Re-enter Password">

              </div>
            <footer class="form-group">
                <br>
                <button type="submit" name="update" class="btn btn-success" id="update">Update</button>
                <a href="{{url('/dashboard')}}" name="description" class="btn btn-danger" id="close">Back</a>
            </footer>
            <br>
        </div>
    </div>
</form>
@include('layouts.footer')