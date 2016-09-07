@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            {{ trans('custom.work_experience') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{ trans('custom.work_experience') }}</li>
        </ol>
    </section>
@endsection


@section('content')
    @if (count($companies) == 0)
        <div class="callout callout-info lead">
            <p>There is <b>no</b> companies in Work Experience section. Do you to <a href="">add</a> one?</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-5 col-md-push-7">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Add Experience</h3>
                </div>
                <div class="box-body">
                    <form>
                        <div class="form-group">
                            <label for="">Company's name</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="">Start work on</label>
                                <div class="input-group date" data-provide="datepicker" >
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" name="start_date">

                                </div>
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="">Finish work on</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" name="finish_date" id="finishWork">
                                </div>
                                <label for="">Still working</label>
                                <input type="checkbox" name="still_working">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Responsibilities</label>
                                <textarea id="" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-md-pull-5">
            <div class="box box-solid box-default">
                <div class="box-header">
                    <h3 class="box-title">Work Experience</h3>
                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Search...">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div><!-- /.box-tools -->
                </div>
                <div class="box-body">
                    
                </div>
            </div>
        </div>
    </div>

@endsection