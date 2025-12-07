
let vantaEffect;
function initVanta() {
    // Destroy previous effect if it exists to prevent memory leaks/duplicates on resize
    if (vantaEffect) vantaEffect.destroy();
    
    // Check if the element exists before initializing
    const vantaEl = document.getElementById("vanta-bg");
    if (!vantaEl) return; 

    vantaEffect = VANTA.NET({
        el: vantaEl,
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x570057,
        backgroundColor: 0x28,
        points: 13.00,
        maxDistance: 27.00,
        spacing: 13.00
    });
}

// Initialize on load and re-initialize on resize
window.addEventListener("load", initVanta);
window.addEventListener("resize", initVanta);