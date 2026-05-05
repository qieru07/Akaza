<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Top-up Mobile Legends — Akaza Store</title>
  <link rel="stylesheet" href="ml.css">
</head>

<body>
 
<div class="mlbb"></div>
    <div class="card-mlbb">
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
            <div class="onbold">
                <input type="hidden" name="game" value="Mobile Legends">
        
                <!-- HIDDEN INPUT -->
                <input type="hidden" name="nominal" id="nominalInput">
                <input type="hidden" name="metode" id="metodeInput">
        
                <h3>Pilih Nominal Diamond</h3>
                <div class="diamond-grid" id="diamondList"></div>
        
                <h3>Metode Pembayaran</h3>
                <select id="payment" class="payment-select">
                    <option value="">-- Pilih Metode --</option>
                    <option value="dana">DANA</option>
                    <option value="ovo">OVO</option>
                    <option value="gopay">GoPay</option>
                    <option value="qris">QRIS</option>
                    <option value="bank">Virtual Account</option>
                </select>

            </div>
            <div class="kopi">
                <div class="price-box">
                    Total: <span id="total">Rp 0</span>
                </div>
        
                <!-- 🔥 BUTTON BARU -->
                <button type="submit" class="buy-btn">Bayar</button>
            </div>
        </div>

    </form>
</div>

</body>
<script src="ml.js"></script>
</html>