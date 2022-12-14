(function(window, document, $) {
    'use strict';
    $(document).ready( function(){
        $(".icons-tab-steps").steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: 'Submit'
            },
            onFinished: function (event, currentIndex) {
                alert("Form submitted.");
            }
        });

        // To select event date
        $('.pickadate').pickadate();
     });
})(window, document, jQuery);