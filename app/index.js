
    function showTab(id) {
    // deactivate all
    document.querySelectorAll('.menu-category').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(el => {
    el.classList.remove('active');
    el.setAttribute('aria-selected', 'false');
});

    // activate selected
    document.getElementById('tab-' + id).classList.add('active');
    event.target.classList.add('active');
    event.target.setAttribute('aria-selected', 'true');
}

    // Simple scroll-reveal
    const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, { threshold: 0.1 });

    document.querySelectorAll('.about-card, .menu-card, .vibe-card, .ph-card').forEach(el => {    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
});
