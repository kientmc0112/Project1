$('#mailchimp-subscription-form-footer').ajaxChimp({
  callback: mailChimpCallBack,
  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
});

function mailChimpCallBack(resp) {
  // Hide any previous response text
  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
      $response = '';
  $mailchimpform.children(".alert").remove();
  if (resp.result === 'success') {
      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
  } else if (resp.result === 'error') {
      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
  }
  $mailchimpform.prepend($response);
}
