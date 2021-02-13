
@if(request()->route()->getName() == 'Books Details')
<div class="panel ">

@include('layouts.message')
    <div class="panel-heading">
        <h4 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h4>
        <div class="card-body text-right">
            <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#booksModal">
                Add Book
            </button>
        </div>

    </div><!-- panel-heading -->
    
    </br>
    <div class="info-box">
        <div class="table-responsive">
            <table id="basicPatientsTable" class="table table-striped table-bordered responsive dataTable no-footer" data-name="cool-table">
                 
                <thead >
                    <tr>
                        <th>No</th>
                        <th>Book title</th>
                        <th>Book Author </th>
                        <th>Publication Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                @foreach($books as $id=>$books) 
                    <tr>
                        <td>{{ $id +1}}</td>
                        <td>{{$books->title}}</td>   
                        <td>{{$books->author}}</td> 
                        <td>{{$books->publication_date}}</td>
                        <td>
                        
                        <a class="text-danger pl-4" href="/delete-books/{{$books->id}}">Delete </a>
                        
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div> 
            </div> 
           
    </div> 
    @endif 


    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <script src="cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>

        <script src="{{asset('js/custom.js')}}"></script>


        <script>
             
             jQuery(document).ready(function(){

                $.noConflict();
                var columns = [0,1,2,3,4,5];
                var table = $("#basicPatientsTable");
                //table.dataTable();
                var title = "List of registered patients";
                smartTable(table, title, columns);

            
             
                var columns1 = [0,1,2,3,4,5];
                var table1 = $("#basicTable1");
                var title1 = "List of registered appointments";
                smartTable(table1, title1, columns1);

                
           
                var columns2 = [0,1,2,3,4];
                var table2  = $("#VisitsTable");
                var title2 = "List of registered visits";
                smartTable(table2, title2, columns2);

                
              
                var columns3 = [0,1,2,3,4,5];
                var table3 = $("#MPractioners");
                var title3 = "List of registered medical practitioners";
                smartTable(table3, title3, columns3);
                

                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
                var shTable = jQuery('#shTable').DataTable({
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                    },
                    responsive: true
                });
                
                // Show/Hide Columns Dropdown
                jQuery('#shCol').click(function(event){
                    event.stopPropagation();
                });
                
                jQuery('#shCol input').on('click', function() {

                    // Get the column API object
                    var column = shTable.column($(this).val());
 
                    // Toggle the visibility
                    if ($(this).is(':checked'))
                        column.visible(true);
                    else
                        column.visible(false);
                });
                
                var exRowTable = jQuery('#exRowTable').DataTable({
                    responsive: true,
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                    },
                    "ajax": "ajax/objects.txt",
                    "columns": [
                        {
                            "class":          'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },
                        { "data": "name" },
                        { "data": "position" },
                        { "data": "office" },
                        { "data": "salary" }
                    ],
                    "order": [[1, 'asc']] 
                });
                
                // Add event listener for opening and closing details
                jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = exRowTable.row( tr );
             
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });
               
                
                // DataTables Length to Select2
                jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                jQuery('div.dataTables_length select').css({width: '60px'});
                jQuery('div.dataTables_length select').select2({
                    minimumResultsForSearch: -1
                });
    
            });
            
            function format (d) {
                // `d` is the original data object for the row
                return '<table class="table table-bordered nomargin">'+
                    '<tr>'+
                        '<td>Full name:</td>'+
                        '<td>'+d.name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extension number:</td>'+
                        '<td>'+d.extn+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>And any further details here (images etc)...</td>'+
                    '</tr>'+
                '</table>';
            }
        </script>
