// JavaScript Document
(function ($, window) {
	
	var groupkit = {};

    groupkit.properties = {
        windowWidth : '',
        isMobile : false,
        isDesktop : false
    };

    groupkit.environment = {
        mobileCheck : function() {
            var check = false;
            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        },
        resize : function(){
            console.log(groupkit.properties.windowWidth);
        },
        init: function(){
            var self = groupkit;
            // window size
            self.properties.windowWidth = $(window).width();
            // device type
            if(self.environment.mobileCheck()){
                self.environment.isMobile = true;
                $('html').addClass('mobile');
            } else {
                self.environment.isDesktop = true;
                $('html').addClass('desktop');
            }

            $('.back-button').on('click', function(evt) {
                evt.preventDefault();
                if($(this).attr('href') == '#'){
                    history.back(1);
                } else {
                    location.assign($(this).attr('href'));
                }
            });


            var $allForms = $('.form');
            $allForms.each(function(){
                var $thisForm = $(this);
                $('button.button', $thisForm).on('click', function(){
                    $thisForm.trigger('submit');
                });
            })
        }

    };

    groupkit.orders = {
        $html: $('.orders-list'),

        init: function(){
            var self = this,
                $orderRows = $('tr', self.$html);

            $orderRows.each(function(i, obj){
                $(obj).on('click', function(){
                    var orderId = $(this).data('order-id');
                    if(orderId !== undefined){
                        location.assign('ringleaders-edit-order.php?teamId='+orderId);
                    }
                });
            });

            $('tr:odd', self.$html).addClass('odd');
        }
    };

    groupkit.garmentSelection = {
        $html: $('.garment-selection'),
        $garmentDisplay: $('#garment-display', this.$html),
        $form: $('.form', this.$html),
        upLoadedImagesPath: "../uploaded/",

        init: function() {
            var self = this,
                $genderSwitcher = $('.gender-switch', self.$html),
                $genderSwitches = $('a', $genderSwitcher),
                $colourSwitcher = $('.colour-switch', self.$html),
                $colourSwitches = $('input', $colourSwitcher),
                $positionSwitcher = $('.position-switch', self.$html),
                $positionSwitches = $('input', $positionSwitcher),
                $styleSwitcher = $('.style-switch', self.$html),
                $styleSwitches = $('input', $styleSwitcher),
                $viewSwitcher = $('.view-switch', self.$html),
                $viewSwitches = $('a', $viewSwitcher);

            if ($genderSwitcher.length > 0) {
                $genderSwitches.on('click', function (evt) {
                    evt.preventDefault();
                    if (!$(this).hasClass('selected')) {
                        $genderSwitches.removeClass('selected');
                        $(this).addClass('selected');

                        var gender = $(this).data('gender'),
                            genderImage = $(self.$garmentDisplay).attr("data-gender-" + gender);

                        self.$garmentDisplay.css('background', 'url(uploaded/' + genderImage + ') 0 0 no-repeat');

                        // update value in form
                        $('#gender', self.$form).val(gender);
                    }
                });
            }

            if(self.$garmentDisplay.hasClass('preset')){
                var initialGender = $('#gender', self.$form).val(), // comes from PHP
                    genderImage = $(self.$garmentDisplay).attr("data-gender-" + initialGender);
                    self.$garmentDisplay.css('background', 'url(uploaded/' + genderImage + ') 0 0 no-repeat');
            }

            if ($colourSwitcher.length > 0) {
                $colourSwitches.on('change', function(){
                    var self = this,
                        $figure = $('.figure', self.$garmentDisplay),
                        newColour = $(this).val(),
                        varColourRef = $(this).attr('id');

                    $(this).siblings().find('span').removeClass("selected");
                    $("[for='"+ varColourRef+"']", self.$form).find('.colour').addClass('selected');

                    $figure.css('color',newColour);
                });
            }

            if($positionSwitcher.length > 0){
                $positionSwitches.on('change', function(){
                    var $figure = $('.figure', self.$garmentDisplay),
                        newPosition = $(this).val();

                    $figure.removeClass('left').removeClass('right').addClass(newPosition);
                });
            }

            if($styleSwitcher.length > 0){
                $styleSwitches.on('change', function(){
                    var figureAttr = $(this).attr('name').replace('Style',''),
                        $figureNameOrNumber = $('[data-figure="'+figureAttr+'"]', self.$garmentDisplay),
                        newStyle = $(this).val();

                    $figureNameOrNumber.css('font-family', newStyle);

                    // a little extra UX
                    var chosenNameOrNumberId = '#chosen-'+figureAttr;
                    //console.log(chosenNameOrNumberId);
                    $(chosenNameOrNumberId).css('font-family', newStyle);
                });
            }

            if($viewSwitcher.length > 0){
                $viewSwitches.on('click', function(evt){
                    evt.preventDefault();
                    if(!$(this).hasClass('selected')){
                        $viewSwitches.removeClass('selected');
                        $(this).addClass('selected');

                        var view = $(this).data('view'),
                            genderImage = $(self.$garmentDisplay).attr("data-garment-"+view);

                        self.$garmentDisplay.removeClass('back')
                            .removeClass('front')
                            .addClass(view)
                            .css('background','url(uploaded/'+genderImage+') 0 0 no-repeat');
                    }
                });
                var garmentImage = $(self.$garmentDisplay).attr("data-garment-front");
                    self.$garmentDisplay.css('background','url(uploaded/'+garmentImage+') 0 0 no-repeat');
            }
        }
    };

    groupkit.editables = {
        init: function(){
            var $editableController = $('#editable'),
                $nonEditableController = $('#nonEditable'),
                $readOnly = $('.read-only-mode'),
                $editable = $('.edit-mode');

            $editableController.on('click',function(evt){
                evt.preventDefault();
                $readOnly.addClass('display-none');
                $editable.removeClass('display-none');
            });

            $nonEditableController.on('click',function(evt){
                evt.preventDefault();
                $readOnly.removeClass('display-none');
                $editable.addClass('display-none');
            });
        }
    };

	groupkit.init = function(){

        // Other init
        groupkit.environment.init();
        groupkit.garmentSelection.init();
        groupkit.orders.init();
        groupkit.editables.init();
        //
        //
        //
        //

        // Resize triggers
		$(window).on('resize',function(){
			
			var newWidth = $(window).width(),
                oldWidth = groupkit.properties.windowWidth;

			if(oldWidth != newWidth){
                groupkit.properties.windowWidth = newWidth;
				groupkit.resize();
			}
		});

        groupkit.resize();
        $(window).trigger('resize');
	};

    // Main resize
    groupkit.resize = function(){
        groupkit.environment.resize();
        //
        //
        //
        //
    };

    // Main init
	$(document).ready(function(){
		groupkit.init();
	});

}(jQuery, window));