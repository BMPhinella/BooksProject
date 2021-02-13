<div class="leftpanel">
                    
    <h5 class="leftpanel-title">Navigation</h5>
    <ul class="nav nav-pills nav-stacked">
        <li @if(request()->route()->getName()== 'Add Books') class="active" @endif><a href="/get-create-books-form"><i class="fa fa-book"></i> <span>Add Books</span></a></li>
        <li @if(request()->route()->getName()== 'Books Details') class="active" @endif><a href="/get-books"><i class="fa fa-book"></i> <span>View Books</span></a></li>
    </ul>
                    
</div><!-- leftpanel -->