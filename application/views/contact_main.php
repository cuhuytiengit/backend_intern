<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'contact_head.php';?>
    <body>
        <?php include 'header.php';?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <div class="container-lg ">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-contact">Contact Us</div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="text-writewrite-us">Write Us</div>
                            <div class="text-info-write-us">Jot us a note and we’ll get back to you as quickly as possible.</div>
                            <div class="input-name">
                                <input type="text" placeholder ='Name*'>
                            </div>
                            <div class="input-email">
                                <input type="text" placeholder ='Email*'>
                            </div>
                            <div class="input-phone-number">
                                <input type="text" placeholder ='Phone Number'>
                            </div>

                            <div class="input-mind">
                                <input type="text" placeholder ='What`s on your mind?'>
                            </div>
                        </div>
                   </div>
            </div>           

       

        <?php include 'footer.php';?>
    </body>
</html>
