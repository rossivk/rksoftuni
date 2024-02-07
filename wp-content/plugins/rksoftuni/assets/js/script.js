const myAjaxResponse = document.getElementById('ajax-response');
const myAjaxButton = document.getElementById('ajax-request');
/* console.log(myAjaxResponse);
*
*returns null, need to investigate, It worked before I started tiding up my files.
*/

myAjaxData = {
    toclick: 'click data',
    clicked: ' clicked data'
}
if (myAjaxButton) {
    myAjaxButton.addEventListener('click', () => {
        jQuery.ajax({
            type: "post",
            url: `admin_url('admin-ajax.php')`,
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