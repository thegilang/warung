<header>

        <div class="container-fluid">

            <div class="navb-logo">
                <img src="<?=BASE_URL;?>/storage/images/phpcom.png" alt="Logo">
            </div>

            <div class="navb-items d-none d-xl-flex">

                <div class="item">
                    <a href="/">Home</a>
                </div>

                <div class="item">
                    <a href="/services">Services</a>
                </div>

                <div class="item">
                    <a href="/cases">Cases</a>
                </div>

                <div class="item">
                    <a href="/about">About</a>
                </div>

                <div class="item-button">
                    <a href="/contact" type="button" >Daftar</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <img src="<?=BASE_URL;?>/storage/images/phpcom.png" alt="Logo">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>

                        <div class="modal-body">
                            
                            <div class="modal-line">
                                <i class="fa-solid fa-house"></i><a href="<?=BASE_URL;?>/home">Home</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-file"></i><a href="<?=BASE_URL;?>/tutorial">Tutorial</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-file-lines"></i> <a href="<?=BASE_URL;?>/cases">Cases</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="<?=BASE_URL;?>/about">About</a>
                            </div>

                            <a href="/contact" class="navb-button" type="button">Daftar</a>
                        </div>

                        <div class="mobile-modal-footer">
                            
                            <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
 </header>