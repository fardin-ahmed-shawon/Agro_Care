    <style>
        :root {
            --primary: #2E7D32;
            --primary-light: #4CAF50;
            --primary-dark: #1B5E20;
            --accent: #FF9800;
            --sidebar-bg: #263238;
            --sidebar-text: #B0BEC5;
            --sidebar-active: #37474F;
            --white: #FFFFFF;
            --light-bg: #F8F9FA;
            --border-color: #E0E0E0;
            --text-dark: #263238;
            --text-medium: #455A64;
            --text-light: #90A4AE;
            --error-color: #f44336;
            --success-color: #4CAF50;
            --warning-color: #FFC107;
            --info-color: #2196F3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-medium);
            line-height: 1.6;
            display: flex;
            min-height: 100vh;
        }

        a {
           color: green;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: var(--sidebar-bg);
            color: var(--sidebar-text);
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 20px;
            background-color: var(--primary-dark);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-header h3 {
            color: white;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .sidebar-header h3 i {
            margin-right: 10px;
            color: var(--accent);
        }

        .sidebar-menu {
            padding: 20px 0;
            overflow-y: auto;
            height: calc(100vh - 60px);
        }

        .sidebar-menu ul {
            list-style: none;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--sidebar-text);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .sidebar-menu li a:hover {
            background-color: var(--sidebar-active);
            color: white;
            border-left: 3px solid var(--accent);
        }

        .sidebar-menu li a.active {
            background-color: var(--sidebar-active);
            color: white;
            border-left: 3px solid var(--accent);
        }

        .sidebar-menu li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar-menu .menu-title {
            padding: 10px 20px;
            color: var(--accent);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            margin-top: 20px;
        }

        .sidebar-menu .menu-title:first-child {
            margin-top: 0;
        }

        .sidebar-collapse {
            cursor: pointer;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            transition: all 0.3s;
        }

        /* Top Navigation */
        .top-nav {
            background-color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .top-nav-left {
            display: flex;
            align-items: center;
        }

        .menu-toggle {
            font-size: 1.5rem;
            margin-right: 20px;
            cursor: pointer;
            color: var(--text-medium);
        }

        .search-bar {
            position: relative;
        }

        .search-bar input {
            padding: 8px 15px 8px 35px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            width: 250px;
            transition: all 0.3s;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }

        .search-bar i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .top-nav-right {
            display: flex;
            align-items: center;
        }

        .notification {
            position: relative;
            margin-right: 20px;
            cursor: pointer;
        }

        .notification i {
            font-size: 1.2rem;
            color: var(--text-medium);
        }

        .notification-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--error-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .user-profile span {
            font-weight: 500;
            color: var(--text-dark);
        }

        .user-profile i {
            margin-left: 5px;
            color: var(--text-light);
        }

        /* Content Area */
        .content-area {
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .page-header h2 {
            color: var(--text-dark);
            font-size: 1.8rem;
        }

        .breadcrumb {
            display: flex;
            list-style: none;
        }

        .breadcrumb li {
            margin-right: 10px;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .breadcrumb li:after {
            content: '/';
            margin-left: 10px;
        }

        .breadcrumb li:last-child:after {
            content: '';
        }

        .breadcrumb li a {
            color: var(--primary);
            text-decoration: none;
        }

        /* Cards */
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .card-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h3 {
            color: var(--text-dark);
            font-size: 1.2rem;
        }

        .card-header .card-actions {
            display: flex;
        }

        .card-header .card-actions button {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-light);
            margin-left: 10px;
            transition: color 0.3s;
        }

        .card-header .card-actions button:hover {
            color: var(--primary);
        }

        .card-body {
            padding: 20px;
        }

        /* Stats Cards */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .stats-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            padding: 20px;
            display: flex;
            align-items: center;
            transition: transform 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.5rem;
            color: white;
        }

        .stats-icon.users {
            background-color: var(--info-color);
        }

        .stats-icon.farmers {
            background-color: var(--success-color);
        }

        .stats-icon.buyers {
            background-color: var(--primary);
        }

        .stats-icon.products {
            background-color: var(--accent);
        }

        .stats-info h3 {
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 5px;
        }

        .stats-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Tables */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: var(--light-bg);
            color: var(--text-dark);
            font-weight: 600;
            padding: 12px 15px;
            text-align: left;
        }

        table td {
            padding: 12px 15px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-medium);
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:hover td {
            background-color: rgba(76, 175, 80, 0.05);
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status.active {
            background-color: rgba(76, 175, 80, 0.1);
            color: var(--success-color);
        }

        .status.pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }

        .status.inactive {
            background-color: rgba(158, 158, 158, 0.1);
            color: #9E9E9E;
        }

        .status.rejected {
            background-color: rgba(244, 67, 54, 0.1);
            color: var(--error-color);
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-light);
            margin-right: 10px;
            transition: color 0.3s;
        }

        .action-btn:hover {
            color: var(--primary);
        }

        .action-btn.delete:hover {
            color: var(--error-color);
        }

        /* Forms */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color: white;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            transform: translateY(-50px);
            transition: all 0.3s;
        }

        .modal.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            color: var(--text-dark);
        }

        .modal-header .close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: flex-end;
        }

        .modal-footer .btn {
            margin-left: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .search-bar input {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            .stats-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            .form-row {
                grid-template-columns: 1fr;
            }
            .search-bar input {
                width: 150px;
            }
        }

        @media (max-width: 576px) {
            .stats-cards {
                grid-template-columns: 1fr;
            }
            .top-nav {
                flex-direction: column;
                align-items: flex-start;
            }
            .top-nav-left, .top-nav-right {
                width: 100%;
                justify-content: space-between;
                margin-bottom: 10px;
            }
            .search-bar input {
                width: 100%;
            }
            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .page-header h2 {
                margin-bottom: 10px;
            }
        }
    </style>