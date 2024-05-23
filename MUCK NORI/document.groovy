document.addEventListener('DOMContentLoaded', function() {
    const products = [
        { name: 'منتج 1', price: '100 ريال', description: 'وصف المنتج 1' },
        { name: 'منتج 2', price: '200 ريال', description: 'وصف المنتج 2' },
        { name: 'منتج 3', price: '300 ريال', description: 'وصف المنتج 3' }
    ];

    const productContainer = document.querySelector('.product-list');

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');

        productDiv.innerHTML = `
            <h3>${product.name}</h3>
            <p>${product.price}</p>
            <p>${product.description}</p>
        `;

        productContainer.appendChild(productDiv);
    });

    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        alert('تم إرسال رسالتك بنجاح!');
        contactForm.reset();
    });
});
