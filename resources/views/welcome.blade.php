<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Win $100,000 Cash + 10,000 Prizes — Every 3 Days!</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 20px;
            left: -100px;
            font-size: 3rem;
            animation: float 8s infinite linear;
            opacity: 0.3;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 20px;
            right: -100px;
            font-size: 2.5rem;
            animation: float 10s infinite linear reverse;
            opacity: 0.3;
        }

        @keyframes float {
            from { transform: translateX(-100px); }
            to { transform: translateX(calc(100vw + 100px)); }
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .prize-images {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
            flex-wrap: wrap;
        }

        .prize-item {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: bounce 3s infinite;
            color: #333;
            font-weight: bold;
            min-width: 120px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .prize-item .material-icons {
            font-size: 24px;
            color: #667eea;
        }

        .prize-item:nth-child(even) {
            animation-delay: 1s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .form-container {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin-top: 40px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-container input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .cta-button {
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            color: white;
            border: none;
            padding: 20px 40px;
            font-size: 1.3rem;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(255,107,107,0.4);
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 10px 30px rgba(255,107,107,0.4); }
            to { box-shadow: 0 15px 40px rgba(255,107,107,0.8); }
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255,107,107,0.6);
        }

        /* How It Works */
        .how-it-works {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 60px;
            color: #2c3e50;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .step {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .step:hover {
            transform: translateY(-10px);
        }

        .step-number {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        /* Prizes Section */
        .prizes {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .prizes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .prize-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s;
        }

        .prize-card:hover {
            transform: scale(1.05);
        }

        .prize-emoji {
            font-size: 3rem;
            margin-bottom: 15px;
            animation: rotate 4s infinite linear;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .prize-emoji .material-icons {
            font-size: 3rem;
            color: white;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Winner Ticker */
        .winner-ticker {
            background: #2c3e50;
            color: white;
            padding: 20px 0;
            overflow: hidden;
        }

        .ticker-content {
            display: flex;
            animation: scroll 30s linear infinite;
            white-space: nowrap;
        }

        @keyframes scroll {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
        }

        .winner-item {
            margin-right: 60px;
            padding: 10px 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 25px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .winner-item .material-icons {
            font-size: 18px;
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: #f8f9fa;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .stat-item {
            background: white;
            padding: 40px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: #667eea;
            margin-bottom: 10px;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background: white;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .testimonial {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid #667eea;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .testimonial-author {
            font-weight: bold;
            color: #667eea;
        }

        /* Final CTA */
        .final-cta {
            background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
            flex-wrap: wrap;
        }

        .countdown-item {
            background: rgba(255,255,255,0.2);
            padding: 20px;
            border-radius: 10px;
            min-width: 80px;
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: bold;
            display: block;
        }

        .countdown-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .prize-images {
                flex-wrap: wrap;
                justify-content: center;
            }

            .form-container {
                padding: 20px;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .countdown {
                gap: 10px;
            }

            /* Remove animations on mobile */
            .hero h1,
            .prize-item,
            .cta-button,
            .prize-emoji,
            .hero::before,
            .hero::after {
                animation: none !important;
            }
        }
    </style>
</head>
<body>
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Win $100,000 Cash + 10,000 Prizes — Every 3 Days!</h1>
        <p>No purchases. No hidden fees. Just your chance to win big.</p>

        <div class="prize-images">
            <div class="prize-item">
                <span class="material-icons">attach_money</span>
                $100K Cash
            </div>
            <div class="prize-item">
                <span class="material-icons">smartphone</span>
                iPhone 15
            </div>
            <div class="prize-item">
                <span class="material-icons">laptop_mac</span>
                MacBook Pro
            </div>
            <div class="prize-item">
                <span class="material-icons">image</span>
                Rare NFTs
            </div>
            <div class="prize-item">
                <span class="material-icons">headset</span>
                Gaming Gear
            </div>
        </div>

        <div class="form-container">
            <form id="giveawayForm">
                <input type="email" placeholder="Enter your Email" id="email" required>
                <div style="text-align: center; margin: 15px 0; font-weight: bold;">OR</div>
                <input type="text" placeholder="Enter your Telegram @username" id="telegram">
                <br><br>
                <button type="submit" class="cta-button">
                    <span class="material-icons" style="vertical-align: middle; margin-right: 8px;">celebration</span>
                    Join the Giveaway Now
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Winner Ticker -->
<section class="winner-ticker">
    <div class="ticker-content">
        <div class="winner-item">
            <span class="material-icons">emoji_events</span>
            John M. – Won $500 – 🇺🇸 USA
        </div>
        <div class="winner-item">
            <span class="material-icons">card_giftcard</span>
            Ashot K. – Won iPhone 15 – 🇦🇲 Armenia
        </div>
        <div class="winner-item">
            <span class="material-icons">diamond</span>
            CryptoBear69 – Won Rare NFT – 🇩🇪 Germany
        </div>
        <div class="winner-item">
            <span class="material-icons">attach_money</span>
            Sarah L. – Won $1,200 – 🇨🇦 Canada
        </div>
        <div class="winner-item">
            <span class="material-icons">sports_esports</span>
            GameMaster21 – Won PS5 – 🇬🇧 UK
        </div>
        <div class="winner-item">
            <span class="material-icons">smartphone</span>
            Maria R. – Won MacBook – 🇪🇸 Spain
        </div>
        <div class="winner-item">
            <span class="material-icons">emoji_events</span>
            Alex T. – Won $800 – 🇦🇺 Australia
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="how-it-works">
    <div class="container">
        <h2 class="section-title">How to Enter — It's 100% Free</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Enter Your Details</h3>
                <p>Simply enter your email or Telegram username above. No payment required!</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Get Added to Draw</h3>
                <p>You'll be automatically added to the next giveaway draw held every 3 days.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Winners Selected</h3>
                <p>Winners are selected randomly and fairly using verified drawing systems.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Claim Your Prize</h3>
                <p>Prizes are sent directly to your inbox or Telegram. No hoops to jump through!</p>
            </div>
        </div>
    </div>
</section>

<!-- Prizes Section -->
<section class="prizes">
    <div class="container">
        <h2 class="section-title">What Can You Win?</h2>
        <div class="prizes-grid">
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">attach_money</span>
                </div>
                <h3>$100,000 Cash</h3>
                <p>Grand Prize</p>
            </div>
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">smartphone</span>
                </div>
                <h3>Latest iPhones</h3>
                <p>iPhone 15 Pro Max</p>
            </div>
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">laptop_mac</span>
                </div>
                <h3>MacBooks</h3>
                <p>MacBook Pro M3</p>
            </div>
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">image</span>
                </div>
                <h3>Limited NFTs</h3>
                <p>Rare Digital Art</p>
            </div>
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">headset</span>
                </div>
                <h3>Gaming Gear</h3>
                <p>Headsets & Consoles</p>
            </div>
            <div class="prize-card">
                <div class="prize-emoji">
                    <span class="material-icons">card_giftcard</span>
                </div>
                <h3>10,000+ Prizes</h3>
                <p>Gift Cards & More</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <h2 class="section-title">Trusted by Thousands</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">750K+</div>
                <p>Participants Worldwide</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">$1.2M+</div>
                <p>Already Given Away</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <p>Real Winners</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">0</div>
                <p>Hidden Fees</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="container">
        <h2 class="section-title">What People Are Saying</h2>
        <div class="testimonial-grid">
            <div class="testimonial">
                <div class="testimonial-text">"I couldn't believe it when I won $500! Thought it was a scam at first, but they really sent the money to my PayPal. Amazing!"</div>
                <div class="testimonial-author">— John M. 🇺🇸 (Won $500)</div>
            </div>
            <div class="testimonial">
                <div class="testimonial-text">"Got my iPhone 15 delivered within a week of winning. This is legit guys! Already entered for the next draw."</div>
                <div class="testimonial-author">— Ashot K. 🇦🇲 (Won iPhone 15)</div>
            </div>
            <div class="testimonial">
                <div class="testimonial-text">"The NFT I won is now worth more than when I received it. Best free entry ever! Telling all my crypto friends."</div>
                <div class="testimonial-author">— CryptoBear69 🇩🇪 (Won Rare NFT)</div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="final-cta">
    <div class="container">
        <h2>Don't Miss Out — Next Draw in:</h2>
        <div class="countdown">
            <div class="countdown-item">
                <span class="countdown-number" id="days">2</span>
                <span class="countdown-label">Days</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="hours">14</span>
                <span class="countdown-label">Hours</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">27</span>
                <span class="countdown-label">Minutes</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">43</span>
                <span class="countdown-label">Seconds</span>
            </div>
        </div>

        <div class="form-container">
            <form id="finalForm">
                <input type="email" placeholder="Enter your Email" required>
                <div style="text-align: center; margin: 15px 0; font-weight: bold;">OR</div>
                <input type="text" placeholder="Enter your Telegram @username">
                <br><br>
                <button type="submit" class="cta-button">
                    <span class="material-icons" style="vertical-align: middle; margin-right: 8px;">rocket_launch</span>
                    Join Now — It's Free!
                </button>
            </form>
        </div>
    </div>
</section>

<script>
    // Countdown Timer
    function updateCountdown() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        setInterval(() => {
            let d = parseInt(days.textContent);
            let h = parseInt(hours.textContent);
            let m = parseInt(minutes.textContent);
            let s = parseInt(seconds.textContent);

            s--;
            if (s < 0) {
                s = 59;
                m--;
                if (m < 0) {
                    m = 59;
                    h--;
                    if (h < 0) {
                        h = 23;
                        d--;
                        if (d < 0) {
                            d = 2; // Reset to 3 days
                            h = 23;
                            m = 59;
                            s = 59;
                        }
                    }
                }
            }

            days.textContent = d;
            hours.textContent = h;
            minutes.textContent = m;
            seconds.textContent = s;
        }, 1000);
    }

    // Form Submission
    async function handleFormSubmit(formId) {
        document.getElementById(formId).addEventListener('submit', async function(e) {
            e.preventDefault();

            // Get form data
            const email = this.querySelector('input[type="email"]').value;
            const telegram = this.querySelector('input[type="text"]').value;

            // Simple validation
            if (!email && !telegram) {
                alert('Please enter either your email or Telegram username!');
                return;
            }

            // Disable submit button
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<span class="material-icons" style="vertical-align: middle;">hourglass_empty</span> Submitting...';
            submitButton.disabled = true;

            try {
                // Send data to server
                const response = await fetch('/submit-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        email: email || null,
                        telegram: telegram || null
                    })
                });

                const messageDiv = document.createElement('div');
                messageDiv.style.cssText = `
        position: fixed; top: 20px; right: 20px;
        padding: 15px 25px; border-radius: 10px;
        color: white; font-weight: bold;
        z-index: 1000; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        display: flex; align-items: center;
    `;

                if (response.ok) {
                    messageDiv.style.background = 'linear-gradient(45deg, #4ECDC4, #45B7D1)';
                    messageDiv.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px;">
                <path d="M5 12L10 17L20 7" stroke="currentColor" stroke-width="2" fill="none"/>
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
            </svg>
            🎉 Success! You've been entered into the giveaway.Please wait to our contact email. Good luck!
        `;
                    document.body.appendChild(messageDiv);
                    this.reset();
                } else {
                    const errorText = await response.text();
                    messageDiv.style.background = 'linear-gradient(45deg, #FF6B6B, #FF4E50)';
                    messageDiv.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px;">
                <path d="M12 9v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"
                      stroke="currentColor" stroke-width="2" fill="none"/>
            </svg>
            ⚠️ Error submitting your entry. Please try again.
        `;
                    document.body.appendChild(messageDiv);
                }

                setTimeout(() => {
                    messageDiv.remove();
                }, 5000);

            } catch (error) {
                console.error('Error:', error);

                const errorDiv = document.createElement('div');
                errorDiv.style.cssText = `
        position: fixed; top: 20px; right: 20px;
        background: linear-gradient(45deg, #FF6B6B, #FF4E50);
        color: white; padding: 15px 25px; border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2); z-index: 1000;
        font-weight: bold; display: flex; align-items: center;
    `;
                errorDiv.innerHTML = `
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px;">
            <path d="M12 9v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"
                  stroke="currentColor" stroke-width="2" fill="none"/>
        </svg>
        ❌ There was a network error. Please try again later.
    `;
                document.body.appendChild(errorDiv);

                setTimeout(() => {
                    errorDiv.remove();
                }, 5000);
            } finally {
                // Re-enable submit button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        updateCountdown();
        handleFormSubmit('giveawayForm');
        handleFormSubmit('finalForm');
    });

    // Add some dynamic elements
    setTimeout(() => {
        const hero = document.querySelector('.hero');
        const sparkleIcons = ['star', 'auto_awesome', 'diamond', 'brightness_7'];

        setInterval(() => {
            const sparkle = document.createElement('div');
            const icon = document.createElement('span');
            icon.className = 'material-icons';
            icon.textContent = sparkleIcons[Math.floor(Math.random() * sparkleIcons.length)];
            sparkle.appendChild(icon);

            sparkle.style.position = 'absolute';
            sparkle.style.left = Math.random() * 100 + '%';
            sparkle.style.top = Math.random() * 100 + '%';
            sparkle.style.fontSize = '2rem';
            sparkle.style.opacity = '0.7';
            sparkle.style.pointerEvents = 'none';
            sparkle.style.animation = 'fadeInOut 3s ease-in-out';
            sparkle.style.color = 'white';

            hero.appendChild(sparkle);

            setTimeout(() => {
                if (sparkle.parentNode) {
                    sparkle.parentNode.removeChild(sparkle);
                }
            }, 3000);
        }, 2000);
    }, 1000);

    // Add fadeInOut animation
    const style = document.createElement('style');
    style.textContent = `
            @keyframes fadeInOut {
                0% { opacity: 0; transform: scale(0.5); }
                50% { opacity: 0.7; transform: scale(1.2); }
                100% { opacity: 0; transform: scale(0.8); }
            }
        `;
    document.head.appendChild(style);
</script>
</body>
</html>
