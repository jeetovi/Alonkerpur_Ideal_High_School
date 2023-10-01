function loadPage(page) {
    // You can implement logic here to load content based on the page
    const contentDiv = document.getElementById('content');
    contentDiv.innerHTML = `<h2>${page}  </h2>`;
}

function handleNavigation() {
    const hash = window.location.hash;
    const page = hash.substring(1); // Remove the "#" symbol
    loadPage(page);
}

// Initial page load
handleNavigation();

// Listen for changes in the URL (hash changes)
window.addEventListener('hashchange', handleNavigation);
