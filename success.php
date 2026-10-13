<?php
/**
 * Al-Royal Oud - Order Success & Confirmation Page
 * Designed & Developed by CodingBurg (codingburg.com)
 */

session_start();

$client_phone = "01908121146";
$order_id = isset($_GET['order_id']) ? htmlspecialchars($_GET['order_id']) : '';

// Retrieve order from session or lookup in JSON
$order = $_SESSION['last_order'] ?? null;

if (!$order && $order_id) {
    $data_file = __DIR__ . '/data/orders.json';
    if (file_exists($data_file)) {
        $orders = json_decode(file_get_contents($data_file), true);
        if (is_array($orders)) {
            foreach ($orders as $item) {
                if ($item['id'] === $order_id) {
                    $order = $item;
                    break;
                }
            }
        }
    }
}

// Fallback if accessed directly without an order
if (!$order) {
    $order = [
        'id' => $order_id ?: 'CB-ORD-DEMO',
        'name' => 'সম্মানিত গ্রাহক',
        'phone' => '01908121146',
        'address' => 'ঢাকা, বাংলাদেশ',
        'package_name' => '২টি রয়্যাল পারফিউম কম্বো (বেস্ট সেলার)',
        'delivery_title' => 'ঢাকার ভেতরে (ফ্রি ডেলিভারি)',
        'total_price' => 1690,
        'created_at' => date('Y-m-d H:i:s')
    ];
}

$wa_msg = "আসসালামু আলাইকুম! আমার অর্ডার আইডি: " . $order['id'] . "। আমি " . $order['package_name'] . " অর্ডার করেছি। মোট টাকা: ৳" . number_format($order['total_price']) . "।";
$whatsapp_url = "https://wa.me/8801908121146?text=" . urlencode($wa_msg);
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অর্ডার সম্পন্ন হয়েছে | Al-Royal Oud</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-[#07090e] text-slate-100 min-h-screen py-10 px-4 flex flex-col justify-between">

    <div class="max-w-2xl mx-auto w-full my-auto">
        <!-- Brand Header -->
        <div class="text-center mb-6">
            <a href="index.php" class="inline-flex items-center gap-2 group">
                <div class="w-10 h-10 rounded-full border border-yellow-500/50 flex items-center justify-center bg-yellow-500/10 text-yellow-400">
                    <i class="fa-solid fa-crown text-base"></i>
                </div>
                <span class="font-luxury font-bold text-xl tracking-wider text-gold-gradient">AL-ROYAL OUD</span>
            </a>
        </div>

        <!-- Success Invoice Card -->
        <div class="gold-card rounded-3xl p-6 sm:p-10 border-2 border-emerald-500/50 shadow-2xl relative overflow-hidden bg-[#0f141f]">
            
            <!-- Big Checkmark -->
            <div class="w-20 h-20 rounded-full bg-emerald-500/20 border-2 border-emerald-500 mx-auto flex items-center justify-center text-emerald-400 text-3xl mb-4 animate-bounce">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-3xl font-extrabold text-white mb-2">
                    অভিনন্দন! আপনার অর্ডারটি <span class="text-emerald-400">সফল হয়েছে</span>
                </h1>
                <p class="text-slate-300 text-xs sm:text-sm">
                    ধন্যবাদ আমাদের সাথে থাকার জন্য। খুব শীঘ্রই আমাদের কাস্টমার প্রতিনিধি আপনার নাম্বারে কল করে অর্ডার কনফার্ম করবেন।
                </p>
                <div class="inline-block mt-3 px-3.5 py-1 rounded-full bg-yellow-500/10 border border-yellow-500/30 text-yellow-400 text-xs font-mono font-bold">
                    অর্ডার ট্র্যাকিং আইডি: <?= htmlspecialchars($order['id']); ?>
                </div>
            </div>

            <!-- Invoice Details Table -->
            <div class="bg-black/60 rounded-2xl p-4 sm:p-6 border border-slate-800 space-y-3 text-xs sm:text-sm mb-6">
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">গ্রাহকের নাম:</span>
                    <span class="font-semibold text-white"><?= htmlspecialchars($order['name']); ?></span>
                </div>
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">মোবাইল নাম্বার:</span>
                    <span class="font-semibold text-white font-en"><?= htmlspecialchars($order['phone']); ?></span>
                </div>
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">ডেলিভারি ঠিকানা:</span>
                    <span class="font-semibold text-white text-right max-w-xs"><?= htmlspecialchars($order['address']); ?></span>
                </div>
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">অর্ডারের আইটেম:</span>
                    <span class="font-semibold text-yellow-300 text-right"><?= htmlspecialchars($order['package_name']); ?></span>
                </div>
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">ডেলিভারি এলাকা:</span>
                    <span class="font-semibold text-white"><?= htmlspecialchars($order['delivery_title']); ?></span>
                </div>
                <div class="flex justify-between border-b border-slate-800 pb-2">
                    <span class="text-slate-400">পেমেন্ট মেথড:</span>
                    <span class="font-semibold text-emerald-400">ক্যাশ অন ডেলিভারি (পণ্য হাতে পেয়ে)</span>
                </div>
                <div class="flex justify-between pt-1 items-baseline">
                    <span class="text-base font-bold text-white">সর্বমোট প্রদেয় টাকা:</span>
                    <span class="text-2xl font-extrabold text-yellow-400 font-en">৳<?= number_format($order['total_price']); ?></span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="<?= $whatsapp_url; ?>" target="_blank" class="w-full py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-lg">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>হোয়াটসঅ্যাপে আপডেট পান</span>
                </a>
                
                <a href="index.php" class="w-full py-3.5 rounded-xl border border-yellow-500/50 text-yellow-300 hover:bg-yellow-500/10 font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>হোম পেজে ফিরে যান</span>
                </a>
            </div>

            <!-- Notice -->
            <p class="text-center text-[11px] text-slate-500 mt-5">
                জরুরি প্রয়োজনে কল করুন: <a href="tel:<?= $client_phone; ?>" class="text-yellow-400 font-en underline"><?= $client_phone; ?></a>
            </p>
        </div>
    </div>

    <!-- Developer Credit -->
    <footer class="mt-8 text-center text-xs text-slate-500">
        Designed & Developed by <a href="https://codingburg.com" target="_blank" class="text-yellow-400 font-bold underline font-en">CodingBurg</a>
    </footer>

</body>
</html>
