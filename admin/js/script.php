    <script>
        // Toggle Sidebar
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });

        document.querySelector('.sidebar-collapse').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('active');
            document.querySelector('.main-content').classList.remove('active');
        });

        // Modal Functionality
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        // Close modal when clicking on close button or outside modal
        document.querySelectorAll('.modal .close, .modal .btn-outline').forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                closeModal(modal.id);
            });
        });

        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal(this.id);
                }
            });
        });

        // Prevent modal content click from closing modal
        document.querySelectorAll('.modal-content').forEach(content => {
            content.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        // Demo: Open add farmer modal when clicking add button
        document.querySelectorAll('.action-btn .fa-edit').forEach(button => {
            button.addEventListener('click', function() {
                openModal('addFarmerModal');
            });
        });

        // Active menu item
        document.querySelectorAll('.sidebar-menu li a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-menu li a').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Responsive sidebar toggle for mobile
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                document.querySelector('.sidebar').classList.remove('active');
                document.querySelector('.main-content').classList.remove('active');
            }
        });
    </script>