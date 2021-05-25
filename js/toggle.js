if (jQuery(".faq__card .faq__card-question").hasClass('active')) {
    jQuery(".faq__card .faq__card-question.active").closest('.faq__card').find('.faq__card-answer').show();
}
jQuery(".faq__card .faq__card-question").click(function () {
    if (jQuery(this).hasClass('active')) {
        jQuery(this).removeClass("active").closest('.faq__card').find('.faq__card-answer').slideUp(200);
    }
    else {
        jQuery(this).addClass("active").closest('.faq__card').find('.faq__card-answer').slideDown(200);
    }
});