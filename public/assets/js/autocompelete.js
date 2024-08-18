    let suggestionsList;
    let selectedSuggestionIndex = -1;

    function autocomplete(inputElement, products) {
            const prefix = inputElement.value.trim().toLowerCase();
            if (!suggestionsList) {
                suggestionsList = document.createElement('ul');
                suggestionsList.setAttribute('id', 'suggestions');
                suggestionsList.style.position = 'absolute';
                suggestionsList.style.backgroundColor = '#ffffff';
                suggestionsList.style.border = '1px solid #ddd';
                suggestionsList.style.borderRadius = '5px';
                suggestionsList.style.boxShadow = '0px 2px 4px rgba(0, 0, 0, 0.1)';
                suggestionsList.style.maxHeight = '200px'; // Set max height
                suggestionsList.style.overflowY = 'auto'; // Enable vertical scrolling
                suggestionsList.style.padding = '0'; // Update padding to avoid extra space
                suggestionsList.style.margin = '0';
                suggestionsList.style.listStyleType = 'none';
                suggestionsList.style.zIndex = '1';
                inputElement.parentNode.appendChild(suggestionsList);
            }

            suggestionsList.innerHTML = '';

            const filteredProducts = products.filter(product => product.toLowerCase().startsWith(prefix));

            const visibleProducts = filteredProducts.slice(0, 10); // Show only first 10 products

            visibleProducts.forEach((product, index) => {
                const listItem = document.createElement('li');
                listItem.textContent = product;
                listItem.style.padding = '8px'; // Add padding to the list items
                listItem.style.cursor = 'pointer'; // Add pointer cursor
                listItem.addEventListener('mousedown', function() {
                    inputElement.value = product;
                    suggestionsList.style.display = 'none'; // Hide suggestions
                });
                listItem.addEventListener('mouseover', function() {
                    selectedSuggestionIndex = index;
                    highlightSelectedSuggestion();
                });
                listItem.addEventListener('mouseout', function() {
                    selectedSuggestionIndex = -1;
                    highlightSelectedSuggestion();
                });
                suggestionsList.appendChild(listItem);

                // Highlight the first suggestion
                if (index === 0) {
                    listItem.classList.add('selected');
                }
            });

            // Show/hide suggestions box
            suggestionsList.style.display = filteredProducts.length && document.activeElement === inputElement ? 'block' : 'none';

            // Set width to match the input field
            const inputWidth = inputElement.offsetWidth;
            suggestionsList.style.width = inputWidth + 'px';
    }

    function handleKeyboardNavigation(event) {
            if (!suggestionsList || suggestionsList.style.display === 'none') {
                return;
            }

            const suggestions = suggestionsList.querySelectorAll('li');
            const numSuggestions = suggestions.length;

            if (event.key === 'ArrowDown') {
                selectedSuggestionIndex = (selectedSuggestionIndex + 1) % numSuggestions;
                event.preventDefault(); // Prevent default scrolling behavior
            } else if (event.key === 'ArrowUp') {
                selectedSuggestionIndex = (selectedSuggestionIndex - 1 + numSuggestions) % numSuggestions;
                event.preventDefault(); // Prevent default scrolling behavior
            } else if (event.key === 'Enter') {
                if (selectedSuggestionIndex !== -1) {
                    const selectedSuggestion = suggestions[selectedSuggestionIndex];
                    inputField.value = selectedSuggestion.textContent;
                    suggestionsList.style.display = 'none'; // Hide suggestions
                }
                return;
            }

            highlightSelectedSuggestion();

            // Ensure selected suggestion is in view
            suggestions[selectedSuggestionIndex].scrollIntoView({
                block: 'nearest',
                inline: 'start'
            });
    }

    function highlightSelectedSuggestion() {
            const suggestions = suggestionsList.querySelectorAll('li');
            suggestions.forEach((suggestion, index) => {
                if (index === selectedSuggestionIndex) {
                    suggestion.style.backgroundColor = '#f0f0f0'; // Change background color
                } else {
                    suggestion.style.backgroundColor = '#ffffff'; // Reset background color
                }
            });
    }

    document.addEventListener('input', function(event) {
        if (event.target.classList.contains('autocomplete-trigger')) {
            // Simulating fetching data from a database
            const products = ["Apple", "Banana", "Orange", "Grapes", "Pineapple", "Mango", "Peach", "Watermelon", "Kiwi", 
            "Strawberry", "Blueberry", "Raspberry", "Blackberry", "Apricot", "Cherry"];
            autocomplete(event.target, products);
        }
    });

    const inputField = document.querySelector('.autocomplete-trigger');
    inputField.addEventListener('focus', function() {
        if (inputField.value.trim() !== '') {
            // Simulating fetching data from a database
            const products = ["Apple", "Banana", "Orange", "Grapes", "Pineapple", "Mango", "Peach", "Watermelon", "Kiwi",
            "Strawberry", "Blueberry", "Raspberry", "Blackberry", "Apricot", "Cherry"];
            autocomplete(inputField, products);
        }
    });

    inputField.addEventListener('blur', function() {
        suggestionsList.style.display = 'none';
    });

    inputField.addEventListener('keydown', handleKeyboardNavigation);