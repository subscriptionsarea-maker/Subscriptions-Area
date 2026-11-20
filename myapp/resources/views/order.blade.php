<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Subscriptions Area</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #f8fafc; margin: 0; padding: 0; text-align: center; }
        header { background: #1e293b; padding: 20px; border-bottom: 1px solid #334155; }
        nav a { color: #38bdf8; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .box { background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 30px; max-width: 400px; margin: 40px auto; text-align: left; }
        h2 { color: #38bdf8; text-align: center; margin-top: 0; }
        label { display: block; margin-top: 15px; color: #cbd5e1; font-size: 0.95rem; }
        input { width: 100%; padding: 10px; margin-top: 5px; border-radius: 6px; border: 1px solid #334155; background: #0f172a; color: #fff; box-sizing: border-box; }
        button { width: 100%; margin-top: 20px; padding: 12px; background: #0284c7; color: #fff; border: none; border-radius: 8px; font-weight: bold; font-size: 1rem; cursor: pointer; }
        .alert { background: #065f46; color: #d1fae5; padding: 12px; border-radius: 8px; margin-bottom: 15px; text-align: center; }
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
    <div class="box">
        <h2>অর্ডার সম্পন্ন করুন</h2>
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        <form action="/order" method="POST">
            @csrf
            <label>প্যাকেজের নাম</label>
            <input type="text" name="plan_name" value="{{ request('plan', 'Netflix Premium') }}" readonly>
            <label>আপনার নাম</label>
            <input type="text" name="customer_name" placeholder="যেমন: রাকিব হাসান" required>
            <label>আপনার ইমেইল (যেখানে একাউন্ট পাবেন)</label>
            <input type="email" name="customer_email" placeholder="example@gmail.com" required>
            <label>বিকাশ / নগদ Transaction ID</label>
            <input type="text" name="trx_id" placeholder="যেমন: 9H7G6F5D" required>
            <button type="submit">অর্ডার কনফার্ম করুন</button>
        </form>
    </div>
</body>
</html>
