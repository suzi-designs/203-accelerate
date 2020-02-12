/**
 * Created by Ashley on 04/04/2015.
 */

jQuery.noConflict();

jQuery(document).ready(function ($) {

    if (NSS.disable_js !== true) {
        $('.naked-social-share a').click(function (e) {
            e.preventDefault();
            var link = $(this).attr('href');

            if (!link.length || link == '#') {
                return;
            }

            var left = (screen.width / 2) - (550 / 2);
            var top = (screen.height / 2) - (400 / 2);
            window.open(link, '_blank', 'height=400, width=550, status=yes, toolbar=no, menubar=no, location=no, top=' + top + ', left=' + left);
            return false;
        });
    }

    var shareWrapper = $('.nss-update-share-numbers');

    shareWrapper.each(function () {
        var postID = $(this).data('post-id');

        if (typeof postID === 'undefined') {
            return true;
        }

        var data = {
            action: 'nss_update_share_numbers',
            post_id: postID,
            nonce: NSS.nonce
        };

        $.post(NSS.ajaxurl, data, function (response) {
            if (response.success == true) {
                $.each(response.data, function (siteName, number) {
                    shareWrapper.find('.nss-' + siteName).find('.nss-site-count').text(number);
                });
            } else {
                console.log(response);
            }
        });
    });

});