$("#contactFormAgenda").validator().on("submit", function(event){
    if (event.isDefaultPrevented()){

    }else{
        event.preventDefault();
        submitForm();
    }
    
});

function submitForm(){
    //Initiate Variables with form content
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateSelect = $("#dateSelect").val();
    var serviceSelect = $("#serviceSelect").val();

    $.ajax({
        type: "POST",
        url: "php/bookingProcess.php",
        data: "name=" + name + "&email=" + email + "&phone=" + phone + "&dateSelect=" + dateSelect + "&serviceSelect=" + serviceSelect,
        success : function(text){
            if (text=="success"){
                formSuccess();
            }
        }
    });
}

function formSuccess(){
    $("#msgSubmit").removeClass("hidden");
}