var $newsletter_email, $newsletter_email_button;

$(function()
{
	$newsletter_email = $('#newsletter_email');
	$newsletter_email_button = $('#newsletter_email_button');

	/*$newsletter_email.on('keypress', function()
	{
		if ( $newsletter_email.val() !== '' )
		{
			return;
		}

		$('#newsletter_submit').fadeIn('slow');
	});*/

	$newsletter_email_button.on('click', function()
	{
		submit_newsletter();
	});

	$('#newsletter_form').on('submit', function()
	{
		submit_newsletter();

		return false;
	});
});

function submit_newsletter()
{
	if ( $kyrst.is_empty($newsletter_email.val()) )
	{
		$newsletter_email.focus();

		return;
	}

	$newsletter_email.prop('disabled', true);
	$newsletter_email_button.prop('disabled', true);

	$kyrst.ajax.post
	(
		BASE_URL + 'newsletter-submit',
		{
			email: $newsletter_email.val()
		},
		{
			success: function(result)
			{
				if ( result.errors.length === 0 )
				{
					$newsletter_email.val('');

					$('#newsletter_container').fadeOut('slow', function()
					{
						$('#newsletter_submitted').fadeIn();
					});
				}
			},
			complete: function()
			{
			}
		}
	);
}