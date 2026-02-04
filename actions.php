<?php
session_start();

// Initialize mock database in session if not exists
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        ['id' => 1, 'name' => 'Demo User', 'email' => 'user@example.com', 'password' => '1234', 'phone' => '0771234567', 'address' => '123 Main St, Colombo']
    ];
}
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [];
}

$action = $_POST['action'] ?? $_GET['action'] ?? '';

// REGISTER
if ($action == 'register') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Simple validation
    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] == $email) {
            header("Location: register.php?error=Email already exists");
            exit();
        }
    }

    $new_user = [
        'id' => count($_SESSION['users']) + 1,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => ''
    ];
    $_SESSION['users'][] = $new_user;
    
    $_SESSION['user_id'] = $new_user['id'];
    $_SESSION['user_name'] = $new_user['name'];
    header("Location: dashboard.php");
    exit();
}

// LOGIN
if ($action == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: dashboard.php");
            exit();
        }
    }
    header("Location: login.php?error=Invalid credentials (Try user@example.com / 1234)");
    exit();
}

// CREATE REQUEST
if ($action == 'create_request') {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $request = [
        'id' => uniqid('REQ'),
        'user_id' => $_SESSION['user_id'],
        'service_type' => $_POST['service_type'],
        'date' => $_POST['pickup_date'],
        'address' => $_POST['address'],
        'notes' => $_POST['notes'],
        'status' => 'Pending', // Pending, Processing, Completed
        'payment_status' => 'Unpaid',
        'created_at' => date('Y-m-d H:i:s')
    ];

    $_SESSION['requests'][] = $request;
    header("Location: dashboard.php?msg=Request submitted successfully");
    exit();
}

// LOGOUT
if ($action == 'logout') {
    session_destroy();
    header("Location: index.php");
    exit();
}
