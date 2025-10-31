<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4f46e5, #9333ea);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 40px 60px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Hello World</h1>
        <p>Welcome to your first Laravel App</p>
    </div>
</body>
</html>
