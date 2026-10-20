
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farameet Laravel Staging</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: #101827;
            color: #f3f4f6;
            font-family: Arial, sans-serif;
        }
        main {
            width: min(600px, 85%);
            padding: 40px;
            border: 1px solid #374151;
            border-radius: 16px;
            background: #1f2937;
        }
        h1 { color: #60a5fa; }
        .status { color: #86efac; }
        p { line-height: 1.7; color: #d1d5db; }
    </style>
</head>
<body>
    <main>
        <h1>Farameet Deployment Test</h1>
        <p class="status">● Laravel staging environment</p>
        <p>This page is served by our Laravel application.</p>
        <p>
            Code changes are submitted through feature branches,
            reviewed through pull requests, tested by GitHub Actions,
            and deployed to staging after merging into main.
        </p>
        <p>Deployment version: 2 — Custom Laravel Homepage</p>
    </main>
</body>
</html>
