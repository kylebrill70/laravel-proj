@extends('layout.main')
@section('content')

<style>
  .form-control{
      background-color: #938c80;
  }
</style>

<div class="container">
  <form action="#" method="post">
    <div class="card mt-3" style="background-color: #ffa31a;">
      <div class="card-body">
        <h5 class="card-title">Create Gender</h5>
        <div class="row">
          <!-- Gender Name -->
          <div class="md-4">
            <div class="mb-3">
              <label for="gender_name" class="form-label">Gender Name</label>
              <input type="text" class="form-control" id="gender_name" name="gender_name" />
            </div>
          </div>
          <!-- Date Created -->
          <div class="md-4">
            <div class="mb-3">
              <label for="date" class="form-label">Date Created</label>
              <input type="date" class="form-control" id="date" name="date" />
            </div>
          </div>
          <!-- Submit Button -->
          <div class="d-grid gap-2 col-12 col-sm-3 mx-auto">
            <button type="submit" class="btn btn-success" style="background-color: #4f4544;">Create</button>
          </div>
        </div>
      </div>
    </div>   
  </form>
</div>

@endsection