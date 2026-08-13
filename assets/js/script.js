

/* Initialize AOS */

AOS.init({
    duration: 700,
    once: true,
    offset: 80,
    easing: 'ease-out-cubic'
});


/* Initialize Lucide Icons */

lucide.createIcons();


/* Mobile Menu */

const mobileMenuButton =
    document.getElementById('mobileMenuButton');

const mobileMenu =
    document.getElementById('mobileMenu');

const menuIcon =
    document.getElementById('menuIcon');


mobileMenuButton.addEventListener('click', function () {

    mobileMenu.classList.toggle('show');

    const isOpen =
        mobileMenu.classList.contains('show');


    if (isOpen) {

        menuIcon.setAttribute('data-lucide', 'x');

    } else {

        menuIcon.setAttribute('data-lucide', 'menu');

    }

    lucide.createIcons();

});


/* Close mobile menu after clicking a link */

document
    .querySelectorAll('#mobileMenu a')
    .forEach(function (link) {

        link.addEventListener('click', function () {

            mobileMenu.classList.remove('show');

            menuIcon.setAttribute(
                'data-lucide',
                'menu'
            );

            lucide.createIcons();

        });

    });


document.addEventListener(
    "DOMContentLoaded",
    function () {

        /* AOS */

        AOS.init({

            duration: 800,

            easing: "ease-out-cubic",

            once: true,

            offset: 60

        });


        /* Lucide */

        lucide.createIcons();

    }
);

/* =========================================
   NEWSLETTER
========================================= */

const newsletterForm =
    document.getElementById('newsletterForm');


if (newsletterForm) {

    newsletterForm.addEventListener(
        'submit',
        function (event) {

            event.preventDefault();


            const email =
                newsletterForm
                    .querySelector('input[name="email"]')
                    .value
                    .trim();


            if (!email) {

                return;

            }


            /*
             * If SweetAlert2 is available
             */

            if (
                typeof Swal !== 'undefined'
            ) {

                Swal.fire({

                    icon: 'success',

                    title: 'Subscribed!',

                    text:
                        'Thank you for subscribing to our newsletter.',

                    confirmButtonColor:
                        '#2563eb',

                    timer: 2500,

                    showConfirmButton: false

                });

            }


            newsletterForm.reset();

        }
    );

}


/* =========================================
   COMING SOON POPUP
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    const comingSoonLinks =
        document.querySelectorAll(".coming-soon-link");

    comingSoonLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            event.preventDefault();

            const pageName =
                this.textContent.trim();

            Swal.fire({

                icon: "info",

                title: "Coming Soon",

                html: `
                    <p style="
                        margin: 0;
                        color: #64748b;
                        font-size: 14px;
                        line-height: 1.6;
                    ">
                        <strong>${pageName}</strong> page
                        is currently under development.
                        <br>
                        Please check back soon!
                    </p>
                `,

                confirmButtonText: "Okay",

                confirmButtonColor: "#2563eb",

                background: "#ffffff",

                customClass: {

                    popup: "coming-soon-popup",

                    title: "coming-soon-title",

                    confirmButton: "coming-soon-button"

                },

                showClass: {

                    popup: `
                        animate__animated
                        animate__zoomIn
                    `

                },

                hideClass: {

                    popup: `
                        animate__animated
                        animate__zoomOut
                    `

                }

            });

        });

    });

});