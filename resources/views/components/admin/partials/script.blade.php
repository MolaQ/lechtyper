<script>
    window.addEventListener('show-form', event => {
        $('#form').modal('show');
    })
    window.addEventListener('show-form2', event => {
        $('#form2').modal('show');
        toastr.success(event.detail.message, 'Operacja wykonana!');
    })
    window.addEventListener('show-delete-modal', event => {
        $('#delete-modal').modal('show');
    })
</script>

dd("DUPA");
