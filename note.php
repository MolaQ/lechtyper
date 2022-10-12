API Key 9VXD9cOpbFoY2g7gorHKJhwVV
API Key Secret OCnl4WlyodiELvCvxv9ZjD9BsTtRr0OlO2QAxXXb8vnLTi7lf9
Access Token 931975002-Ubsy2metn8BKXCu9NhOpX8p0RprYt3yLhr4yd4t9
Access Token Secret lLKr2Fv9LRy48Rn3Txr77RVckjv6ZliCJZcTfTr6Oh37N

https://www.youtube.com/watch?v=AKX-SJ2zMG8&list=PLGg3vnFos8GMxYSWRBce3LH_SREan7my8&index=5
Livewire Form validation and solving weird modal issue in Laravel Livewire


<script>
    $(document).ready(function() {
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-bottom-right"
        }



        window.addEventListener('hide-form2', event => {
            $('#form2').modal('hide');
            toastr.success(event.detail.message, 'Operacja wykonana!');
        })

        window.addEventListener('hide-delete-modal', event => {
            $('#delete-modal').modal('hide');
            toastr.success(event.detail.message, 'Operacja wykonana!');
        })

    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', onReady);

    function onReady(e) {
        window.addEventListener('show-form', event => {
            var myModal = new bootstrap.Modal(document.getElementById('form'), {})
            myModal.show()
        })


        window.addEventListener('hide-form', function(event) {
            var myModalEl = document.getElementById('form')
            var modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide()
            //toastr["success"]('Operacja wykonana!');
            const toastLiveExample = document.getElementById('liveToast')
            const toast = new bootstrap.Toast(toastLiveExample)
            toast.show()
        })
    }
</script>
