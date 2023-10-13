$(document).ready(function(){
	$(document).on('click', '#submitContactUsForm', function(e) {
        e.preventDefault();
        var formId = $('form.contactForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.contactForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('contactForm'));
            simpleAjax(url, data, 'createContactUsCallBack', 'post','json','');
        }
    });

    $(document).on('click', '#submitPortfolioButton', function(e) {
        var formId = $('form.addPortfolioForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.addPortfolioForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('addPortfolioForm'));
            simpleAjax(url, data, 'createPortfolioFormCallBack', 'post','json','');
        }
    });


    $(document).on('change','#changeType',function(e){        
        //alert($(this).val())
        if ($(this).val()==='photo') {
            $('.phptoDiv').css('display','flex');
            $('.videoDiv').css('display','none');
            $('#addVideo').removeClass('required');
            $('#addVideo').val('');
            $('#addPhotos').addClass('required');
        } else {
            $('.phptoDiv').css('display','none');
            $('.videoDiv').css('display','flex');
            $('#addPhotos').removeClass('required');
            $('#addVideo').addClass('required');
            $('#addPhotos').val('');
        }
    })


});



function createContactUsCallBack(response,self) {
    console.log(response);
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        alert('Thanks for contact us. We will get back to you soon.')
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}

function createPortfolioFormCallBack(response,self) {
    console.log(response);
    if (response['status'] && response['status']=='success') {
        alert(response.msg)
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}