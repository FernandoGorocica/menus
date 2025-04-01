<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
    }

    .navbar {
        background: var(--primary-color);
        padding: 1rem;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .brand {
        color: white;
        font-size: 1.5rem;
        text-decoration: none;
    }

    .nav-list {
        display: flex;
        gap: 2rem;
        list-style: none;
    }

    .nav-list a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
    }

    .active a {
        color: var(--secondary-color);
        font-weight: bold;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        padding: 1rem;
        min-width: 200px;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .footer {
        text-align: center;
        padding: 2rem;
        margin-top: 3rem;
        background: #f8f9fa;
    }
</style>