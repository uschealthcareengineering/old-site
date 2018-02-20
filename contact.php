<?php include('header.php'); ?>

<div id="pages">
<form name="contact_form">
<p>Questions, comments, suggestions? We love to hear from our visitors! Please fill out all fields.</p>
<h3 id="error">* Please enter a valid email address.</h3>

<fieldset class="fieldset1">
  <legend class="legend1">Contact</legend>
    Your Email:<br />
  <input name="Email" type="text" id="email" onblur="check_email(this); checkfields()" size="25" maxlength="25" />
      <img src="red.gif" alt="red" name="red3" width="20" height="20" id="red3" />
      <br />
      <br />
  Name:<br />
      <input name="Name" type="text" id="name" onblur="fieldempty('name','red1'); checkfields()" onkeydown="fieldempty('name','red1'); checkfields()" size="15" maxlength="15" />
    <img src="red.gif" alt="red" name="red1" width="20" height="20" id="red1" />
    <br />
    <br />
  Subject:<br />
  <input name="Subject" type="text" id="subject1" onblur="fieldempty('subject1','red4'); checkfields()" onkeydown="fieldempty('subject1','red4'); checkfields()" size="20" maxlength="20" />
      <img src="red.gif" name="red4" width="20" height="20" id="red4" />
      <br />
      <br />
  Message:<br />
  <textarea name="Message" id="message1" cols="60" rows="7" onfocus="erase_message()" onblur="fieldempty('message1','red5'); checkfields()" onkeydown="fieldempty('message1','red5'); checkfields()">Type your message here.</textarea>
  <img src="red.gif" name="red5" width="20" height="20" id="red5" /> <br />
      <br />
  <input type="button" id="SendEmail" disabled="disabled" value="Send Email" onclick="ajax_email()" />
</fieldset>

</form>
</div>

<?php include('footer.php'); ?>


