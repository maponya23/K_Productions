document.addEventListener('DOMContentLoaded', function () {
    // Get the modals
    const updateProductionsModal = document.getElementById('updateProductions');
    const registerEmployeeModal = document.getElementById('registerEmployee');
    
    // Get the buttons that open the modals
    const updateProductionsBtn = document.getElementById('updateProductions');
    const registerEmployeeBtn = document.getElementById('registerEmployee');
    
    // Get the <span> elements that close the modals
    const closeBtns = document.querySelectorAll('.close');
    
    // Function to open a modal
    function openModal(modal) {
        modal.style.display = 'block';
    }

    // Function to close a modal
    function closeModal(modal) {
        modal.style.display = 'none';
    }

    // When the user clicks the button, open the modals
    updateProductionsBtn.addEventListener('click', function() {
        openModal(updateProductionsModal);
    });

    registerEmployeeBtn.addEventListener('click', function() {
        openModal(registerEmployeeModal);
    });

    // When the user clicks on <span> (x), close the modals
    closeBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            closeModal(btn.closest('.modal'));
        });
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function (event) {
        if (event.target == updateProductionsModal) {
            closeModal(updateProductionsModal);
        }
        if (event.target == registerEmployeeModal) {
            closeModal(registerEmployeeModal);
        }
    });
});
