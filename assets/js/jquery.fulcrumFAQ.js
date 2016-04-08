/**
 * Fulcrum FAQ plugin
 *
 * Question and Answer JavaScript handling.
 *
 * This script handles opening/closing of the questions and answers,
 * toggling of the icon handle, and setting of the class states.  It can be used for hints, FAQs, or any content
 * where you want to show a section and then hide away the content.  Clicking on the element will reveal the
 * hidden content (when it is hidden) or hide it (when showing).
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthcode.io
 * @license     GNU General Public License 2.0+
 */
;(function ($, window, document, undefined) {

    'use strict'

    $.fn.fulcrumFAQ = function(options) {
        var faq = $(this),
            defaults = {
                iconEl: '.qa-icon',
                iconClassname: {
                    open: '',
                    close: ''
                }
            };

        // Makes variables public
        faq.vars = $.extend({}, defaults, options);

        var namespace = faq.vars.namespace,
            methods = {},
            answers = faq.next(),
            iconClassname = {
                open: faq.vars.iconClassname.open,
                close: faq.vars.iconClassname.close
            },
            icons = faq.find( faq.vars.iconEl );

        // Private methods
        methods = {
            init: function() {
                methods.closeAnswersOnPageLoad();

                methods.clickHandler();
            },

            /**
             * Close the answer(s) on page load, based upon if it should be closed.
             *
             * @since 1.0.0
             */
            closeAnswersOnPageLoad: function() {
                $.each( faq, function( index ){
                    if ( methods.isAnswerToBeClosed( index ) ) {
                        var $answer = methods.getAnswer( index );

                        $answer.hide();
                    }
                });
            },

            /**
             * Clicking on the question fires the click event.  This function then opens or closes the answer and changes the icon.
             *
             * @since 1.0.0
             */
            clickHandler: function() {
                faq.on( "click", function() {
                    var index = faq.index( this );

                    methods.toggleAnswer( index );
                });
            },

            /**
             * Toggle the answer open or close, as well as change the icon.
             *
             * @param int index
             */
            toggleAnswer: function( index ) {
                var $answer = methods.getAnswer( index ),
                    $icon = methods.getIcon( index );

                if ( methods.isAnswerShowing( $answer ) ) {
                    methods.closeAnswer( $answer, $icon );
                } else {
                    methods.openAnswer( $answer, $icon );
                }
            },

            /**
             * Open the answer.  Slides down the answer and changes the icon.
             *
             * @param obj $answer
             * @param obj $icon
             */
            openAnswer: function( $answer, $icon ) {
                $answer.slideDown();

                methods.changeIconClassname( $icon, true );
            },

            /**
             * Close the answer.  Slides up the answer and changes the icon.
             *
             * @param obj $answer
             * @param obj $icon
             */
            closeAnswer: function( $answer, $icon ) {
                $answer.slideUp();

                methods.changeIconClassname( $icon, false );
            },

            /**
             * Change the Icon's classname
             *
             * @param object $icon
             * @param bool isOpening
             */
            changeIconClassname: function( $icon, isOpening ) {
                isOpening = methods.setDefaultState( isOpening );

                var removeClassname = methods.getIconClassname( isOpening, false ),
                    addClassname = methods.getIconClassname( isOpening, true );

                $icon
                    .removeClass( removeClassname )
                    .addClass( addClassname );
            },

            /***********************
             * Getters and Setters
             **********************/

            /**
             * Fetches the answer element out of the array of elements.
             *
             * @param int index
             *
             * @returns element or undefined
             */
            getAnswer: function( index ) {
                if ( index in answers ) {
                    return $( answers[ index ] );
                }
            },

            /**
             * Fetches the icon element out of the array of elements.
             *
             * @param int index
             *
             * @returns element or undefined
             */
            getIcon: function( index ) {
                if ( index in icons ) {
                    return $( icons[ index ] );
                }
            },

            /**
             * Fetches the icon's classname for either an `addClass()` or `removeClass()` action.
             *
             *
             * @param bool isOpening Indicates if icon should be opening.
             * @param bool isAdd Indicates if this is an `addClass()` action
             *
             * @returns {string}
             */
            getIconClassname: function( isOpening, isAdd ) {
                isOpening = methods.setDefaultState( isOpening );
                isAdd = methods.setDefaultState( isAdd );

                if ( isAdd ) {
                    return isOpening ? iconClassname.close : iconClassname.open;
                }

                return isOpening ? iconClassname.open : iconClassname.close;
            },

            /**
             * Sets the default state for the variable, i.e. to ensure it is true or false (and not undefined).
             *
             * @param variable
             *
             * @returns {boolean}
             */
            setDefaultState: function ( variable ) {
                return variable == true ? true : false;
            },

            /***********************
             * State Checkers
             **********************/

            /**
             * Checks if the answer is to be closed.
             *
             * If the icon has a closed classname, then it returns true.
             *
             * @since 1.0.0
             *
             * @returns bool
             */
            isAnswerToBeClosed: function( index ) {
                if ( index in icons ) {
                    var icon = icons[ index ];

                    return $( icon ).hasClass(iconClassname.open);
                }

                return false;
            },

            isAnswerShowing: function( $answer ) {
                return $answer.is(':visible');
            },

        } // end of private methods

        methods.init();

    } // end of qa object

})(jQuery, window, document);