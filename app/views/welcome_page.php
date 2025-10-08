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
            font-family: 'Roboto', 'Helvetica Neue', sans-serif;
            background: #F9FAFB;
            color: #1F2937;
        }
        .container {
            max-width: 960px;
            margin: 3rem auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #4F46E5, #9333EA);
            color: #ffffff;
            padding: 3rem 2rem;
            text-align: center;
        }
        .header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }
        .header p {
            font-size: 1.2rem;
            opacity: 0.85;
        }
        .main {
            padding: 2.5rem;
        }
        h2 {
            font-family: 'Poppins', sans-serif;
            color: #4F46E5;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        p {
            line-height: 1.7;
            margin-bottom: 1rem;
        }
        code, pre {
            display: block;
            background: #F3F4F6;
            padding: 1rem;
            border-left: 4px solid #4F46E5;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #1F2937;
            overflow-x: auto;
            border-radius: 6px;
        }
        ul { padding-left: 1.5rem; margin-bottom: 1rem; }
        li { margin-bottom: 0.5rem; }
        a { color: #9333EA; text-decoration: none; transition: color 0.3s ease; }
        a:hover { color: #FBBF24; text-decoration: underline; }
        .footer {
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem;
            background: #F3F4F6;
            border-top: 1px solid #E5E7EB;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
        .card {
            background: #F9FAFB;
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #E5E7EB;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-top: 0;
            color: #1F2937;
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
