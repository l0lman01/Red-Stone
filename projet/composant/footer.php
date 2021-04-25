<!-- Initialisation du javascript -->

<footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.carousel').carousel({
            indicators: false,
            dist: 0,
            shift: 0,
            padding: 50,
            noWrap: true,
            });
            $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            });
            $('.carouselAnime').carousel({
                numVisible: 5,
                dist: 0,
            });
            $('.modal').modal();
            $('.tabs').tabs();
            $('.sidenav').sidenav();
            $('.button-collapse').sideNav();
            $('select').formSelect();
            $('.tooltipped').tooltip();
        })
    </script>
</footer>