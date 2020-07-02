        <?php wp_footer(); ?>

        <footer class="py-4 bg-blue">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-end" style="font-size: 16px">
                    <div>
                        <a class="pb-2 text-decoration-none text-white" href="mailto: info@auroracons.io">Info@auroracons.io</a> <br>
                        <a class="pb-2 text-decoration-none text-white" href="tel: 8-915-447-51-10">8-915-447-51-10</a><!-- <br>-->
<!--                    <a class="text-decoration-none text-white" href="tel: 8-812-212-85-06">8-812-212-85-06</a>-->
                    </div>
                    <div>
                        <p style="font-size: 16px;" class="m-0 text-white">© Аврора Консалт <?php echo date('Y') ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            $(document).ready(function(){
                $("#loopIndustries").owlCarousel({
                    margin: 15,
                    nav: true,
                    navText: ['<img src="<?php echo get_template_directory_uri(); ?>/img/icon-owl-prev.svg">','<img src="<?php echo get_template_directory_uri(); ?>/img/icon-owl-next.svg">'],
                    loop: true,
                    responsive: {
                        992 : {
                            items: 3
                        },
                        768 : {
                            items: 2
                        },
                        0 : {
                            items: 1,
                            margin: 0
                        }
                    }
                });
            });
        </script>
        <script>
            $("#loopPartners").owlCarousel({
                margin: 5,
                nav: true,
                navText: ['<img src="<?php echo get_template_directory_uri(); ?>/img/icon-owl-prev.svg">','<img src="<?php echo get_template_directory_uri(); ?>/img/icon-owl-next.svg">'],
                loop: true,
                responsive: {
                    992 : {
                        items: 5
                    },
                    768 : {
                        items: 3
                    },
                    0 : {
                        items: 1
                    }
                }
            });
        </script>
    </body>
</html>