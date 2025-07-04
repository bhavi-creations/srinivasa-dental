<?php include 'navbar.php'; ?>

<h1 class="text-center m-5">Smile Make Over </h1>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center gy-4">
            <!-- Slider 1 -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="slider-container">
                    <img src="assets/img/images/1111.jpg" alt="Before Image">
                    <img src="assets/img/images/2222.jpg" class="slider-image-after" alt="After Image">
                    <div class="slider-overlay">
                        <div class="overlay-left">Left</div>
                        <div class="overlay-right">Right</div>
                    </div>
                    <div class="slider-handler"></div>
                </div>

            </div>

            <!-- Slider 2 -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="slider-container">
                    <img src="assets/img/images/f1.png" alt="Before Image">
                    <img src="assets/img/images/f2.png" class="slider-image-after" alt="After Image">
                    <div class="slider-handler"></div>
                    <div class="label label-before">Before</div>
                    <div class="label label-after">After</div>
                </div>
            </div>

            <!-- Slider 3 -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="slider-container">
                    <img src="assets/img/images/11.png" alt="Before Image">
                    <img src="assets/img/images/22.png" class="slider-image-after" alt="After Image">
                    <div class="slider-handler"></div>
                    <div class="label label-before">Before</div>
                    <div class="label label-after">After</div>
                </div>
            </div>

            <!-- Slider 4 -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="slider-container">
                    <img src="assets/img/images/d1.png" alt="Before Image">
                    <img src="assets/img/images/d2.png" class="slider-image-after" alt="After Image">
                    <div class="slider-handler"></div>
                    <div class="label label-before">Before</div>
                    <div class="label label-after">After</div>
                </div>
            </div>
        </div>
    </div>
</section>









<!-- <script>
    const sliders = document.querySelectorAll('.slider-container');

    sliders.forEach(slider => {
        const afterImage = slider.querySelector('.slider-image-after');
        const handle = slider.querySelector('.slider-handler');

        let isDragging = false;

        const startDrag = () => {
            isDragging = true;
        };
        const endDrag = () => {
            isDragging = false;
        };

        const updateSlider = (x) => {
            const rect = slider.getBoundingClientRect();
            x = Math.max(0, Math.min(x - rect.left, rect.width));
            const percent = (x / rect.width) * 100;
            handle.style.left = `${percent}%`;
            afterImage.style.clipPath = `inset(0 0 0 ${percent}%)`;
        };

        const drag = (e) => {
            if (!isDragging) return;
            const x = e.touches ? e.touches[0].clientX : e.clientX;
            updateSlider(x);
        };

        const clickToMove = (e) => {
            const x = e.clientX || (e.touches ? e.touches[0].clientX : 0);
            updateSlider(x);
        };

        // Event listeners
        slider.addEventListener('mousedown', startDrag);
        slider.addEventListener('touchstart', startDrag);
        window.addEventListener('mousemove', drag);
        window.addEventListener('touchmove', drag);
        window.addEventListener('mouseup', endDrag);
        window.addEventListener('touchend', endDrag);
        slider.addEventListener('click', clickToMove);
    });
</script> -->





<script>
    const sliders = document.querySelectorAll('.slider-container');

    sliders.forEach(slider => {
        const afterImage = slider.querySelector('.slider-image-after');
        const handle = slider.querySelector('.slider-handler');
        const overlay = slider.querySelector('.slider-overlay');

        let isDragging = false;

        const startDrag = () => {
            isDragging = true;
            overlay.classList.add("hide");
        };
        const endDrag = () => {
            isDragging = false;
        };

        const updateSlider = (x) => {
            const rect = slider.getBoundingClientRect();
            x = Math.max(0, Math.min(x - rect.left, rect.width));
            const percent = (x / rect.width) * 100;
            handle.style.left = `${percent}%`;
            afterImage.style.clipPath = `inset(0 0 0 ${percent}%)`;
        };

        const drag = (e) => {
            if (!isDragging) return;
            const x = e.touches ? e.touches[0].clientX : e.clientX;
            updateSlider(x);
        };

        const clickToMove = (e) => {
            overlay.classList.add("hide"); // hide overlay on click
            const x = e.clientX || (e.touches ? e.touches[0].clientX : 0);
            updateSlider(x);
        };

        slider.addEventListener('mousedown', startDrag);
        slider.addEventListener('touchstart', startDrag);
        window.addEventListener('mousemove', drag);
        window.addEventListener('touchmove', drag);
        window.addEventListener('mouseup', endDrag);
        window.addEventListener('touchend', endDrag);
        slider.addEventListener('click', clickToMove);
    });
</script>




<script>
    const sliders = document.querySelectorAll('.slider-container');

    sliders.forEach(slider => {
        const afterImage = slider.querySelector('.slider-image-after');
        const handle = slider.querySelector('.slider-handler');
        const overlay = slider.querySelector('.slider-overlay');

        let isDragging = false;

        const startDrag = () => {
            isDragging = true;
            overlay.classList.add("hide");
        };
        const endDrag = () => {
            isDragging = false;
        };

        const updateSlider = (x) => {
            const rect = slider.getBoundingClientRect();
            x = Math.max(0, Math.min(x - rect.left, rect.width));
            const percent = (x / rect.width) * 100;
            handle.style.left = `${percent}%`;
            afterImage.style.clipPath = `inset(0 0 0 ${percent}%)`;
        };

        const drag = (e) => {
            if (!isDragging) return;
            const x = e.touches ? e.touches[0].clientX : e.clientX;
            updateSlider(x);
        };

        const clickToMove = (e) => {
            overlay.classList.add("hide"); // hide overlay on click
            const x = e.clientX || (e.touches ? e.touches[0].clientX : 0);
            updateSlider(x);
        };

        slider.addEventListener('mousedown', startDrag);
        slider.addEventListener('touchstart', startDrag);
        window.addEventListener('mousemove', drag);
        window.addEventListener('touchmove', drag);
        window.addEventListener('mouseup', endDrag);
        window.addEventListener('touchend', endDrag);
        slider.addEventListener('click', clickToMove);
    });
</script>









<?php include 'footer.php'; ?>