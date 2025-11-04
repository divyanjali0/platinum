
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
			<p class="breadcrumbs"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
			<h1 class="mb-3 bread">Contact Us</h1>
		</div>
		</div>
	</div>
</section>

<style>
  .contact-bg {
    background: url('assets/images/contact-bg.png') center center / cover no-repeat;
  }
</style>

<section class="ftco-section contact-section contact-bg">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-5 col-lg-4">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border w-100 p-3 rounded mb-2 d-flex bg-white">
              <div class="icon mr-3">
                <span class="icon-mobile-phone"></span>
              </div>
              <p><span>Phone:</span> <a href="tel:+94768200099">+94 76 820 0099</a></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="border w-100 p-3 rounded mb-2 d-flex bg-white">
              <div class="icon mr-3">
                <span class="icon-envelope-o"></span>
              </div>
              <p><span>Email:</span> <a href="mailto:info@platinumdrive.lk">info@platinumdrive.lk</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-7 col-lg-8 block-9">
		 <!-- Success message box -->
        <div id="success-message" class="alert alert-success mt-3" style="display:none;">
          âœ… Your message has been sent successfully!
        </div>

        <form id="contact-form" action="https://formspree.io/f/xpwyrpej" method="POST" class="bg-light px-3 py-3 contact-form">
          <h3>Connect With Us</h3>

          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="phone" class="form-control" placeholder="Phone" required>
            </div>
          </div>

          <div class="form-group">
            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>

          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section" style="padding:0; overflow:hidden;">
	<div class="container-fluid" style="margin:0; padding:0;">
			<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="bg-white">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.8489877559136!2d79.8694241!3d7.1434549999999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f1c5f33a01bf%3A0xbf605eaf222e328a!2sPlatinum%20Drive%20Rent%20A%20Car!5e0!3m2!1sen!2slk!4v1756716133695!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
					</iframe>
				</div>
			</div> 
		</div> 
	</div>
</section>

<script>
	document.getElementById('contact-form').addEventListener('submit', async function(e) {
		e.preventDefault(); 
		const form = e.target;

		const formData = new FormData(form);
		const action = form.action;

		try {
			const response = await fetch(action, {
			method: 'POST',
			body: formData,
			headers: { 'Accept': 'application/json' }
			});

			if (response.ok) {
			form.reset(); // clear form
			document.getElementById('success-message').style.display = 'block';
			setTimeout(() => {
				location.reload(); // reload after 3 seconds
			}, 2000);
			} else {
			alert('Oops! Something went wrong. Please try again.');
			}
		} catch (error) {
			alert('Error submitting the form. Please check your internet connection.');
		}
	});
</script>