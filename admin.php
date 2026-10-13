<?php
/**
 * Al-Royal Oud - Admin Order Management & Demo Dashboard
 * Designed & Developed by CodingBurg (codingburg.com)
 */

$data_file = __DIR__ . '/data/orders.json';
$orders = [];

if (file_exists($data_file)) {
    $content = file_get_contents($data_file);
    $decoded = json_decode($content, true);
    if (is_array($decoded)) {
        $orders = $decoded;
    }
}

// Handle Export to CSV
if (isset($_GET['action']) && $_GET['action'] === 'export_csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=al-royal-orders-' . date('Y-m-d') . '.csv');
    $output = fopen('php://output', 'w');
    // UTF-8 BOM for Excel Bangla support
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($output, ['Order ID', 'Date', 'Customer Name', 'Phone', 'Address', 'Package', 'Delivery', 'Total (BDT)', 'Status'], ',', '"', '\\');
    foreach ($orders as $o) {
        fputcsv($output, [
            $o['id'] ?? '',
            $o['created_at'] ?? '',
            $o['name'] ?? '',
            $o['phone'] ?? '',
            $o['address'] ?? '',
            $o['package_name'] ?? '',
            $o['delivery_title'] ?? '',
            $o['total_price'] ?? 0,
            $o['status'] ?? 'Pending'
        ], ',', '"', '\\');
    }
    fclose($output);
    exit;
}

// Stats calculation
$total_orders = count($orders);
$total_revenue = array_sum(array_column($orders, 'total_price'));
$pending_count = count(array_filter($orders, function($o) {
    return ($o['status'] ?? 'Pending') === 'Pending';
}));
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অর্ডার ড্যাশবোর্ড | Al-Royal Oud Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-[#07090e] text-slate-100 min-h-screen">

    <!-- Top Admin Bar -->
    <header class="glass-nav py-4 px-6 border-b border-yellow-500/30 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <a href="index.php" class="flex items-center gap-2 group">
                    <div class="w-9 h-9 rounded-full bg-yellow-500/10 border border-yellow-500/40 flex items-center justify-center text-yellow-400">
                        <i class="fa-solid fa-crown text-sm"></i>
                    </div>
                    <div>
                        <span class="font-luxury font-bold text-lg text-gold-gradient leading-none block">AL-ROYAL OUD</span>
                        <span class="text-[10px] text-slate-400 uppercase tracking-widest">Order Management Panel</span>
                    </div>
                </a>
            </div>

            <div class="flex items-center gap-3">
                <a href="index.php" class="px-3.5 py-1.5 rounded-lg border border-slate-700 text-xs text-slate-300 hover:text-white hover:border-slate-500 transition-all">
                    <i class="fa-solid fa-arrow-left mr-1"></i> ল্যান্ডিং পেজ দেখুন
                </a>
                <a href="admin.php?action=export_csv" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-xs font-bold text-white transition-all flex items-center gap-1.5 shadow">
                    <i class="fa-solid fa-file-excel"></i>
                    <span>এক্সেল/CSV ডাউনলোড</span>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        
        <!-- Welcome & Demo Banner -->
        <div class="mb-8 p-4 rounded-2xl bg-yellow-500/10 border border-yellow-500/30 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-yellow-500/20 text-yellow-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-white">লাইভ ডেমো অ্যাডমিন প্যানেল (cPanel শেয়ার্ড হোস্টিং ফ্রেন্ডলি)</h3>
                    <p class="text-xs text-slate-300">ল্যান্ডিং পেজ থেকে গ্রাহক অর্ডার করার সাথে সাথে এখানে রিয়েল-টাইমে যুক্ত হবে। কোনো ডেটাবেজ সেটআপ ঝামেলা ছাড়াই কাজ করে।</p>
                </div>
            </div>
            <a href="https://codingburg.com" target="_blank" class="px-3 py-1.5 rounded-full bg-black/60 border border-yellow-500/40 text-yellow-400 text-xs font-bold font-en">
                Developed by CodingBurg
            </a>
        </div>

        <!-- Metric Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
            <!-- Total Orders -->
            <div class="gold-card p-5 rounded-2xl border border-white/10">
                <div class="flex items-center justify-between text-slate-400 mb-2">
                    <span class="text-xs font-bold uppercase tracking-wider">মোট অর্ডার</span>
                    <i class="fa-solid fa-box-open text-yellow-400"></i>
                </div>
                <div class="text-3xl font-extrabold text-white font-en"><?= $total_orders; ?></div>
                <span class="text-[11px] text-slate-400 mt-1 block">সর্বমোট প্রাপ্ত অর্ডার সংখ্যা</span>
            </div>

            <!-- Total Revenue -->
            <div class="gold-card p-5 rounded-2xl border border-yellow-500/40 bg-yellow-500/[0.03]">
                <div class="flex items-center justify-between text-slate-400 mb-2">
                    <span class="text-xs font-bold uppercase tracking-wider">মোট বিক্রয় (রেভিনিউ)</span>
                    <i class="fa-solid fa-money-bill-wave text-emerald-400"></i>
                </div>
                <div class="text-3xl font-extrabold text-gold-gradient font-en">৳<?= number_format($total_revenue); ?></div>
                <span class="text-[11px] text-emerald-400 font-semibold mt-1 block">ক্যাশ অন ডেলিভারি সেলস</span>
            </div>

            <!-- Pending Orders -->
            <div class="gold-card p-5 rounded-2xl border border-white/10">
                <div class="flex items-center justify-between text-slate-400 mb-2">
                    <span class="text-xs font-bold uppercase tracking-wider">পেন্ডিং ডেলিভারি</span>
                    <i class="fa-solid fa-truck-fast text-sky-400"></i>
                </div>
                <div class="text-3xl font-extrabold text-white font-en"><?= $pending_count; ?></div>
                <span class="text-[11px] text-amber-400 mt-1 block">ডেলিভারি প্রক্রিয়াকরণ বাকি</span>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="gold-card rounded-2xl border border-white/10 overflow-hidden shadow-2xl">
            <div class="p-5 border-b border-white/10 flex items-center justify-between">
                <div>
                    <h2 class="text-base font-bold text-white">অর্ডার তালিকা (Customer Orders)</h2>
                    <p class="text-xs text-slate-400">সর্বশেষ প্রাপ্ত অর্ডারগুলো উপরে প্রদর্শিত হচ্ছে</p>
                </div>
                <span class="text-xs font-en text-slate-400">Showing <?= count($orders); ?> orders</span>
            </div>

            <?php if (empty($orders)): ?>
                <div class="p-12 text-center text-slate-500">
                    <i class="fa-solid fa-inbox text-4xl mb-3 block"></i>
                    <p class="text-sm">এখনো কোনো অর্ডার পাওয়া যায়নি। ল্যান্ডিং পেজ থেকে টেস্ট অর্ডার করুন।</p>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-black/60 text-slate-400 uppercase tracking-wider border-b border-white/5">
                            <tr>
                                <th class="p-4">অর্ডার আইডি</th>
                                <th class="p-4">গ্রাহক ও মোবাইল</th>
                                <th class="p-4">ডেলিভারি ঠিকানা</th>
                                <th class="p-4">প্যাকেজ</th>
                                <th class="p-4">মোট টাকা</th>
                                <th class="p-4">স্ট্যাটাস</th>
                                <th class="p-4">অর্ডারের সময়</th>
                                <th class="p-4 text-center">অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <?php foreach ($orders as $order): ?>
                                <tr class="hover:bg-white/[0.02] transition-colors">
                                    <!-- Order ID -->
                                    <td class="p-4 font-mono font-bold text-yellow-400">
                                        <?= htmlspecialchars($order['id'] ?? 'N/A'); ?>
                                    </td>

                                    <!-- Customer & Phone -->
                                    <td class="p-4">
                                        <div class="font-bold text-white text-sm"><?= htmlspecialchars($order['name'] ?? ''); ?></div>
                                        <a href="tel:<?= htmlspecialchars($order['phone'] ?? ''); ?>" class="text-slate-400 hover:text-yellow-400 font-en flex items-center gap-1 mt-0.5">
                                            <i class="fa-solid fa-phone text-[10px]"></i>
                                            <?= htmlspecialchars($order['phone'] ?? ''); ?>
                                        </a>
                                    </td>

                                    <!-- Address -->
                                    <td class="p-4 max-w-xs text-slate-300">
                                        <?= htmlspecialchars($order['address'] ?? ''); ?>
                                    </td>

                                    <!-- Package -->
                                    <td class="p-4">
                                        <div class="font-medium text-slate-200"><?= htmlspecialchars($order['package_name'] ?? ''); ?></div>
                                        <div class="text-[10px] text-slate-500"><?= htmlspecialchars($order['delivery_title'] ?? ''); ?></div>
                                    </td>

                                    <!-- Total Price -->
                                    <td class="p-4 font-bold text-white text-sm font-en">
                                        ৳<?= number_format($order['total_price'] ?? 0); ?>
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="p-4">
                                        <?php 
                                        $st = $order['status'] ?? 'Pending';
                                        $badgeColor = 'bg-amber-500/20 text-amber-400 border-amber-500/30';
                                        if ($st === 'Confirmed') $badgeColor = 'bg-sky-500/20 text-sky-400 border-sky-500/30';
                                        if ($st === 'Delivered') $badgeColor = 'bg-emerald-500/20 text-emerald-400 border-emerald-500/30';
                                        ?>
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold border <?= $badgeColor; ?>">
                                            <?= htmlspecialchars($st); ?>
                                        </span>
                                    </td>

                                    <!-- Created At -->
                                    <td class="p-4 text-slate-400 font-en whitespace-nowrap">
                                        <?= htmlspecialchars($order['created_at'] ?? ''); ?>
                                    </td>

                                    <!-- Actions -->
                                    <td class="p-4 text-center">
                                        <a href="https://wa.me/88<?= preg_replace('/^0/', '', $order['phone'] ?? ''); ?>?text=<?= urlencode('আসসালামু আলাইকুম ' . ($order['name'] ?? '') . ', আপনার আল-রয়্যাল পারফিউম অর্ডার নিশ্চিতকরণের জন্য যোগাযোগ করা হয়েছে।'); ?>" 
                                           target="_blank" 
                                           class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-emerald-600/30 hover:bg-emerald-600 text-emerald-400 hover:text-white transition-all text-xs" 
                                           title="WhatsApp এ মেসেজ পাঠান">
                                            <i class="fa-brands fa-whatsapp text-sm"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

    </main>

    <footer class="py-6 border-t border-white/5 text-center text-xs text-slate-500">
        Demo System Developed by <a href="https://codingburg.com" target="_blank" class="text-yellow-400 font-bold hover:underline font-en">CodingBurg</a> | Phone: 01908121146
    </footer>

</body>
</html>
