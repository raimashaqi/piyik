
const uploadBox = document.querySelector('.upload-box');
const uploadBtn = document.querySelector('.upload-btn');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    uploadBox.addEventListener(eventName, preventDefaults, false);
    document.body.addEventListener(eventName, preventDefaults, false);
});

// Highlight drop zone when item is dragged over it
['dragenter', 'dragover'].forEach(eventName => {
    uploadBox.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
    uploadBox.addEventListener(eventName, unhighlight, false);
});

// Handle dropped files
uploadBox.addEventListener('drop', handleDrop, false);

// Handle click upload
uploadBtn.addEventListener('click', () => {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/jpeg,image/png';
    input.onchange = (e) => {
        const file = e.target.files[0];
        handleFiles([file]);
    };
    input.click();
});

function preventDefaults (e) {
    e.preventDefault();
    e.stopPropagation();
}

function highlight(e) {
    uploadBox.classList.add('highlight');
}

function unhighlight(e) {
    uploadBox.classList.remove('highlight');
}

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    handleFiles(files);
}

function handleFiles(files) {
    const file = files[0];
    if (file && file.type.startsWith('image/')) {
        // Handle the file upload here
        console.log('File selected:', file.name);
        // You can add preview functionality or direct upload here
    }
}

    document.addEventListener('DOMContentLoaded', function() {
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');
        const selectedFileName = document.getElementById('selectedFileName');

        // Handle file selection
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                displayFileName(file);
            }
        });

        // Handle drag and drop
        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            const file = e.dataTransfer.files[0];
            if (file) {
                fileInput.files = e.dataTransfer.files;
                displayFileName(file);
            }
        });

        function displayFileName(file) {
            if (file.type.startsWith('image/')) {
                selectedFileName.textContent = `Selected file: ${file.name}`;
                selectedFileName.style.color = '#28a745';
            } else {
                selectedFileName.textContent = 'Please select an image file';
                selectedFileName.style.color = '#dc3545';
                fileInput.value = '';
            }
        }
    });
