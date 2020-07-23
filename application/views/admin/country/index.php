<?php //debug($data['cinemas']); ?>
<div style="margin: 15px">
    <div style="display: flex; justify-content: space-between">

        <a class="create nav-link" href="/admin/country/create">CREATE COUNTRY</a>
    </div>
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Country</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data['countries'] as $country){
                echo '  
				   <tr>  
						<td>'.$country["id"].'</td>  
						<td>'.$country["country_name"].'</td>  				 
						<td style="text-align: center;"><a class="delete" data-id="'.$country["id"].'">✘</a></td>  
						<td style="text-align: center;" class="update"><a href="/admin/country/update/'.$country["id"].'">↻</a></td>  
				   </tr>  
				   ';
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

<script>

    $(document).ready(function(){
        $('#employee_data').DataTable({
            "order": [[ 0, 'desc' ]]
        });
    });

    $('.delete').on('click', function () {
        let del_id = $(this).attr('data-id');
        let conf = confirm('Are you want to delete this?');
        if (conf) {
            $(this).attr('href', '/admin/country/delete/' + del_id);
        }
    })

</script>