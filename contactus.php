<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Contact Us - JARK1 Tech</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<style>
  :root{
    --teal:#12d7e6;
    --bg-dark:#0b1623;
    --card:#0f2031;
    --card-2:#11263a;
  }
  *{box-sizing:border-box}
  html,body{margin:0;font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,sans-serif;color:#e9f4ff;background:#0a0f14}
  .site-header{position:sticky; top:0; z-index:1000; backdrop-filter:saturate(140%) blur(6px); background:rgba(0,0,0,.75); border-bottom:1px solid rgba(255,255,255,.06);}
  .nav{max-width:1100px; margin:0 auto; height:64px; display:flex; align-items:center; justify-content:center; gap:36px;}
  .nav a{color:var(--teal); text-decoration:none; font-weight:600; letter-spacing:.3px;}
  .nav a:hover{opacity:.8}
  .logo-wrap{position:absolute; left:50%; transform:translateX(-50%); top:54px; display:flex; justify-content:center; width:100%; pointer-events:none;}
  .logo{height:70px; width:70px; border-radius:10px; background:#fff; display:inline-grid; place-items:center; box-shadow:0 12px 40px rgba(0,0,0,.45); pointer-events:auto;}
  .hero{position:relative; background:url('https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat; min-height:270px;}
  .hero::after{content:""; position:absolute; inset:0; background:rgba(0,0,0,.55);}
  .hero-inner{position:relative; z-index:1; max-width:1000px; margin:0 auto; padding:120px 16px 48px; text-align:center;}
  .hero h1{margin:14px 0 0; color:#fff; font-size:40px; font-weight:800; text-shadow:0 6px 28px rgba(0,0,0,.55);}
  .wrap{max-width:1000px;margin:28px auto 80px;padding:0 16px;}
  .contact-grid{display:grid; grid-template-columns:1.1fr .9fr; gap:24px;}
  @media (max-width:900px){ .contact-grid{grid-template-columns:1fr} .logo-wrap{top:48px} }
  .card{background:linear-gradient(145deg,var(--card),var(--card-2)); border:1px solid rgba(255,255,255,.06); border-radius:18px; padding:26px; box-shadow: 0 20px 60px rgba(0,0,0,.45), inset 0 1px 0 rgba(255,255,255,.04);}
  .card h2{margin:0 0 12px;color:#fff}
  .muted{color:#b6cee8;font-size:14px;margin:0 0 18px}
  .row{display:grid; grid-template-columns:1fr 1fr; gap:14px}
  @media (max-width:600px){ .row{grid-template-columns:1fr} }
  label{display:block;color:#cbe7ff;font-size:13px;margin:0 0 6px}
  input,textarea{width:100%; padding:12px 14px; border-radius:12px; border:1px solid rgba(255,255,255,.08); background:rgba(255,255,255,.04); color:#e9f4ff; outline:none; box-shadow:inset 0 0 0 1px rgba(255,255,255,.03), inset 0 12px 30px rgba(0,0,0,.35); transition:.25s;}
  input:focus,textarea:focus{box-shadow:0 0 0 3px rgba(18,215,230,.25), inset 0 12px 30px rgba(0,0,0,.4)}
  textarea{min-height:120px; resize:vertical}
  .btn{display:inline-flex; align-items:center; justify-content:center; gap:10px; background:linear-gradient(135deg,#12d7e6,#6df7ff); color:#00222a; border:none; padding:12px 18px; border-radius:12px; font-weight:800; letter-spacing:.2px; cursor:pointer; width:100%; box-shadow:0 12px 30px rgba(18,215,230,.35), inset 0 -6px 14px rgba(0,0,0,.25); transition:transform .12s ease, box-shadow .2s ease;}
  .btn:hover{transform:translateY(-1px)}
  .btn:active{transform:translateY(0)}
  .contact-info .line{display:flex; gap:12px; align-items:flex-start; margin:12px 0; color:#d9f7ff}
  .contact-info i{color:var(--teal); margin-top:2px}
  .toast{position:fixed; right:20px; top:-80px; z-index:2000; background:linear-gradient(135deg,#0fe3f3,#68fff9); color:#00222a; padding:12px 16px; border-radius:12px; font-weight:700; box-shadow:0 14px 40px rgba(18,215,230,.4); transition:transform .5s cubic-bezier(.22,.9,.36,1), top .5s cubic-bezier(.22,.9,.36,1);}
  .toast.show{top:20px}
  .toast.error{background:linear-gradient(135deg,#ff4757,#ff6b7a); color:#fff;}
  footer{background:#0b1623; color:#bfe9ff; text-align:center; padding:24px 12px; margin-top:60px; border-top:1px solid rgba(255,255,255,.06);}
  footer .social a{color:var(--teal); margin:0 10px; text-decoration:none}
</style>
</head>
<body>
<header class="site-header">
  <nav class="nav">
    <a href="index.html">Home</a>
    <a href="services.html">Our Services</a>
    <a href="about.html">About Us</a>
    <a href="contactus.html">Contact Us</a>
  </nav>
  <div class="logo-wrap">
    <img class="logo" src="logo.png" alt="JARK1 Tech Logo">
  </div>
</header>
<section class="hero">
  <div class="hero-inner"><h1>Contact Us</h1></div>
</section>
<main class="wrap">
  <div class="contact-grid">
    <section class="card">
      <h2>Send us a message</h2>
      <p class="muted">Fill the form and we'll get back to you shortly.</p>
      <form id="contactForm" novalidate>
        <div class="row">
          <div><label for="name">Full Name</label><input id="name" name="name" type="text" placeholder="Your name" required /></div>
          <div><label for="phone">Contact Number</label><input id="phone" name="phone" type="tel" placeholder="+977 98xxxxxxx" required /></div>
        </div>
        <label for="email" style="margin-top:12px">Email</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" required />
        <label for="address" style="margin-top:12px">Address</label>
        <input id="address" name="address" type="text" placeholder="City, Street, etc." required />
        <label for="message" style="margin-top:12px">Message</label>
        <textarea id="message" name="message" placeholder="Your message..." required></textarea>
        <input type="text" name="company" id="company" style="display:none">
        <button class="btn" type="submit"><i class="fa-solid fa-paper-plane"></i> Submit</button>
      </form>
    </section>
    <aside class="card contact-info">
      <h2>JARK1 Tech</h2>
      <p class="muted">We help brands with design, simple websites, and social media.</p>
      <div class="line"><i class="fa-solid fa-envelope"></i> amrixpatel111@gmail.com</div>
      <div class="line"><i class="fa-solid fa-phone"></i> +977 9769755690</div>
      <div class="line"><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal</div>
      <hr style="border-color:rgba(255,255,255,.08)">
      <div class="line"><i class="fa-brands fa-facebook"></i> /JARK1Tech</div>
      <div class="line"><i class="fa-brands fa-instagram"></i> @jark1tech</div>
    </aside>
  </div>
</main>
<div id="toast" class="toast">Thanks for contacting us! We'll be in touch.</div>
<footer>
  <img src="logo.png" alt="Logo" style="height:40px"><br>
  <div class="social">
    <a href="#">Facebook</a>•<a href="#">Instagram</a>•<a href="#">Twitter</a>
  </div>
  <div style="opacity:.8;margin-top:8px">© 2025 JARK1 Tech. All rights reserved.</div>
</footer>
<script>
  const form = document.getElementById('contactForm');
  const toast = document.getElementById('toast');
  
  function showToast(msg = "Thanks for contacting us!", isError = false) {
    toast.textContent = msg;
    toast.className = isError ? 'toast error show' : 'toast show';
    setTimeout(() => toast.classList.remove('show'), 3000);
  }
  
  function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }
  
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Honeypot spam check
    if (document.getElementById('company').value) {
      showToast('Spam detected.', true);
      return;
    }
    
    // Get form data
    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const email = document.getElementById('email').value.trim();
    const address = document.getElementById('address').value.trim();
    const message = document.getElementById('message').value.trim();
    
    // Validate fields
    if (!name || !phone || !email || !address || !message) {
      showToast('All fields are required.', true);
      return;
    }
    
    if (!validateEmail(email)) {
      showToast('Invalid email address.', true);
      return;
    }
    
    // Create mailto link
    const subject = encodeURIComponent('New Contact Form Submission - JARK1 Tech');
    const body = encodeURIComponent(`You have received a new message from JARK1 Tech contact form:

Name: ${name}
Phone: ${phone}
Email: ${email}
Address: ${address}

Message:
${message}`);
    
    const mailtoLink = `mailto:amrixpatel111@gmail.com?subject=${subject}&body=${body}`;
    window.location.href = mailtoLink;
    
    // Show success message and reset form
    showToast('Thanks for contacting us! We\'ll be in touch.');
    form.reset();
  });
</script>
</body>
</html>