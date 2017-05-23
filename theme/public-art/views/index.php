<div class="content">
    <!-- todo replace two with sass or less -->

    <div class="cd-slider-wrapper">
        <ul class="cd-slider" data-step1="M1402,800h-2c0,0,0-213,0-423s0-377,0-377h1c0.6,0,1,0.4,1,1V800z" data-step2="M1400,800H724c0,0-297-155-297-423C427,139,728,0,728,0h671c0.6,0,1,0.4,1,1V800z" data-step3="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z" data-step4="M-2,800h2c0,0,0-213,0-423S0,0,0,0h-1c-0.6,0-1,0.4-1,1V800z" data-step5="M0,800h676c0,0,297-155,297-423C973,139,672,0,672,0L1,0C0.4,0,0,0.4,0,1L0,800z" data-step6="M0,800h1400c0,0-1-213-1-423s0-377,0-377L1,0C0.4,0,0,0.4,0,1L0,800z">
            <li class="visible">
                <div class="cd-svg-wrapper">
                    <svg viewBox="0 0 1400 800">
                        <defs>
                            <clipPath id="cd-image-1">
                                <path id="cd-changing-path-1" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/1.jpg"></image>
                    </svg>
                </div> <!-- .cd-svg-wrapper -->
            </li>

            <li>
                <div class="cd-svg-wrapper">
                    <svg viewBox="0 0 1400 800">
                        <defs>
                            <clipPath id="cd-image-2">
                                <path id="cd-changing-path-2" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/2.jpg"></image>
                    </svg>
                </div> <!-- .cd-svg-wrapper -->
            </li>

            <li>
                <div class="cd-svg-wrapper">
                    <svg viewBox="0 0 1400 800">
                        <defs>
                            <clipPath id="cd-image-3">
                                <path id="cd-changing-path-3" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/3.jpg"></image>
                    </svg>
                </div> <!-- .cd-svg-wrapper -->
            </li>

            <li>
                <div class="cd-svg-wrapper">
                    <svg viewBox="0 0 1400 800">
                        <defs>
                            <clipPath id="cd-image-4">
                                <path id="cd-changing-path-4" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/4.jpg"></image>
                    </svg>
                </div> <!-- .cd-svg-wrapper -->
            </li>

        </ul> <!-- .cd-slider -->

        <ul class="cd-slider-navigation">
            <li><a href="#0" class="next-slide">Next</a></li>
            <li><a href="#0" class="prev-slide">Prev</a></li>
        </ul> <!-- .cd-slider-navigation -->

        <ol class="cd-slider-controls">
            <li class="selected"><a href="#0"><em>Item 1</em></a></li>
            <li><a href="#0"><em>Item 2</em></a></li>
            <li><a href="#0"><em>Item 3</em></a></li>
            <li><a href="#0"><em>Item 4</em></a></li>
        </ol> <!-- .cd-slider-controls -->
    </div> <!-- .cd-slider-wrapper -->


    <ul class="main-links col-xs-12 col-sm-10 col-sm-offset-1">
        <li class="col-xs-12 col-sm-4"><a href="">Search Art on Campus</a></li>
        <li class="col-xs-12 col-sm-4"><a href="">Search by Location</a></li>
        <li class="col-xs-12 col-sm-4"><a href="">Paolozzi Mosaic Project</a></li>
    </ul>



    <script src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/js/index-slideshow/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/js/index-slideshow/snap.svg-min.js"></script>
    <script src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/js/index-slideshow/main.js"></script>
