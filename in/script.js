document.addEventListener('DOMContentLoaded', () => {
    const institutesCountInput = document.getElementById('institutes-count');
    const itemsPerPageSelect = document.getElementById('items-per-page');
    const tableContainer = document.querySelector('.table-container');
    const paginationContainer = document.getElementById('pagination');
    let currentPage = 1;
    let institutesData = [];

    // Initialize default items per page to 10
    itemsPerPageSelect.value = '10';

    // Load data from the table rows (parsed from PHP-generated HTML)
    function loadData() {
        institutesData = [];
        const rows = document.querySelectorAll('.table-row');
        rows.forEach((row, index) => {
            institutesData.push({
                id: index + 1,
                state: row.querySelector('.state-col').textContent,
                name: row.querySelector('.name-col').textContent,
                university: row.querySelector('.university-col').textContent,
                year: row.querySelector('.year-col').textContent,
                seats: row.querySelector('.seats-col').textContent
            });
        });
    }

    // Show loading animation (with specified margins, bottom space, and border-radius)
    function showLoading() {
        console.log('showLoading called'); // Debug log
        if (!tableContainer) {
            console.log('tableContainer not found');
            return null;
        }
        const rect = tableContainer.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const clipTop = Math.max(rect.top, 0);
        const clipBottom = Math.min(rect.bottom, windowHeight);
        const visibleHeight = Math.max(0, clipBottom - clipTop);
        if (visibleHeight <= 0) {
            console.log('Table not visible, skipping loader');
            return null;
        }
        const visibleTopRel = clipTop - rect.top + 87; // Add 30px top margin
        const adjustedWidth = rect.width - 0; // Subtract 48px margin from both sides
        const adjustedHeight = visibleHeight + 30; // Add 3px extra space at bottom

        const loading = document.createElement('div');
        loading.id = 'loading';
        loading.style.position = 'absolute';
        loading.style.top = `${visibleTopRel}px`;
        loading.style.left = '48px'; // 48px left margin
        loading.style.width = `${adjustedWidth}px`;
        loading.style.height = `${adjustedHeight}px`;
        loading.style.backgroundColor = 'rgba(0, 0, 0, 0.7)'; // Darker background
        loading.style.zIndex = '10001'; // High z-index
        loading.style.display = 'flex';
        loading.style.alignItems = 'center';
        loading.style.justifyContent = 'center';
        loading.style.borderRadius = '24px'; // Added 24px border-radius
        loading.innerHTML = `
            <div style="width: 50px; height: 50px; border: 5px solid #f3f3f3; border-top: 5px solid #3498db; border-radius: 50%; animation: spin 1s linear infinite; background-color: white;"></div>
            <style>
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>
        `;
        tableContainer.insertBefore(loading, tableContainer.firstChild); // Add as first child
        console.log('Loading element appended to tableContainer'); // Debug log
        console.log('Loading styles:', loading.style.cssText); // Debug loader styles
        return loading;
    }

    // Hide loading animation
    function hideLoading(loading) {
        console.log('hideLoading called'); // Debug log
        if (loading) {
            loading.style.opacity = '0';
            setTimeout(() => {
                if (loading.parentNode) {
                    loading.remove();
                }
                console.log('Loading element removed'); // Debug log
            }, 800); // Increased removal delay
        }
    }

    // Handle institutes count input changes
    institutesCountInput.addEventListener('change', (e) => {
        let value = parseInt(e.target.value);
        if (isNaN(value) || value < 0) {
            value = 0;
            e.target.value = value;
        }
        currentPage = 1;
        updateDisplay();
        showFeedback('Institutes count updated!');
    });

    // Handle items per page selection changes
    itemsPerPageSelect.addEventListener('change', (e) => {
        const itemsPerPage = e.target.value === 'all' ? Infinity : parseInt(e.target.value);
        if ([10, 25, 50, 100, 200, Infinity].includes(itemsPerPage)) {
            const loading = showLoading();
            if (loading) {
                setTimeout(() => {
                    currentPage = 1;
                    updateDisplay();
                    hideLoading(loading);
                    showFeedback(`Showing ${e.target.value === 'all' ? 'all' : itemsPerPage} items per page`);
                }, 1800); // Increased delay to 1800ms
            }
        }
    });

    // Update display with pagination
    function updateDisplay() {
        const itemsPerPage = itemsPerPageSelect.value === 'all' ? Infinity : parseInt(itemsPerPageSelect.value) || 10;
        const maxInstitutes = parseInt(institutesCountInput.value) || institutesData.length;
        const filteredData = institutesData.slice(0, maxInstitutes);
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const paginatedData = filteredData.slice(startIndex, endIndex);

        // Render table rows
        const tableRows = document.querySelectorAll('.table-row');
        tableRows.forEach((row, index) => {
            if (itemsPerPageSelect.value === 'all') {
                // Show all rows if "All" is selected, up to maxInstitutes
                row.style.display = index < maxInstitutes ? '' : 'none';
            } else {
                // Show only paginated rows
                row.style.display = (index >= startIndex && index < endIndex && index < maxInstitutes) ? '' : 'none';
            }
        });

        // Update pagination
        updatePagination(filteredData.length);
    }

    // Update pagination controls
    function updatePagination(totalItems) {
        if (paginationContainer) {
            const itemsPerPage = itemsPerPageSelect.value === 'all' ? Infinity : parseInt(itemsPerPageSelect.value) || 10;
            const totalPages = itemsPerPage === Infinity ? 1 : Math.ceil(totalItems / itemsPerPage);
            paginationContainer.innerHTML = `
                <div class="flex justify-center gap-2 mt-4">
                    <button id="prev-page" class="px-4 py-2 bg-blue-500 text-white rounded-md disabled:bg-gray-300 transition-colors duration-200" ${currentPage === 1 ? 'disabled' : ''}>Previous</button>
                    <span class="px-4 py-2">Page ${currentPage} of ${totalPages}</span>
                    <button id="next-page" class="px-4 py-2 bg-blue-500 text-white rounded-md disabled:bg-gray-300 transition-colors duration-200" ${currentPage === totalPages ? 'disabled' : ''}>Next</button>
                </div>
            `;

            // Add event listeners for pagination buttons
            document.getElementById('prev-page')?.addEventListener('click', () => {
                if (currentPage > 1) {
                    const loading = showLoading();
                    if (loading) {
                        setTimeout(() => {
                            currentPage--;
                            updateDisplay();
                            hideLoading(loading);
                            showFeedback('Previous page loaded');
                        }, 1800); // Increased delay to 1800ms
                    }
                }
            });
            document.getElementById('next-page')?.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    const loading = showLoading();
                    if (loading) {
                        setTimeout(() => {
                            currentPage++;
                            updateDisplay();
                            hideLoading(loading);
                            showFeedback('Next page loaded');
                        }, 1800); // Increased delay to 1800ms
                    }
                }
            });
        }
    }

    // Show feedback messages
    function showFeedback(message) {
        const feedback = document.createElement('div');
        feedback.className = 'fixed bottom-4 right-4 bg-blue-600 text-white px-4 py-2 rounded-md opacity-0 transition-opacity duration-300';
        feedback.textContent = message;
        document.body.appendChild(feedback);
        setTimeout(() => feedback.classList.add('opacity-100'), 100);
        setTimeout(() => {
            feedback.classList.remove('opacity-100');
            setTimeout(() => feedback.remove(), 300);
        }, 2000);
    }

    // Initial setup
    loadData();
    updateDisplay();
});