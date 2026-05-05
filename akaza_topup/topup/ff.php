<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Top Up Free Fire — Akaza Store</title>
  <link rel="stylesheet" href="ff.css">
</head>

<body>
<div class="ff"></div>
    <div class="card-ff">
        <img src="../asset/freefire.jpg" class="game-img">
        <div>
            <div class="title">Free Fire</div>
            <div class="subtitle">Garena</div>
            
        
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
        <div class="internal">

            <h3>Masukkan Data Akun</h3>

            <div class="input-group">
                <label>User ID</label>
                <input name="user_id" type="number" required>
        </div>
        
        </div>
        <div class="free">
        <input type="hidden" name="server" value="-">
    
        <input type="hidden" name="game" value="Free Fire">
        <input type="hidden" name="nominal" id="nominalInput">
        <input type="hidden" name="metode" id="metodeInput">
    
        <h3>Pilih Diamond</h3>
        <div class="diamond-grid" id="diamondList"></div>
    
        <h3>Metode Pembayaran</h3>
        <select id="payment" class="payment-select">
            <option value="">-- Pilih Metode --</option>
            <option value="Dana">Dana</option>
            <option value="Gopay">Gopay</option>
            <option value="Qris">QRIS</option>
        </select>
        </div>
        <div class="pack">
            <div class="price-box">
                Total: <span id="total">Rp 0</span>
            </div>
    
            <button type="submit" class="buy-btn">Bayar</button>

        </div>

     </div>
     </div>

    </form>
</div>

<script src="ff.js"></script>
</body>
</html>