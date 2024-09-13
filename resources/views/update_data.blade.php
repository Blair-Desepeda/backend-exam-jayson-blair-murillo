@include('layouts.header')


<form action="{{url('/product/'.$edit_data->id.'/update/')}}" method="post">
  @csrf
  @method('PUT')


  <div class="outer-div">
    <div class="container-update">

      <hr style="margin: 7% 0 0 0;">
      <label id="update-data-title">Update data</label>
      <hr>
      <div class="form-group">
        <input type="text" class="form-control" name="name" required value="{{$edit_data->name}}">
      </div>
      <br>
      <div class="form-group">
        <select name="category" class="form-control" required value="{{$edit_data->category}}">
          <option value="{{$edit_data->category}}">{{$edit_data->category}}</option>
          <option value="Appliances">Appliances</option>
          <option value="Food">Food</option>
          <option value="Gadgets">Gadgets</option>
          <option value="Vehicle">Vehicle</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <input type="text" class="form-control" name="description" required value="{{$edit_data->description}}">
      </div>
      <footer class="form-group">
        <br>
        <button type="submit" name="update" class="btn btn-success" id="update">Update</button>
        <a href="{{url('/product')}}" name="description" class="btn btn-danger" id="close">Back</a>
      </footer>
      <br>
    </div>
  </div>
</form>
@include('layouts.footer')