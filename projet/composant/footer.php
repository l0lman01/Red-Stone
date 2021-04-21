<footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.carousel').carousel({
                // fullWidth: true,
                indicators: true,
                dist: 0,
                shift: 50,
            });
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
            $('.modal').modal();
            $('.tabs').tabs();
            $('.sidenav').sidenav();
            $('.button-collapse').sideNav();
            $('select').formSelect();
        })

    </script>
</footer>