function validate_value(input_value)
{
	if(input_value!='' && typeof input_value != 'undefined' && input_value!=0 && input_value != 'failure' )
		return true;
	else
		return false;
}
function asthma_push_datalayer(ga_data)
{
	if(validate_value(ga_data)) {
		window.dataLayer.push(ga_data);
	}
}
jQuery("#download-guide").on('click', function() {
	dl_data = { 'event' : 'downloadGuide', 'eventCategory' :  'Guide Status', 'eventAction' : 'Downloaded'};
	console.log(dl_data);
	asthma_push_datalayer(dl_data);
});
