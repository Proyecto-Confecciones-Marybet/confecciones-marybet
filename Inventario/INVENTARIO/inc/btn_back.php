<p class="has-text-right pt-4 pb-4">
	<a href="#" class="button is-danger btn-back animado"><- Regresar atrás</a>
</p>

<script type="text/javascript">
    let btn_back = document.querySelector(".btn-back");

    btn_back.addEventListener('click', function(e){
        e.preventDefault();
        window.history.back();
    });
</script>