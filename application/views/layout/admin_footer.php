<footer class="footer">
    <div class="container-fluid">

    </div>
</footer>
</div>
</div>
<script src="../../../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('post_text',{
        filebrowserUploadUrl: '../../../ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form',
    })
</script>
<script>

    $(document).ready(function () {
        $('#date-time').datepicker(
            {
                dateFormat: 'yy/mm/dd'
            }
        );
    })

</script>
</body>
</html>
