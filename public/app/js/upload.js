function savepic()
	{
	//can perform client side field required checking for "fileToUpload" field
	$.ajaxFileUpload
	( {
		url:'/app/lib/doajaxfileupload.php',
		secureuri:false,
		fileElementId:'fileToUpload',
		dataType: 'json',
		success: function (data, status) {
			if(typeof(data.error) != 'undefined') {
				if(data.error != '') {
					alert(data.error);
				}
				else {
					alert(msg); // returns location of uploaded file
				}
			}
		}, error: function (data, status, e)
		{
			alert(e);
		}
	} )
	return false;
}