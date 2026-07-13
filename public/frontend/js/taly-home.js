(function () {
    'use strict';

    var tabs = document.querySelectorAll('[data-track-tab]');
    var panels = document.querySelectorAll('[data-track-panel]');

    if (!tabs.length) return;

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var slug = tab.getAttribute('data-track-tab');

            tabs.forEach(function (t) {
                var active = t === tab;
                t.classList.toggle('is-active', active);
                t.setAttribute('aria-selected', active ? 'true' : 'false');
            });

            panels.forEach(function (panel) {
                var active = panel.getAttribute('data-track-panel') === slug;
                panel.classList.toggle('is-active', active);
                if (active) {
                    panel.removeAttribute('hidden');
                } else {
                    panel.setAttribute('hidden', 'hidden');
                }
            });
        });
    });
})();
