const myAjaxResponse = document.getElementById('ajax-response');
myAjaxData = {
    toclick: 'click data',
    clicked: ' clicked data'
}
const myAjaxButton = document.getElementById('ajax-request');
if (myAjaxButton) {
    myAjaxButton.addEventListener('click', () => {
        // console.log('clicked:', myAjaxButton)  //test if buttn works
        jQuery.ajax({
            type: "post",
            url: `${window.location.origin}/wp-admin/admin-ajax.php`, //typing the path manually 
            data: {
                action: 'my_ajax_action',
                ajax_data: myAjaxData
            },
            complete: function (response) {
                console.log(response.responseJSON)
                myAjaxButton.innerHTML = response.responseJSON.toclick
                myAjaxResponse.innerHTML = response.responseJSON.clicked[0].post_excerpt
            }
        })
    })
};





