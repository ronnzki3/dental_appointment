<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="DLC clinic - Online appointment system">
    <meta name="keywords" content="dental clinic,clinic,dentist,dela cruz clinic">
    <meta name="author" content="Ronniel Goyonoche Besara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLC clinic - Online appointment system</title>        
   
    <!-- jQuery Modal css-->
    <link rel="stylesheet" href="jquery.modal.min.css" />

    <!--  -->
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    <div class="main-container">
        <div class="navbar">
                <div class="hamburger-wrapper">
                    <span class="bar"></span>
                </div>
                <div class="nav-title">
                    <h1><a href="#home-content">Dela Cruz Dental Clinic</a></h1>
                </div>
                
                <div class="nav-menu">
                    <ul>
                        <li><a href="#home-content">Home</a> </li>
                        <li><a href="#about-content">About</a></li>
                        <li><a href="#services-content">Services</a></li>
                        <li><a href="#contact-content">Contact</a></li>                        
                    </ul>
                </div>
        </div>
        <div id="home-content" class="home-content transition-behavior">
            <div class="home-content-wrapper">
                <h1>CARE FOR <span></span> YOUR SMILE</h1>
                <p>Dedicated to Health, Driven by Passion.</p>                
            </div>                 

            <div class="workhours">
                <p><b>OPENING HOURS:</b></p>
                <p>Mon - Fri: 9:00am - 5:00pm</p>
                <p>Sat: 9:00am - 3:00pm</p>
                <p>Sun: By appointment</p>
            </div>
        </div>
        
        <div class="btn-appointment-wrapper">
                <p>Ready for smile upgrade?</p>
                <div class="btnbooking-wrapper">
                        <!-- <button>Book an Appointment</button> -->
                        <a href="#contact-content" class="btnbooking" type="button">Book an Appointment</a>
                </div>
        </div>       
        
        <div id="about-content" class="about-content transition-behavior">
            <h1>ABOUT</h1>
            <p>Dela Cruz Dental Clinic, a frontrunner in advanced modern dentistry, prides itself on its proficiency, mastery, and high level of competency, and in using only top-of-the-line medical and dental equipment to provide patients with premium dental care in a comfortable, relaxed and upscale environment.</p>
                        
            <p>With global partnerships, continuing education and consistent technological advancements, we are equipped to provide world-class services.</p>
        </div>
        <div id="services-content" class="services-content transition-behavior">
            <h1>SERVICES</h1>
            <div class="services-content-list">
                <h2>DENTAL PROFESSIONAL FEES</h2>
                <div class="pricing-list">
                    <div>
                        <table>
                            <tr>
                                <td>Consultation</td>
                                <td>Php 300</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Dental Certification</td>
                                <td>Php 300</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <th colspan="2">PERIODONTICS</th>
                            </tr>
                            <tr>
                                <td>Oral Prophylaxis (Scaling & Polishing)</td>
                                <td>Php 600</td>
                            </tr>
                            <tr>
                                <td>Flap Operation (Root Planning)</td>
                                <td>Php 1,200</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Gingivectomy</td>
                                <td>Php 1,200</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <th colspan="2">SURGERY</th>
                            </tr>
                            <tr>
                                <td>Extraction (per Tooth)</td>
                                <td>Php 500</td>
                            </tr>
                            <tr>
                                <td>Impacted Case (Partial,excluding X-Ray)</td>
                                <td>Php 6,000</td>
                            </tr>
                            <tr>
                                <td>Impacted Case (Completeexcluding X-Ray)</td>
                                <td>Php 8,000</td>
                            </tr>
                            <tr>
                                <td>Alveoloplasty</td>
                                <td>Php 4,000</td>
                            </tr>
                            <tr>
                                <td>Alveolectomy</td>
                                <td>Php 5,000</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Operculectomy</td>
                                <td>Php 1,500</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <th colspan="2">RESTORATION DENTISTRY</th>
                            </tr>
                            <tr>
                                <td>Silver Amalgam (per surface)</td>
                                <td>Php 700</td>
                            </tr>
                            <tr>
                                <td>Light Cure Filling (per surface)</td>
                                <td>Php 800</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Temporary Filling</td>
                                <td>Php 300</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <th colspan="2">ENDODONTICS</th>
                            </tr>
                            <tr>
                                <td>Root Canal Therapy (per Canal,excluding X-Ray)</td>
                                <td>Php 3,000</td>
                            </tr>
                            <tr>
                                <td>Pulpotomy</td>
                                <td>Php 2,500</td>
                            </tr>
                            <tr>
                                <td>Pulpectomy</td>
                                <td>Php 3,000</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Post Core Dowel</td>
                                <td>Php 600</td>
                            </tr>                                     
                        </table>
                    </div>
                    <div>
                        <table>                            
                            <tr class="tr-no-border-bottom">
                                <th colspan="2">CROWN AND BRIDGEWORK</th>
                            </tr>
                            <tr>
                                <td>Jacket Crown (Individual, Acrylic)</td>
                                <td>Php 1,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Jacket Crown (Individual Acrylic w/ metal bucking)</td>
                                <td>Php 1,500 per unit</td>
                            </tr>
                            <tr>
                                <td>Jacket Crown (Individual Porcelain Fused to metal)</td>
                                <td>Php 6,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Jacket Crown (Individual Oppressable Porcelain Ceramic)</td>
                                <td>Php 12,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Veneer Crown (Acrylic)</td>
                                <td>Php 1,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Veneer Crown (Porcelain)</td>
                                <td>Php 6,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Full Casted Crown (White Metal)</td>
                                <td>Php 2,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Ceramage</td>
                                <td>Php 12,000 per unit</td>
                            </tr>
                            <tr>
                                <td>Tilite</td>
                                <td>Php 12,000 per unit</td>
                            </tr>
                            <tr class="tr-no-border-bottom">
                                <td>Cercon</td>
                                <td>Php 20,000 per unit</td>
                            </tr>           
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact-content" class="contact-content">
            <h1> BOOK AN APPOINTMENT </h1>
            <div class="contact-wrapper">
                <h2>Please be advised that this is not yet a confirmed appointment.</h2>
                <p>We will call you to finalize your preferred date and time.</p>

                <p class="display_err"></p>
                <div class="fullNameContainer">                    
                    <div>
                        <form action="insertdb.php" method="post" id="form_appointment">
                        <label for="firstName">First Name</label>
                        <input type="fname" name="fname" id="fname" placeholder="enter first name">
                    </div>
                    <div>
                        <label for="lastName">Last Name</label>
                        <input type="lname" name="lname" id="lname" placeholder="enter last name">
                    </div>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="enter email">
                </div>
                <div>
                    <label for="phoneNumber">Phone Number</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" placeholder="enter phone number">
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="address" name="address" id="address" placeholder="enter address">
                </div>
                <div>
                    <label for="AppointDate">Preferred Date</label>
                    <input type="text" name="appointmentdate" id="appointmentdate" placeholder="Select Preferred Date" readonly>
                </div>
                <div>
                    <label for="AppointTime">Preferred Time</label>                    
                    <select name="appointmenttime" id="appointmenttime">                   
                        <option value="9">9:00 AM</option>
                        <option value="10">10:00 AM</option>
                        <option value="11">11:00 AM</option>
                        <option value="13">1:00 PM</option>
                        <option value="14">2:00 PM</option>
                        <option value="15">3:00 PM</option>
                        <option value="16">4:00 PM</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="button" id="btnSendAppointment" class="btnSendAppointment" name="btnSendAppointment" value="Submit" />
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-content">
            <p>Dela Cruz Dental Clinic. All rights reserved 2018</p>
        </div>
    </div>


    <!-- Modal HTML embedded directly into document -->
    <div id="modalform" class="modal">       
        <p>Hello <span class="fullname"></span>, thank you for booking an appointment. We will contact you to confirm your appointment in your preferred date and time as soon as possible.</p>
        <br/>
        <p><i> Have Blessed Day!</i></p>        
    </div>


       
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <!-- jQuery Modal -->
    <script src="jquery.modal.min.js"></script>


    <script>
        $( function() {
            $("#appointmentdate").datepicker();
        } );
       

        // $("#sticky").modal({
        // escapeClose: false,
        // clickClose: false,
        // showClose: false
        // });

        function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
            return false;
        }else{
            return true;
        }
        }

        $("#btnSendAppointment").click(()=>{
            var fname=$("#fname").val();
            var lname=$("#lname").val();
            var email=$("#email").val();
            var contact=$("#phoneNumber").val();
            var address=$("#address").val();
            var appointmentdate=$("#appointmentdate").val();
            var appointmenttime=$("#appointmenttime").val();
            var message=$("#message").val();

            
            if(!$.trim(fname).length || !$.trim(lname).length || !$.trim(email).length || !$.trim(contact).length || !$.trim(address).length || !$.trim(appointmentdate).length || !$.trim(appointmenttime).length || !$.trim(message).length){
                // alert("empty");
                $(".display_err").fadeOut(2000);
                $(".display_err").html("Invalid empty field/s.");
                $(".display_err").fadeIn(3000);
            }else if(IsEmail(email)==false){    
                $(".display_err").fadeOut(2000);            
                $(".display_err").html("Invalid email format.");
                $(".display_err").fadeIn(3000);
            }else{
                //ajax
                $.ajax({
                    type:'post',
                    url: 'insertdb.php',
                    data: {
                        'fname':fname,
                        'lname': lname,
                        'email':email,
                        'phoneNumber':contact,
                        'address':address,
                        'appointmentdate':appointmentdate,
                        'appointmenttime':appointmenttime,
                        'message':message
                    },
                    success:function(res){                    
                        $('.fullname').html(fname + ' ' + lname); //get name and display in modal
                        $('#modalform').modal();
                        $( '#form_appointment' ).each(function(){
                            this.reset();
                        });
                    }
                });
            }

            

        });

        $(".hamburger-wrapper.bar-active").click(function(){
            $(".hamburger-wrapper").toggleClass("bar-active");
        });

        $(".hamburger-wrapper").click(function(){
            $(".hamburger-wrapper").toggleClass("bar-active");
            $(".nav-title").toggleClass("active");
            $(".nav-menu").toggleClass("active");
            $(".navbar").toggleClass("active");
        });



    </script>
</body>
</html>