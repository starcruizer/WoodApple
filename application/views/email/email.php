<?php include "header.php"; ?>

<div class="card card-hover" style="width: 50%; margin-left: 25%; margin-top: 10%; margin-bottom: 8%;">
    
    <!-- Default form contact -->
<form class="text-center border border-light p-5">

        <p class="h4 mb-4">Contact us</p>
    
        <!-- Name -->
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
    
        <!-- Email -->
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
    
        <!-- Subject -->
        <label>Subject</label>
        <select class="browser-default custom-select mb-4">
            <option value="" disabled>Choose purpose</option>
            <option value="1" selected>General Enquiry</option>
            <option value="2">Admission</option>
            <option value="4">Feedback</option>
        </select>
    
        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
        </div>
    
        <!-- Copy -->
        <div class="custom-control custom-checkbox mb-4">
            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
            <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
        </div>
    
        <!-- Send button -->
        <button class="btn btn-pink btn-block" type="submit">Send</button>
    
    </form>
    <!-- Default form contact -->

</div>

<?php include "footer.php" ?>