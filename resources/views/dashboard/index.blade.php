@extends('layouts.main')


@section('content')
<div id="page-wrapper">


            <div class="row">
                <div class="col-lg-12">
                    <center>
					<h1 class="page-header">Welcome, {{$userName}} -
					
					@role('admin')
					 Admin
					@endrole
					@role('expert')
					 Expert
					@endrole
					@role('user')
					 User
					@endrole
										
					</h1>
					</center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
</div>
<!-- /#page-wrapper -->

@endsection