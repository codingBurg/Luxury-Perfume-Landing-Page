<div align="center">

# 👑 Al-Royal Oud - Luxury Perfume Landing Page
### High-Converting E-Commerce Landing Page for Bangladesh & Bengali Audience

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20|%208.x-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-d4af37?style=for-the-badge)](LICENSE)
[![Developed By](https://img.shields.io/badge/Developed%20By-CodingBurg-10b981?style=for-the-badge&logo=codeforces&logoColor=white)](https://codingburg.com)

**Crafted with ❤️ by [CodingBurg](https://codingburg.com)**  
**Direct Contact / WhatsApp**: `+880 1908-121146` (01908121146)

</div>

---

## 📖 Overview

**Al-Royal Oud** is an ultra-luxurious, mobile-first, high-converting perfume selling landing page designed specifically for Bangladeshi e-commerce merchants and clients. 

Built entirely with pure, dependency-free **PHP**, it is 100% plug-and-play for shared **cPanel** hosting (Apache/LiteSpeed). There are **no build steps, no Node.js dependencies, and no complex SQL setup** required.

---

## ✨ Features & Highlights

### 🎯 1. Conversion-Driven UX (Bangladeshi Market Focused)
- **Authentic Bengali Copywriting**: Natural, persuasive, and culturally resonant sales copy tailored to fragrance buyers in Bangladesh.
- **Cash on Delivery (COD) Reassurance**: Strong trust markers highlighting *"পণ্য হাতে পেয়ে চেক করে টাকা দিন — কোনো অগ্রিম পেমেন্ট নেই"*.
- **Interactive Bundle Selector**:
  - 🧴 **ট্রায়াল প্যাক (১টি ৫০ মিলি)** — ৳৯৯০ (+ ডেলিভারি চার্জ)
  - 👑 **রয়্যাল কম্বো (২টি বোতল - বেস্ট সেলার)** — ৳১,৬৯০ (ফ্রি ডেলিভারি)
  - ⭐ **ভিআইপি মেগা বক্স (৩টি বোতল + গিফট)** — ৳২,২৯০ (ফ্রি ডেলিভারি + ফ্রি পকেট আতর)
- **Live Price & Shipping Calculator**: Dynamically adjusts subtotal and delivery charge (Dhaka ৳৬০ / Outside Dhaka ৳১২০ / Free Shipping on Combos).
- **Urgency Countdown Timer**: Real-time 14-hour countdown clock driving instant purchase decisions.
- **Social Proof Popups**: Subtle toast notifications showing recent orders from Dhaka, Chittagong, Sylhet, Rajshahi, etc.
- **Customer Reviews**: 4.9/5 verified buyer testimonials with star ratings.
- **FAQ Accordion**: 4 interactive questions and answers regarding halal composition, delivery times, and returns.

### 📱 2. Mobile-First Luxury Interface
- **Obsidian & Gold Aesthetics**: Royal dark obsidian theme (`#07090e`) with brushed gold gradients (`#d4af37`), glassmorphism, and shimmer animations.
- **Bangla Typography**: Crisp rendering with Google Fonts **Hind Siliguri** and luxury accents in **Cinzel**.
- **Mobile Sticky CTA Bar**: Persistent bottom bar with live calculated price and "এখনই অর্ডার করুন" button (for the 95%+ mobile visitors).
- **Floating Quick-Action Buttons**: Direct click-to-call (`tel:01908121146`) and WhatsApp chat (`wa.me/8801908121146`).

### ⚡ 3. Zero-Config PHP Backend & Order Management
- **Single-Page Checkout**: Frictionless 1-step checkout at the bottom of the page (`order.php`).
- **Input Validation**: Rigorous Bangladeshi 11-digit mobile number format validation (`013-019`).
- **Digital Invoice (`success.php`)**: Clean order confirmation receipt with a unique Order Tracking ID and direct WhatsApp confirmation button.
- **File-Based Database (`data/orders.json`)**: Eliminates MySQL setup friction. Protected with Apache `.htaccess` against unauthorized direct web downloads.
- **Demo Admin Panel (`admin.php`)**: Full dashboard showing total order count, revenue (৳ BDT), recent orders table, and 1-click **Excel/CSV Export** with UTF-8 Bengali language support.

---

## 📂 Project Architecture

```text
├── index.php                 # Master luxury landing page
├── order.php                 # Server-side order processor & validator
├── success.php               # Order confirmation receipt & invoice
├── admin.php                 # Order management dashboard & CSV export
├── data/
│   ├── .htaccess             # Security rule protecting JSON storage
│   └── orders.json           # File-based order database
├── assets/
│   ├── css/
│   │   └── custom.css        # Luxury styling, gold gradients, animations
│   └── js/
│       └── app.js            # Live calculator, timer, validation, popups
├── .gitignore                # Git ignore configuration
├── LICENSE                   # MIT License
└── README.md                 # Project documentation
```

---

## 🚀 Quick Start & Deployment

### Option A: Shared cPanel Hosting (Recommended for Clients)
1. Log into your **cPanel** account.
2. Navigate to **File Manager** -> `public_html` (or your subdomain directory).
3. Upload all the files from this repository directly.
4. Ensure the `data` directory has standard write permissions (`0755`).
5. Access your domain (e.g., `https://yourdomain.com`). Everything is ready!

### Option B: Local Development
Ensure you have PHP 7.4 or newer installed, then run:

```bash
# Start local PHP server
php -S localhost:8088
```

Open in your browser:
- **Landing Page**: [http://localhost:8088/](http://localhost:8088/)
- **Admin Dashboard**: [http://localhost:8088/admin.php](http://localhost:8088/admin.php)

---

## 🛠️ Configuration

To modify contact numbers or brand details, update the configuration variables at the top of:
- `index.php`: `$client_phone` and `$whatsapp_url`
- `success.php`: `$client_phone`

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Developed by CodingBurg

- **Website**: [codingburg.com](https://codingburg.com)
- **Contact / WhatsApp**: [01908121146](tel:01908121146)
- **Organization**: [github.com/codingBurg](https://github.com/codingBurg)
