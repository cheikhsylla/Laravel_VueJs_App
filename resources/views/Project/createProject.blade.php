@extends('layouts.navBar')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 createNewProject">
            <h1>Create a new project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div id="app" >

        <div class="container-fluid">
            <Homec/>
        </div>
        <script src="{{ asset('js/app.js') }}" ></script>

    </div>

@endsection
