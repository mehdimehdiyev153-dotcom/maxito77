<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>Maxito | Giriş</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #0b0b0f;
      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
    }
    .container {
      width: 100%;
      max-width: 420px;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin-top: 40px;
      margin-bottom: 10px;
      color: #00ffe7;
      text-shadow: 0 0 15px #00ffe7;
      font-size: 36px;
    }
    .subtitle {
      font-size: 14px;
      color: #aaa;
      margin-bottom: 70px;
    }
    .card {
      background: #111;
      padding: 25px;
      border-radius: 18px;
      box-shadow: 0 0 25px rgba(0,255,231,0.18);
    }
    input {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border-radius: 12px;
      border: none;
      background: #1c1c1c;
      color: #fff;
      font-size: 15px;
    }
    .btn {
      width: 100%;
      padding: 15px;
      margin-top: 14px;
      border-radius: 30px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      background: linear-gradient(90deg, #00ffe7, #00b3ff);
      color: #000;
    }
    .btn.secondary {
      background: transparent;
      border: 1px solid #00ffe7;
      color: #00ffe7;
      margin-top: 10px;
    }
    #authMsg {
      margin-top: 15px;
      font-size: 14px;
      color: #ff8c8c;
    }
  </style>
</head>

<body>
<div class="container">
  <h1>MAXITO</h1>
  <div class="subtitle">saytımıza xoş gəlmisiniz ☺️</div>

  <div class="card">
    <input type="email" id="email" placeholder="E-mail">
    <input type="password" id="password" placeholder="Şifrə">

    <button class="btn" onclick="register()">Qeydiyyat</button>
    <button class="btn secondary" onclick="login()">Daxil ol</button>

    <div id="authMsg"></div>
  </div>
</div>

<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.7.0/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } 
    from "https://www.gstatic.com/firebasejs/12.7.0/firebase-auth.js";
  import { 
    getFirestore, doc, setDoc, getDocs, query, collection, where, updateDoc, increment, serverTimestamp 
  } from "https://www.gstatic.com/firebasejs/12.7.0/firebase-firestore.js";

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

  // DEVICE ID
  let deviceId = localStorage.getItem("deviceId");
  if (!deviceId) {
    deviceId = "dev-" + crypto.randomUUID();
    localStorage.setItem("deviceId", deviceId);
  }

  // REF OXU
  const params = new URLSearchParams(window.location.search);
  const ref = params.get("ref");
  if (ref) localStorage.setItem("referral", ref);

  // QEYDIYYAT
  window.register = async () => {
    try {
      const q = query(collection(db, "istifadeçiler"), where("deviceId", "==", deviceId));
      const snap = await getDocs(q);
      if (!snap.empty) {
        authMsg.innerText = "Bu cihazdan artıq hesab açılıb ❌";
        return;
      }

      const res = await createUserWithEmailAndPassword(auth, email.value, password.value);
      const uid = res.user.uid;
      const referralCode = localStorage.getItem("referral");

      // Yeni istifadəçi
      await setDoc(doc(db, "istifadeçiler", uid), {
        tarazliq: 0,
        deviceId: deviceId,
        "istinad Kodu": uid.substring(0, 6),
        "istinad eden": referralCode || "",
        referralRewarded: false,
        createdAt: serverTimestamp()
      });

      // 🔥 YALNIZ DƏVƏT EDƏNƏ +100 XAL
      if (referralCode) {
        const refQuery = query(
          collection(db, "istifadeçiler"),
          where("istinad Kodu", "==", referralCode)
        );
        const refSnap = await getDocs(refQuery);

        if (!refSnap.empty) {
          const refDoc = refSnap.docs[0];
          await updateDoc(refDoc.ref, {
            tarazliq: increment(100)
          });
        }
      }

      localStorage.removeItem("referral");
      authMsg.style.color = "#7CFFB2";
      authMsg.innerText = "Qeydiyyat uğurludur ✅";

    } catch (e) {
      authMsg.innerText = e.message;
    }
  };

  // LOGIN
  window.login = async () => {
    try {
      await signInWithEmailAndPassword(auth, email.value, password.value);
      window.location.href = "home.html";
    } catch {
      authMsg.innerText = "E-mail və ya şifrə yanlışdır ❌";
    }
  };
</script>
</body>
</html>
