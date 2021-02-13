@extends('index')
@section('page_css')
@endsection
@section('main_content')
@include('layouts.message')

<div class="panel-heading col-md-12 col-lg-12 col-sm-12 panel mt-4">
    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
</div><!-- panel-heading -->    
                        
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 panel">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <div class="card">
        <!-- BASIC WIZARD -->
            <form method="get" action ="/create-books"  >
            
                <div class="form-group">
                    <label class="col-sm-4 control-label">Book Title:</label>
                    <div class="input-group col-sm-8">
                        <input type="text" name="title" class="form-control" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Book Author:</label>
                    <div class="input-group col-sm-8">
                        <input type="text" name="author" class="form-control" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Publication Date:</label>
                    <div class="input-group col-sm-8">
                        <input type="date" name="publication_date" class="form-control" placeholder="mm/dd/yyyy" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="panel-footer">
                    <div class="row text-center">
                            <button class="btn btn-primary mr-5">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </div><!-- panel-footer -->         
            </form> 
        </div> 

    </div>
    <div class="col-lg-2"></div>
        
    </div> 
</div><!-- tab-pane -->
@endsection
@section('page_js')

@endsection