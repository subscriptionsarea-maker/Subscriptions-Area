<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans - Subscriptions Area</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #f8fafc; margin: 0; padding: 0; text-align: center; }
        header { background: #1e293b; padding: 20px; border-bottom: 1px solid #334155; }
        nav a { color: #38bdf8; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .container { padding: 40px 20px; max-width: 900px; margin: auto; }
        h1 { font-size: 2.2rem; color: #38bdf8; margin-bottom: 10px; }
        .grid { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px; }
        .card { background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 25px; width: 250px; }
        .card h2 { color: #f8fafc; margin-top: 0; }
        .price { font-size: 1.8rem; color: #38bdf8; font-weight: bold; margin: 15px 0; }
        .card p { color: #cbd5e1; font-size: 0.95rem; line-height: 1.5; }
        .btn { display: inline-block; margin-top: 15px; padding: 10px 22px; background: #0284c7; color: #fff; text-decoration: none; border-radius: 8px; font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/plans">Plans</a>
            <a href="/about">About</a>
        </nav>
    </header>
    <div class="container">
        <h1>আমাদের সাবস্ক্রিপশন প্ল্যানসমূহ</h1>
        <p style="color: #cbd5e1;">আপনার পছন্দের ডিজিটাল সার্ভিসটি বেছে নিন</p>
        <div class="grid">
            <div class="card">
                <h2>Netflix Premium</h2>
                <div class="price">৳৩৫০ / মাস</div>
                <p>4K Ultra HD কোয়ালিটি<br>১টি প্রাইভেট প্রোফাইল<br>তাৎক্ষণিক ডেলিভারি</p>
                <a href="/order?plan=Subscription Plan" class="btn">অর্ডার করুন</a>
            </div>
            <div class="card">
                <h2>Spotify Duo / Individual</h2>
                <div class="price">৳১৫০ / মাস</div>
                <p>অ্যাড-ফ্রি মিউজিক<br>অফলাইন ডাউনলোড<br>নিজস্ব ইমেইলে অ্যাক্টিভেশন</p>
                <a href="/order?plan=Subscription Plan" class="btn">অর্ডার করুন</a>
            </div>
            <div class="card">
                <h2>Canva Pro</h2>
                <div class="price">৳১২০ / মাস</div>
                <p>সব প্রিমিয়াম টেমপ্লেট<br>ব্যাকগ্রাউন্ড রিমুভার<br>ফুল ওয়ারেন্টি সাপোর্ট</p>
                <a href="/order?plan=Subscription Plan" class="btn">অর্ডার করুন</a>
            </div>
        </div>
    </div>
</body>
</html>
