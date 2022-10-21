<?php include 'header.php';?>
    <main>       
        <div class="contact-container">
          <form action="https://formsubmit.co/5f9f1ee2327a086ad12213630630b145" method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
          </form>
      </div>
    </main>
<?php include 'footer.php'; ?>
