import './vendor/mobile-menu/mobile-menu.js';

import EmblaCarousel from 'embla-carousel';
import GLightbox from 'glightbox';

document.addEventListener('DOMContentLoaded', () => {
    initCarousels();
    initLightbox();
    initYandexMap();
    initPopups();
});

function initCarousels() {
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach((root) => {
        const loop = root.hasAttribute('data-carousel-loop');

        const embla = EmblaCarousel(root, {
            loop,
            align: 'start',
            slidesToScroll: 1,
            containScroll: loop ? false : 'trimSnaps',
        });

        const prevBtn = document.querySelector(
            `[data-carousel-prev="${root.dataset.carousel}"]`,
        );
        const nextBtn = document.querySelector(
            `[data-carousel-next="${root.dataset.carousel}"]`,
        );

        const updateButtons = () => {
            if (loop) {
                if (prevBtn) {
                    prevBtn.disabled = false;
                }
                if (nextBtn) {
                    nextBtn.disabled = false;
                }
                return;
            }

            if (prevBtn) {
                prevBtn.disabled = !embla.canScrollPrev();
            }
            if (nextBtn) {
                nextBtn.disabled = !embla.canScrollNext();
            }
        };

        if (prevBtn) {
            prevBtn.addEventListener('click', () => embla.scrollPrev());
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', () => embla.scrollNext());
        }

        embla.on('select', updateButtons);
        embla.on('reInit', updateButtons);
        updateButtons();
    });
}

function initLightbox() {
    GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: false,
        autoplayVideos: false,
    });
}

function initPopups() {
    const dialogs = document.querySelectorAll('[data-popup]');

    if (!dialogs.length) {
        return;
    }

    document.querySelectorAll('[data-popup-open]').forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            event.preventDefault();
            const id = trigger.dataset.popupOpen;
            const dialog = document.getElementById(id);

            if (dialog && typeof dialog.showModal === 'function') {
                dialog.showModal();
            }
        });
    });

    dialogs.forEach((dialog) => {
        dialog.querySelectorAll('[data-popup-close]').forEach((closeBtn) => {
            closeBtn.addEventListener('click', () => dialog.close());
        });

        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) {
                dialog.close();
            }
        });
    });
}

function initYandexMap() {
    const mapEl = document.getElementById('contacts-map');

    if (!mapEl || typeof ymaps === 'undefined') {
        return;
    }

    const center = mapEl.dataset.center.split(',').map(Number);
    const zoom = Number(mapEl.dataset.zoom) || 16;
    const pin = mapEl.dataset.pin;

    ymaps.ready(() => {
        const map = new ymaps.Map(mapEl, {
            center,
            zoom,
            controls: ['zoomControl'],
        }, {
            suppressMapOpenBlock: true,
        });

        const placemark = new ymaps.Placemark(
            center,
            {},
            {
                iconLayout: 'default#image',
                iconImageHref: pin,
                iconImageSize: [40, 50],
                iconImageOffset: [-20, -50],
            },
        );

        map.geoObjects.add(placemark);
        map.behaviors.disable('scrollZoom');
    });
}
