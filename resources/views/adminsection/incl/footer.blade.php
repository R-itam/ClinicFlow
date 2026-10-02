  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery Bootstrap 5 Modal Bridge -->
  <script>
    if (typeof jQuery !== 'undefined') {
      jQuery.fn.modal = function (options) {
        return this.each(function () {
          var el = this;
          if (el.parentElement !== document.body) {
            document.body.appendChild(el);
          }
          if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            var instance = bootstrap.Modal.getInstance(el);
            if (options === 'hide') {
              if (instance) instance.hide();
            } else if (options === 'destroy' || options === 'dispose') {
              if (instance) instance.dispose();
            } else {
              if (instance) instance.dispose();
              var config = typeof options === 'object' ? options : {};
              var newModal = new bootstrap.Modal(el, config);
              newModal.show();
            }
          } else {
            // Fallback display if Bootstrap JS object is not found
            if (options === 'hide') {
              $(el).removeClass('show').hide();
              $('.modal-backdrop').remove();
            } else {
              $(el).addClass('show').css({ display: 'block', 'z-index': 1055 });
              if (!$('.modal-backdrop').length) {
                $('body').append('<div class="modal-backdrop fade show"></div>');
              }
            }
          }
        });
      };
    }
  </script>

  <!-- Sidebar Toggle Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sidebar = document.getElementById('sidebar');
      const content = document.getElementById('content');
      const topbar = document.getElementById('topbar');
      const toggleBtn = document.getElementById('toggleBtn');
      const mobileBtn = document.getElementById('mobileBtn');
      const overlay = document.getElementById('overlay');

      if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
          if (sidebar) sidebar.classList.toggle('collapsed');
          if (content) content.classList.toggle('full');
          if (topbar) topbar.classList.toggle('full');
        });
      }

      if (mobileBtn) {
        mobileBtn.addEventListener('click', function () {
          if (sidebar) sidebar.classList.add('mobile-show');
          if (overlay) overlay.classList.add('show');
        });
      }

      if (overlay) {
        overlay.addEventListener('click', function () {
          if (sidebar) sidebar.classList.remove('mobile-show');
          if (overlay) overlay.classList.remove('show');
        });
      }
    });
  </script>
</body>
</html>