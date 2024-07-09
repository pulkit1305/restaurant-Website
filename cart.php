<?php
session_start();

// Check if 'add' action is triggered
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'] ?? 1;

    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if item is already in the cart
    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]['quantity'] += $item_quantity;
    } else {
        $_SESSION['cart'][$item_id] = array(
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => $item_quantity
        );
    }

    // Redirect to cart view page
    header('Location: cart.php');
    exit();
}

// Remove item from cart
if (isset($_POST['action']) && $_POST['action'] == 'remove') {
    $item_id = $_POST['item_id'];
    unset($_SESSION['cart'][$item_id]);

    // Redirect to cart view page
    header('Location: cart.php');
    exit();
}

// Clear cart
if (isset($_POST['action']) && $_POST['action'] == 'clear') {
    unset($_SESSION['cart']);

    // Redirect to cart view page
    header('Location: cart.php');
    exit();
}

// Update item quantity in cart
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $item_id = $_POST['item_id'];
    $item_quantity = $_POST['item_quantity'];

    // Update the quantity or remove the item if quantity is zero
    if ($item_quantity > 0) {
        $_SESSION['cart'][$item_id]['quantity'] = $item_quantity;
    } else {
        unset($_SESSION['cart'][$item_id]);
    }

    // Redirect to cart view page
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #FFEFBA, #FFFFFF);
            padding-top: 50px;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table thead th {
            border-bottom: 2px solid #dee2e6;
        }

        .btn-custom {
            background-color: #ff6f61;
            border-color: #ff6f61;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #ff5a4d;
            border-color: #ff5a4d;
        }

        .btn-clear {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #fff;
        }

        .btn-clear:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .empty-cart {
            text-align: center;
            padding: 50px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .empty-cart p {
            font-size: 1.5em;
            color: #6c757d;
        }

        .quantity-input {
            width: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Shopping Cart</h1>

        <?php if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($_SESSION['cart'] as $item_id => $item) : ?>
                        <?php if (is_array($item)) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['name']); ?></td>
                                <td>Rs. <?php echo htmlspecialchars($item['price']); ?></td>
                                <td>
                                    <form method="post" action="cart.php" class="form-inline">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="item_id" value="<?php echo htmlspecialchars($item_id); ?>">
                                        <input type="number" name="item_quantity" class="form-control quantity-input" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1">
                                        <button type="submit" class="btn btn-primary btn-sm ml-2">Update</button>
                                    </form>
                                </td>
                                <td>Rs. <?php echo htmlspecialchars($item['price'] * $item['quantity']); ?></td>
                                <td>
                                    <form method="post" action="cart.php">
                                        <input type="hidden" name="action" value="remove">
                                        <input type="hidden" name="item_id" value="<?php echo htmlspecialchars($item_id); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $total += $item['price'] * $item['quantity']; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                        <td colspan="2">Rs. <?php echo htmlspecialchars($total); ?></td>
                    </tr>
                </tbody>
            </table>

            <form method="post" action="cart.php">
                <input type="hidden" name="action" value="clear">
                <button type="submit" class="btn btn-clear btn-sm">Clear Cart</button>
            </form>
        <?php else : ?>
            <div class="empty-cart">
                <p>Your cart is empty!</p>
                <a href="restourant.php?id=<?php echo htmlspecialchars($pid); ?>&name=<?php echo urlencode($resname); ?>" class="btn btn-custom btn-sm">Continue Shopping</a>
            </div>
        <?php endif; ?>

        <a href="restourant.php?id=<?php echo htmlspecialchars($pid); ?>&name=<?php echo urlencode($resname); ?>" class="btn btn-primary btn-sm mt-3">Check Out</a>
    </div>
</body>

</html>