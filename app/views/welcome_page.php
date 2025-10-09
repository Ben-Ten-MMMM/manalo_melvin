<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to LavaLust</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background: linear-gradient(135deg, #3B82F6, #6366F1, #06B6D4);
            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
            color: #334155;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            max-width: 960px;
            margin: 3rem auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            animation: fadeInUp 1.2s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: rgba(59,130,246,0.9);
            backdrop-filter: blur(6px);
            color: #ffffff;
            padding: 2.5rem;
            text-align: center;
            border-bottom: 3px solid rgba(255,255,255,0.15);
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 1px;
            animation: fadeInDown 1s ease;
        }

        .header p {
            margin: 0.5rem 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main {
            padding: 2rem;
        }

        h2 {
            color: #1e40af;
            margin-top: 2rem;
        }

        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        code, pre {
            display: block;
            background: #f1f5f9;
            padding: 1rem;
            border-left: 4px solid #3b82f6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #1e293b;
            overflow-x: auto;
            border-radius: 6px;
        }

        ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            text-decoration: underline;
            color: #1d4ed8;
        }

        .footer {
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .card {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1.5s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .card h3 {
            margin-top: 0;
            color: #0f172a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔥 LavaLust Framework</h1>
            <p>Lightweight • Fast • MVC for PHP Developers</p>
        </div>

        <div class="main">
            <h2>What is LavaLust?</h2>
            <p><strong>LavaLust</strong> is a lightweight PHP framework that follows the MVC (Model–View–Controller) pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>

            <h2>🚀 Key Features</h2>
            <div class="grid">
                <div class="card">
                    <h3>🧠 MVC Architecture</h3>
                    <p>Clear separation of concerns with Models, Views, and Controllers.</p>
                </div>
                <div class="card">
                    <h3>⚙️ Built-in Routing</h3>
                    <p>Clean and flexible routing system similar to Laravel or CodeIgniter.</p>
                </div>
                <div class="card">
                    <h3>📦 Libraries & Helpers</h3>
                    <p>Includes utilities for sessions, forms, database, validation, and more.</p>
                </div>
                <div class="card">
                    <h3>📁 Organized Structure</h3>
                    <p>Modular folder structure for scalable app development.</p>
                </div>
                <div class="card">
                    <h3>🔗 REST API Support</h3>
                    <p>Build RESTful APIs easily using built-in tools and conventions.</p>
                </div>
                <div class="card">
                    <h3>📘 ORM-like Models</h3>
                    <p>Use LavaLust's model layer for structured database operations with ease.</p>
                </div>
            </div>

            <h2>📂 Project Structure</h2>
            <pre><code>
/app
  /config
  /controllers
  /helpers
  /language
  /libraries
  /models
  /views
/console
/public
/runtime
/scheme
            </code></pre>

            <h2>🧪 Quick Example</h2>
                <p>Route in <code>app/config/routes.php</code></p>
<pre><code>
$router->get('/', 'Welcome::index');
</code></pre>
            <p>Controller method in <code>app/controllers/Welcome.php</code>:</p>
            <pre><code>
class Welcome extends Controller {
    public function index() {
        $this->call->view('welcome_page');
    }
}
            </code></pre>

            <p>View file at: <code>app/Views/welcome_page.php</code></p>

            <h2>📚 Learn More</h2>
            <ul>
                <li><a href="https://github.com/ronmarasigan/LavaLust">GitHub Repository</a></li>
                <li><a href="https://lavalust.netlify.app/">Official Documentation</a></li>
            </ul>
        </div>

        <div class="footer">
            Page rendered in <strong><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?></strong> seconds.
            Memory usage: <?php echo lava_instance()->performance->memory_usage(); ?>.
            <?php if(config_item('ENVIRONMENT') === 'development'): ?>
                <br>LavaLust Version <strong><?php echo config_item('VERSION'); ?></strong>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
