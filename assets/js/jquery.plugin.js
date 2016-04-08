/**
 * FAQ JavaScript handling.  This script handles opening/closing of the questions and answers,
 * toggling of the icon handle, and setting of the class states.
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthcode.io
 * @license     GNU General Public License 2.0+
 */
;(function ($, window, document, undefined) {
    'use strict'

    function init() {
        initFAQ();

        initQA();
    }

    function initFAQ() {
        $('.faq-question').fulcrumFAQ( faqParameters.faq );
    }

    function initQA() {

        $('.qa-question').fulcrumFAQ( faqParameters.qa );
    }

    $(document).ready(function () {
        if ( typeof faqParameters === "object" ) {
            init();
        }
    });

}(jQuery, window, document));
