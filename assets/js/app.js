/**
 * Luxury Perfume Landing Page - Interactive Logic
 * Designed & Developed by CodingBurg (codingburg.com)
 */

document.addEventListener('DOMContentLoaded', () => {
    initCountdown();
    initPricingCalculator();
    initLiveSalesPopups();
    initFaqAccordion();
    initSmoothScroll();
    initFormValidation();
});

// Bengali number helper
function toBnNum(num) {
    const bnNums = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return num.toString().replace(/\d/g, d => bnNums[d]);
}

/**
 * 1. Urgency Countdown Timer (Hours, Minutes, Seconds)
 */
function initCountdown() {
    let timeLeft = 14 * 3600 + 35 * 60 + 20; // 14 hours 35 mins
    const hoursEl = document.getElementById('cd-hours');
    const minsEl = document.getElementById('cd-mins');
    const secsEl = document.getElementById('cd-secs');

    if (!hoursEl || !minsEl || !secsEl) return;

    setInterval(() => {
        if (timeLeft <= 0) timeLeft = 24 * 3600;
        timeLeft--;

        const h = Math.floor(timeLeft / 3600);
        const m = Math.floor((timeLeft % 3600) / 60);
        const s = timeLeft % 60;

        hoursEl.innerText = h.toString().padStart(2, '0');
        minsEl.innerText = m.toString().padStart(2, '0');
        secsEl.innerText = s.toString().padStart(2, '0');
    }, 1000);
}

/**
 * 2. Dynamic Pricing & Delivery Calculation
 */
const packages = {
    single: {
        id: 'single',
        name: '১টি প্রিমিয়াম পারফিউম (ট্রায়াল প্যাক)',
        price: 990,
        freeDelivery: false
    },
    combo: {
        id: 'combo',
        name: '২টি রয়্যাল পারফিউম কম্বো (বেস্ট সেলার)',
        price: 1690,
        freeDelivery: true // Free delivery promotion for combo
    },
    vip: {
        id: 'vip',
        name: '৩টি লাক্সারি মেগা গিফট বক্স',
        price: 2290,
        freeDelivery: true // Free delivery promotion for VIP
    }
};

function initPricingCalculator() {
    const packageRadios = document.querySelectorAll('input[name="package_id"]');
    const deliveryRadios = document.querySelectorAll('input[name="delivery_area"]');
    
    const summaryPkgName = document.getElementById('summary-pkg-name');
    const summaryPkgPrice = document.getElementById('summary-pkg-price');
    const summaryDelivery = document.getElementById('summary-delivery');
    const summaryTotal = document.getElementById('summary-total');
    const submitBtnTotal = document.getElementById('submit-btn-total');
    const stickyMobilePrice = document.getElementById('sticky-mobile-price');
    const deliveryBadge = document.getElementById('free-delivery-badge');

    function calculate() {
        let selectedPkgKey = 'combo';
        packageRadios.forEach(radio => {
            if (radio.checked) selectedPkgKey = radio.value;
        });

        let selectedDeliveryArea = 'inside_dhaka';
        deliveryRadios.forEach(radio => {
            if (radio.checked) selectedDeliveryArea = radio.value;
        });

        const currentPkg = packages[selectedPkgKey] || packages.combo;
        let deliveryCharge = 0;

        if (currentPkg.freeDelivery) {
            deliveryCharge = 0;
            if (deliveryBadge) deliveryBadge.classList.remove('hidden');
        } else {
            deliveryCharge = selectedDeliveryArea === 'inside_dhaka' ? 60 : 120;
            if (deliveryBadge) deliveryBadge.classList.add('hidden');
        }

        const total = currentPkg.price + deliveryCharge;

        // Update UI
        if (summaryPkgName) summaryPkgName.innerText = currentPkg.name;
        if (summaryPkgPrice) summaryPkgPrice.innerText = '৳' + currentPkg.price.toLocaleString();
        
        if (summaryDelivery) {
            if (deliveryCharge === 0) {
                summaryDelivery.innerHTML = '<span class="text-emerald-400 font-bold">ফ্রি ডেলিভারি (৳০)</span>';
            } else {
                summaryDelivery.innerText = '৳' + deliveryCharge;
            }
        }

        if (summaryTotal) summaryTotal.innerText = '৳' + total.toLocaleString();
        if (submitBtnTotal) submitBtnTotal.innerText = '৳' + total.toLocaleString();
        if (stickyMobilePrice) stickyMobilePrice.innerText = '৳' + total.toLocaleString();

        // Also update hidden inputs if any
        const hiddenTotal = document.getElementById('hidden_total_price');
        const hiddenDelivery = document.getElementById('hidden_delivery_charge');
        if (hiddenTotal) hiddenTotal.value = total;
        if (hiddenDelivery) hiddenDelivery.value = deliveryCharge;
    }

    packageRadios.forEach(r => r.addEventListener('change', calculate));
    deliveryRadios.forEach(r => r.addEventListener('change', calculate));

    // Also support quick selection from landing page bundle pricing cards
    window.selectPackageFromCard = function(pkgKey) {
        const targetRadio = document.querySelector(`input[name="package_id"][value="${pkgKey}"]`);
        if (targetRadio) {
            targetRadio.checked = true;
            calculate();
            scrollToOrder();
        }
    };

    calculate(); // Initial run
}

/**
 * 3. Smooth Scroll to Checkout
 */
function scrollToOrder() {
    const orderSection = document.getElementById('order-form-section');
    if (orderSection) {
        orderSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setTimeout(() => {
            const nameInput = document.getElementById('customer_name');
            if (nameInput) nameInput.focus();
        }, 500);
    }
}

function initSmoothScroll() {
    document.querySelectorAll('.btn-order-trigger').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            scrollToOrder();
        });
    });
}

/**
 * 4. Fake Live Sales Popups (Bangladeshi Social Proof)
 */
function initLiveSalesPopups() {
    const toast = document.getElementById('live-sale-toast');
    if (!toast) return;

    const customers = [
        { name: 'মাহমুদুল ইসলাম', location: 'উত্তরা, ঢাকা', pkg: '২টি রয়্যাল কম্বো', time: '১ মিনিট আগে' },
        { name: 'তানভীর আহমেদ', location: 'ধানমন্ডি, ঢাকা', pkg: '৩টি ভিআইপি গিফট বক্স', time: '৩ মিনিট আগে' },
        { name: 'আরিফুল ইসলাম', location: 'জিইসি মোড়, চট্টগ্রাম', pkg: '২টি রয়্যাল কম্বো', time: '৪ মিনিট আগে' },
        { name: 'সাইফুল ইসলাম', location: 'উপশহর, সিলেট', pkg: '১টি প্রিমিয়াম প্যাক', time: '২ মিনিট আগে' },
        { name: 'মেহেদী হাসান', location: 'বোয়ালিয়া, রাজশাহী', pkg: '২টি রয়্যাল কম্বো', time: '৫ মিনিট আগে' },
        { name: 'নাজমুল সাকিব', location: 'খালিশপুর, খুলনা', pkg: '৩টি ভিআইপি গিফট বক্স', time: '৬ মিনিট আগে' },
        { name: 'জুবায়ের রহমান', location: 'মিরপুর-১০, ঢাকা', pkg: '২টি রয়্যাল কম্বো', time: '৮ মিনিট আগে' }
    ];

    let index = 0;

    function showNextNotification() {
        const item = customers[index];
        index = (index + 1) % customers.length;

        const nameEl = document.getElementById('toast-customer-name');
        const locEl = document.getElementById('toast-customer-loc');
        const pkgEl = document.getElementById('toast-customer-pkg');
        const timeEl = document.getElementById('toast-time');

        if (nameEl) nameEl.innerText = item.name;
        if (locEl) locEl.innerText = item.location;
        if (pkgEl) pkgEl.innerText = item.pkg;
        if (timeEl) timeEl.innerText = item.time;

        toast.classList.add('show');

        // Hide after 4.5 seconds
        setTimeout(() => {
            toast.classList.remove('show');
        }, 4500);
    }

    // First trigger after 4s, then loop every 12s
    setTimeout(() => {
        showNextNotification();
        setInterval(showNextNotification, 12000);
    }, 4000);
}

/**
 * 5. FAQ Accordion
 */
function initFaqAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.closest('.accordion-item');
            const isActive = item.classList.contains('active');

            // Close others
            document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('active'));

            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

/**
 * 6. Form Validation & BD Phone Number Check
 */
function initFormValidation() {
    const form = document.getElementById('order-form');
    const phoneInput = document.getElementById('customer_phone');
    const phoneError = document.getElementById('phone-error');

    if (!form || !phoneInput) return;

    // Normalizing bengali digits to english if entered
    phoneInput.addEventListener('input', (e) => {
        let val = e.target.value;
        const bnDigits = {'০':'0','১':'1','২':'2','৩':'3','৪':'4','৫':'5','৬':'6','৭':'7','৮':'8','৯':'9'};
        val = val.replace(/[০-৯]/g, d => bnDigits[d]);
        val = val.replace(/[^0-9]/g, '');
        e.target.value = val;

        if (val.length === 11 && /^01[3-9]\d{8}$/.test(val)) {
            if (phoneError) phoneError.classList.add('hidden');
            phoneInput.classList.remove('border-red-500');
            phoneInput.classList.add('border-emerald-500');
        } else if (val.length >= 11) {
            if (phoneError) phoneError.classList.remove('hidden');
            phoneInput.classList.add('border-red-500');
            phoneInput.classList.remove('border-emerald-500');
        }
    });

    form.addEventListener('submit', (e) => {
        const phone = phoneInput.value.trim();
        const bdPhoneRegex = /^01[3-9]\d{8}$/;

        if (!bdPhoneRegex.test(phone)) {
            e.preventDefault();
            if (phoneError) phoneError.classList.remove('hidden');
            phoneInput.focus();
            phoneInput.classList.add('border-red-500');
            alert('অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নাম্বার দিন (যেমন: 017XXXXXXXX)');
            return false;
        }

        const btn = document.getElementById('submit-order-btn');
        if (btn) {
            btn.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> অর্ডার প্রসেসিং হচ্ছে...`;
            btn.disabled = true;
            form.submit();
        }
    });
}
