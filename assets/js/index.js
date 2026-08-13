
AOS.init({

    duration: 800,

    easing: 'ease-out-cubic',

    once: true,

    offset: 60

});

lucide.createIcons();


/* =========================================
   FAQ ACCORDION
========================================= */

function toggleFAQ(button) {

    const currentItem =
        button.closest('.faq-item');

    const accordion =
        document.getElementById('faqAccordion');

    const allItems =
        accordion.querySelectorAll('.faq-item');


    const isCurrentlyOpen =
        currentItem.classList.contains('active');


    /*
     * Close all FAQ items
     */

    allItems.forEach(function (item) {

        item.classList.remove('active');

        const question =
            item.querySelector('.faq-question');

        if (question) {

            question.setAttribute(
                'aria-expanded',
                'false'
            );

        }

    });


    /*
     * Open clicked item
     */

    if (!isCurrentlyOpen) {

        currentItem.classList.add('active');

        button.setAttribute(
            'aria-expanded',
            'true'
        );

    }


    /*
     * Refresh Lucide icons
     */

    if (
        typeof lucide !== 'undefined'
    ) {

        lucide.createIcons();

    }

}

