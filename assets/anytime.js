(function($){

function anyTimeMailbox(){
    const name = $('#input_14_174_3').val()
    const last_name = $('#input_14_174_6').val()
    const email = $('#input_14_173').val()
    const phone = $('#input_14_193').val()
    const phoneCode = '+1' 
    
    const address = $('#input_14_223_1').val()
    const addicionalAddress = $('#input_14_223_2').val()
    const city = $('#input_14_223_3').val()
    const state = $('#input_14_223_4').val() == 'Florida' ? 'FL' : 'TX'
    const zipCode = $('#input_14_223_5').val()
    const country = 'US';
    const company = $('#input_14_196').val()

    let getServiceYes = $('#choice_14_179_0').is(':checked');
    let getServiceNo = $('#choice_14_179_1').is(':checked');

    if(!getServiceYes && !getServiceNo) return

    const dataResult = {
        action: 'anytimemailbox_results',
        first_name: name,
        last_name: last_name,
        company: company,
        address_line_1: address,
        address_line_2: addicionalAddress,
        zip_postal_code: zipCode,
        city: city,
        state_province: state,
        country: country,
        phone_country_code: phoneCode,
        phone_local_number: phone,
        email: email
    }
    
    $.ajax({
        url: admin_url.ajax_url, 
        type: 'POST',
        data: dataResult        
    }).done(function(res) {
        const result = JSON.parse(res)
        console.log(result);
    });

}

let form14 = document.querySelector('#gform_wrapper_14');
if(form14){
    form14.addEventListener('submit', function (){
        anyTimeMailbox()
    })
}

})(jQuery)