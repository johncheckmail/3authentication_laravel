@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">

					<?php if(Auth::user()->job_title == 'admin'){ ?> 
						<h3 class="box-title">Admin Dash Board</h3>
					<?php } ?>

					<?php if(Auth::user()->job_title == 'client'){ ?> 
						<h3 class="box-title">Client Dash Board</h3>
					<?php } ?>

					<?php if(Auth::user()->job_title == 'staff'){ ?> 
						<h3 class="box-title">Staff Dash Board</h3>
					<?php } ?>
	

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
