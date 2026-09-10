import EmblaCarousel from 'embla-carousel';
import GLightbox from 'glightbox';

document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach((root) => {
        const embla = EmblaCarousel(root, {
            loop: false,
            align: 'start',
            slidesToScroll: 1,
            containScroll: 'trimSnaps',
        });

        const prevBtn = document.querySelector(
            `[data-carousel-prev="${root.dataset.carousel}"]`,
        );
        const nextBtn = document.querySelector(
            `[data-carousel-next="${root.dataset.carousel}"]`,
        );

        const updateButtons = () => {
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

    GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: false,
        autoplayVideos: false,
    });
});
