@extends('layouts.admin.admin')

@section('body')

<div class="table-responsive">

    <h2>Create New Category</h2>

    <form action="" method="post">

        {{csrf_field()}}

        <div class="form-group">

            <label for="name">Name</label>

            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">

        </div>

        <button type="submit" name="submit" class="btn btn-success">Submit</button>

    </form>

</div>

<div class="container-fluid">
    <div class="row mt-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>

                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection