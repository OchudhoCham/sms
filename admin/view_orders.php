<?php
include 'db.php';

$orders = $conn->query("SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management System - View Orders</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- Custom CSS -->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create_user.php">
                                <i class="fas fa-user-plus"></i> Add User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-box"></i> Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="dropdown-item" href="add_product.php">Add Product</a>
                                <a class="dropdown-item" href="manage_products.php">Manage Products</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle active" href="#" id="ordersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i> Orders
                            </a>
                            <div class="dropdown-menu" aria-labelledby="ordersDropdown">
                                <a class="dropdown-item" href="view_orders.php">View Orders</a>
                                <a class="dropdown-item" href="manage_orders.php">Manage Orders</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <header class="my-4">
                    <h1>Supermarket Management System</h1>
                </header>
                <h2 class="my-4 text-center">View Orders</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $orders->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['customer_id']; ?></td>
                                <td><?php echo $row['order_date']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['total_amount']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
