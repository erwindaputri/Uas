@extends('admin.template.base')
@section('content')

<!-- start coding -->
@include('admin.utils.notif')
   
   <div class="container">
         <div class="col-md-12 mt-5">
            <div class="card-body">
            <div class="container-fluid">
                  <div class="row ml-1 mr-2 mb-3">
                     <h4>Tambah Data User</h4>
                  </div>
      <div class="container">
         <div class="card-body">
            <form action="{{url('admin/user')}}" method="post">
               @csrf
            <div class="form-group">
               <label class="control-label">Nama</label>
               @include('admin.utils.errors', ['item' => 'nama'])
               <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
               <label class="control-label">Username</label>
               @include('admin.utils.errors', ['item' => 'username'])
               <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
               <label class="control-label">Email</label>
               @include('admin.utils.errors', ['item' => 'email'])
               <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
               <label class="control-label">Password</label>
               @include('admin.utils.errors', ['item' => 'password'])
               <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
               <label class="control-label">No Hp</label>
               @include('admin.utils.errors', ['item' => 'no_handphone'])
               <input type="text" class="form-control" name="no_handphone">
            </div>
            
            
            <button class="btn btn-dark float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
            </form>
            </div>   
         </div>
         </div>
      </div>
      </div>
      </div>
   </div>

<!-- end coding -->

@endsection