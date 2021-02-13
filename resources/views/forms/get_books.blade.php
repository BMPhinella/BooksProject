@extends('index')
@section('page_css')
<link href="{{asset('css/select2.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.datatables.css')}}" rel="stylesheet">
<link href="{{asset('cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('main_content')

<div class="col-lg-12">
    @include('layouts.datatables')
</div>
<div class="modal fade" id="booksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="panel-heading col-md-12 col-lg-12 col-sm-12 panel">
                    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
                </div><!-- panel-heading -->  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                                        
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 panel">
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
            </div> 
        </div> 
    </div><!-- tab-pane -->
</div>
            <div class="modal-footer">
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary mr5">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div><!-- panel-footer --> 
            </div>
            </form>
        </div>
    </div>
</div>
@endsection