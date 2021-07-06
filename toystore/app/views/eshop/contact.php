<?php $this->view("header", $data); ?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
				</div>			 		
			</div>
			<!-- Google map -->
			<div style="text-align: center; margin-bottom: 30px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d59582.812394116096!2d105.83195921013494!3d21.03565574317067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3135aa50b448be9d%3A0x546573e820bf0d50!2zODIgw4J1IEPGoSwgVOG7qSBMacOqbiwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!3m2!1d21.065638!2d105.83515799999999!4m5!1s0x3135ac8285a3f555%3A0xe77936460a850c46!2zMTAyIFRow6FpIFRo4buLbmgsIE5nw6MgVMawIFPhu58sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!3m2!1d21.009767999999998!2d105.819696!5e0!3m2!1svi!2s!4v1625451100757!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<!-- End of google map -->
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>

						<?php if(is_array($errors) && count($errors) > 0): ?>
							<?php foreach ($errors as $error): ?>
								<div class="status alert alert-danger" style=""><?=$error?></div>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php if(isset($_GET['success'])): ?>
							<div class="status alert alert-success" style="">Your message is sent successfully</div>
						<?php endif; ?>

				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name" value="<?=isset($POST['name']) ? $POST['name'] : ''?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email" value="<?=isset($POST['email']) ? $POST['email'] : ''?>">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject" value="<?=isset($POST['subject']) ? $POST['subject'] : ''?>">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"><?=isset($POST['message']) ? $POST['message'] : ''?></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
							<?=nl2br(Settings::contact_info())?>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="<?=Settings::facebook_link()?>"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="<?=Settings::twitter_link()?>"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="<?=Settings::google_plus_link()?>"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php $this->view("footer", $data); ?>