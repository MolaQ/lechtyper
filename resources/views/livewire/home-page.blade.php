<div>


<h1>DOSTĘP</h1>
<hr>
@can('admin-access')
<p>ma dostep</p>
@endcan

@cannot('admin-access')
    <!-- Zawartość widoku, do której dostępu **nie** mają użytkownicy z uprawnieniem 'admin-access' -->
    <p>Widoczne tylko dla użytkowników, którzy **nie** mają uprawnienia 'admin-access'.</p>
@endcannot

@auth
     Zawartość widoku dostępna tylko dla zalogowanych użytkowników
@else
    Zawartość widoku dostępna tylko dla niezalogowanych użytkowników
@endauth


<div>
    @if ($alertMessage)
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast bg-info text-white" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-info text-white">
                    <!-- Możesz dostosować nagłówek alertu -->
                    <strong class="me-auto">Alert</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $alertMessage }}
                </div>
            </div>
        </div>
    @endif

    <!-- Reszta treści strony -->
</div>



@if ($alertMessage)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toast = new bootstrap.Toast(document.querySelector('.toast'));

        toast.show();

        // Obsługa zamknięcia po kliknięciu na przycisk "Close"
        var closeBtn = document.querySelector('.btn-close');
        closeBtn.addEventListener('click', function () {
            toast.hide();
        });

        // Automatycznie ukryj alert po określonym czasie
        setTimeout(function () {
            toast.hide();
        }, {{ $alertDuration }});
    });
</script>
@endif


</div>
