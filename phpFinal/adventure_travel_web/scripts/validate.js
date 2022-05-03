//This file is javascript and checks the input fields in the contact/insert form for validation
function validateContactForm(){
    //values inputted from the contact form into variables
    let first_name = document.contactForm.first_name.value;
    let last_name = document.contactForm.last_name.value;
    let email_address = document.contactForm.email_address.value;
    let phone_number = document.contactForm.phone_number.value;
    let reason = document.contactForm.reason.value;
    let comments = document.contactForm.comments.value;
    //several if statements that check for a null value, or a empty string
    if (first_name == null || first_name== ""){  
        alert("First name can't be blank");  
        return false;  
    }else if (last_name == null || last_name == ""){  
        alert("Last name can't be blank");  
        return false;  
    }else if (email_address == null || email_address == "") {
        alert("Email can't be blank");
        return false;
    }else if (phone_number == null || phone_number == "") {
        alert("Phone number can't be blank");
        return false;
    }else if (reason == null || reason =="") {
        alert("A reason for contact must be selected");
        return false;
    }else if (comments == null || comments =="") {
        alert("Please enter a comment");
        return false;
    }//end if/elseif statements for null value or empty string 

    //variables that validate the email address, has to have certain characters @, .com etc.
    let numLetterPattern = /^[0-9a-zA-Z]+$/;
    let emailPattern = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    let secToLastChar = email_address.charAt(email_address.length - 2);

    //for loop that loos through the length of the email address to find the @, .com etc. 
    for(let i = 0; i < email_address.length; i++){
        if(numLetterPattern.test(email_address.substring(i, i + 1)) == false && (numLetterPattern.test(email_address.substring(i + 1, i + 2)) == false) ){
            alert("Please enter a valid email"); 
            return false;
        }
    }
    //if statement ouputting wrong format to user if they don't meet the format requirements 
    if(emailPattern.test(email_address) && numLetterPattern.test(email_address.substring(0,1)) && (numLetterPattern.test(secToLastChar)) == false ){
        alert("Please enter a valid email");
        return false;
    }
    //Variable declared is the format for a phone number.
    let phoneNumPattern = /^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
    //If statement stating, if you don't meet the required format please try again with the correct format.
    if(phoneNumPattern.test(phone_number) == false){
        alert("Please enter a valid phone number with area code");
        return false;
    }
    //Varable declared are charcaters you cannot have in the first/lastname/comments field
    let specChars = /[\',\",\/,\\,\<,\>,\*,\-]/;
    //If statement stating, if you have any of the characters above please try again with the correct characters.
    if(specChars.test(first_name) || specChars.test(last_name) || specChars.test(comments)){
        alert("First/Last name and comments can't contain some special characters")
        return false;
    }
    //IF statement stating, you cannot have over 500 characters, if you do it will alert the person to lessen the characters.
    if(comments.length > 10){
        alert("The comment section can't contain over 500 characters.")
        return false;
    }
}

//Function that validates the insertion form.
function validateInsertForm(){
    //Inputting input values from insert form into variables
    let vacation_name = document.insert_vacation.vacation_name.value;
    let vacation_image = document.insert_vacation.vacation_image.value;
    let vacation_description = document.insert_vacation.vacation_description.value;
    let vacation_days = document.insert_vacation.vacation_days.value;
    let vacation_nights = document.insert_vacation.vacation_nights.value;
    let vacation_adult_price = document.insert_vacation.vacation_adult_price.value;
    let vacation_child_price = document.insert_vacation.vacation_child_price.value;
    let vacation_group_size = document.insert_vacation.vacation_group_size.value;
    let vacation_spots_remaining = document.insert_vacation.vacation_spots_remaining.value;
    let vacation_date_avail = document.insert_vacation.vacation_date_avail.value;
    let vacation_check_in_time = document.insert_vacation.vacation_check_in_time.value;
    // check fields for empty values
    //If/else if statements checking if input values are either null or a empty string.
    if (vacation_name == null || vacation_name== ""){  
        alert("Name is required!");  
        return false;  
    }else if (vacation_image == null || vacation_image == ""){  
        alert("Image is required!");  
        return false;  
    }else if (vacation_description == null || vacation_description == "") {
        alert("Description is required!");
        return false;
    }else if (vacation_days == null || vacation_days == "") {
        alert("Days is required!");
        return false;
    }else if (vacation_nights == null || vacation_nights =="") {
        alert("Nights is required!");
        return false;
    }else if (vacation_adult_price == null || vacation_adult_price =="") {
        alert("Adult price is required!");
        return false;
    }else if (vacation_child_pricee == null || vacation_child_price =="") {
        alert("Child price is required!");
        return false;
    }else if (vacation_group_size == null || vacation_group_size =="") {
        alert("Group size is required!");
        return false;
    }else if (vacation_spots_remaining == null || vacation_spots_remaining =="") {
        alert("Spots remaining is required!");
        return false;
    }else if (vacation_date_avail == null || vacation_date_avail =="") {
        alert("Date available is required!");
        return false;
    }else if (vacation_check_in_time == null || vacation_check_in_time =="") {
        alert("Check in time is required!");
        return false;
    }   
}

//Function validating the updated form. 
function validateUpdateForm(){
    //Inputting input values from update form into variables
    let vacation_name = document.update_vacation.vacation_name.value;
    let vacation_image = document.update_vacation.vacation_image.value;
    let vacation_description = document.update_vacation.vacation_description.value;
    let vacation_days = document.update_vacation.vacation_days.value;
    let vacation_nights = document.update_vacation.vacation_nights.value;
    let vacation_adult_price = document.update_vacation.vacation_adult_price.value;
    let vacation_child_price = document.update_vacation.vacation_child_price.value;
    let vacation_group_size = document.update_vacation.vacation_group_size.value;
    let vacation_spots_remaining = document.update_vacation.vacation_spots_remaining.value;
    let vacation_date_avail = document.update_vacation.vacation_date_avail.value;
    let vacation_check_in_time = document.update_vacation.vacation_check_in_time.value;
    //If/else if statements checking each input value if they are either null or an empty string
    if (vacation_name == null || vacation_name== ""){  
        alert("Name is required!");  
        return false;  
    }else if (vacation_image == null || vacation_image == ""){  
        alert("Image is required!");  
        return false;  
    }else if (vacation_description == null || vacation_description == "") {
        alert("Description is required!");
        return false;
    }else if (vacation_days == null || vacation_days == "") {
        alert("Days is required!");
        return false;
    }else if (vacation_nights == null || vacation_nights =="") {
        alert("Nights is required!");
        return false;
    }else if (vacation_adult_price == null || vacation_adult_price =="") {
        alert("Adult price is required!");
        return false;
    }else if (vacation_child_pricee == null || vacation_child_price =="") {
        alert("Child price is required!");
        return false;
    }else if (vacation_group_size == null || vacation_group_size =="") {
        alert("Group size is required!");
        return false;
    }else if (vacation_spots_remaining == null || vacation_spots_remaining =="") {
        alert("Spots remaining is required!");
        return false;
    }else if (vacation_date_avail == null || vacation_date_avail =="") {
        alert("Date available is required!");
        return false;
    }else if (vacation_check_in_time == null || vacation_check_in_time =="") {
        alert("Check in time is required!");
        return false;
    }
}