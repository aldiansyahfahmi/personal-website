export class ParticleSystem {
    constructor(canvasId) {
        this.canvas = document.getElementById(canvasId);
        if (!this.canvas) return;
        
        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.resize();

        // Config
        this.particleCount = 100;
        this.connectionDistance = 150;
        this.mouseDistance = 200;
        
        this.mouse = { x: null, y: null };
        
        window.addEventListener('resize', () => this.resize());
        window.addEventListener('mousemove', (e) => {
            this.mouse.x = e.x;
            this.mouse.y = e.y;
        });
        window.addEventListener('mouseout', () => {
             this.mouse.x = null;
             this.mouse.y = null;
        });

        this.init();
        this.animate();
    }

    resize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
    }

    init() {
        for (let i = 0; i < this.particleCount; i++) {
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                size: Math.random() * 2 + 1,
                speedX: Math.random() * 1 - 0.5,
                speedY: Math.random() * 1 - 0.5,
                color: 'rgba(74, 222, 128, 0.7)' // Mint green
            });
        }
    }

    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        for (let i = 0; i < this.particles.length; i++) {
            let p = this.particles[i];
            
            p.x += p.speedX;
            p.y += p.speedY;

            // Bounce off edges
            if (p.x > this.canvas.width || p.x < 0) p.speedX *= -1;
            if (p.y > this.canvas.height || p.y < 0) p.speedY *= -1;

            // Draw particle
            this.ctx.beginPath();
            this.ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            this.ctx.fillStyle = p.color;
            this.ctx.fill();

            // Connect particles
            for (let j = i; j < this.particles.length; j++) {
                let p2 = this.particles[j];
                let dist = Math.hypot(p.x - p2.x, p.y - p2.y);
                
                if (dist < this.connectionDistance) {
                    this.ctx.beginPath();
                    this.ctx.strokeStyle = `rgba(74, 222, 128, ${1 - dist/this.connectionDistance})`;
                    this.ctx.lineWidth = 0.5;
                    this.ctx.moveTo(p.x, p.y);
                    this.ctx.lineTo(p2.x, p2.y);
                    this.ctx.stroke();
                }
            }
        }
        requestAnimationFrame(() => this.animate());
    }
}
