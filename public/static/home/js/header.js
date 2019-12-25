
$(function () {
    $.ajax({
      url: location.origin + '/home/common/header.html',
      success: function (res) {
        $('#header').html(res)
      }
    })
  })