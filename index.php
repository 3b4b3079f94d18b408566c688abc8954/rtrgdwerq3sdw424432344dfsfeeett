<?php
include("header.php");
?>
<div class="Estimate_area overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="Estimate_info">
                    <h3>Enquiry Now</h3>
                    <p>Navigating Complexity with Smart Logistics Technology.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="form">
                    <form action="" method="POST" name="contact-form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="nameofthefirm" name="nameofthefirm" placeholder="Name Of The Firm" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="contactnumber" name="contactnumber" placeholder="Contact Number" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="name" name="name" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="originport" name="originport" placeholder="Origin Port" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="countryorigin" name="countryorigin" placeholder="Country of Origin" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="destionationport" name="destionationport" placeholder="Destionation Port" required>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" id="destionationcountry" name="destionationcountry" placeholder="Destionation Country" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_field">
                                    <select class="wide" id="cargotype" name="cargotype">
                                        <option data-display="cargotype" id="cargotype" name="cargotype">Cargo Type</option>
                                        <option value="Air">Air</option>
                                        <option value="Sea">Sea</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="approxweight" id="approxweight" name="approxweight" placeholder="Approx Weight(KG)" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">

                                    <input type="approxcargovalue" id="approxcargovalue" name="approxcargovalue" placeholder="Approx Cargo Value" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <textarea placeholder="Cargo Details" id="details" name="details" required></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <button class="boxed-btn3-line" type="submit" name="submit" id="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="form-db.js"></script>
                    <?php
                    require_once('db_connect.php');

                    if (!empty($_POST)) {
                        $nameofthefirm       =  $_POST['nameofthefirm'];
                        $contactnumber       =  $_POST['contactnumber'];
                        $name                =  $_POST['name'];
                        $email               =  $_POST['email'];
                        $originport          =  $_POST['originport'];
                        $countryorigin       =  $_POST['countryorigin'];
                        $destionationport    =  $_POST['destionationport'];
                        $destionationcountry =  $_POST['destionationcountry'];
                        $cargotype           =  $_POST['cargotype'];
                        $approxweight        =  $_POST['approxweight'];
                        $approxcargovalue    =  $_POST['approxcargovalue'];
                        $details             =  $_POST['details'];

                        $sql = "INSERT INTO enquiry(`nameofthefirm`,`contactnumber`,`name`,`email`,`originport`,`countryorigin`,`destionationport`,`destionationcountry`,`cargotype`,`approxweight`,`approxcargovalue`,`details`)
                            VALUES('$nameofthefirm','$contactnumber','$name','$email','$originport','$countryorigin','$destionationport','$destionationcountry','$cargotype','$approxweight','$approxcargovalue','$details')";

                        $result = mysqli_query($conn, $sql);
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Estimate_area end  -->


<div class="header_bottom_border">
</div>
<?php
include("footer.php");
?>