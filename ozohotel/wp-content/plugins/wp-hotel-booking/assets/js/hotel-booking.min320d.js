!function(t){var e,a=t(document);function n(t){return Number(t)||t%1==0}function i(t){return new RegExp("^[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&'*+\\/0-9=?A-Z^_`a-z{|}~]+.[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+$").test(t)}function r(t){return t=new Date(t),!isNaN(t.getTime())}function o(e){if(!t.isPlainObject(e)){var a=e.match(/<!-- HB_AJAX_START -->(.*)<!-- HB_AJAX_END -->/);try{e=a?t.parseJSON(a[1]):t.parseJSON(e)}catch(t){e={}}}return e}function s(){var e=t(this),a=t('input[name="existing-customer-email"]');if(!i(a.val()))return a.addClass("error"),void a.focus();e.attr("disabled",!0),a.attr("disabled",!0);var n=t(".hb-col-padding.hb-col-border");t.ajax({url:hotel_settings.ajax,dataType:"html",type:"post",data:{action:"hotel_booking_fetch_customer_info",email:a.val()},beforeSend:function(){n.hb_overlay_ajax_start()},success:function(i){if(n.hb_overlay_ajax_stop(),(i=o(i))&&i.ID){var r=t("#hb-order-new-customer");for(var s in i.data){var d=s.replace(/^_hb_customer_/,"");r.find('input[name="'+d+'"], select[name="'+d+'"], textarea[name="'+d+'"]').val(i.data[s])}r.find('input[name="existing-customer-id"]').val(i.ID),t(".hb-order-existing-customer").fadeOut(function(){})}else l([hotel_booking_i18n.invalid_email]);e.removeAttr("disabled"),a.removeAttr("disabled")},error:function(){n.hb_overlay_ajax_stop(),l([hotel_booking_i18n.ajax_error]),e.removeAttr("disabled"),a.removeAttr("disabled")}})}function l(e){if(0!==e.length){t(".hotel_checkout_errors").slideUp().remove();var a=[];a.push('<div class="hotel_checkout_errors">');for(var n=0;n<e.length;n++)a.push("<p>"+e[n]+"</p>");a.push("</div>"),t("#hb-payment-form h3:first-child").after(a.join(""))}}null==Date.prototype.compareWith&&(Date.prototype.compareWith=function(t){"string"==typeof t&&(t=new Date(t));var e=parseInt(this.getTime()/1e3),a=parseInt(t.getTime()/1e3);return e>a?1:e<a?-1:0});var d="";function _(e){var a=StripeCheckout.configure({key:d,image:"https://stripe.com/img/documentation/checkout/marketplace.png",locale:"auto",token:function(a){!function(e,a){var n={},i=e.serializeArray(),r=e.find('button[type="submit"]'),s=r.html();t.each(i,function(t,e){n[e.name]=e.value}),t.extend(a,n),t.ajax({url:hotel_settings.ajax,data:a,type:"POST",dataType:"html",beforeSend:function(){r.attr("disabled","disabled"),r.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+r.html())}}).done(function(t){r.html(s),void 0!==(t=o(t)).result&&"success"==t.result?void 0!==t.redirect&&(window.location.href=t.redirect):void 0!==t.message&&alert(t.message)}).fail(function(){r.html(s)})}(e,a)}}),n=e.find('input[name="first_name"]').val().trim(),i=e.find('input[name="last_name"]').val().trim(),r=e.find('input[name="email"]').val().trim(),s=e.find('input[name="currency"]').val().trim(),l=0;l=e.find('input[name="pay_all"]').is(":checked")?e.find('input[name="total_price"]').val():e.find('input[name="total_advance"]').val(),a.open({name:n+" "+i,description:r,currency:s,amount:100*l})}HB_Booking_Cart={init:function(){this.add_to_cart(),this.remove_cart(),this.add_extra_to_cart()},hb_add_to_cart_callback:function(e,a){var n=t(".hotel_booking_mini_cart"),i=n.length,r=wp.template("hb-minicart-item");if(r=r(e),i>0)for(var o=0;o<i;o++){var s=t(n[o]),l=t(n[o]).find(".hb_mini_cart_item"),d=!1,_=s.find(".hb_mini_cart_empty"),c=s.find(".hb_mini_cart_footer"),h=l.length;if(0===h){var m=wp.template("hb-minicart-footer");1===_.length?(_.after(m({})),_.before(r)):c.before(r),d=!0;break}for(var u=0;u<h;u++){var p=t(l[u]),f=p.attr("data-cart-id");if(e.cart_id===f){p.replaceWith(r),d=!0;break}}!1===d&&c.before(r)}t(".hb_mini_cart_empty").remove();var v=setTimeout(function(){t(".hb_mini_cart_item").removeClass("active"),clearTimeout(v)},3500);void 0!==a&&a()},hb_remove_cart_item_callback:function(e,a){for(var n=t(".hotel_booking_mini_cart"),i=0;i<n.length;i++){for(var r=t(n[i]),o=r.find(".hb_mini_cart_item"),s=0;s<o.length;s++){var l=t(o[s]),d=l.attr("data-cart-id");if(e===d){l.remove();break}}if(0===(o=r.find(".hb_mini_cart_item")).length){var _=wp.template("hb-minicart-empty");r.find(".hb_mini_cart_footer").remove(),r.append(_({}));break}}var c=t("#hotel-booking-payment, #hotel-booking-cart");for(i=0;i<c.length;i++){var h=t(c[i]),m=h.find("table").find(".hb_checkout_item, .hb_addition_services_title");for(s=0;s<m.length;s++){var u=t(m[s]);d=u.attr("data-cart-id"),parent_item_id=u.attr("data-parent-id"),e!==d&&e!==parent_item_id||u.remove()}void 0!==a.sub_total&&h.find("span.hb_sub_total_value").html(a.sub_total),void 0!==a.grand_total&&h.find("span.hb_grand_total_value").html(a.grand_total),void 0!==a.advance_payment&&h.find("span.hb_advance_payment_value").html(a.advance_payment)}},add_to_cart:function(){t("form.hb-search-room-results");t(document).on("submit","form.hb-search-room-results",function(e){e.preventDefault();var a=t(this),n=a.find(".hb_add_to_cart"),i=n.html(),r=a.find(".number_room_select"),s=a.find(".number_room_select option:selected").val(),l=a.find(".hb-room-name");if(t(".number_room_select").removeClass("hotel_booking_invalid_quantity"),void 0===s||""===s)return r.addClass("hotel_booking_invalid_quantity"),l.find(".hb-message").remove(),l.append('<label class="hb-message error">'+hotel_booking_i18n.waring.room_select+"</label>"),setTimeout(function(){l.find(".hb-message").remove()},2e3),!1;var d=t(this).serializeArray();return t.ajax({url:hotel_settings.ajax,type:"POST",data:d,dataType:"html",beforeSend:function(){n.attr("disabled","disabled"),n.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+n.html())},success:function(e){var r=o(e);if(void 0!==r.status){if(void 0!==r.message){l.find(".hb-message").remove(),l.append('<div class="hb-message '+r.status+'">'+r.message+"</div>");setTimeout(function(){l.find(".hb_success_message").remove()},3e3)}"success"===r.status&&(t("body").trigger("hb_added_item_to_cart"),void 0!==r.redirect&&r.redirect&&(window.location.href=r.redirect))}void 0!==r.id&&HB_Booking_Cart.hb_add_to_cart_callback(r),n.html(i),n.removeAttr("disabled"),a.find(".hb_search_add_to_cart").length&&(a.find(".hb_search_add_to_cart .hb_view_cart").length||n.after('<a href="'+hotel_booking_i18n.cart_url+'" class="hb_button hb_view_cart">'+hotel_booking_i18n.view_cart+"</a>"))},error:function(){n.html(i),alert(hotel_booking_i18n.waring.try_again)},complete:function(){a.hb_overlay_ajax_stop()}}),!1})},add_extra_to_cart:function(){t(document).on("submit","form.hb-select-extra-results",function(e){e.preventDefault();var a=t(document).find("button.hb_button");a.attr("disabled","disabled"),a.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+a.html());var n=t(this).serializeArray();t.ajax({url:hotel_settings.ajax,type:"POST",data:n,dataType:"html",success:function(t){t=o(t),window.location.href=t.redirect}})})},remove_cart:function(){t(document).on("click",".hb_remove_cart_item",function(e){e.preventDefault();var a=t(this).parents("tr"),n=t(this).attr("data-cart-id");t.ajax({url:hotel_settings.ajax,type:"POST",data:{cart_id:n,nonce:hotel_settings.nonce,action:"hotel_booking_ajax_remove_item_cart"},dataType:"html",beforeSend:function(){a.hb_overlay_ajax_start()}}).done(function(e){void 0!==(e=o(e)).status&&"success"===e.status||alert(hotel_booking_i18n.waring.try_again),t("body").trigger("hb_removed_item_to_cart"),void 0!==e.sub_total&&t("span.hb_sub_total_value").html(e.sub_total),void 0!==e.grand_total&&t("span.hb_grand_total_value").html(e.grand_total),void 0!==e.advance_payment&&t("span.hb_advance_payment_value").html(e.advance_payment),a.hb_overlay_ajax_stop(),a.remove(),HB_Booking_Cart.hb_remove_cart_item_callback(n,e)})}),t(".hotel_booking_mini_cart").on("click",".hb_mini_cart_remove",function(e){e.preventDefault();t(".hotel_booking_mini_cart");var a=t(this).parents(".hb_mini_cart_item"),n=a.attr("data-cart-id");t.ajax({url:hotel_settings.ajax,type:"POST",data:{cart_id:n,nonce:hotel_settings.nonce,action:"hotel_booking_ajax_remove_item_cart"},dataType:"html",beforeSend:function(){a.addClass("before_remove"),a.hb_overlay_ajax_start()}}).done(function(t){void 0!==(t=o(t)).status&&"success"===t.status?(HB_Booking_Cart.hb_remove_cart_item_callback(n,t),a.hb_overlay_ajax_stop()):alert(hotel_booking_i18n.waring.try_again)})})}},t(document).ready(function(){(e=t("input[name=htb_stripe_publish]")).length&&(d=e.val(),e.val("")),HB_Booking_Cart.init(),t.datepicker.setDefaults({dateFormat:hotel_booking_i18n.date_time_format});var c=new Date,h=new Date,m=t(document).triggerHandler("hotel_booking_min_check_in_date",[1,c,h]);n(m=parseInt(m))||(m=1),h.setDate(c.getDate()+m),t('input[id^="check_in_date"]').datepicker({dateFormat:hotel_booking_i18n.date_time_format,firstDay:hotel_booking_i18n.date_start,monthNames:hotel_booking_i18n.monthNames,monthNamesShort:hotel_booking_i18n.monthNamesShort,dayNames:hotel_booking_i18n.dayNames,dayNamesShort:hotel_booking_i18n.dayNamesShort,dayNamesMin:hotel_booking_i18n.dayNamesMin,minDate:c,maxDate:"+365D",numberOfMonths:1,onSelect:function(){var e=t(this).attr("id");e=e.replace("check_in_date_","");var a=t(this).datepicker("getDate"),i=hotel_settings.min_booking_date;n(i)||(i=1),a&&a.setDate(a.getDate()+i),t("#check_out_date_"+e).datepicker("option","minDate",a)}}).on("click",function(){t(this).datepicker("show")}),t('input[id^="check_out_date"]').datepicker({dateFormat:hotel_booking_i18n.date_time_format,monthNames:hotel_booking_i18n.monthNames,monthNamesShort:hotel_booking_i18n.monthNamesShort,dayNames:hotel_booking_i18n.dayNames,dayNamesShort:hotel_booking_i18n.dayNamesShort,dayNamesMin:hotel_booking_i18n.dayNamesMin,minDate:h,maxDate:"+365D",numberOfMonths:1,onSelect:function(){var e=t(this).attr("id");e=e.replace("check_out_date_","");var a=t("#check_in_date_"+e),i=t(this).datepicker("getDate"),r=hotel_settings.min_booking_date;n(r)||(r=1),i.setDate(i.getDate()-r),a.datepicker("option","maxDate",i)}}).on("click",function(){t(this).datepicker("show")}),t("#datepickerImage").click(function(){t("#txtFromDate").datepicker("show")}),t("#datepickerImage1").click(function(){t("#txtToDate").datepicker("show")}),t('form[class^="hb-search-form"]').submit(function(e){e.preventDefault();var a=t(this),n=a.attr("class"),i=a.find('button[type="submit"]');n=n.replace("hb-search-form-",""),a.find("input, select").removeClass("error");var s=t("#check_in_date_"+n);if(""===s.val()||!r(s.datepicker("getDate")))return s.addClass("error"),!1;var l=t("#check_out_date_"+n);if(""===l.val()||!r(l.datepicker("getDate")))return l.addClass("error"),!1;if(null===s.datepicker("getDate"))return s.addClass("error"),!1;if(null===l.datepicker("getDate"))return l.addClass("error"),!1;var d=new Date(s.datepicker("getDate")),_=new Date(l.datepicker("getDate"));new Date;if(d.compareWith(_)>=0)return s.addClass("error"),error=!0,!1;for(var c=t(this).attr("action")||window.location.href,h=t(this).serializeArray(),m=0;m<h.length;m++){var u=h[m];if("check_in_date"===u.name||"check_out_date"===u.name){var p=t(this).find('input[name="'+u.name+'"]').datepicker("getDate");p=new Date(p),h.push({name:"hb_"+u.name,value:p.getTime()/1e3-60*p.getTimezoneOffset()})}}return t.ajax({url:hotel_settings.ajax,type:"post",dataType:"html",data:h,beforeSend:function(){i.attr("disabled","disabled"),i.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+i.html())},success:function(t){void 0!==(t=o(t)).success&&t.success&&(void 0!==t.url?window.location.href=t.url:t.sig&&(-1===c.indexOf("?")?c+="?hotel-booking-params="+t.sig:c+="&hotel-booking-params="+t.sig,window.location.href=c))}}),!1}),t("form#hb-payment-form").submit(function(e){e.preventDefault();var a=t(this),n=a.find('input[name="hb-payment-method"]:checked').val(),r=window.location.href.replace(/\?.*/,"");a.find(".hotel_checkout_errors").slideUp().remove(),a.find("input, select").parents("div:first-child").removeClass("error");try{if(!1===a.triggerHandler("hb_order_submit"))return!1;if(a.attr("action",r),!function(e){var a=e.find('select[name="title"]'),n=[];1===a.length&&-1===a.val()&&(n.push(hotel_booking_i18n.empty_customer_title),a.parents("div:first").addClass("error"));var r=e.find('input[name="first_name"]');1!==r.length||r.val()||(n.push(hotel_booking_i18n.empty_customer_first_name),r.parents("div:first").addClass("error"));var o=e.find('input[name="last_name"]');1!==o.length||o.val()||(n.push(hotel_booking_i18n.empty_customer_last_name),o.parents("div:first").addClass("error"));var s=e.find('input[name="address"]');1!==s.length||s.val()||(n.push(hotel_booking_i18n.empty_customer_address),s.parents("div:first").addClass("error"));var d=e.find('input[name="city"]');1!==d.length||d.val()||(n.push(hotel_booking_i18n.empty_customer_city),d.parents("div:first").addClass("error"));var _=e.find('input[name="state"]');1!==_.length||_.val()||(n.push(hotel_booking_i18n.empty_customer_state),_.parents("div:first").addClass("error"));var c=e.find('input[name="postal_code"]');1!==c.length||c.val()||(n.push(hotel_booking_i18n.empty_customer_postal_code),c.parents("div:first").addClass("error"));var h=e.find('select[name="country"]');1!==h.length||h.val()||(n.push(hotel_booking_i18n.empty_customer_country),h.parents("div:first").addClass("error"));var m=e.find('input[name="phone"]');1!==m.length||m.val()||(n.push(hotel_booking_i18n.empty_customer_phone),m.parents("div:first").addClass("error"));var u=e.find('input[name="email"]');1!==u.length||i(u.val())||(n.push(hotel_booking_i18n.customer_email_invalid),u.parents("div:first").addClass("error"));var p=e.find('input[name="hb-payment-method"]:checked');1===p.length&&0===p.length&&(n.push(hotel_booking_i18n.no_payment_method_selected),p.parents("div:first").addClass("error"));var f=e.find('input[name="tos"]');return f.length&&!f.is(":checked")&&(n.push(hotel_booking_i18n.confirm_tos),f.addClass("error")),t('input[name="existing-customer-id"]').val()&&(u.val()!=t('input[name="existing-customer-email"]',e).val()&&n.push(hotel_booking_i18n.customer_email_not_match),u.parents("div:first").addClass("error"),e.find('input[name="existing-customer-id"]').parents("div:first").addClass("error")),!(n.length>0&&(l(n),1))}(a))return!1;"stripe"===n?_(a):function(e){var a=window.location.href.replace(/\?.*/,"");e.attr("action",a);var n=e.find('button[type="submit"]'),i=n.html();!1!==e.triggerHandler("hotel_booking_place_order")&&t.ajax({type:"POST",url:hotel_settings.ajax,data:e.serialize(),dataType:"text",beforeSend:function(){n.attr("disabled","disabled"),n.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+n.html())},success:function(t){n.html(i);try{var e=o(t);"success"===e.result?void 0!==e.redirect&&(window.location.href=e.redirect):void 0!==e.message&&alert(e.message)}catch(t){alert(t)}},error:function(){n.html(i),l([hotel_booking_i18n.waring.try_again])}})}(a)}catch(e){alert(e)}}),t("#fetch-customer-info").click(s),a.on("click",".hb-view-booking-room-details, .hb_search_room_item_detail_price_close",function(e){e.preventDefault(),t(this).parents(".hb-room-content").find(".hb-booking-room-details").toggleClass("active")}).on("click",'input[name="hb-payment-method"]',function(){this.checked&&(t(".hb-payment-method-form:not(."+this.value+")").slideUp(),t(".hb-payment-method-form."+this.value).slideDown())}).on("click","#hb-apply-coupon",function(){!function(){var e=t('input[name="hb-coupon-code"]'),a=e.parents("table");if(!e.val())return alert(hotel_booking_i18n.enter_coupon_code),e.focus(),!1;t.ajax({type:"POST",url:hotel_settings.ajax,data:{action:"hotel_booking_apply_coupon",code:e.val()},dataType:"text",beforeSend:function(){a.hb_overlay_ajax_start()},success:function(t){a.hb_overlay_ajax_stop();try{var e=o(t);"success"==e.result?window.location.href=window.location.href:alert(e.message)}catch(t){alert(t)}},error:function(){a.hb_overlay_ajax_stop(),alert("error")}})}()}).on("click","#hb-remove-coupon",function(e){e.preventDefault();var a=t(this).parents("table");t.ajax({url:hotel_settings.ajax,type:"post",dataType:"html",data:{action:"hotel_booking_remove_coupon"},beforeSend:function(){a.hb_overlay_ajax_start()},success:function(t){a.hb_overlay_ajax_stop(),"success"==(t=o(t)).result&&(window.location.href=window.location.href)}})});var u=t(".hb_single_room_details"),p=u.find(".hb_single_room_tabs"),f=u.find(".hb_single_room_tabs_content"),v=t(".hb_single_room_tab_details"),g=window.location.href.match(/\#comment-[0-9]+/gi);g&&void 0!==g[0]?(p.find("a").removeClass("active"),p.find('a[href="#hb_room_reviews"]').addClass("active")):(p.find("a:first").addClass("active"),t(".hb_single_room_tabs_content .hb_single_room_tab_details:not(:first)").hide()),v.hide();var b=p.find("a.active").attr("href");f.find(b).fadeIn(),p.find("a").on("click",function(e){e.preventDefault(),p.find("a").removeClass("active"),t(this).addClass("active");var a=t(this).attr("href");return v.hide(),f.find(a).fadeIn(),!1}),t(".hb-rating-input").rating(),t("#commentform").submit(function(){var e=t("#rating"),a=e.val();if(1===e.length&&void 0!==a&&""===a)return window.alert(hotel_booking_i18n.review_rating_required),!1;t(this).submit()})}),t.fn.rating=function(){for(var e=this,a=this.length,n=0;n<a;n++){var i=t(e[n]),r=[];r.push('<span class="rating-input" data-rating="1"></span>'),r.push('<span class="rating-input" data-rating="2"></span>'),r.push('<span class="rating-input" data-rating="3"></span>'),r.push('<span class="rating-input" data-rating="4"></span>'),r.push('<span class="rating-input" data-rating="5"></span>'),r.push('<input name="rating" id="rating" type="hidden" value="" />'),i.html(r.join("")),i.mousemove(function(a){a.preventDefault();for(var n=e.offset(),i=a.pageX-n.left,r=t(this).find(".rating-input"),o=r.width(),s=Math.ceil(i/o),l=0;l<r.length;l++){var d=t(r[l]);parseInt(d.attr("data-rating"))<=s&&d.addClass("high-light")}}).mouseout(function(a){var n=e.offset(),i=(a.pageX,n.left,t(this).find(".rating-input")),r=(i.width(),t(this).find(".rating-input.selected"));if(0===r.length)i.removeClass("high-light");else for(var o=0;o<i.length;o++){var s=t(i[o]);parseInt(s.attr("data-rating"))<=parseInt(r.attr("data-rating"))?s.addClass("high-light"):s.removeClass("high-light")}}).mousedown(function(a){var n=e.offset(),r=a.pageX-n.left,o=t(this).find(".rating-input"),s=o.width(),l=Math.ceil(r/s);o.removeClass("selected").removeClass("high-light");for(var d=0;d<o.length;d++){var _=t(o[d]);if(parseInt(_.attr("data-rating"))===l){_.addClass("selected").addClass("high-light");break}_.addClass("high-light")}i.find('input[name="rating"]').val(l)})}},t.fn.hb_overlay_ajax_start=function(){this.css({position:"relative",overflow:"hidden"});this.append('<div class="hb_overlay_ajax"></div>')},t.fn.hb_overlay_ajax_stop=function(){var t=this.find(".hb_overlay_ajax");t.addClass("hide");var e=setTimeout(function(){t.remove(),clearTimeout(e)},400)}}(jQuery);