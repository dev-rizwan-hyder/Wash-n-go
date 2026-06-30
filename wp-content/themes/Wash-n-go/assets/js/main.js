(function () {
  const ready = (callback) => {
    if (document.readyState !== 'loading') {
      callback();
      return;
    }

    document.addEventListener('DOMContentLoaded', callback);
  };

  ready(() => {
    const header = document.querySelector('[data-site-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const dropdowns = document.querySelectorAll('[data-dropdown]');
    const mobileGroups = document.querySelectorAll('[data-mobile-group]');

    if (!header) {
      return;
    }

    const closeDesktopDropdowns = (except = null) => {
      dropdowns.forEach((dropdown) => {
        if (dropdown === except) {
          return;
        }

        dropdown.classList.remove('is-open');
        const toggle = dropdown.querySelector('[data-dropdown-toggle]');
        if (toggle) {
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    };

    dropdowns.forEach((dropdown) => {
      const toggle = dropdown.querySelector('[data-dropdown-toggle]');

      if (!toggle) {
        return;
      }

      toggle.addEventListener('click', (event) => {
        event.stopPropagation();
        const shouldOpen = !dropdown.classList.contains('is-open');

        closeDesktopDropdowns(dropdown);
        dropdown.classList.toggle('is-open', shouldOpen);
        toggle.setAttribute('aria-expanded', String(shouldOpen));
      });
    });

    const closeMobileMenu = () => {
      header.classList.remove('is-menu-open');
      document.body.classList.remove('is-menu-locked');

      if (menuToggle) {
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    };

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', () => {
        const shouldOpen = !header.classList.contains('is-menu-open');

        header.classList.toggle('is-menu-open', shouldOpen);
        document.body.classList.toggle('is-menu-locked', shouldOpen);
        menuToggle.setAttribute('aria-expanded', String(shouldOpen));
      });
    }

    mobileGroups.forEach((group) => {
      const toggle = group.querySelector('[data-mobile-toggle]');

      if (!toggle) {
        return;
      }

      toggle.addEventListener('click', () => {
        const shouldOpen = !group.classList.contains('is-open');

        group.classList.toggle('is-open', shouldOpen);
        toggle.setAttribute('aria-expanded', String(shouldOpen));
      });
    });

    document.addEventListener('click', (event) => {
      if (!event.target.closest('[data-dropdown]')) {
        closeDesktopDropdowns();
      }

      if (header.classList.contains('is-menu-open') && !event.target.closest('[data-site-header]')) {
        closeMobileMenu();
      }
    });

    document.addEventListener('keydown', (event) => {
      if (event.key !== 'Escape') {
        return;
      }

      closeDesktopDropdowns();
      closeMobileMenu();
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        closeMobileMenu();
      }
    });
  });

  ready(() => {
    const tabButtons = document.querySelectorAll('[data-pricing-tab]');
    const tabContents = document.querySelectorAll('[data-pricing-content]');

    if (!tabButtons.length || !tabContents.length) {
      return;
    }

    tabButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const target = button.getAttribute('data-pricing-tab');

        tabButtons.forEach((tabButton) => {
          const isActive = tabButton === button;

          tabButton.classList.toggle('active', isActive);
          tabButton.setAttribute('aria-selected', String(isActive));
        });

        tabContents.forEach((content) => {
          content.classList.toggle('active', content.getAttribute('data-pricing-content') === target);
        });
      });
    });
  });
})();
