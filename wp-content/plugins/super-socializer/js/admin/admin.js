var theChampReferrer = null, theChampReferrerVal = '', theChampReferrerTabId = '';
function theChampEmailPopupOptions(e) {
    jQuery(e).is(":checked") ? jQuery("#the_champ_email_popup_options").css("display", "block") : jQuery("#the_champ_email_popup_options").css("display", "none")
}

function theChampCommentingOptions(e) {
    jQuery(e).is(":checked") ? jQuery("#the_champ_commenting_extra").css("display", "none") : jQuery("#the_champ_commenting_extra").css("display", "table-row-group")
}
jQuery(document).ready(function() {
    jQuery("#tabs").tabs();
    theChampReferrer = jQuery('input[name=_wp_http_referer]'), theChampReferrerVal = jQuery('input[name=_wp_http_referer]').val(), theChampReferrerTabId = location.href.indexOf('#') > 0 ? location.href.substring(location.href.indexOf('#'), location.href.length) : '';
    if(theChampReferrerTabId){theChampSetReferrer(theChampReferrerTabId) }
    jQuery('#tabs ul a').click(function(){
        theChampSetReferrer(jQuery(this).attr('href'));
    });
    jQuery("#the_champ_login_redirection_column").find("input[type=radio]").click(function() {
        jQuery(this).attr("id") && "the_champ_login_redirection_custom" == jQuery(this).attr("id") ? jQuery("#the_champ_login_redirection_url").css("display", "block") : jQuery("#the_champ_login_redirection_url").css("display", "none")
    }), jQuery("#the_champ_login_redirection_custom").is(":checked") ? jQuery("#the_champ_login_redirection_url").css("display", "block") : jQuery("#the_champ_login_redirection_url").css("display", "none"), jQuery("#the_champ_register_redirection_column").find("input[type=radio]").click(function() {
        jQuery(this).attr("id") && "the_champ_register_redirection_custom" == jQuery(this).attr("id") ? jQuery("#the_champ_register_redirection_url").css("display", "block") : jQuery("#the_champ_register_redirection_url").css("display", "none")
    }), jQuery("#the_champ_register_redirection_custom").is(":checked") ? jQuery("#the_champ_register_redirection_url").css("display", "block") : jQuery("#the_champ_register_redirection_url").css("display", "none"), jQuery(".the_champ_help_bubble").attr("title", theChampHelpBubbleTitle), jQuery(".the_champ_help_bubble").toggle(function() {
        jQuery("#" + jQuery(this).attr("id") + "_cont").show(), jQuery(this).attr("title", theChampHelpBubbleCollapseTitle)
    }, function() {
        jQuery("#" + jQuery(this).attr("id") + "_cont").hide(), jQuery(this).attr("title", theChampHelpBubbleTitle)
    }), jQuery("#the_champ_fb_comment_switch_wp").keyup(function() {
        jQuery(this).prev("span").remove(), "" == jQuery(this).val().trim() ? jQuery(this).before('<span style="color:red">This cannot be blank</span>') : jQuery(this).val().trim() == jQuery("#the_champ_fb_comment_switch_fb").val().trim() && jQuery(this).before('<span style="color:red">This cannot be same as text on "Switch to Facebook Commenting" button</span>')
    }), jQuery('input#the_champ_enable_commenting, input#the_champ_login_enable, input#the_champ_counter_enable').click(function(){
        if(jQuery(this).is(':checked')){
            jQuery('div#tabs').css('display', 'block');
        }else{
            jQuery('div#tabs').css('display', 'none');
        }
    }), jQuery("#the_champ_fb_comment_switch_fb").keyup(function() {
        jQuery(this).prev("span").remove(), "" == jQuery(this).val().trim() ? jQuery(this).before('<span style="color:red">This cannot be blank</span>') : jQuery(this).val().trim() == jQuery("#the_champ_fb_comment_switch_wp").val().trim() && jQuery(this).before('<span style="color:red">This cannot be same as text on "Switch to WordPress Commenting" button</span>')
    })
});
function theChampSetReferrer(href){
    jQuery(theChampReferrer).val( theChampReferrerVal.substring(0, theChampReferrerVal.indexOf('#') > 0 ? theChampReferrerVal.indexOf('#') : theChampReferrerVal.length) + href );
}
jQuery("html, body").animate({ scrollTop: 0 });