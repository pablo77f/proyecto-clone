
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>

    <script type="text/javascript">
    ///-- Colorea el menu
    $('li[name="menu"]').removeClass();

    $("li[name='menu'] a").each(function() {
        if ("{{ url()->current() }}".indexOf(this.href) != -1) {
            $(this).parent().addClass('active bold');
        }
    });
    ///

    ///-- Arregla paginacion en Materialize
    $(".pagination span").each(function() {
      $(this).replaceWith($('<a>' + this.innerHTML + '</a>'));
    });
    ///

    </script>
