import './bootstrap';

// ========================================
// DARK MODE TOGGLE
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('toggle-darkmode');
    const body = document.getElementById('app-body');
    
    // Check localStorage for saved preference
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    
    if (isDarkMode) {
        body.classList.add('dark');
        updateDarkModeIcon(true);
    }
    
    darkModeToggle?.addEventListener('click', function() {
        body.classList.toggle('dark');
        const isDark = body.classList.contains('dark');
        localStorage.setItem('darkMode', isDark);
        updateDarkModeIcon(isDark);
    });
    
    function updateDarkModeIcon(isDark) {
        const moonIcon = document.querySelector('.dark-icon');
        const sunIcon = document.querySelector('.light-icon');
        
        if (isDark) {
            moonIcon?.classList.add('hidden');
            sunIcon?.classList.remove('hidden');
        } else {
            moonIcon?.classList.remove('hidden');
            sunIcon?.classList.add('hidden');
        }
    }
});

// ========================================
// SIDEBAR TOGGLE (Mobile)
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggle-sidebar');
    const sidebar = document.getElementById('sidebar');
    
    toggleButton?.addEventListener('click', function() {
        sidebar.classList.toggle('hidden');
    });
});

// ========================================
// AJAX FORM SUBMISSION (Generic)
// ========================================
function submitFormAjax(formId, successCallback) {
    const form = document.getElementById(formId);
    
    form?.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const url = form.action;
        const method = form.method;
        
        try {
            const response = await fetch(url, {
                method: method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });
            
            const data = await response.json();
            
            if (response.ok) {
                successCallback(data);
            } else {
                alert('Error: ' + (data.message || 'Terjadi kesalahan'));
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan pada server');
        }
    });
}

// ========================================
// NOTIFICATION HELPER
// ========================================
function showNotification(message, type = 'success') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    } text-white`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Export for use in other modules
window.submitFormAjax = submitFormAjax;
window.showNotification = showNotification;