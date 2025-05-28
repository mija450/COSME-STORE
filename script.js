document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('.filter');

    filters.forEach(filter => {
        filter.addEventListener('change', filterProducts);
    });

    function filterProducts() {
        const selectedFilters = {
            precio: [],
            color: [],
            material: [],
            reseña: []
        };

        filters.forEach(filter => {
            if (filter.checked) {
                selectedFilters[filter.dataset.filter].push(filter.value);
            }
        });
 
        const products = document.querySelectorAll('.product-item');

        products.forEach(product => {
            const precio = product.getAttribute('data-precio');
            const color = product.getAttribute('data-color');
            const material = product.getAttribute('data-material');
            const reseña = product.getAttribute('data-reseña');
            
            const precioMatch = selectedFilters.precio.length === 0 || selectedFilters.precio.includes(precio);
            const colorMatch = selectedFilters.color.length === 0 || selectedFilters.color.includes(color);
            const materialMatch = selectedFilters.material.length === 0 || selectedFilters.material.includes(material);
            const reseñaMatch = selectedFilters.reseña.length === 0 || selectedFilters.reseña.includes(reseña);

            if (precioMatch && colorMatch && materialMatch && reseñaMatch) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
});