@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Brand</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Update Brand</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="row">
        	<div class="col-sm-12 col-md-8 col-md-offset-2">
        		@include('includes.message')
	            <div class="panel b-primary bt-md">
	                <div class="panel-content">
	                	<div class="row">
	                		<div class="col-xs-6">
	                			<h4>Brand Update Form</h4>
	                		</div>
	                		<div class="col-xs-6 text-right">
	                			<a href="{{route('manage-brand')}}" class="btn btn-primary">All Brand</a>
	                		</div>
	                	</div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <form class="form-horizontal" method="POST" action="{{route('update-brand')}}">
	                            	@csrf
	                                <div class="form-group">
	                                    <label for="brand_name" class="col-sm-3 control-label">Brand name</label>
	                                    <div class="col-sm-9">
	                                    	<input type="hidden" name="id" value="{{ $brand['id'] }}">
	                                        <input type="text" name="brand_name" class="form-control" id="brand_name" value="{{ $brand['brand_name'] }}">
	                                        @error('brand_name')
	                                        <strong class="text-danger">{{$message}}</strong>
	                                        @enderror
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <div class="col-sm-offset-3 col-sm-9">
	                                        <button type="submit" class="btn btn-primary">Update Brand</button>
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
 
    </div>

@endsection