<form id="jovaContactForm" class="border p-5" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
  <?php if ($args['jova_main_section_data']['jova_main_form_name']): ?>
    <div class="form-group">
      <label for="contactName">Your name</label>
      <input type="text" class="form-control" id="contactName" name="contactName" required="required" placeholder="Enter your name">
    </div>
  <?php endif; ?>
  <?php if ($args['jova_main_section_data']['jova_main_form_email']): ?>
    <div class="form-group">
      <label for="contactEmail">Your email</label>
      <input type="email" class="form-control" id="contactEmail" name="contactEmail" required="required" placeholder="Enter your email">
    </div>
  <?php endif; ?>
  <div class="form-group">
    <label for="contactMessage">Your message</label>
    <textarea class="form-control" id="contactMessage" name="contactMessage" required="required" rows="4" placeholder="Enter your message"></textarea>
  </div>
  <div id="contact-msg">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
