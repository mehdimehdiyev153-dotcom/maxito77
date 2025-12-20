<!DOCTYPE html>
<html lang="az">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Maxito | Home</title>

<style>
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #0b1d3a;
  color: #fff;
}

/* Header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 20px;
}

.withdraw {
  color: #00eaff;
  font-size: 14px;
  cursor: pointer;
}

.balance {
  color: #00ffcc;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
}

/* Center */
.center {
  text-align: center;
  margin-top: 40px;
}

.center h1 {
  font-size: 42px;
  margin-bottom: 10px;
  color: #00eaff;
  text-shadow: 0 0 15px rgba(0,234,255,0.9);
}

.center p {
  margin: 6px 0;
  opacity: 0.9;
}

/* Menu */
.menu {
  max-width: 420px;
  margin: 35px auto;
  padding: 0 20px;
}

.menu button {
  width: 100%;
  padding: 16px;
  margin-bottom: 14px;
  border-radius: 30px;
  border: none;
  cursor: pointer;
  font-size: 15px;
  font-weight: bold;
  background: linear-gradient(90deg, #00ffe7, #00b3ff);
  color: #000;
}

/* Bottom */
.bottom {
  position: fixed;
  bottom: 15px;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
}

.bottom button {
  background: transparent;
  border: 1px solid #00eaff;
  color: #00eaff;
  padding: 10px 16px;
  border-radius: 20px;
  cursor: pointer;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
  <div class="withdraw" onclick="location.href='withdraw.html'">
    💸 Çıxarış
  </div>

  <!-- BALANS -->
  <div class="balance" id="balance" onclick="location.href='balance.html'">
    Xal: 0
  </div>
</div>

<!-- CENTER -->
<div class="center">
  <h1>MAXITO</h1>
  <p>Xoş gəlmisiniz</p>
  <p>Bizimlə xal toplayın və qazanın</p>
</div>

<!-- MENU -->
<div class="menu">
  <!-- 🔥 BURDA DƏYİŞİKLİK VAR -->
  <button onclick="location.href='survey.php'">📝 Anketlər</button>

  <button onclick="location.href='ads.html'">📺 Reklam izlə</button>
  <button onclick="location.href='games.html'">🎮 Oyun oyna, xal qazan</button>
  <button onclick="location.href='referal.html'">👥 Referal</button>
  <button onclick="location.href='social.html'">🌐 Sosial Şəbəkə</button>
</div>

<!-- BOTTOM -->
<div class="bottom">
  <button onclick="location.href='index.html'">🚪 Çıxış</button>
  <button onclick="location.href='info.html'">ℹ️</button>
</div>

<!-- 🔥 FIREBASE BALANS OXUMA -->
<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.7.0/firebase-app.js";
  import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/12.7.0/firebase-auth.js";
  import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/12.7.0/firebase-firestore.js";

  const firebaseConfig = {
    apiKey: "AIzaSyD721MDcjXXNy7plZ5cDgTLM06TNEoKeuU",
    authDomain: "maxito-4a9ba.firebaseapp.com",
    projectId: "maxito-4a9ba",
    storageBucket: "maxito-4a9ba.firebasestorage.app",
    messagingSenderId: "360260172818",
    appId: "1:360260172818:web:9d766a06c775cd7c64accb"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const db = getFirestore(app);

  onAuthStateChanged(auth, async (user) => {
    if (!user) {
      window.location.href = "index.html";
      return;
    }

    const ref = doc(db, "users", user.uid);
    const snap = await getDoc(ref);

    if (snap.exists()) {
      const xal = snap.data().balance || 0;
      document.getElementById("balance").innerText = "Xal: " + xal;
    }
  });
</script>

</body>
</html>
