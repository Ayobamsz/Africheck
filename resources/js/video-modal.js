// Promotional Video Animation for Africheck
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('promoVideoModal');
    if (modal) {
        modal.addEventListener('shown.bs.modal', function() {
            startPromoAnimation();
        });

        modal.addEventListener('hidden.bs.modal', function() {
            stopPromoAnimation();
        });
    }
});

let animationId;

function startPromoAnimation() {
    const canvas = document.getElementById('promoCanvas');
    const ctx = canvas.getContext('2d');

    // Set canvas size
    canvas.width = 800;
    canvas.height = 450;

    // Animation variables
    let frame = 0;
    const maxFrames = 300; // 5 seconds at 60fps

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Background gradient
        const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
        gradient.addColorStop(0, '#007bff');
        gradient.addColorStop(1, '#0056b3');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Animate Africheck title
        ctx.fillStyle = 'white';
        ctx.font = 'bold 48px Arial';
        ctx.textAlign = 'center';

        if (frame > 30) {
            const alpha = Math.min((frame - 30) / 30, 1);
            ctx.globalAlpha = alpha;
            ctx.fillText('Africheck', canvas.width / 2, canvas.height / 2 - 50);
        }

        // Animate subtitle
        if (frame > 90) {
            const alpha = Math.min((frame - 90) / 30, 1);
            ctx.globalAlpha = alpha;
            ctx.font = '24px Arial';
            ctx.fillText('Inter-laboratory Quality Assurance Schemes', canvas.width / 2, canvas.height / 2);
        }

        // Animate website
        if (frame > 150) {
            const alpha = Math.min((frame - 150) / 30, 1);
            ctx.globalAlpha = alpha;
            ctx.font = '18px Arial';
            ctx.fillText('Africheck.com.ng', canvas.width / 2, canvas.height / 2 + 50);
        }

        // Reset alpha
        ctx.globalAlpha = 1;

        frame++;
        if (frame < maxFrames) {
            animationId = requestAnimationFrame(animate);
        }
    }

    animate();
}

function stopPromoAnimation() {
    if (animationId) {
        cancelAnimationFrame(animationId);
    }
}