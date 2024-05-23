<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقعي التجاري</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">الرئيسية</a></li>
                <li><a href="#products">المنتجات</a></li>
                <li><a href="#contact">اتصل بنا</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <h1>مرحبًا بكم في موقعي التجاري</h1>
        <p>نقدم أفضل المنتجات بأفضل الأسعار.</p>
    </section>
    <section id="products">
        <h2>منتجاتنا</h2>
        <div class="product-list">
            <!-- سيتم إضافة المنتجات هنا بواسطة JavaScript -->
        </div>
    </section>
    <section id="contact">
        <h2>اتصل بنا</h2>
        <form id="contact-form">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">الرسالة:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">إرسال</button>
        </form>
    </section>
    <script src="script.js"></script>
</body>
</html>

