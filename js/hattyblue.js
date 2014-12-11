// JavaScript Document
(function ($, window) {
	
	var hattyblue = {};

    hattyblue.properties = {
        windowWidth : '',
        isMobile : false,
        isDesktop : false
    };

    hattyblue.utils = {
        swapClass: function($obj, classToRemove, classToAdd){
            $obj.removeClass(classToRemove).addClass(classToAdd);
        },

        isEmptyField: function($inputField){
            var returnValue = true;
            if($.trim($inputField.val()).length > 0 ){
                returnValue = false;
            }
            return returnValue;
        },

        isValidEmailAddress: function($inputField){
            var returnValue = true,
                IsEmail = function(email){
                    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    return regex.test(email);
                };

            if(!IsEmail($.trim($inputField.val()))){
                returnValue = false;
            }
            return returnValue;
        }
    };

    hattyblue.environment = {

        mobileCheck : function() {
            var check = false;
            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        },

        resize : function(){
            // If you need to resize anything mobile for any reason
        },

        init: function(){
            var self = hattyblue;
            // window size
            self.properties.windowWidth = $(window).width();
            // desktop or mobile
            if(self.environment.mobileCheck()){
                self.environment.isMobile = true;
                $('html').addClass('mobile');
            } else {
                self.environment.isDesktop = true;
                $('html').addClass('desktop');
            }
        }
    };

    hattyblue.lightbox = {
        $anchors: $('.light-box'),

        resize: function(){
            if(('#overlay').length > 0){
               $('.close-button', $('#overlay')).trigger('click');
            }
        },

        init: function(){
            var self = this;

            self.$anchors.each(function(i, obj){
                $(obj).on('click', function(evt){
                    evt.preventDefault();

                    if(hattyblue.properties.windowWidth > 700){
                    // get content via ajax fo wide devices

                        // build overlay
                        var $overlay = $('<div id="overlay" />'),
                            $detailContainer = $('<div id="detail-box">'),
                            $closeButton = $('<span class="circle purple close-button"><i class="fa fa-close"></i></span>');

                        // close button
                        $closeButton.on('click', function(){
                            $overlay.fadeOut(function(){
                                $overlay.remove();
                            });
                        });

                        // attach just the job specs to overlay and then to page
                        $detailContainer.load($(obj).attr('href'), function(){

                            $overlay.html($detailContainer.find('.job-specs').append($closeButton));
                            $('body').append($overlay);

                            // scroll to top
                            $("html, body").animate({ scrollTop: 0 }, 1000);
                        });

                    } else {
                    // redirect to full page on narrow devices

                        location.assign($(obj).attr('href'));
                    }
                })
            });
        }
    };

    hattyblue.contactForm = {
        $html: $('#contact-form'),

        resize: function(){
            // If you need to resize the form for any reason
        },

        init: function(){
            // upload button
            var self = this,
                $cvInput = $('#cv', self.$html),
                $cvFileDisplay = $('#cv-file-display', self.$html);

            $cvInput.on('change', function(){
                var value = this.value + '',
                    valueArray = value.split('\\'),
                    fileName = valueArray[valueArray.length - 1];

                // display file name to user
                $cvFileDisplay.val(fileName);
            });

            // validation
            self.$html.on('submit', function(){

                var isValid = true,
                    userName = $('#name', self.$html),
                    userEmailAddress = $('#email', self.$html);

                $('.row', self.$html).removeClass('error');

                if(hattyblue.utils.isEmptyField(userName)){
                    userName.parent('.row').addClass('error');
                    isValid = false;
                }

                if(!hattyblue.utils.isValidEmailAddress(userEmailAddress)){
                    userEmailAddress.parent('.row').addClass('error');
                    isValid = false;
                }

                if(!isValid){
                    return false;
                }
            });

            // cosmetics
            var userName = $('#name', self.$html),
                userEmailAddress = $('#email', self.$html);

            userName.on('keypress', function() {
                userName.parent('.row').removeClass('error');
            });

            userEmailAddress.on('keypress', function() {
                userEmailAddress.parent('.row').removeClass('error');
            });
            // ----------------------------

        }
    };

    hattyblue.mobile = {
        $html: $('.navigation'),
        $button: $('#mobile-nav-button'),

        menuAction: function(action) {
            var self = this;
            if(action == 'open'){
                hattyblue.utils.swapClass(self.$html, 'hidden', 'displayed');
            } else if (action == 'close'){
                hattyblue.utils.swapClass(self.$html, 'displayed', 'hidden');
            }
        },

        resize: function(){
            var self = this,
                $logoDiv = $('#hattyblue-logo'),
                $logoAnchor = $('a', $logoDiv);

            // repositions mobile nav button
            self.$button.css('left', $logoAnchor.position().left + $logoAnchor.width() - 10);

            // hide menu
            self.menuAction('close');
            self.$button.removeClass('close').addClass('open');
        },

        init: function(){
            var self = this;

            self.$button.on('click', function(){
               if(self.$button.hasClass('open')){
                   hattyblue.utils.swapClass(self.$button, 'open', 'close');
                   self.menuAction('open');
               } else {
                   hattyblue.utils.swapClass(self.$button, 'close', 'open');
                   self.menuAction('close');
               }
            });
        }
    };

    // main resize
    hattyblue.resize = function(){
        hattyblue.environment.resize();
        hattyblue.mobile.resize();
        hattyblue.lightbox.resize();
        hattyblue.contactForm.resize();
    };

	hattyblue.init = function(){

        // other init
        hattyblue.environment.init();
        hattyblue.mobile.init();
        hattyblue.lightbox.init();
        hattyblue.contactForm.init();

        // resize triggers
		$(window).on('resize',function(){

			var newWidth = $(window).width(),
                oldWidth = hattyblue.properties.windowWidth;

			if(oldWidth != newWidth){
                hattyblue.properties.windowWidth = newWidth;
				hattyblue.resize();
			}
		});

        hattyblue.resize();
        $(window).trigger('resize');
	};

    // main init
	$(document).ready(function(){
		hattyblue.init();
	});

    // After all image have loaded
    $(window).load(function(){
        $('.show-last').removeClass('show-last');
        hattyblue.resize();
    });

}(jQuery, window));