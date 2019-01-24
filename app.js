$(function(){
    $(window).scroll(function(){
       if($(this).scrollTop()!=0){
           $('.scrolingtop').show();
       } 
       else {
           $('.scrolingtop').hide();
       }
    });
});
$(".scrolingtop").click(function(){
    $('body,html').animate({ scrollTop: 0 }, 600);
   
});      
        
$('.name, .count, .price').click(function(){
    let group = $(this).data('group');
    $.ajax({
        url:"config/select.php",
        method:"POST",
        data:{group:group},
        success:function(data)
        {
        $('.result-ajax').html(data);
        }
       })
})