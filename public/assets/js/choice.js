$(document).ready(function() {
    var max_fields      = 100; //maximum input boxes allowed
    var wrapper         = $(".opsi"); //Fields wrapper
    var add_button      = $("#addOption"); //Add button ID

    var x = 2; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group optionContent"><div class="input-group"><input type="text" class="form-control" placeholder="Pilihan" name="choices[]"><span class="input-group-btn"><button class="btn btn-danger removeOption" type="button"><i class="glyphicon glyphicon-remove"></i></button></span></div></div>'); //add input box
            $('.optionContent').insertBefore('#addOption');
        }
    });

    $(wrapper).on("click",".removeOption", function(e){ //user click on remove text
        e.preventDefault(); $(this).parents('.optionContent').remove(); x--;
    })
});
