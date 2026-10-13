<?php
/**
 * Al-Royal Oud - Order Processing Backend
 * Designed & Developed by CodingBurg (codingburg.com)
 */

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// Function to clean input
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Packages definitions
$packages = [
    'single' => [
        'name' => '১টি প্রিমিয়াম পারফিউম (ট্রায়াল প্যাক)',
        'price' => 990,
        'free_delivery' => false
    ],
    'combo' => [
        'name' => '২টি রয়্যাল পারফিউম কম্বো (বেস্ট সেলার)',
        'price' => 1690,
        'free_delivery' => true
    ],
    'vip' => [
        'name' => '৩টি লাক্সারি মেগা গিফট বক্স',
        'price' => 2290,
        'free_delivery' => true
    ]
];

// Extract & Sanitize
$customer_name    = isset($_POST['customer_name']) ? sanitize($_POST['customer_name']) : '';
$customer_phone   = isset($_POST['customer_phone']) ? sanitize($_POST['customer_phone']) : '';
$customer_address = isset($_POST['customer_address']) ? sanitize($_POST['customer_address']) : '';
$package_id       = isset($_POST['package_id']) && array_key_exists($_POST['package_id'], $packages) ? $_POST['package_id'] : 'combo';
$delivery_area    = isset($_POST['delivery_area']) && $_POST['delivery_area'] === 'outside_dhaka' ? 'outside_dhaka' : 'inside_dhaka';

// Convert Bengali numerals in phone to English if any
$bn_digits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
$en_digits = ['0','1','2','3','4','5','6','7','8','9'];
$customer_phone = str_replace($bn_digits, $en_digits, $customer_phone);
$customer_phone = preg_replace('/[^0-9]/', '', $customer_phone);

// Validation
$errors = [];
if (empty($customer_name)) {
    $errors[] = "নাম প্রদান করা আবশ্যক।";
}
if (empty($customer_phone) || strlen($customer_phone) !== 11 || !preg_match('/^01[3-9]\d{8}$/', $customer_phone)) {
    $errors[] = "সঠিক ১১ ডিজিটের মোবাইল নাম্বার প্রদান করুন।";
}
if (empty($customer_address)) {
    $errors[] = "সম্পূর্ণ ঠিকানা প্রদান করা আবশ্যক।";
}

if (!empty($errors)) {
    $_SESSION['order_error'] = implode("<br>", $errors);
    header("Location: index.php#order-form-section");
    exit;
}

// Calculation
$selected_pkg = $packages[$package_id];
$pkg_price = $selected_pkg['price'];

if ($selected_pkg['free_delivery']) {
    $delivery_charge = 0;
    $delivery_title = ($delivery_area === 'inside_dhaka' ? 'ঢাকার ভেতরে' : 'ঢাকার বাইরে') . " (ফ্রি ডেলিভারি অফার)";
} else {
    $delivery_charge = ($delivery_area === 'inside_dhaka') ? 60 : 120;
    $delivery_title = ($delivery_area === 'inside_dhaka') ? 'ঢাকার ভেতরে (৳৬০)' : 'ঢাকার বাইরে (৳১২০)';
}

$total_price = $pkg_price + $delivery_charge;
$order_id = 'CB-ORD-' . rand(10000, 99999);

$order_data = [
    'id' => $order_id,
    'name' => $customer_name,
    'phone' => $customer_phone,
    'address' => $customer_address,
    'package_id' => $package_id,
    'package_name' => $selected_pkg['name'],
    'package_price' => $pkg_price,
    'delivery_area' => $delivery_area,
    'delivery_title' => $delivery_title,
    'delivery_charge' => $delivery_charge,
    'total_price' => $total_price,
    'payment_method' => 'Cash on Delivery (ক্যাশ অন ডেলিভারি)',
    'status' => 'Pending',
    'created_at' => date('Y-m-d H:i:s'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

// Save to data/orders.json
$data_file = __DIR__ . '/data/orders.json';
$existing_orders = [];

if (file_exists($data_file)) {
    $json_content = file_get_contents($data_file);
    $decoded = json_decode($json_content, true);
    if (is_array($decoded)) {
        $existing_orders = $decoded;
    }
}

// Prepend latest order to top of list
array_unshift($existing_orders, $order_data);

// Ensure data folder exists
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

file_put_contents($data_file, json_encode($existing_orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Save current order into session for success invoice display
$_SESSION['last_order'] = $order_data;

// Redirect to order success page
header("Location: success.php?order_id=" . urlencode($order_id));
exit;
