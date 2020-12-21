<form id="jovaTestimonialForm" class="border p-5 bg-light shadow" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
  <h2>What do you think about us?</h2>
  <hr>
  <div class="form-group">
    <label for="testimonialName">Your name</label>
    <input type="text" class="form-control" id="testimonialName" name="testimonialName" required="required" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="testimonialProf">Your profession</label>
    <input type="text" class="form-control" id="testimonialProf" name="testimonialProf" required="required" placeholder="Enter your profession">
  </div>
  <div class="form-group">
    <label for="testimonialMessage">Your message</label>
    <textarea class="form-control" id="testimonialMessage" rows="4" name="testimonialMessage" required="required" placeholder="Enter your message"></textarea>
  </div>
  <div id="testimonial-msg">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
