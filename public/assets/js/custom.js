var site = $("meta[name='data-base']").attr("content");
var csrf = $("meta[name='csrf-token']").attr("content");
var googleKey = $("meta[name='data-google']").attr("content");

/* onkeypress="return isNumberKey(event); */
function isNumberKey(evt){
 	var charCode = (evt.which) ? evt.which : evt.keyCode
 	if (charCode > 31 && (charCode < 48 || charCode > 57))
 	{
     	if( charCode == 46)
     	{
         return true;
     	}
     	else
     	{
         return false;
     	}
 	}
 	return true;
}

function isIntKey(evt){ 
    var charCode = (evt.which) ? evt.which : evt.keyCode
    //console.log(charCode);
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    {
       return false;
    }
    return true;
}

$('.timeSlotCheck').change(function(){
    var chkdVal = $(this).attr('keyCheck');

    if ($(this).is(":checked")== true) {
        //alert("Checked");
        $('#'+chkdVal).text('Open');
    }
    else if ($(this).is(":checked")== false) {
        //alert("unChecked");
        $('#'+chkdVal).text('Closed');
    }
});

/* Limit description text count */
$(function(){
	$("#aboutMe").on('keyup', function(e) { 
	    var words = $.trim(this.value).length;
	    if (words <= 100) {
	        $('.word-type').text(words+' / 100');
	        //$('#word_left').text(200-words)
	    }else{ 
	    	if (e.keyCode != 8) {
	        	e.preventDefault();
	        	return false;
	        }else{
	        	//console.log(2);
	        }
		}
	});

    $(document).on("cut copy paste","#address",function(e) {
        e.preventDefault();
    });
});

/* Internation contact number code */
var input = $('#mycontact');
var country = $('#contactCountry');
var iti = intlTelInput(input.get(0));

// listen to the telephone input for changes
input.on('countrychange', function(e) {
  // change the hidden input value to the selected country code
  country.val(iti.getSelectedCountryData().dialCode);
});
/*********************/

/* Add more field to add contact number */
$(function(){
    $("body").on("click",".add-more-contact",function(){ 
        var $remind = parseInt($('.remainContact').val());
        if($remind !== 0){
            $remind = $remind - 1;
            $('.remainContact').val($remind);
        }
        
        $(".after-add-more-contact:last").after('<div class="form-group after-add-more-contact"><input name="myContact[]" type="text" class="form-control border-btm" id="mycontact'+$remind+'" placeholder="12345678" onkeypress="return isIntKey(event);"><input type="hidden" id="contactCountry'+$remind+'" name="contactCountry[]" value="1"/><a class="remove-contact">- Supprimer</a></div>');
        callIntlInput($remind);
    });
    
    $("body").on("click",".remove-contact",function(){ 
        $(this).parents(".after-add-more-contact").remove();
        var $remind = parseInt($('.remainContact').val());
        $remind = $remind + 1;
        $('.remainContact').val($remind);
    });
    
});
/* Internation contact number code */
function callIntlInput(count){
    if (document.getElementById('mycontact'+count) && document.getElementById('contactCountry'+count)) {
        var input = $('#mycontact'+count);
        var country = $('#contactCountry'+count);
        var iti = window.intlTelInput(input.get(0));
        
        // listen to the telephone input for changes
        input.on('countrychange', function(e) {
          // change the hidden input value to the selected country code
          country.val(iti.getSelectedCountryData().dialCode);
        });
    } 
}
/*********************/

/* Call delete product modal via jQuery */
function deleteProd(pd){
    $('.productD').attr('keyD',pd);
    $('#deleteProduct').modal('show');
}
/*********/

/* Add more timing for sunday */
$(function(){
    $("body").on("click",".add-more-sunday",function(){ 
        $(".after-add-more-sunday:last").after('<tr class="after-add-more-sunday"><input type="hidden" name="res_set_sunday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="sunday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="sunday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });
    
    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-sunday").remove();
    });
});

/* Add more timing for Monday */
$(function(){
    $("body").on("click",".add-more-monday",function(){ 
        //alert("hello");
        $(".after-add-more-monday:last").after('<tr class="after-add-more-monday"><input type="hidden" name="res_set_monday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="monday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="monday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-monday").remove();
    });
});

/* Add more timing for Tuesday */
$(function(){
    $("body").on("click",".add-more-tuesday",function(){ 
        //alert("hello");
        $(".after-add-more-tuesday:last").after('<tr class="after-add-more-tuesday"><input type="hidden" name="res_set_tuesday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="tuesday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="tuesday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-tuesday").remove();
    });
    /*********/
});

/* Add more timing for Wednesday */
$(function(){
    $("body").on("click",".add-more-wednesday",function(){ 
        //alert("hello");
        $(".after-add-more-wednesday:last").after('<tr class="after-add-more-wednesday"><input type="hidden" name="res_set_wednesday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="wednesday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="wednesday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-wednesday").remove(); 
    });
    /*********/
});

/* Add more timing for Thursday */
$(function(){
    $("body").on("click",".add-more-thursday",function(){ 
        //alert("hello");
        $(".after-add-more-thursday:last").after('<tr class="after-add-more-thursday"><input type="hidden" name="res_set_thursday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="thursday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="thursday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-thursday").remove();
    });
    /*********/
});

/* Add more timing for Friday */
$(function(){
    $("body").on("click",".add-more-friday",function(){ 
        $(".after-add-more-friday:last").after('<tr class="after-add-more-friday"><input type="hidden" name="res_set_friday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="friday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="friday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-friday").remove();
    });
});

/* Add more timing for Saturday */
$(function(){
    $("body").on("click",".add-more-saturday",function(){ 
        //alert("hello");
        $(".after-add-more-saturday:last").after('<tr class="after-add-more-saturday"><input type="hidden" name="res_set_saturday_id[]" value="0"><td></td><td></td><td><div class="form-group"><select class="form-control border-btm" name="saturday_open_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group"><select class="form-control border-btm" name="saturday_close_time[]" style="-webkit-appearance: none;"><option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option><option value="01:00 AM" >01:00 AM</option><option value="01:30 AM">01:30 AM</option><option value="02:00 AM">02:00 AM</option><option value="02:30 AM" >02:30 AM</option><option value="03:00 AM" >03:00 AM</option><option value="03:30 AM" >03:30 AM</option><option value="04:00 AM" >04:00 AM</option><option value="4:30 AM" >04:30 AM</option><option value="05:00 AM" >05:00 AM</option><option value="05:30 AM" >05:30 AM</option><option value="06:00 AM" >06:00 AM</option><option value="06:30:00" >06:30 AM</option><option value="07:00 AM" >07:00 AM</option><option value="07:30 AM" >07:30 AM</option><option value="08:00 AM" >08:00 AM</option><option value="08:30 AM" >08:30 AM</option><option value="09:00 AM" >09:00 AM</option><option value="09:30 AM" >09:30 AM</option><option value="10:00 AM" >10:00 AM</option><option value="10:30 AM" >10:30 AM</option><option value="11:00 AM" >11:00 AM</option><option value="11:30 AM" >11:30 AM</option><option value="12:00 PM" >12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM" >01:00 PM</option><option value="01:30 PM">01:30 PM</option><option value="02:00 PM">02:00 PM</option><option value="02:30 PM" >02:30 PM</option><option value="03:00 PM" >03:00 PM</option><option value="03:30 PM" >03:30 PM</option><option value="04:00 PM" >04:00 PM</option><option value="4:30 PM" >04:30 PM</option><option value="05:00 PM" >05:00 PM</option><option value="05:30 PM" >05:30 PM</option><option value="06:00 PM" >06:00 PM</option><option value="06:30 PM" >06:30 PM</option><option value="07:00 PM" >07:00 PM</option><option value="07:30 PM" >07:30 PM</option><option value="08:00 PM" >08:00 PM</option><option value="08:30 PM" >08:30 PM</option><option value="09:00 PM" >09:00 PM</option><option value="09:30 PM" >09:30 PM</option><option value="10:00 PM" >10:00 PM</option><option value="10:30 PM" >10:30 PM</option><option value="11:00 PM" >11:00 PM</option><option value="11:30 PM" >11:30 PM</option></select></div></td><td><div class="form-group change"><a class="remove">- Supprimer</a></div></td></tr>');
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more-saturday").remove();
    });
    /*********/
});

// $(document).ready(function () {
//     google.maps.event.addDomListener(window, 'load', initialize);
// });
function initialize() { 
    var input = document.getElementById('address');
    if(input){
     	var autocomplete = new google.maps.places.Autocomplete(input, {
     		componentRestrictions: { country: ["fr","in","us"] },
         	fields: ["address_components", "geometry", "name"],
         	//types: ["(cities)"],
         	//types:  ['(regions)'],
     	});

     	autocomplete.addListener("place_changed", function () {
			var place = autocomplete.getPlace();
	     	$(".iframe_wrapper").find("iframe").remove();
	     	var src = "https://www.google.com/maps/embed/v1/place?key="+googleKey+"&q="+place.name+"&center="+place.geometry.location.lat()+","+place.geometry.location.lng();
			var iframe = $('<iframe src="' + src + '" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');
			$(".iframe_wrapper").html(iframe);

	      	for (const component of place.address_components) {
	       		const componentType = component.types[0];
				switch (componentType) {
		           	case "street_number": {
		               //address1 = `${component.long_name} ${address1}`;
		               break;
		           	}

		           	case "route": {
		               //address1 += component.short_name;
		               break;
		           	}
						
						case "postal_code": {
		               // switch($('#postal_code').length){
		               //  	case 1: document.querySelector("#postal_code").value  = `${component.long_name}`;
		               //  	break;
		               // }
							document.querySelector("#postal_code").value  = `${component.long_name}`;
		               break;
		           	}

		           	case "postal_code_suffix": {
		               //document.querySelector("#dsd").value = `${postcode}-${component.long_name}`;
		               break;
		           	}
		                    
		           	case "locality":{
		            	//document.querySelector("#locality").value = component.long_name;
		               break;
		           	}

		           	case "administrative_area_level_1": {
		               //document.querySelector("#state").value = component.short_name;
		               break;
		           	}
		           	case "country":{
		               document.querySelector("#country").value = component.long_name;
		               break;
		           	}
	       		}
			}
			//console.log(place.name);
	      	//document.getElementById('cityname').value = place.name;
	      	document.getElementById('cityLat').value = place.geometry.location.lat();
	      	document.getElementById('cityLng').value = place.geometry.location.lng();
		});
   	}
}
/****************/

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* Add restaurant address */
$('.restroAdd').click(function(e) { 
    var allowSubmit = false;
    //var csrf = $("meta[name='csrf-token']").attr("content");
    var address = $('#address').val();
    var country = $('#country').val();
    var postal_code = $('#postal_code').val();
    var cityLat = $('#cityLat').val();
    var cityLng = $('#cityLng').val();

	$.ajax({ 
		url: site+"/ad_validation",   
        method:"POST",  
        dataType: "json",
        data:{"a":address,"c":country,"pc":postal_code,"lt":cityLat,"ln":cityLng},  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success === true){
                $('#advalidmsg').html(''); 
                $('#advalidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success === false){
				if(res.msg !== ''){
                    $('#advalidmsg').html(''); 
                    $('#advalidmsg').html(res.msg); 
                    $('#advalidmsg').show(); 
                }
            }
        }  
    });
});

/* Add restaurant service type */
$('.serviceAdd').click(function(e) { 
    var service = $('input[name="serviceType"]:checked').val();

	$.ajax({ 
		url: site+"/service_validation",   
        method:"POST",  
        dataType: "json",
        data:{"a":service},  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success === true){
                $('#serviceidmsg').html(''); 
                $('#serviceidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success === false){
				if(res.msg !== ''){
                    $('#serviceidmsg').html(''); 
                    $('#serviceidmsg').html(res.msg); 
                    $('#serviceidmsg').show(); 
                }
            }
        }  
    });
});

/* Add restaurant website URL */
$('.urlAdd').click(function(e) { 
    var web = $('input[name="webaddress"]').val();

	$.ajax({ 
		url: site+"/weburl_validation",   
        method:"POST",  
        dataType: "json",
        data:{"a":web},  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success === true){
                $('#urlidmsg').html(''); 
                $('#urlidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success === false){
				if(res.msg !== ''){
                    $('#urlidmsg').html(''); 
                    $('#urlidmsg').html(res.msg); 
                    $('#urlidmsg').show(); 
                }
            }
        }  
    });
});

/* Add about text for restaurant */
$('.descAdd').click(function(e) { 
    var form = $("#aboutForm");

	$.ajax({ 
		url: site+"/desc_validation",   
        method:"POST",  
        dataType: "json",
        data:form.serialize(),  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#descidmsg').html(''); 
                $('#descidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success == false){
				if(res.msg != ''){
                    $('#descidmsg').html(''); 
                    $('#descidmsg').html(res.msg); 
                    $('#descidmsg').show(); 
                }
            }
        }  
    });
});

/* Cashback Add */
$('.cashbackAdd').click(function(e) { 
    //var desc = $('input[name="aboutMe"]').val();
    var form= $("#cashBackForm");

    $.ajax({ 
        url: site+"/cashback_validation",   
        method:"POST",  
        dataType: "json",
        data:form.serialize(),  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#cashbackidmsg').html(''); 
                $('#cashbackidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#cashbackidmsg').html(''); 
                    $('#cashbackidmsg').html(res.msg); 
                    $('#cashbackidmsg').show(); 
                }
            }
        }  
    });
});

/* Add calender restaurant */
$('.calenderAdd').click(function(e) { 
    var form = $("#calenderForm");

	$.ajax({ 
		url: site+"/calender_validation",   
        method:"POST",  
        dataType: "json",
        data:form.serialize(),  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#timingidmsg').html(''); 
                $('#timingidmsg').hide();
                location.reload();
                //$('#addLocation').modal('toggle');
            }
            else if(res.success == false){
				if(res.msg != ''){
                    $('#timingidmsg').html(''); 
                    $('#timingidmsg').html(res.msg); 
                    $('#timingidmsg').show(); 
                }
            }
        }  
    });
});

/* Delete previously added timing */
function confirm_daleteresSet(id){
    $.ajax({ 
        url: site+"/calender_delete",   
        method:"POST",  
        dataType: "json",
        data:{'d':id},  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success === true){
                $('.more-hours'+id).remove();
                
            }
            else if(res.success === false){
                
            }
        }  
    });
}

/* Add accept reward permission */
$('.allowrewardAdd').click(function(e) { 
    var form = $("#rewardForm");

    $.ajax({ 
        url: site+"/reward_validation",   
        method:"POST",  
        dataType: "json",
        data:form.serialize(),  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#rewardidmsg').html(''); 
                $('#rewardidmsg').hide();
                location.reload();
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#rewardidmsg').html(''); 
                    $('#rewardidmsg').html(res.msg); 
                    $('#rewardidmsg').show(); 
                }
            }
        }  
    });
});

/* Add business name */
$('.myInfoadd').click(function(e) { 
    var form = $("#businessForm");

    $.ajax({ 
        url: site+"/myinfo_validation",   
        method:"POST",  
        dataType: "json",
        data:form.serialize(),  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#myinfoidmsg').html(''); 
                $('#myinfoidmsg').hide();
                location.reload();
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#myinfoidmsg').html(''); 
                    $('#myinfoidmsg').html(res.msg); 
                    $('#myinfoidmsg').show(); 
                }
            }
        }  
    });
});


/* Add interiorAdd */
$('.interiorAdd').click(function(e) { 
    var form = $('#showcaseForm')[0];
    var myFormData = new FormData(form);

    $.ajax({ 
        url: site+"/interior_validation",   
        method:"POST",  
        dataType: "json",
        data:myFormData,  
        contentType: false,  
        cache: false,  
        processData:false,  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#showcaseidmsg').html(''); 
                $('#showcaseidmsg').hide();
                location.reload();
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#showcaseidmsg').html(''); 
                    $('#showcaseidmsg').html(res.msg); 
                    $('#showcaseidmsg').show(); 
                }
            }
        }  
    });
});

/* Add contact number */
$('.contactAdd').click(function(e) { 
    var form = $('#contactForm')[0];
    var myFormData = new FormData(form);

    $.ajax({ 
        url: site+"/contact_validation",   
        method:"POST",  
        dataType: "json",
        data:myFormData,  
        contentType: false,  
        cache: false,  
        processData:false,  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#contactidmsg').html(''); 
                $('#contactidmsg').hide();
                location.reload();
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#contactidmsg').html(''); 
                    $('#contactidmsg').html(res.msg); 
                    $('#contactidmsg').show(); 
                }
            }
        }  
    });
});

/* Add drink */
$('.drinkAdd').click(function(e) { 
    var form = $('#drinkAdd')[0];
    var myFormData = new FormData(form);

    $.ajax({ 
        url: site+"/drink_validation",   
        method:"POST",  
        dataType: "json",
        data:myFormData,  
        contentType: false,  
        cache: false,  
        processData:false,  
        success:function(res)  
        {  
            $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
            if(res.success == true){
                $('#prodDirnkidmsg').html(''); 
                $('#prodDirnkidmsg').hide();
                location.reload();
            }
            else if(res.success == false){
                if(res.msg != ''){
                    $('#prodDirnkidmsg').html(''); 
                    $('#prodDirnkidmsg').html(res.msg); 
                    $('#prodDirnkidmsg').show(); 
                }
            }
        }  
    });
});

/* Active/Inactive product */
$("input[type='checkbox'].drink-prod-status").click(function(){ 
    //var myId = $(this).attr('keyD');
    $.post(site+"/update_prod_status", {myId:$(this).attr('keyD')}, function( res ) {
        $("meta[name='csrf-token']").attr("content",res.csrfHash).trigger("change");
        if(res.success == true){
            $('#allProdidmsg').html(''); 
            $('#allProdidmsg').hide();
            //location.reload();
        }
        else if(res.success == false){
            if(res.msg != ''){
                $('#allProdidmsg').html(''); 
                $('#allProdidmsg').html(res.msg); 
                $('#allProdidmsg').show(); 
            }
        }
    }, "json");
});
/***************/

$(window).on("load", function () { 
    if (document.getElementById('drinkImg')) {
        var imageLoader = document.getElementById('drinkImg');
        imageLoader.addEventListener('change', handleDrinkImage, false);
    }
    
    if (document.getElementById('image_loader')) {
        var imageLoader = document.getElementById('image_loader');
        imageLoader.addEventListener('change', handleImage, false);
    }
    if (document.getElementById('image_exterior')) {
        var imageLoader = document.getElementById('image_exterior');
        imageLoader.addEventListener('change', handleImage_exterior, false);
    }
    if (document.getElementById('image_logo')) {
        var imageLoader = document.getElementById('image_logo');
        imageLoader.addEventListener('change', handleImage_logo, false);
    }
    
    function handleImage(e){
        $('.no-interior').addClass('d-none');
        $('.no-interior').removeClass('d-block');
    
        var reader = new FileReader();
        reader.onload = function(event){  
            var image = new Image();
            var imageW = 1400;
            var imageH = 1400; 
                    
            image.onload = function(){
       
            var canvas = document.createElement('canvas');
            canvas.width = image.width;
            canvas.height = image.height;
                        
            var ctx = canvas.getContext('2d');
            ctx.drawImage( image, 0, 0, canvas.width, canvas.height );
                        
            $('#image_input').html(['<img src="', canvas.toDataURL(), '"/>'].join(''));
                var img = $('#image_input img')[0];
                var canvas = document.createElement('canvas');
                        
              $('#image_input img').Jcrop({
                boxWidth    : 1500,
                boxHeight   : 1500,
                bgColor: 'black',
                bgOpacity: .6,
                setSelect: [0, 0, 67,60],
                aspectRatio: .5,
                //onChange: imgSelect,
                onSelect: updateCoords,
                onRelease:  clearCoords
              });
    
              function updateCoords(c)
                {
                    jQuery('#x').val(c.x);
                    jQuery('#y').val(c.y);
                    jQuery('#w').val(c.w);
                    jQuery('#h').val(c.h);
                }
                function clearCoords()
                    {
                        jQuery('#x').val(0);
                        jQuery('#y').val(0);
                        jQuery('#w').val(0);
                        jQuery('#h').val(0);
                    }
                        
                // function imgSelect(selection) {
                //     canvas.width = 100;
                //     canvas.height = 200;
                        
                //     var ctx = canvas.getContext('2d');
                //     ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvas.width, canvas.height);
                                
                //     $('#image_output').attr('src', canvas.toDataURL());
                //     //$('#image_source').text(canvas.toDataURL());
                // } 
            }
            image.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }
    
    function handleImage_exterior(e){
        $('.no-exterior').addClass('d-none');
        $('.no-exterior').removeClass('d-block');
        
        var reader = new FileReader();
        reader.onload = function(event){  
            var image = new Image();
            var imageW = 1400;
            var imageH = 1400; 
                    
            image.onload = function(){
       
            var canvas = document.createElement('canvas');
            // canvas.width = image.width;
            // canvas.height = image.height;
            canvas.width = 1400;
            canvas.height = 1400;
                        
            var ctx = canvas.getContext('2d');
            ctx.drawImage( image, 0, 0, canvas.width, canvas.height );
                        
            $('#image_input_exterior').html(['<img src="', canvas.toDataURL(), '"/>'].join(''));
                var img = $('#image_input_exterior img')[0];
                var canvas = document.createElement('canvas');
                        
              $('#image_input_exterior img').Jcrop({
                boxWidth    : 1500,
                boxHeight   : 1500,
                bgColor: 'black',
                bgOpacity: .6,
                setSelect: [0, 0, 67,60],
                aspectRatio: .5,
                //onChange: imgSelect,
                onSelect: updateExCoords,
                onRelease:  clearExCoords
              });
    
              function updateExCoords(c)
                {
                    jQuery('#ex').val(c.x);
                    jQuery('#ey').val(c.y);
                    jQuery('#ew').val(c.w);
                    jQuery('#eh').val(c.h);
                }
                function clearExCoords()
                {
                    jQuery('#ex').val(0);
                    jQuery('#ey').val(0);
                    jQuery('#ew').val(0);
                    jQuery('#eh').val(0);
                }
                        
                // function imgSelect(selection) {
                //     canvas.width = 100;
                //     canvas.height = 200;
                        
                //     var ctx = canvas.getContext('2d');
                //     ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvas.width, canvas.height);
                                
                //     $('#image_output').attr('src', canvas.toDataURL());
                //     //$('#image_source').text(canvas.toDataURL());
                // } 
            }
            image.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }
    
    function handleImage_logo(e){
        $('.no-logo').addClass('d-none');
        $('.no-logo').removeClass('d-block');
        
        var reader = new FileReader();
        reader.onload = function(event){  
            var image = new Image();
            var imageW = 1400;
            var imageH = 1400; 
                    
            image.onload = function(){
       
                var canvas = document.createElement('canvas');
                // canvas.width = image.width;
                // canvas.height = image.height;
                canvas.width = 1400;
                canvas.height = 1400;
                        
                var ctx = canvas.getContext('2d');
                ctx.drawImage( image, 0, 0, canvas.width, canvas.height );
                        
                $('#image_input_logo').html(['<img src="', canvas.toDataURL(), '"/>'].join(''));
                var img = $('#image_input_logo img')[0];
                var canvas = document.createElement('canvas');
                        
                $('#image_input_logo img').Jcrop({
                    boxWidth    : 1500,
                    boxHeight   : 1500,
                    bgColor: 'black',
                    bgOpacity: .6,
                    setSelect: [0, 0, 67,60],
                    aspectRatio: .5,
                    //onChange: imgSelect,
                    onSelect: updatelgCoords,
                    onRelease:  clearlgCoords
                });
    
                function updatelgCoords(c)
                {
                    jQuery('#lx').val(c.x);
                    jQuery('#ly').val(c.y);
                    jQuery('#lw').val(c.w);
                    jQuery('#lh').val(c.h);
                };
                function clearlgCoords()
                {
                    jQuery('#lx').val(0);
                    jQuery('#ly').val(0);
                    jQuery('#lw').val(0);
                    jQuery('#lh').val(0);
                }
                        
                // function imgSelect(selection) {
                //     canvas.width = 100;
                //     canvas.height = 200;
                        
                //     var ctx = canvas.getContext('2d');
                //     ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvas.width, canvas.height);
                                
                //     $('#image_output').attr('src', canvas.toDataURL());
                //     //$('#image_source').text(canvas.toDataURL());
                // } 
            }
            image.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }
    
    function handleDrinkImage(e){
        $('.no-logo').addClass('d-none');
        $('.no-logo').removeClass('d-block');
        
        var reader = new FileReader();
        reader.onload = function(event){  
            var image = new Image();
            var imageW = 1400;
            var imageH = 1400; 
                    
            image.onload = function(){
       
            var canvas = document.createElement('canvas');
            // canvas.width = image.width;
            // canvas.height = image.height;
            canvas.width = 1400;
            canvas.height = 1400;
                        
            var ctx = canvas.getContext('2d');
            ctx.drawImage( image, 0, 0, canvas.width, canvas.height );
                        
            $('#drink-img-preview').html(['<img src="', canvas.toDataURL(), '"/>'].join(''));
                var img = $('#drink-img-preview img')[0];
                var canvas = document.createElement('canvas');
                        
                $('#drink-img-preview img').Jcrop({
                    //boxWidth    : 1500,
                    //boxHeight   : 1500,
                    bgColor: 'black',
                    bgOpacity: .6,
                    setSelect: [67,30,15,15],
                    aspectRatio: 0.5,
                    //onChange: imgSelect,
                    onSelect: updatelgCoords,
                    onRelease:  clearlgCoords
                });
    
                function updatelgCoords(c)
                {
                    jQuery('#dx').val(c.x);
                    jQuery('#dy').val(c.y);
                    jQuery('#dw').val(c.w);
                    jQuery('#dh').val(c.h);
                };
                function clearlgCoords()
                {
                    jQuery('#dx').val(0);
                    jQuery('#dy').val(0);
                    jQuery('#dw').val(0);
                    jQuery('#dh').val(0);
                }
            }
            image.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]); 
    }
});
