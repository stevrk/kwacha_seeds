@extends('layouts.app')

@section('title', 'Request a Quote - Kwacha Seeds')

@section('content')
<!-- Spacer for fixed navbar -->
<div class="h-[70px] md:h-[140px] lg:h-[150px]"></div>

<section class="py-8 md:py-12 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="text-center mb-8 md:mb-12">
            <div class="inline-flex items-center gap-2 bg-orange-100 rounded-full px-4 py-2 mb-4">
                <i class="fas fa-file-invoice-dollar text-orange-500"></i>
                <span class="text-sm font-semibold text-orange-600">Get a Quote</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-3" style="color: var(--kwacha-green);">
                Request a <span style="color: var(--accent-orange);">Bulk Quote</span>
            </h1>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                Fill in your details and we'll get back to you within 24 hours with a competitive price
            </p>
        </div>
        
        <!-- Quote Form -->
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-green-800 to-green-700 px-6 py-4">
                    <h2 class="text-white font-semibold text-lg">Quote Request Form</h2>
                    <p class="text-green-200 text-sm">Please fill in all required fields</p>
                </div>
                
                <div class="p-6 md:p-8">
                    <form id="quoteForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="fullName" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition">
                            </div>
                            
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition">
                            </div>
                            
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition">
                            </div>
                            
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Organization (Optional)</label>
                                <input type="text" id="organization" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition">
                            </div>
                            
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Delivery Location</label>
                                <input type="text" id="location" placeholder="City/District, Malawi" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition">
                            </div>
                        </div>
                        
                        <div class="border-t pt-6 mt-2">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-bold" style="color: var(--kwacha-green);">Select Seeds & Quantities</h3>
                                <button type="button" id="addMoreSeedsBtn" class="text-sm flex items-center gap-1 px-3 py-1.5 rounded-lg transition" style="background: var(--accent-orange); color: white;">
                                    <i class="fas fa-plus"></i> Add Seed
                                </button>
                            </div>
                            
                            <!-- Seeds Table -->
                            <div class="overflow-x-auto">
                                <table class="w-full border-collapse">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="p-3 text-left text-sm font-semibold text-gray-700">Seed Type</th>
                                            <th class="p-3 text-left text-sm font-semibold text-gray-700">Pack Size</th>
                                            <th class="p-3 text-left text-sm font-semibold text-gray-700">Quantity</th>
                                            <th class="p-3 text-left text-sm font-semibold text-gray-700">Subtotal</th>
                                            <th class="p-3 text-center text-sm font-semibold text-gray-700" style="width: 50px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="seedsTableBody">
                                        <!-- Dynamic rows will be added here -->
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Grand Total -->
                            <div class="mt-6 p-4 rounded-xl" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
                                <div class="flex justify-between items-center">
                                    <span class="text-white font-bold text-lg">GRAND TOTAL</span>
                                    <span id="grandTotal" class="text-white font-bold text-2xl">MK 0</span>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full mt-6 py-3 rounded-lg font-bold text-white transition-all duration-300 hover:scale-[1.02] shadow-lg text-lg" style="background: var(--accent-orange);">
                            <i class="fas fa-paper-plane mr-2"></i> Submit Quote Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>

<style>
    .form-group input:focus {
        outline: none;
    }
    
    .seed-row td {
        padding: 10px 8px;
        border-bottom: 1px solid #e5e7eb;
        vertical-align: middle;
    }
    
    .seed-type, .pack-size {
        width: 100%;
        padding: 8px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 14px;
        background: white;
    }
    
    .seed-quantity {
        width: 80px;
        padding: 8px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        text-align: center;
    }
    
    .remove-row-btn {
        background: #fee2e2;
        border: none;
        color: #dc2626;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .remove-row-btn:hover {
        background: #dc2626;
        color: white;
    }
</style>

<script>
    // Seed Prices (per pack in Malawi Kwacha)
    const seedPrices = {
        maize: { name: 'Premium Maize (MH36)', 2: 3500, 5: 8000, 25: 35000 },
        'orange-maize': { name: 'Orange Maize (MH42A)', 2: 3800, 5: 8500, 25: 38000 },
        soybean: { name: 'Soybean (Chitedze 4)', 2: 4000, 5: 9000, 25: 40000 },
        wheat: { name: 'Wheat (KARS 52)', 2: 3000, 5: 7000, 25: 30000 },
        groundnut: { name: 'Groundnut (CG9)', 2: 4500, 5: 10000, 25: 45000 }
    };
    
    // Get URL parameters
    function getUrlParams() {
        const params = new URLSearchParams(window.location.search);
        return {
            product: params.get('product'),
            type: params.get('type'),
            packSize: params.get('packSize')
        };
    }
    
    // Add row to table
    function addSeedRow(seedType = 'maize', packSize = '2', quantity = 0) {
        const tbody = document.getElementById('seedsTableBody');
        const rowId = 'row_' + Date.now() + '_' + Math.random().toString(36).substr(2, 4);
        
        const row = document.createElement('tr');
        row.className = 'seed-row';
        row.id = rowId;
        row.innerHTML = `
            <td>
                <select class="seed-type" data-row="${rowId}">
                    <option value="maize" ${seedType === 'maize' ? 'selected' : ''}>Premium Maize (MH36)</option>
                    <option value="orange-maize" ${seedType === 'orange-maize' ? 'selected' : ''}>Orange Maize (MH42A)</option>
                    <option value="soybean" ${seedType === 'soybean' ? 'selected' : ''}>Soybean (Chitedze 4)</option>
                    <option value="wheat" ${seedType === 'wheat' ? 'selected' : ''}>Wheat (KARS 52)</option>
                    <option value="groundnut" ${seedType === 'groundnut' ? 'selected' : ''}>Groundnut (CG9)</option>
                </select>
            </td>
            <td>
                <select class="pack-size" data-row="${rowId}">
                    <option value="2" ${packSize == 2 ? 'selected' : ''}>2kg Pack</option>
                    <option value="5" ${packSize == 5 ? 'selected' : ''}>5kg Pack</option>
                    <option value="25" ${packSize == 25 ? 'selected' : ''}>25kg Pack</option>
                </select>
            </td>
            <td>
                <input type="number" class="seed-quantity" value="${quantity}" min="0" step="1" data-row="${rowId}">
            </td>
            <td class="seed-subtotal">MK 0</td>
            <td class="text-center">
                <button type="button" class="remove-row-btn" data-row="${rowId}" title="Remove">
                    <i class="fas fa-trash-alt text-xs"></i>
                </button>
            </td>
        `;
        
        tbody.appendChild(row);
        addRowEventListeners(row);
        calculateRowSubtotal(row);
        calculateGrandTotal();
        
        return row;
    }
    
    function addRowEventListeners(row) {
        const seedType = row.querySelector('.seed-type');
        const packSize = row.querySelector('.pack-size');
        const quantity = row.querySelector('.seed-quantity');
        const removeBtn = row.querySelector('.remove-row-btn');
        
        if (seedType) seedType.addEventListener('change', () => { calculateRowSubtotal(row); calculateGrandTotal(); });
        if (packSize) packSize.addEventListener('change', () => { calculateRowSubtotal(row); calculateGrandTotal(); });
        if (quantity) quantity.addEventListener('input', () => { calculateRowSubtotal(row); calculateGrandTotal(); });
        
        if (removeBtn) {
            removeBtn.addEventListener('click', () => {
                const rows = document.querySelectorAll('#seedsTableBody .seed-row');
                if (rows.length > 1) {
                    row.remove();
                    calculateGrandTotal();
                } else {
                    // Reset the only row
                    const qty = row.querySelector('.seed-quantity');
                    if (qty) qty.value = 0;
                    calculateRowSubtotal(row);
                    calculateGrandTotal();
                }
            });
        }
    }
    
    function calculateRowSubtotal(row) {
        const seedTypeSelect = row.querySelector('.seed-type');
        const packSize = row.querySelector('.pack-size').value;
        const quantity = parseInt(row.querySelector('.seed-quantity').value) || 0;
        
        const seedType = seedTypeSelect.value;
        const price = seedPrices[seedType][packSize] || 0;
        const subtotal = price * quantity;
        
        const subtotalCell = row.querySelector('.seed-subtotal');
        subtotalCell.textContent = `MK ${subtotal.toLocaleString()}`;
        
        return subtotal;
    }
    
    function calculateGrandTotal() {
        const rows = document.querySelectorAll('#seedsTableBody .seed-row');
        let grandTotal = 0;
        
        rows.forEach(row => {
            grandTotal += calculateRowSubtotal(row);
        });
        
        document.getElementById('grandTotal').textContent = `MK ${grandTotal.toLocaleString()}`;
        return grandTotal;
    }
    
    // Initialize with pre-filled product if coming from product page
    document.addEventListener('DOMContentLoaded', function() {
        const params = getUrlParams();
        
        // Add first row
        if (params.product && params.type) {
            // Product coming from enquiry button
            addSeedRow(params.type, params.packSize || '2', 1);
        } else {
            // Empty form from navbar quote button
            addSeedRow('maize', '2', 0);
        }
        
        // Add more seeds button
        const addMoreBtn = document.getElementById('addMoreSeedsBtn');
        if (addMoreBtn) {
            addMoreBtn.addEventListener('click', () => addSeedRow('maize', '2', 0));
        }
        
        // Form submission
        const quoteForm = document.getElementById('quoteForm');
        if (quoteForm) {
            quoteForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const fullName = document.getElementById('fullName').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const organization = document.getElementById('organization').value;
                const location = document.getElementById('location').value;
                
                if (!fullName || !email || !phone) {
                    alert('Please fill in all required fields');
                    return;
                }
                
                // Collect order details
                const rows = document.querySelectorAll('#seedsTableBody .seed-row');
                let orderItems = [];
                let hasItems = false;
                
                rows.forEach(row => {
                    const seedType = row.querySelector('.seed-type').value;
                    const packSize = row.querySelector('.pack-size').value;
                    const quantity = parseInt(row.querySelector('.seed-quantity').value) || 0;
                    
                    if (quantity > 0) {
                        hasItems = true;
                        orderItems.push({
                            name: seedPrices[seedType].name,
                            packSize: packSize,
                            quantity: quantity,
                            price: seedPrices[seedType][packSize],
                            subtotal: seedPrices[seedType][packSize] * quantity
                        });
                    }
                });
                
                if (!hasItems) {
                    alert('Please add at least one seed with quantity greater than 0');
                    return;
                }
                
                // Here you would typically send to your backend
                // For now, show success message
                alert(`Thank you ${fullName}!\n\nYour quote request has been submitted successfully.\n\nWe will contact you within 24 hours at ${email} or ${phone}.\n\nTotal: ${document.getElementById('grandTotal').textContent}`);
                
                // Optional: Reset form or redirect
                // window.location.href = '/';
            });
        }
    });
</script>
@endsection