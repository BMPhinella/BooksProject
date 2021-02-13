<!-- jQuery 3 --> 
<script src="{{ asset('logins/js/jquery.min.js')}}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{ asset('logins/bootstrap/js/bootstrap.min.js')}}"></script> 

<!-- template --> 
<script src="{{ asset('logins/js/niche.js')}}"></script> 

<!-- Chartjs JavaScript --> 
<script src="{{ asset('logins/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{ asset('logins/plugins/chartjs/chart-int.js')}}"></script>

<!-- Chartist JavaScript --> 
<script src="{{ asset('logins/plugins/chartist-js/chartist.min.js')}}"></script> 
<script src="{{ asset('logins/plugins/chartist-js/chartist-plugin-tooltip.js')}}"></script> 
<script src="{{ asset('logins/plugins/functions/chartist-init.js')}}"></script>

<!-- dropify --> 
<script src="{{ asset('logins/plugins/dropify/dropify.min.js')}}"></script> 
<script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

