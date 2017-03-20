<!-- Content Header (Page header) -->


<?php if(Auth::user()->job_title == 'admin'){ ?>  

<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Welcome to Admin')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>

<?php } ?>


<?php if(Auth::user()->job_title == 'client'){ ?>  


<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Welcome to Client')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>

<?php } ?>


<?php if(Auth::user()->job_title == 'staff'){ ?>  



<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Welcome to Staff')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>




<?php } ?>