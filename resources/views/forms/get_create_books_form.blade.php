@extends('index')
@section('page_css')
@endsection
@section('main_content')
@include('layouts.message')

<div class="panel-heading col-md-10 panel">
    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
</div><!-- panel-heading -->    
                        
<div class="row">
    <div class="col-md-10 panel">
        <div class="card">
        <!-- BASIC WIZARD -->
            <form method="get" action ="/create-books"  >
            
                <div class="form-group">
                    <label class="col-sm-4 control-label">Book Title:</label>
                    <div class="input-group">
                        <input type="text" name="title" class="form-control" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Book Author:</label>
                    <div class="input-group">
                        <input type="text" name="author" class="form-control" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Publication Date:</label>
                    <div class="input-group">
                        <input type="date" name="publication_date" class="form-control" placeholder="mm/dd/yyyy" required />
                    </div><!-- input-group -->
                </div><!-- form-group -->

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-3">
                            <button class="btn btn-primary mr5">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </div>
                </div><!-- panel-footer -->         
            </form> 
        </div> 
    </div> 
</div><!-- tab-pane -->
@endsection
@section('page_js')

@endsection