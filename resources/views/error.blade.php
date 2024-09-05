<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0f0f0;
}

.container {
    text-align: center;
    max-width: 600px;
    width: 100%;
}

.error-image img {
    max-width: 100%;
    height: auto;
    animation: bounce 2s infinite;
}

.error-content h1 {
    font-size: 2.5rem;
    color: #333;
    margin-top: 20px;
}

.error-content p {
    font-size: 1.2rem;
    color: #666;
    margin: 10px 0 20px;
}

.home-link {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    color: #fff;
    background-color: #007BFF;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.home-link:hover {
    background-color: #0056b3;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-30px);
    }
    60% {
        transform: translateY(-15px);
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="error-image">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/022/310/933/small_2x/404-error-page-not-found-3d-illustration-png.png" alt="404 Error">
        </div>
        <div class="error-content">
            <h1>Oops! Page Not Found</h1>
            <p>Sorry, the page you're looking for doesn't exist.</p>
            <a href="{{route('showData')}}" class="home-link">Go Back to Home</a>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
