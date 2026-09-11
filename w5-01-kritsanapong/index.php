<?php
// Mockup ข้อมูลสินค้า (ในระบบจริงสามารถดึงมาจาก MySQL Database ได้)
$categories = [
    ['id' => 'all', 'name' => 'All', 'count' => 27],
    ['id' => 'coffee', 'name' => 'Coffee', 'count' => 14],
    ['id' => 'snack', 'name' => 'Snack', 'count' => 8],
    ['id' => 'pastries', 'name' => 'Pastries', 'count' => 2],
    ['id' => 'special', 'name' => 'Special Beverage', 'count' => 5],
];

$products = [
    ['id' => 1, 'name' => 'French Vanilla Fantasy', 'price' => 12.83, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&q=80&w=300'],
    ['id' => 2, 'name' => 'Almond Amore', 'price' => 9.54, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&q=80&w=300'],
    ['id' => 3, 'name' => 'Cinnamon Swirl', 'price' => 8.49, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1572442388796-11668a67e53d?auto=format&fit=crop&q=80&w=300'],
    ['id' => 4, 'name' => 'Raspberry Ripple', 'price' => 8.12, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&q=80&w=300'],
    ['id' => 5, 'name' => 'Tiramisu Temptation', 'price' => 6.19, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&q=80&w=300'],
    ['id' => 6, 'name' => 'White Chocolate Wonder', 'price' => 6.54, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&q=80&w=300'],
    ['id' => 7, 'name' => 'Dark Roast Dynamite', 'price' => 12.03, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&q=80&w=300'],
    ['id' => 8, 'name' => 'Irish Cream Infusion', 'price' => 11.63, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&q=80&w=300'],
    ['id' => 9, 'name' => 'Pumpkin Spice Perfection', 'price' => 12.19, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?auto=format&fit=crop&q=80&w=300'],
    ['id' => 10, 'name' => 'Colombian Comfort', 'price' => 8.39, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&q=80&w=300'],
    ['id' => 11, 'name' => 'Ethiopian Emerald', 'price' => 22.93, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&q=80&w=300'],
    ['id' => 12, 'name' => 'Decaf Delight', 'price' => 25.08, 'category' => 'coffee', 'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&q=80&w=300'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Coffee - POS System</title>
    <!-- CDN Tailwind CSS และ FontAwesome สำหรับ Icon -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
    </style>
</head>
<body class="h-screen flex flex-col p-4 overflow-hidden">

    <!-- Top Navigation Bar -->
    <header class="flex justify-between items-center bg-white px-6 py-3 rounded-t-2xl border-b border-gray-100">
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2">
                <span class="font-bold text-lg text-gray-800">ama</span>
                <span class="font-semibold text-gray-700">American Coffee</span>
                <select class="bg-gray-100 text-xs px-2 py-1 rounded border border-gray-200 focus:outline-none">
                    <option>Open</option>
                    <option>Closed</option>
                </select>
            </div>
            <nav class="flex space-x-2 text-sm">
                <a href="#" class="px-3 py-1 text-gray-500 rounded-lg hover:bg-gray-100"><i class="fa-solid fa-chart-pie mr-1"></i> Dashboard</a>
                <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 font-medium rounded-lg"><i class="fa-solid fa-book-open mr-1"></i> Menu</a>
            </nav>
        </div>

        <div class="flex items-center space-x-4 text-sm text-gray-600">
            <div class="bg-gray-50 px-3 py-1.5 rounded-lg border border-gray-200">
                <i class="fa-regular fa-calendar mr-2 text-gray-400"></i>Wednesday, 27 Mar 2024 · 09:48
            </div>
            <button class="flex items-center space-x-1 px-3 py-1.5 bg-gray-50 border border-gray-200 rounded-lg hover:bg-gray-100">
                <i class="fa-solid fa-rotate text-xs"></i> <span>Refresh</span>
            </button>
            <button class="p-2 hover:bg-gray-100 rounded-full"><i class="fa-solid fa-wifi"></i></button>
            <button class="p-2 hover:bg-gray-100 rounded-full relative">
                <i class="fa-regular fa-bell"></i>
                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>
            <div class="flex items-center space-x-2 cursor-pointer border-l pl-4">
                <i class="fa-regular fa-circle-user text-xl text-gray-500"></i>
                <span class="font-medium text-gray-700">Bizer Alex</span>
                <i class="fa-solid fa-chevron-down text-xs text-gray-400"></i>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="flex flex-1 bg-white rounded-b-2xl overflow-hidden shadow-sm">
        
        <!-- Left Section: Menu List -->
        <div class="w-2/3 p-6 flex flex-col border-r border-gray-100">
            <!-- Header & Search -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold text-gray-800">Menu</h1>
                <div class="relative w-64">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-gray-400 text-sm"></i>
                    <input type="text" placeholder="Search menu..." class="w-full pl-9 pr-4 py-1.5 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:border-gray-400">
                </div>
            </div>

            <!-- Categories -->
            <div class="flex space-x-2 mb-6 overflow-x-auto pb-2">
                <?php foreach ($categories as $index => $cat): ?>
                    <button class="px-4 py-1.5 rounded-full text-xs font-medium whitespace-nowrap transition-all <?= $index === 1 ? 'bg-amber-500 text-white shadow-sm' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
                        <?= $cat['name'] ?> <span class="ml-1 opacity-80"><?= $cat['count'] ?></span>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-4 gap-4 overflow-y-auto custom-scrollbar pr-2 flex-1">
                <?php foreach ($products as $product): ?>
                    <div class="bg-gray-50 rounded-2xl p-3 flex flex-col justify-between border border-gray-100 hover:shadow-md transition-shadow relative group">
                        <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                            <i class="fa-solid fa-expand text-xs"></i>
                        </button>
                        <div class="h-28 w-full flex items-center justify-center mb-2 overflow-hidden rounded-xl">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="h-full w-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                        <div>
                            <h3 class="font-semibold text-xs text-gray-800 line-clamp-1 mb-1"><?= $product['name'] ?></h3>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-bold text-gray-900">$<?= number_format($product['price'], 2) ?></span>
                                <button onclick="addToOrder(<?= htmlspecialchars(json_encode($product)) ?>)" class="w-7 h-7 bg-black text-white rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i class="fa-solid fa-plus text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Right Section: Order Details -->
        <div class="w-1/3 p-6 flex flex-col justify-between bg-white">
            <div>
                <!-- Order Header -->
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-bookmark text-amber-500"></i>
                        <h2 class="font-bold text-gray-800">Order Details</h2>
                    </div>
                    <div class="flex items-center space-x-3 text-xs">
                        <button onclick="resetOrder()" class="text-gray-400 hover:text-red-500 flex items-center gap-1">
                            <i class="fa-regular fa-trash-can"></i> Reset Order
                        </button>
                        <select class="bg-gray-100 text-gray-700 px-2 py-1 rounded border border-gray-200 font-medium">
                            <option>🍽️ Dine In</option>
                            <option>🛍️ Take Away</option>
                        </select>
                    </div>
                </div>

                <!-- Cart List -->
                <div id="cart-list" class="space-y-3 max-h-[380px] overflow-y-auto custom-scrollbar pr-1">
                    <!-- จะถูก Render ด้วย JavaScript ด้านล่าง -->
                </div>
            </div>

            <!-- Order Summary & Actions -->
            <div class="border-t border-gray-100 pt-4 mt-2 space-y-3">
                <div class="space-y-1.5 text-xs text-gray-500">
                    <div class="flex justify-between">
                        <span>Sub Total</span>
                        <span id="sub-total" class="font-bold text-gray-800">$0.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Discount</span>
                        <span>-</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tax 12%</span>
                        <span id="tax-amount" class="font-bold text-gray-800">$0.00</span>
                    </div>
                    <div class="flex justify-between text-sm font-bold text-gray-900 pt-2 border-t">
                        <span>Total Payment</span>
                        <span id="total-payment">$0.00</span>
                    </div>
                </div>

                <div class="flex justify-between items-center bg-gray-50 px-3 py-2 rounded-xl border border-gray-100 text-xs">
                    <span class="text-gray-500">Add Discount</span>
                    <i class="fa-solid fa-chevron-right text-gray-400"></i>
                </div>

                <div class="flex justify-between items-center bg-gray-50 px-3 py-2 rounded-xl border border-gray-100 text-xs">
                    <span class="text-gray-500">Select Table</span>
                    <button class="bg-black text-white px-3 py-1 rounded-md font-medium">Select</button>
                </div>

                <!-- Buttons -->
                <div class="grid grid-cols-2 gap-3 pt-2">
                    <button onclick="processPayment()" class="bg-amber-400 hover:bg-amber-500 text-gray-900 font-semibold py-3 rounded-xl transition-colors text-sm shadow-sm">
                        Pay Now
                    </button>
                    <button class="border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold py-3 rounded-xl transition-colors text-sm">
                        Open Bill
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript For Handling Cart Interactivity -->
    <script>
        // ข้อมูลตะกร้าสินค้าเริ่มต้น (Mockup ตามภาพ)
        let cart = [
            { id: 1, name: 'French Vanilla Fantasy', price: 12.83, qty: 2, size: 'Small', sugar: 'Normal', image: 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&q=80&w=300' },
            { id: 2, name: 'Almond Amore', price: 12.83, qty: 1, size: 'Small', sugar: 'Normal', image: 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&q=80&w=300' },
            { id: 8, name: 'Irish Cream Infusion', price: 12.83, qty: 4, size: 'Small', sugar: 'Normal', image: 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&q=80&w=300' }
        ];

        // ฟังก์ชั่น Render รายการสินค้าในตะกร้า
        function renderCart() {
            const cartList = document.getElementById('cart-list');
            cartList.innerHTML = '';

            let subTotal = 0;

            cart.forEach((item, index) => {
                subTotal += item.price * item.qty;
                cartList.innerHTML += `
                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-2xl border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <img src="${item.image}" class="w-12 h-12 object-cover rounded-xl">
                            <div>
                                <h4 class="font-semibold text-xs text-gray-800">${item.name}</h4>
                                <p class="text-[10px] text-gray-400">Size: ${item.size} &nbsp;|&nbsp; Sugar: ${item.sugar}</p>
                                <span class="font-bold text-xs text-gray-900">$${item.price.toFixed(2)}</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button onclick="removeItem(${index})" class="text-red-400 hover:text-red-600 bg-red-50 p-1.5 rounded-lg text-xs mr-1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs"><i class="fa-solid fa-pen"></i></button>
                            <div class="flex items-center border border-gray-200 rounded-lg bg-white px-1">
                                <button onclick="updateQty(${index}, -1)" class="px-1.5 py-0.5 text-gray-500 hover:text-black">-</button>
                                <span class="px-2 text-xs font-semibold">${item.qty}</span>
                                <button onclick="updateQty(${index}, 1)" class="px-1.5 py-0.5 text-gray-500 hover:text-black">+</button>
                            </div>
                        </div>
                    </div>
                `;
            });

            // คำนวณภาษี 12% และ ยอดรวม
            const tax = subTotal * 0.12;
            const total = subTotal + tax;

            document.getElementById('sub-total').innerText = `$${subTotal.toFixed(2)}`;
            document.getElementById('tax-amount').innerText = `$${tax.toFixed(2)}`;
            document.getElementById('total-payment').innerText = `$${total.toFixed(2)}`;
        }

        // เพิ่มสินค้า
        function addToOrder(product) {
            const existingIndex = cart.findIndex(item => item.id === product.id);
            if (existingIndex > -1) {
                cart[existingIndex].qty += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    qty: 1,
                    size: 'Small',
                    sugar: 'Normal',
                    image: product.image
                });
            }
            renderCart();
        }

        // เพิ่ม/ลด จำนวน
        function updateQty(index, change) {
            cart[index].qty += change;
            if (cart[index].qty <= 0) {
                cart.splice(index, 1);
            }
            renderCart();
        }

        // ลบสินค้าออก
        function removeItem(index) {
            cart.splice(index, 1);
            renderCart();
        }

        // ล้างตะกร้า
        function resetOrder() {
            cart = [];
            renderCart();
        }

        function processPayment() {
            if(cart.length === 0) {
                alert("กรุณาเลือกอย่างน้อย 1 รายการก่อนชำระเงิน!");
                return;
            }
            alert("ชำระเงินสำเร็จ!");
            resetOrder();
        }

        // โหลดข้อมูลครั้งแรก
        renderCart();
    </script>
</body>
</html>