let currentStep = 1;

function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove('active');
    document.getElementById(`step${step + 1}`).classList.add('active');
    document.querySelector(`.step:nth-child(${step + 1})`).classList.add('active');
    currentStep = step + 1;
}

function prevStep(step) {
    document.getElementById(`step${step}`).classList.remove('active');
    document.getElementById(`step${step - 1}`).classList.add('active');
    document.querySelector(`.step:nth-child(${step})`).classList.remove('active');
    currentStep = step - 1;
}

// Preview gambar yang diupload
document.getElementById('imageUpload').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        const preview = document.getElementById('previewImage');
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        reader.readAsDataURL(file);
    }
});

// Drag and drop functionality
const uploadArea = document.querySelector('.upload-area');

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    uploadArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults (e) {
    e.preventDefault();
    e.stopPropagation();
}

['dragenter', 'dragover'].forEach(eventName => {
    uploadArea.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
    uploadArea.addEventListener(eventName, unhighlight, false);
});

function highlight(e) {
    uploadArea.style.borderColor = '#28a745';
    uploadArea.style.backgroundColor = '#f8f9fa';
}

function unhighlight(e) {
    uploadArea.style.borderColor = '#0d6efd';
    uploadArea.style.backgroundColor = '#f8f9fa';
}

uploadArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    const fileInput = document.getElementById('imageUpload');
    
    fileInput.files = files;
    handleFiles(files);
}

function handleFiles(files) {
    if (files.length > 0) {
        const file = files[0];
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            const preview = document.getElementById('previewImage');
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
        }
    }
}

// Form submission
document.getElementById('healthCheckForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Add your form submission logic here
    alert('Form submitted successfully!');
});
