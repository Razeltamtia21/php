<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            padding: 20px 0;
            color: #fff;
            background-color: #333;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container h1 {
            margin: 0;
        }

        nav ul {
            display: flex;
            list-style-type: none;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .sign-up {
            padding: 15px;
            font-size: 15px;
            border-radius: 25px;
            background-color: palevioletred;
            transition-duration: 2s;
        }

        .sign-up:hover {
            text-decoration: none;
            background-color: blueviolet;
        }
        
        .container {
            margin: 0 auto;
            width: 90%;
            display: flex;
        }

        section {
            padding:20px 0;
        }

        .logo {
            width: 450px;
            height: 400px;
            background-color: crimson;
            box-shadow: 0 0 20px rgba(0, 0, 0, 1);
            cursor: pointer;
        }

        .form {
            width: 60%;
            margin: 0 auto;
            display: block;
        }

        .form h2 {
            text-align: center;
            font-size: 40px;
        }

        .form h6 {
            margin: 0;
            font-size:25px;
        }

        .hero {
            text-align: center;
            padding: 20px 0;
            color: #fff;
            background-color: #555;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
        }

        .wrapper h2 {
            font-size: 40px;
        }

        form {
            padding: 50px 0;
        }

        .form-content {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .form-content h2 {
            margin: 0;
            font-size: 40px;
            padding: 20px 0;
        }

        .form-wrapper {
            padding: 10px 0;
        }

        .form-wrapper input {
            width: 25%;
            padding: 5px 10px;
            font-size: 1rem;
            border-radius: 15px;
            border: 1px solid #000;
        }

        .btn {
            width: 15%;
            padding: 5px 0;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 10px;
            border: 1px solid #000;
            background-color: lime;
            cursor: pointer;
            transition-duration: 2s;
        }

        .btn:hover {
            background-color: springgreen;
        }

        footer {
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px 0;
        }

        span {
            display: flex;
        }

        span a {
            margin: 0 37px;
            color: navy;
            text-decoration: none;
        }

        span a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Hello World</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#content">Content</a></li>
                    <li><a href="" class="sign-up">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="home">
            <div class="container">
            <div class="logo"></div>
            <div class="form">
            <h2>Home</h2>
            <h6>belajar website</h6>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione error quas hic itaque quisquam iure corrupti dolorum facilis odio alias. Quam adipisci accusamus doloribus voluptatibus explicabo obcaecati commodi sint a! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas in rem, nesciunt quisquam reiciendis repudiandae et accusantium accusamus sunt necessitatibus facilis placeat mollitia. Soluta suscipit labore odio ex deserunt! Nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eligendi sed blanditiis nihil voluptate ratione laboriosam saepe, dignissimos exercitationem mollitia. Placeat sed nobis perspiciatis eaque ipsam sapiente magni, blanditiis ab. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, facere cumque cum, vitae fugiat vero inventore tempore unde sint id sapiente quibusdam aspernatur nihil harum, minus quidem recusandae nesciunt laudantium. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed quos molestias enim nobis iusto laudantium sequi libero deserunt, natus magnam veniam? Enim aperiam aut velit doloribus placeat temporibus ullam voluptates.</p>
            </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
            <div class="form">
            <h2>About</h2>
            <h6>belajar website</h6>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione error quas hic itaque quisquam iure corrupti dolorum facilis odio alias. Quam adipisci accusamus doloribus voluptatibus explicabo obcaecati commodi sint a! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas in rem, nesciunt quisquam reiciendis repudiandae et accusantium accusamus sunt necessitatibus facilis placeat mollitia. Soluta suscipit labore odio ex deserunt! Nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eligendi sed blanditiis nihil voluptate ratione laboriosam saepe, dignissimos exercitationem mollitia. Placeat sed nobis perspiciatis eaque ipsam sapiente magni, blanditiis ab. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, facere cumque cum, vitae fugiat vero inventore tempore unde sint id sapiente quibusdam aspernatur nihil harum, minus quidem recusandae nesciunt laudantium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam quibusdam natus incidunt odit recusandae architecto eos voluptatem pariatur at neque possimus facere vel sunt similique assumenda nemo, iste deleniti repudiandae!</p>
            </div>
            <div class="logo"></div>
            </div>
        </section>
        <section id="services" class="hero">
            <div class="wrapper">
                <h2>Services</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In perspiciatis unde quas itaque distinctio facere quos nesciunt saepe. In, maxime illum porro expedita nesciunt pariatur maiores. Ullam omnis perspiciatis doloremque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam accusantium beatae accusamus sed fugit illum, eos minus aut, alias autem, amet consequuntur nemo reiciendis animi quibusdam hic. Assumenda, consequatur dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reprehenderit ipsam rem, quisquam ratione dolores sequi commodi incidunt maxime, illum ab excepturi totam a. Cupiditate tempora deserunt natus cum id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minus laboriosam nisi impedit ullam voluptatem tempore aliquid facere provident, obcaecati labore non. Magni minus maxime modi inventore, quasi esse nam.</p>
            </div>
        </section>
        <section id="content">
            <form action="latihan15.php" method="post">
            <div class="form-content">
                <h2>Content</h2>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="form-wrapper">
                    <input type="email" placeholder="Email" required>
                </div>
                <button type="submit" name="tombol-kirim" class="btn" required>Kirim</button>
            </div>
            </form>
        </section>
    </main>
    <footer>
        <span>
            <a href="">@rzlmcl21</a>
            <a href="">#WebSite</a>
            <a href="">Jangan Menyerah</a>
            <a href="">Stop Coli</a>
            <a href="">Makan Sebanyak mungkin</a>
            <a href="">Santai Brooo</a>
            <a href="">Lawak kau</a>
            <a href="">Monyet</a>
        </span>
    </footer>
</body>
</html>

<?php 

if(isset($_POST ["tombol-kirim"])){
    echo "<script>
    alert('Berhasil terkirim');
    </script>";
}

?>