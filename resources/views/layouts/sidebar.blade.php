<div class="leftpanel">
<div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="images/logo22.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">St. Michael High School,Sonde</h4>
                        </div>
                    </div><!-- media -->        
    <h5 class="leftpanel-title">Navigation</h5>
    <ul class="nav nav-pills nav-stacked">
        <li @if(request()->route()->getName()== 'Add Books') class="active" @endif><a href="/get-create-books-form"><i class="fa fa-book"></i> <span>Add Books</span></a></li>
        <li @if(request()->route()->getName()== 'Books Details') class="active" @endif><a href="/get-books"><i class="fa fa-book"></i> <span>View Books</span></a></li>
    </ul>
                    
</div><!-- leftpanel -->