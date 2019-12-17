
$(function(){
    $.ajax({
      url: `${location.origin}/home/common/footer.html`,
      success: res => {
        $('#footer').html(res)
      }
    })
})