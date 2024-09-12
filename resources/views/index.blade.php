@include('layouts.header')
<hr>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
      <table class ="table table-bordered table-striped">
    <thead class ="table table-bordered table-dark">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th><center>Description</center></th>
            <th><center>Date & time</center></th>
            <th id="th-add-btn"><button type="button" style="background-color: blue;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="add-btn">
                ADD DATA
              </button></th>
        </tr>
    </thead>

    <tbody>
        @foreach($display_data as $display_data)

        <tr>
            <td>{{$display_data->name}}</td>
            <td>{{$display_data->category}}</td>
            <td id="description">{{$display_data->description}}</td>
            <td>{{$display_data->updated_at}}</td>
            <td id="edit-column">
                <a href="{{url('/dashboard/'.$display_data->id.'/edit/')}}" class="btn btn-success" id="edit-btn">UPDATE</a>
                <a href="{{url('/dashboard/'.$display_data->id.'/destroy/')}}" class="btn btn-danger" id="delete-btn">DELETE</a></td>
        </tr>
        @endforeach

    </tbody>

</table>
</div>
<!-- Modal for add data -->
<form action="{{url('dashboard/add')}}" method="post">
    @csrf
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD DATA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="name" required placeholder="Product name">
          </div>
          <br>
          <div class="form-group">
            <select name="category" class="form-control" required>
            <option value="">Select category</option>
            <option value="Appliances">Appliances</option>
            <option value="Food">Food</option>
            <option value="Gadgets">Gadgets</option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" name="description" required placeholder="Description">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </div>
  </div>
</form>
  @include('layouts.footer')

