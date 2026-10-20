<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farameet | Docker Containerization Test</title>
    <style>
        :root {
            color-scheme: dark;
            --bg: #0b1120;
            --panel: #151f32;
            --border: #29374d;
            --text: #f1f5f9;
            --muted: #9caec4;
            --blue: #60a5fa;
            --green: #4ade80;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(ellipse at top right, #172d4c 0, transparent 42%),
                var(--bg);
            color: var(--text);
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
            padding: 48px 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 38px;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .4px;
        }

        .brand span { color: var(--blue); }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            border: 1px solid #166534;
            background: #052e1b;
            color: #86efac;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .8px;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--green);
        }

        .hero { margin-bottom: 32px; }

        .eyebrow {
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            font-weight: 700;
        }

        h1 {
            margin: 10px 0;
            font-size: clamp(32px, 5vw, 48px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        h1 span { color: var(--blue); }

        .subtitle {
            max-width: 680px;
            color: var(--muted);
            font-size: 16px;
        }

        .summary {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin: 28px 0 38px;
        }

        .stat, .card, .info-panel {
            border: 1px solid var(--border);
            background: rgba(21, 31, 50, .92);
            border-radius: 14px;
        }

        .stat { padding: 20px; }

        .stat-label {
            color: var(--muted);
            font-size: 13px;
        }

        .stat-value {
            font-size: 21px;
            font-weight: 700;
            margin-top: 5px;
        }

        .green { color: var(--green); }
        .blue { color: var(--blue); }

        h2 {
            font-size: 20px;
            margin: 0 0 6px;
        }

        .section-note {
            color: var(--muted);
            margin: 0 0 20px;
            font-size: 14px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .card { padding: 23px; }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
        }

        .icon {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: #203452;
            color: var(--blue);
            font-size: 21px;
            font-weight: 700;
        }

        .tag {
            color: #86efac;
            border: 1px solid #285b46;
            background: #102c24;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
            white-space: nowrap;
        }

        .card h3 {
            margin: 0 0 5px;
            font-size: 17px;
        }

        .card p {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
        }

        .info-panel {
            margin-top: 30px;
            padding: 24px;
        }

        .info-panel p {
            margin: 8px 0 0;
            color: var(--muted);
            font-size: 14px;
        }

        code {
            color: #bfdbfe;
            background: #0b1424;
            border: 1px solid var(--border);
            padding: 2px 6px;
            border-radius: 5px;
        }

        footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
            color: #8092aa;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        @media (max-width: 650px) {
            .summary, .grid { grid-template-columns: 1fr; }
            .container { padding: 28px 0; }
            h1 { letter-spacing: -.7px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="brand">FARA<span>MEET</span> <span style="color:#9caec4;font-weight:400">/ Engineering</span></div>
            <div class="badge"><span class="dot"></span> LOCAL CONTAINER TEST</div>
        </header>

        <main>
            <section class="hero">
                <div class="eyebrow">Deployment environment · Version 3</div>
                <h1>Dockerized <span>Farameet</span></h1>
                <p class="subtitle">
                    A local containerization test for the Farameet Laravel application.
                    The objective is to build, package, and run the application in a
                    repeatable Docker environment before further deployment testing.
                </p>
            </section>

            <section class="summary" aria-label="Environment summary">
                <div class="stat">
                    <div class="stat-label">Application response</div>
                    <div class="stat-value green">HTTP 200 OK</div>
                </div>
                <div class="stat">
                    <div class="stat-label">Application framework</div>
                    <div class="stat-value">Laravel 13</div>
                </div>
                <div class="stat">
                    <div class="stat-label">Local endpoint</div>
                    <div class="stat-value blue">localhost:8080</div>
                </div>
            </section>

            <section>
                <h2>Containerized application components</h2>
                <p class="section-note">
                    Technologies used to build and run this local test environment.
                </p>

                <div class="grid">
                    <article class="card">
                        <div class="card-top">
                            <div class="icon">PHP</div>
                            <span class="tag">RUNTIME IMAGE</span>
                        </div>
                        <h3>Laravel Application</h3>
                        <p>
                            PHP 8.4 CLI image running the Laravel application and
                            serving HTTP traffic on port 8000 inside the container.
                        </p>
                    </article>

                    <article class="card">
                        <div class="card-top">
                            <div class="icon">JS</div>
                            <span class="tag">BUILD STAGE</span>
                        </div>
                        <h3>Frontend Assets</h3>
                        <p>
                            Node.js 24 and npm install frontend dependencies and
                            build the production assets with Vite and Tailwind CSS.
                        </p>
                    </article>

                    <article class="card">
                        <div class="card-top">
                            <div class="icon">DB</div>
                            <span class="tag">LOCAL STORAGE</span>
                        </div>
                        <h3>SQLite Database</h3>
                        <p>
                            SQLite provides a lightweight database for local
                            testing without requiring a separate database server.
                        </p>
                    </article>

                    <article class="card">
                        <div class="card-top">
                            <div class="icon">CFG</div>
                            <span class="tag">APP SERVICES</span>
                        </div>
                        <h3>Sessions, Cache & Queue</h3>
                        <p>
                            File-based sessions and cache, with synchronous queue
                            processing configured for the local test environment.
                        </p>
                    </article>
                </div>
            </section>

            <section class="info-panel">
                <h2>Containerization objectives</h2>
                <p>
                    <span class="green">✓</span>
                    Build the application image using a Dockerfile and multi-stage build.
                </p>
                <p>
                    <span class="green">✓</span>
                    Install PHP dependencies with Composer and frontend dependencies with npm.
                </p>
                <p>
                    <span class="green">✓</span>
                    Start the application through Docker Compose and verify its HTTP response.
                </p>
                <p>
                    <span class="blue">→</span>
                    Continue testing persistence, configuration, and application functionality.
                </p>
            </section>
        </main>

        <footer>
            <span>Farameet · Local Docker Test</span>
            <span>Isolated environment · Not production</span>
        </footer>
    </div>
</body>
</html>