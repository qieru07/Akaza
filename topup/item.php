<html lang="id">
<head> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Item Top-up Mobile Legends - Akaza Store</title>
    <link rel="stylesheet" href="item.css">
</head>

<body>
<div class="item"></div>
    <div class="card-item">
        <img src="../asset/Mobile Legend.jpg" class="game-img">
        <div>
            <div class="title">Mobile Legends: Bang Bang</div>
            <div class="subtitle">Moonton</div>
            
        
            <div class="badge-container">
                <div class="badge">⚡ Proses Cepat</div>
                <div class="badge">💬 Layanan 24/7</div>
                <div class="badge">🔒 Pembayaran Aman</div>
            </div>
        </div>
    </div>

    <!-- 🔥 FORM BARU -->
    <form action="../proses_topup.php" method="POST">
    <div class="container">
        <div class="form-box">
            <div class="nominal">
                <h3>Masukkan Data Akun</h3>
        
                <div class="input-group">
                    <label>User ID</label>
                    <input id="userid" name="user_id" type="number" required>
                </div>
        
                <div class="input-group">
                    <label>Server</label>
                    <input id="server" name="server" type="number" required>
                </div>

            </div>
            <div class="items-bold">
                <input type="hidden" name="game" value="Mobile Legends">
        
                <input type="hidden" name="nominal" id="nominalInput">
                <input type="hidden" name="metode" id="metodeInput">
        
                <h3>Pilih Paket Top-up</h3>
                <div class="diamond-grid" id="diamondList">
                    <div class="diamond-item" data-price="12000" data-name="Weekly Diamond">
                        <div class="item-head">
                            <span class="item-title">Weekly Diamond</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 12.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                    <div class="diamond-item" data-price="30000" data-name="Weekly Diamond x2">
                        <div class="item-head">
                            <span class="item-title">Weekly Diamond x2</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 30.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                    <div class="diamond-item" data-price="85000" data-name="Weekly Diamond x5">
                        <div class="item-head">
                            <span class="item-title">Weekly Diamond x5</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 85.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                    <div class="diamond-item" data-price="125000" data-name="Twilight Pass">
                        <div class="item-head">
                            <span class="item-title">Twilight Pass</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 125.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                    <div class="diamond-item" data-price="175000" data-name="Weekly Diamond x8">
                        <div class="item-head">
                            <span class="item-title">Weekly Diamond x8</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 175.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                    <div class="diamond-item" data-price="250000" data-name="Weekly Diamond x10">
                        <div class="item-head">
                            <span class="item-title">Weekly Diamond x10</span>
                            <span class="item-icon">💎</span>
                        </div>
                        <div class="item-price">Rp 250.000</div>
                        <div class="item-meta">
                            <span class="item-meta-icon">⚡</span>
                            <span>Pengiriman Instan</span>
                        </div>
                    </div>
                </div>
        
                <h3>Metode Pembayaran</h3>
                <select id="payment" class="payment-select" name="payment" required>
                    <option value="">-- Pilih Metode --</option>
                    <option value="dana">DANA</option>
                    <option value="ovo">OVO</option>
                    <option value="gopay">GoPay</option>
                    <option value="qris">QRIS</option>
                    <option value="bank">Virtual Account</option>
                </select>
            </div>
            <div class="tombol">
                <div class="price-box">
                    Total: <span id="total">Rp 0</span>
                </div>
        
                <button type="submit" class="buy-btn">Bayar</button>

            </div>
        </div>

    </div>
    </form>

    <script>
        const diamondItems = document.querySelectorAll('.diamond-item');
        const totalEl = document.getElementById('total');
        const nominalInput = document.getElementById('nominalInput');
        const metodeInput = document.getElementById('metodeInput');
        const paymentSelect = document.getElementById('payment');

        diamondItems.forEach(item => {
            item.addEventListener('click', () => {
                diamondItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                const price = Number(item.dataset.price);
                const name = item.dataset.name;
                nominalInput.value = name;
                totalEl.textContent = 'Rp ' + price.toLocaleString('id-ID');
            });
        });

        paymentSelect.addEventListener('change', () => {
            metodeInput.value = paymentSelect.value;
        });
    </script>
</body>
</html>