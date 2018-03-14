@extends('adminPanel.admin')

	@section('body')
	

 	<div class="box">
        <div class="box-header">
          <h3 class="box-title">{{$users->total()}} Total number of users in database</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Id</th>
                <th>Names</th>
                <th>Email</th>
                <th>Password</th>
                <th>Joined</th>
              </tr>
              </thead>
              @foreach ($users as $user)
                <tbody>
                  <tr>
                  <td>
                         <span>{{$user->id}}</span>
                      </td>
                      <td>
                         <span>{{$user->name}}</span>
                      </td>
                      <td>
                         <span>{{$user->email}}</span>
                      </td>
                      <td>
                        <span>{{$user->password}}</span>
                      </td>
                      <td>
                        <span>({{$user->created_at->diffForHumans()}})</span>
                      </td>
                  </tr>
                </tbody>
              @endforeach

              <tfoot>
              <tr>
                <th>Id</th>
                <th>Names</th>
                <th>Email</th>
                <th>Password</th>
                <th>Joined</th>
              </tr>
              </tfoot>
            
          </table> 
        </div>
        <!-- /.box-body -->
           {{$users->links()}}
      </div>
      <!-- /.box -->
    </div>

    <!-- /.col -->
	@endsection
