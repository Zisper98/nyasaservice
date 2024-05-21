document.addEventListener('DOMContentLoaded', () => {
    const clickableImages = document.querySelectorAll('.clickable-image');
    const iframeContainer = document.getElementById('iframe-container');
    const iframe = iframeContainer.querySelector('iframe');

    clickableImages.forEach(image => {
        image.addEventListener('click', () => {
            const iframeSrc = image.getAttribute('data-iframe-src');
            iframe.setAttribute('src', iframeSrc);
            iframeContainer.style.display = 'block';
        });
    });

    // Close the iframe container when clicking outside of the iframe
    iframeContainer.addEventListener('click', (e) => {
        if (e.target === iframeContainer) {
            iframeContainer.style.display = 'none';
            iframe.setAttribute('src', ''); // Stop the video
        }
    });
});
