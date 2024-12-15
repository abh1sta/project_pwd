<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}
       /* Content Styles */
       .content {
            display: flex;
            padding: 20px;
            justify-content: center;
            margin: 0 auto;
            max-width: 800px; /* add this line to set a maximum width */
            margin-top: 60px;
        }

        .content .image {
            width: 300px;
            height: 200px;
            background-color: #eb7bad;
            margin-right: 20px;
        }

        .content .text {
            max-width: 400px;
        }

/* Cards Container */
.cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    flex-wrap: wrap;
}

.card {
    width: 200px;
    background-color: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.card-image {
    width: 100%;
    height: 120px;
    background-color: #eb7bad;
    background-size: cover;
    background-position: center;
}

.card-content {
    padding: 10px;
}

.card-content h3 {
    margin: 0;
    font-size: 1.2rem;
    color: #333;
}

.card-content p {
    margin: 10px 0 0;
    font-size: 0.9rem;
    color: #666;
}
.navbar {
    background-color: #eb7bad;
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar .profile {
    display: flex;
    align-items: center;
}

.navbar .profile img {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-right: 10px;
}

.navbar .links a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
}

.navbar .links a:hover {
    text-decoration: underline;
}
.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
    color: #007bff;
}

/* Button Styles */
.btn {
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
}

.btn-warning {
    background-color: #ffc107;
    color: #343a40;
    border: none;
}

.btn-warning:hover {
    background-color: #e0a800;
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.4);
}

.btn-danger {
    background-color: #dc3545;
    color: #ffffff;
    border: none;
}

.btn-danger:hover {
    background-color: #c82333;
    box-shadow: 0 4px 8px rgba(220, 53, 69, 0.4);
}

/* Table Styles */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #dee2e6;
}

.table th {
    background-color: #f1f1f1;
    color: #343a40;
    text-transform: uppercase;
    font-size: 14px;
}

.table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

.table tbody tr:hover {
    background-color: #e9ecef;
}

/* Alert Styles */
.alert {
    padding: 10px 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border-color: #c3e6cb;
}
.profile-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-info {
            margin-bottom: 20px;
        }
        .profile-info h2 {
            margin: 0 0 10px;
        }
        .profile-info p {
            margin: 5px 0;
        }
        .logout-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #5A67D8;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .logout-button:hover {
            background-color: #4C51BF;
        }

</style>
<body>
<div class="navbar">
        <div class="profile">
            <img 
                src="" 
                alt="Profile picture">
            <span>restaurant</span>
        </div>
        <div class="links">
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('categories') }}">Categories</a>
            <a href="{{ route('menu') }}">Menu</a>
            <a href="{{ route('profile') }}">Profile</a>
        </div>
    </div>
    <div class="">
        @yield('content')
    </div>

</body>
</html>