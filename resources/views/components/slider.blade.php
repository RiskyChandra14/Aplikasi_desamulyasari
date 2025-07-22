<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<section
    x-data="slider()"
    x-init="start()"
    @touchstart="startTouch($event)"
    @touchend="endTouch($event)"
    class="relative w-full h-screen overflow-hidden"
>
    <!-- Slide Gambar -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            x-show="active === index"
            x-transition.opacity.duration.1000ms
            class="absolute inset-0 w-full h-full bg-cover bg-center"
            :style="`background-image: url('${slide}')`"
        ></div>
    </template>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-start px-8 md:px-16 z-10">
        <div class="text-white max-w-2xl">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-2 drop-shadow">Selamat Datang</h2>
            <h3 class="text-2xl md:text-4xl font-bold mb-4 drop-shadow">Website Resmi Desa Mulyasari</h3>
            <p class="text-base md:text-lg drop-shadow">Sumber informasi terbaru tentang pemerintahan di Desa Mulyasari</p>
        </div>
    </div>

    <!-- Navigasi Panah -->
    <button @click="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-4xl z-20 hover:scale-110 transition">&#8592;</button>
    <button @click="next(true)" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-4xl z-20 hover:scale-110 transition">&#8594;</button>

    <!-- Bullet Indicators -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20">
        <template x-for="(slide, index) in slides" :key="index">
            <div
                @click="goTo(index)"
                :class="{
                    'bg-white': active === index,
                    'bg-white/40': active !== index
                }"
                class="w-3 h-3 rounded-full cursor-pointer transition-all duration-300"
            ></div>
        </template>
    </div>
</section>

<script>
function slider() {
    return {
        slides: [
            '{{ asset('images/desamulyasari.jpg') }}',
            '{{ asset('images/desamulyasari1.jpg') }}',
            '{{ asset('images/desamulyasari2.jpg') }}',
            '{{ asset('images/desamulyasari3.jpg') }}',
            '{{ asset('images/desamulyasari4.jpg') }}',
        ],
        active: 0,
        interval: null,
        delay: 5000,
        pauseTime: 3000,
        touchStartX: 0,
        touchEndX: 0,
        start() {
            this.interval = setInterval(() => this.next(), this.delay);
        },
        resetTimer() {
            clearInterval(this.interval);
            this.start();
        },
        next(manual = false) {
            if (this.active === this.slides.length - 1) {
                clearInterval(this.interval);
                setTimeout(() => {
                    this.active = 0;
                    if (!manual) this.start();
                }, this.pauseTime);
            } else {
                this.active++;
                if (!manual) this.resetTimer();
            }
        },
        prev() {
            this.active = (this.active - 1 + this.slides.length) % this.slides.length;
            this.resetTimer();
        },
        goTo(index) {
            this.active = index;
            this.resetTimer();
        },
        // Swipe logic
        startTouch(e) {
            this.touchStartX = e.changedTouches[0].screenX;
        },
        endTouch(e) {
            this.touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe();
        },
        handleSwipe() {
            const diff = this.touchStartX - this.touchEndX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    // Swipe kiri
                    this.next(true);
                } else {
                    // Swipe kanan
                    this.prev();
                }
            }
        }
    }
}
</script>
