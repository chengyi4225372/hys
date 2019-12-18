
$(function () {
  $.ajax({
    url: location.origin + '/home/common/footer.html',
    success: function (res) {
      $('#footer').html(res)
    }
  })
})