<?php //debug($data['cinemas']); ?>
<div style="margin: 15px">
    <div style="display: flex; justify-content: space-between">

        <a class="create nav-link" href="/admin/sport/create">CREATE SPORTS</a>
    </div>
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Sport Name</th>
                <th scope="col">Icon</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data['sports'] as $sport){
                echo '  
				   <tr>  
						<td>'.$sport["id"].'</td>  
						<td>'.$sport["sport_name"].'</td>  
						<td>'.$sport["icon_image"].'</td>   
						<td style="text-align: center;"><a class="delete" data-id="'.$sport["id"].'">✘</a></td>  
						<td style="text-align: center;" class="update"><a href="/admin/sport/update/'.$sport["id"].'">↻</a></td>  
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
            $(this).attr('href', '/admin/sport/delete/' + del_id);
        }
    })

</script>