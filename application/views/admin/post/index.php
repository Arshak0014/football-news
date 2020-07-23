<div style="margin: 15px">
    <div style="display: flex; justify-content: space-between">

        <a class="create nav-link" href="/admin/post/create">CREATE POST</a>
    </div>
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Sport Name</th>
                <th scope="col">Title</th>
                <th scope="col">Is important?</th>
                <th scope="col">Is Armenian?</th>
                <th scope="col">Is for banner?</th>
                <th scope="col">Date-time</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($data['posts'])){
                foreach ($data['posts'] as $post){
                    echo '  
                       <tr>  
                            <td>'.$post["id"].'</td>  
                            <td>'.$post["sport_name"].'</td>  
                            <td>'.$post["title"].'</td>  
                            <td>'.$post["is_important"].'</td>                                 
                            <td>'.$post["is_armenian_news"].'</td>  
                            <td>'.$post["is_for_banner"].'</td>  
                            <td>'.$post["post_date"].'</td>  
                            <td style="text-align: center;"><a class="delete" data-id="'.$post["id"].'">✘</a></td>  
                            <td style="text-align: center;" class="update"><a href="/admin/post/update/'.$post["id"].'">↻</a></td>  
                       </tr>  
                       ';
                }
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
        let conf = confirm('Are you want to delete this film?');
        if (conf) {
            $(this).attr('href', '/admin/post/delete/' + del_id);
        }
    })

</script>