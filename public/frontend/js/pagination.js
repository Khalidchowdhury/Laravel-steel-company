
// pagination




document.addEventListener('DOMContentLoaded', function () {
  const products = document.querySelectorAll('.perticularProduct');
  const itemsPerPage = 5;
  let currentPage = 1;
  const totalPages = Math.ceil(products.length / itemsPerPage);

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const paginationNumbers = document.getElementById('paginationNumbers');

  // Function to remove data-aos attribute from all products
  function removeDataAOS(elements) {
    elements.forEach(element => {
      element.removeAttribute('data-aos');
    });
  }

  // Remove data-aos from all products initially
  removeDataAOS(products);

  function displayPage(page) {
    currentPage = page;
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    products.forEach((product, index) => {
      if (index >= start && index < end) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });

    // Scroll to top of the page
    window.scrollTo(0, 0);

    updatePaginationControls();
  }

  function updatePaginationControls() {
    paginationNumbers.innerHTML = '';

    for (let i = 1; i <= totalPages; i++) {
      const pageNumber = document.createElement('span');
      pageNumber.textContent = i;
      pageNumber.classList.add('pagination-number');
      if (i === currentPage) {
        pageNumber.classList.add('active');
      }
      pageNumber.addEventListener('click', () => displayPage(i));
      paginationNumbers.appendChild(pageNumber);
    }

    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
  }

  prevBtn.addEventListener('click', () => {
    if (currentPage > 1) {
      displayPage(currentPage - 1);
    }
  });

  nextBtn.addEventListener('click', () => {
    if (currentPage < totalPages) {
      displayPage(currentPage + 1);
    }
  });

  // Initial display
  displayPage(1);

  // Responsive display
  function checkScreenSize() {
    if (window.innerWidth <= 480) {
      displayPage(currentPage);
    } else {
      products.forEach(product => {
        product.style.display = 'block';
        product.setAttribute('data-aos', 'fade-up'); // Re-add data-aos if needed
      });
      paginationNumbers.innerHTML = '';
    }
  }

  window.addEventListener('resize', checkScreenSize);
  checkScreenSize();
});
