    <section id="One" class="wrapper style3" style="margin-top: -2%;">
                    <div class="inner">
                        <header class="align-center">
                            <p>Need help? contact award-winning support team 24/7</p>
                            <h2>Contact us 24x7 team</h2>
                        </header>
                    </div>
                </section>

    <section id="two" class="wrapper style2">
                    <div class="inner">
                        <div class="box">
                            <div class="content">
    <!-- Form -->
                                    <h2>Contact Form</h2>

                                    <form method="post" action="#" >
                                        <div class="row uniform">
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="contact-name" id="contact-name" value="" placeholder="Name" required />
                                            </div>
                                            <div class="6u$ 12u$(xsmall)">
                                                <input type="email" name="contact-email" id="contact-email" value="" placeholder="Email" required />
                                            </div>
                                            <!-- Break -->
                                            <div class="12u$">
                                                <div class="select-wrapper" >
                                                    <select name="category" id="category" required >
                                        <option value="">- Category -</option>
                                        <option value="Payment Related">Payment Related</option>
                                        <option value="Shipping">Shipping</option>
                                        <option value="Administration">Administration</option>
                                        <option value="Other Issue">Other Issue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Break -->
                                            <div class="4u 12u$(small)">
                                                <input type="radio" id="priority-low" value="Low" name="priority" checked>
                                                <label for="priority-low">Low Priority</label>
                                            </div>
                                            <div class="4u 12u$(small)">
                                                <input type="radio" id="priority-normal" value="Normal" name="priority">
                                                <label for="priority-normal">Normal Priority</label>
                                            </div>
                                            <div class="4u$ 12u$(small)">
                                                <input type="radio" id="priority-high"  value="High" name="priority">
                                                <label for="priority-high">High Priority</label>
                                            </div>
                                            <!-- Break -->
                                            <div class="6u 12u$(small)">
                                                <input type="checkbox" id="copy" name="copy" value="copy">
                                                <label for="copy">Email me a copy of this message</label>
                                            </div>
                                            <div class="6u$ 12u$(small)">
                                                <input type="checkbox" id="human" name="human" required>
                                                <label for="human">I am a human and not a robot</label>
                                            </div>
                                            <!-- Break -->
                                            <div class="12u$">
                                                <textarea name="contact-message" id="contact-message" placeholder="Enter your message" rows="6"></textarea>
                                            </div>
                                            <!-- Break -->
                                            <div class="12u$">
                                                <ul class="actions">
                                                    <li><input type="submit" name="SubmitButton" value="Send Message" /></li>
                                                    <li><input type="reset" value="Reset" class="alt" /></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>


                    <div class="inner">
                        <div class="box">

<?php    
				if(isset($_POST['SubmitButton'])){ //check if form was submitted
				$frm=$_POST['contact-email'];
				$email="vishalmathur.in@gmail.com";
				$sub="You receive a query from Online Artwork & Fine Art";
				$mes="Messege From Online Artwork & Fine Art Contact form \n 
                Name: ".$_POST['contact-name']."\n
                Category: ".$_POST['category']."\n 
                Priority: ".$_POST['priority']."\n 
                Copy: ".$_POST['copy']."\n 
                Message: ".$_POST['contact-message'];

				$ml= mail($email, $sub, $mes, "From:".$frm);
				if($ml){
				echo "<script type='text/javascript'>alert('Thanks for messaging us.\\n We will get back to you soon.'); window.location.assign('index.php?page=contactus');</script>";
				}
				else{
				echo "<script type='text/javascript'>alert('Please Try Again Later.');window.location.assign('index.php?page=contactus');</script>";
				}

				}    
				?>			
	

    <!-- Form -->
                                    <h2 >Address & Contact Details</h2>                           


    <h3>Online Artwork & Fine Art, Delhi</h3>
    167, XYYZZZDDG,<br>
    ABCD, New Delhi - 798484<br>
    India
    <br>
                  <br>
    Tel. / Fax - +91 000000000 / 0000<br>
    Sales Enquiries - info@OnlineArtworkandFineArt.com<br>
    HR - careers@OnlineArtworkandFineArt.com<br>
    <br>
         <h3>Working Hours</h3>         

    <i>11am - 7pm
    Sunday's, by appointment only.  
                             </i>
                        </div>
                    </div>


                                </div>
                        </div>
                    </div>
                </section>