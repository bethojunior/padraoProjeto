
<script src="<?= Host::getLocal()?>webfiles/js/libs/jquery-3.2.1.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/ultils/Connect.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/ultils/getIp.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/ultils/host.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/ultils/import-html-w3.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/ultils/sweetalert.min.js"></script>

<script src="<?= Host::getLocal()?>webfiles/Materialize/js/materialize.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/autoLoad.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/blog.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/chat.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/index.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/init.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/loadData.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/modulos/user.js"></script>

<script src="<?= Host::getLocal()?>webfiles/js/controller/blogController.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/controller/chatController.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/controller/clienteController.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/controller/userController.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/controller/serviceController.js"></script>
<script src="<?= Host::getLocal()?>webfiles/js/controller/dashboardController.js"></script>


<script>

    $('.carousel.carousel-slider').carousel({fullWidth: true});

    $(document).ready(function(){
        $('.modal').modal();
    });

    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
    });


    $(".button-collapse").sideNav();
</script>

