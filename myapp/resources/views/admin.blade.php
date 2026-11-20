<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Subscriptions Area</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #f8fafc; margin: 0; padding: 0; text-align: center; }
        header { background: #1e293b; padding: 20px; border-bottom: 1px solid #334155; }
        nav a { color: #38bdf8; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .container { padding: 30px 15px; max-width: 900px; margin: auto; }
        h1 { color: #38bdf8; font-size: 1.8rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #1e293b; border-radius: 8px; overflow: hidden; }
        th, td { padding: 12px; border-bottom: 1px solid #334155; text-align: left; font-size: 0.9rem; }
        th { background: #0284c7; color: #fff; }
        .login-box { background: #1e293b; padding: 30px; max-width: 350px; margin: 50px auto; border-radius: 12px; border: 1px solid #334155; }
        input { width: 100%; padding: 10px; margin-top: 10px; border-radius: 6px; border: 1px solid #334155; background: #0f172a; color: #fff; box-sizing: border-box; }
        button { width: 100%; margin-top: 15px; padding: 10px; background: #0284c7; color: #fff; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
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
    @if(request('pass') !== 'admin123')
        <div class="login-box">
            <h2 style="color: #38bdf8; margin-top: 0;">Admin Login</h2>
            <form method="GET" action="/admin">
                <input type="password" name="pass" placeholder="পাসওয়ার্ড দিন (admin123)" required>
                <button type="submit">লগইন করুন</button>
            </form>
        </div>
    @else
        <div class="container">
            <h1>সকল অর্ডারের তালিকা ({{ count($orders) }})</h1>
            <div style="overflow-x: auto;">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>প্যাকেজ</th>
                        <th>নাম</th>
                        <th>ইমেইল</th>
                        <th>TrxID</th>
                        <th>সময়</th>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>{{ $order->plan_name }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_email }}</td>
                        <td style="color: #38bdf8; font-weight: bold;">{{ $order->trx_id }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
</body>
</html>
