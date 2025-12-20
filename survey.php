<?php
session_start();

/*
  QƏBUL EDİRİK Kİ:
  - User login olub
  - session-da user_id var
  Əgər hələ login yoxdursa, test üçün 1 qoyuram
*/
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // TEST ID
}

$user_id = $_SESSION['user_id'];

// OGAds Content Locker linkin
$locker = "https://lockedapp.org/cl/i/n6dl24?subid=" . $user_id;
?>

<!DOCTYPE html>
<html lang="az">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Maxito | Anketlər</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: radial-gradient(circle at top, #0b1d3a, #050b18);
  color: #fff;
}
.header {
  text-align: center;
  padding: 20px;
}
.header h1 {
  margin: 0;
  font-size: 32px;
  color: #00eaff;
  text-shadow: 0 0 15px rgba(0,234,255,0.8);
}
.back-btn {
  position: fixed;
  top: 15px;
  left: 15px;
  background: transparent;
  border: 1px solid #00eaff;
  color: #00eaff;
  padding: 8px 14px;
  border-radius: 20px;
  cursor: pointer;
}
.card {
  max-width: 420px;
  margin: 20px auto;
  background: linear-gradient(135deg, #102f5f, #07162f);
  border-radius: 18px;
  padding: 20px;
  box-shadow: 0 0 20px rgba(0,234,255,0.25);
}
.card h2 {
  margin-top: 0;
  font-size: 18px;
  color: #00ffcc;
}
.card p {
  font-size: 14px;
  opacity: 0.85;
}
.card button {
  width: 100%;
  margin-top: 12px;
  padding: 12px;
  border: none;
  border-radius: 25px;
  font-weight: bold;
  cursor: pointer;
  background: linear-gradient(90deg, #00ffe7, #00b3ff);
  color: #000;
}
.footer {
  text-align: center;
  margin: 30px 0 20px;
  font-size: 13px;
  opacity: 0.7;
}
</style>
</head>

<body>

<button class="back-btn" onclick="window.location.href='home.html'">⬅ Geri</button>

<div class="header">
  <h1>Anketlər</h1>
</div>

<!-- ANKET 1 -->
<div class="card">
  <h2>📋 Anket #1</h2>
  <p>Qısa anketi doldur, xal qazan.</p>
  <p><b>Mükafat:</b> 50 XAL</p>
  <button onclick="window.location.href='<?php echo $locker; ?>'">
    Anketi Başla
  </button>
</div>

<!-- ANKET 2 -->
<div class="card">
  <h2>📋 Anket #2</h2>
  <p>İstifadəçi təcrübəsi haqqında suallar.</p>
  <p><b>Mükafat:</b> 50 XAL</p>
  <button onclick="window.location.href='<?php echo $locker; ?>'">
    Anketi Başla
  </button>
</div>

<!-- ANKET 3 -->
<div class="card">
  <h2>📋 Anket #3</h2>
  <p>Qısa rəy anketi.</p>
  <p><b>Mükafat:</b> 50 XAL</p>
  <button onclick="window.location.href='<?php echo $locker; ?>'">
    Anketi Başla
  </button>
</div>

<div class="footer">
  © 2025 Maxito • Anketlər bölməsi
</div>

</body>
</html>
