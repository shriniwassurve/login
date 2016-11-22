<h1>create an account<h1>

<fieldset>
  <legend> Personal information</legend>
  <?php
  echo form_open('login/create_member');
  echo form_input('email_address', set_value('email_address','Email Address'));
  echo form_textarea('address', set_value('address','Address'));
  ?>
</fieldset>

<fieldset>
  <legend> Gender</legend>
  <?php
  echo form_label('Male','gender');echo form_radio('gender','male',TRUE);
  echo form_label('Female','gender');echo form_radio('gender','male');
  ?>
</fieldset>

<fieldset>
  <legend>Login Info</legend>
  <?php
  echo form_input('username',set_value('username','Username'));
  echo form_password('password',set_value('password','Password'));
  echo form_password('password2',set_value('password2','Password Confirm'));

  echo form_submit('submit','Create Account');

   ?>
   <?php echo validation_errors('<p class="error">'); ?>
</fieldset>
