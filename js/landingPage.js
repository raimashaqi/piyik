// Heroes section
document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 1;
    const totalSlides = 2;

    function changeSlide(direction) {
        const currentElement = document.getElementById(`slide${currentSlide}`);
        currentElement.classList.remove('active');
        
        currentSlide = currentSlide + direction;
        if (currentSlide > totalSlides) currentSlide = 1;
        if (currentSlide < 1) currentSlide = totalSlides;
        
        const nextElement = document.getElementById(`slide${currentSlide}`);
        nextElement.classList.add('active');
    }

    // Event listeners untuk tombol panah
    document.querySelector('.arrow-left').addEventListener('click', function() {
        changeSlide(-1);
    });

    document.querySelector('.arrow-right').addEventListener('click', function() {
        changeSlide(1);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('fileInput');
    const imageSlider = document.getElementById('imageSlider');
    const uploadBtn = document.getElementById('uploadBtn');
    const clearBtn = document.getElementById('clearBtn');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentImageIndex = 0;
    let images = [];

    // Upload button click handler
    uploadBtn.addEventListener('click', () => {
        fileInput.click();
    });

    // Clear queue button click handler
    clearBtn.addEventListener('click', () => {
        clearImages();
    });

    // File input change handler
    fileInput.addEventListener('change', handleFiles);

    // Slider navigation
    prevBtn.addEventListener('click', () => {
        if (currentImageIndex > 0) {
            currentImageIndex--;
            updateActiveImage();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentImageIndex < images.length - 1) {
            currentImageIndex++;
            updateActiveImage();
        }
    });

    function handleFiles(e) {
        const files = [...e.target.files];
        files.forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    addImageToSlider(e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
        showUploadText(false);
    }

    function addImageToSlider(src) {
        const img = document.createElement('img');
        img.src = src;
        img.className = 'slider-image';
        imageSlider.appendChild(img);
        images.push(img);
        
        // Create thumbnail
        const thumbnail = document.createElement('img');
        thumbnail.src = src;
        thumbnail.className = 'thumbnail';
        thumbnail.addEventListener('click', () => {
            currentImageIndex = images.indexOf(img);
            updateActiveImage();
        });
        
        // Create thumbnail container if it doesn't exist
        let thumbnailContainer = document.querySelector('.thumbnail-container');
        if (!thumbnailContainer) {
            thumbnailContainer = document.createElement('div');
            thumbnailContainer.className = 'thumbnail-container';
            imageSlider.after(thumbnailContainer);
        }
        thumbnailContainer.appendChild(thumbnail);
        
        if (images.length === 1) {
            currentImageIndex = 0;
        }
        updateActiveImage();
        updateSliderControls();
    }

    function updateActiveImage() {
        images.forEach((img, index) => {
            img.classList.toggle('active', index === currentImageIndex);
        });
        
        // Update thumbnails
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, index) => {
            thumb.classList.toggle('active', index === currentImageIndex);
        });
    }

    function updateSliderControls() {
        const sliderControls = document.querySelector('.slider-controls');
        const sliderBtns = document.querySelectorAll('.slider-btn');
        
        if (images.length > 1) {
            sliderControls.style.display = 'flex';
            sliderBtns.forEach(btn => btn.style.display = 'flex');
            
            prevBtn.disabled = currentImageIndex === images.length < 1;
            nextBtn.disabled = currentImageIndex === images.length > 1;
            prevBtn.style.opacity = currentImageIndex === 0 ? '0.5' : '1';
            nextBtn.style.opacity = currentImageIndex === images.length - 1 ? '0.5' : '1';
        } else {
            sliderControls.style.display = 'none';
            sliderBtns.forEach(btn => btn.style.display = 'none');
        }
    }

    function showUploadText(show) {
        const uploadText = document.querySelector('.upload-text');
        const uploadSpan = document.querySelector('.upload-placeholder span');
        if (uploadText) {
            uploadText.style.display = show ? 'block' : 'none';
        }
        if (uploadSpan) {
            uploadSpan.style.display = show ? 'block' : 'none';
        }
    }

    // Drag and drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    uploadArea.addEventListener('drop', (e) => {
        const files = [...e.dataTransfer.files];
        handleFiles({ target: { files } });
    });

    function clearImages() {
        images = [];
        currentImageIndex = 0;
        imageSlider.innerHTML = '';
        const thumbnailContainer = document.querySelector('.thumbnail-container');
        if (thumbnailContainer) {
            thumbnailContainer.remove();
        }
        // Reset file input value agar bisa upload file yang sama
        fileInput.value = '';
        updateSliderControls();
        showUploadText(true);
    }
});