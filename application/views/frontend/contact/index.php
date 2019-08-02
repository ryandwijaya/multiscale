
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <!--=============================================
                    =            google map container         =
                    =============================================-->

                            

                            <!--=====  End of google map container  ======-->

                            <div class="row">
                                <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                                    <!--=======  contact page side content  =======-->

                                    <div class="contact-page-side-content">
                                        <h3 class="contact-page-title">Contact Us</h3>
                                        <p class="contact-page-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia molestias at, corporis vitae unde aperiam ut? Laudantium distinctio omnis quasi quae, commodi ducimus? In quae distinctio, tenetur quod neque deleniti!</p>
                                        <!--=======  single contact block  =======-->

                                        <div class="single-contact-block">
                                            <h4><i class="fa fa-fax"></i> Address</h4>
                                            <p>Jl. SM Amin , Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292</p>
                                        </div>

                                        <!--=======  End of single contact block  =======-->

                                        <!--=======  single contact block  =======-->

                                        <div class="single-contact-block">
                                            <h4><i class="fa fa-phone"></i> Phone</h4>
                                            <p>Mobile: <a href="https://api.whatsapp.com/send?phone=6282385554897"></a> +628-23-8555-4897</p>
                                        </div>

                                        <!--=======  End of single contact block  =======-->

                                        <!--=======  single contact block  =======-->

                                        <div class="single-contact-block">
                                            <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                            <p>yourmail@domain.com</p>
                                        </div>

                                        <!--=======  End of single contact block  =======-->
                                    </div>

                                    <!--=======  End of contact page side content  =======-->

                                </div>
                                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                                    <!--=======  contact form content  =======-->

                                    <div class="contact-form-content">
                                        <h3 class="contact-page-title">Tell Us Your Message</h3>

                                        <div class="contact-form">
                                            <form id="contact-form" action="<?= base_url() ?>contact/send" method="post">
                                                <div class="form-group">
                                                    <label>Your Name <span class="required">*</span></label>
                                                    <input type="text" name="pesan_nama" id="con_name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Email <span class="required">*</span></label>
                                                    <input type="email" name="pesan_email" id="con_email" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Your Message</label>
                                                    <textarea name="pesan_isi" id="con_message"></textarea>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" id="submit" class="contact-button" name="kirim">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                        <p class="form-messege"></p>
                                    </div>

                                    <!--=======  End of contact form content =======-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=======  End of page wrapper  =======-->
                </div>
            </div>
        
    <!--====================  End of page content area  ====================-->