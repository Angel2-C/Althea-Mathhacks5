<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTHEA - Main Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Orbitron', 'Poppins', sans-serif;
            background: radial-gradient(circle at center, #080812 0%, #000 100%);
            color: white;
            min-height: 500vh;
            overflow-x: hidden;
            overflow-y: scroll!important;
        }
        
        /* Keyframes for the background pulse animations */
        @keyframes pulse-slow {
            0%, 100% { transform: scale(1); opacity: 0.2; }
            50% { transform: scale(1.2); opacity: 0.3; }
        }
        @keyframes pulse-slow-reverse {
            0%, 100% { transform: scale(1.2); opacity: 0.3; }
            50% { transform: scale(1); opacity: 0.2; }
        }
        @keyframes pulse-fast {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.4; }
        }

        /* Keyframes for text entrance animations */
        @keyframes fade-in-down {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fade-in-left {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fade-in-right {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .smoke {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, transparent 70%);
        opacity: 0;
        animation: smoke 2s forwards;
        }

        @keyframes smoke {
        0% { transform: scale(0.5); opacity: 0.7; }
        50% { transform: scale(1.5); opacity: 0.5; }
        100% { transform: scale(2); opacity: 0; }
        }

        
    </style>
</head>
<body>

    <!-- Main content wrapper. Handles responsiveness and centers the content. -->
    <div class="relative w-full max-w-7xl mx-auto md:pl-24">
       <div id="sidebar-container"></div>
       <div id="music-container"></div>
        
        <!-- Inner container for padding -->
        <div class="p-4 md:p-8">

            <!-- Header section with logo and sign-in button -->
           <header class="flex justify-between items-center py-4 mt-16">
            <h1 class="text-3xl font-extrabold text-cyan-400 drop-shadow-lg">Althea</h1>
            <button class="px-6 py-2 rounded-full text-sm font-bold bg-gray-800 hover:bg-gray-700 transition-colors">
                Sign In
            </button>
            </header>

       <!-- Wrapper for Image + Text -->
<div class="flex flex-col md:flex-row items-center justify-center gap-12 my-10">
  
  <!-- Image Banner -->
  <div class="relative w-full max-w-xl md:-translate-x-10 rounded-xl 
              overflow-hidden border-4 border-cyan-400 shadow-[0_0_20px_5px_rgba(0,255,255,0.6)]
              animate-[fade-in-down_1.5s_ease-out_forwards] z-10 scale-20">
      <img src="Althea-sub/Images/Main_HTML/Main1.png" 
          alt="Top Banner" 
          class="w-full h-auto object-cover opacity-90 rounded-lg">
      <button class="absolute left-1/2 top-[80%] -translate-x-1/2 
                  bg-cyan-500 text-white px-6 py-2 rounded-lg 
                  shadow-lg hover:bg-cyan-400 transition">
      Click Me
      </button>
      <div class="relative bg-gradient-to-b from-black/20 via-transparent to-black/50 pointer-events-none"></div>
  </div>

  <!-- Text Section -->
  <div class="max-w-md text-left mt-6 md:mt-0">
      <h2 class="text-3xl font-medium text-cyan-400">Can studying be fun ?</h2>
      <p class="text-gray-300 font-['Poppins'] text-justify leading-relaxed">
        Here you don’t need to worry. 
        Studying is fun, play with peace of mind.
      </p>
  </div>

        <!-- Gift emoji -->
        <button id="gift" class="text-6xl cursor-pointer hover:scale-110 transition-transform">
            🎁
        </button>
        </div>
        <!-- Overlay (hidden at first) -->
        <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
        <div class="flex flex-col items-center justify-center bg-gray-800 rounded-2xl p-8 shadow-2xl">
            <!-- Pet image -->
            <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" 
                alt="Pet" class="w-48 h-48 object-contain mb-6" />
            <!-- Claim button -->
            <button id="claim" class="px-8 py-3 bg-cyan-500 hover:bg-cyan-600 rounded-lg text-white font-semibold text-lg shadow-md">
            Claim
            </button>
        </div>
        </div>

  



    


            <main class="main-content text-center relative z-10 w-full max-w-4xl mx-auto">
                <section class="mb-20 animate-[fade-in-down_1.5s_ease-out_forwards]">
                    <h1 class="text-5xl md:text-7xl font-extrabold mb-4 text-white drop-shadow-lg">
                        Welcome, Enjoy your time
                    </h1>
                    <p class="text-xl md:text-2xl font-medium text-gray-300 font-['Poppins']">
                        Your journey to knowledge and power begins now.
                    </p>
                </section>

                <section class="mb-20 animate-[fade-in_1.5s_ease-out_forwards] delay-[0.5s]">
                    <h2 class="text-4xl font-bold mb-4 text-cyan-400">Our Mission</h2>
                    <p class="text-lg md:text-xl font-medium text-gray-400 font-['Poppins'] leading-relaxed text-justify">
                    Change boring to fun. Learning won't feel boring. The more study sessions, the more games you play. 
                    But don’t worry since game time is limited and tied to your progress, you won’t get addicted or distracted for too long. Want to play more? 
                    Simple: study more, earn more, and have fun while learning!
                
                    </p>
                </section>

                <section class="flex flex-col sm:flex-row justify-center items-center gap-8 mb-20">
                    <div class="flex flex-col items-center gap-4 w-full sm:w-1/2 animate-[fade-in-left_1.5s_ease-out_forwards] delay-[1s]">
                        <button
                            id="start-training-btn"
                            class="w-full px-10 py-4 rounded-full text-lg font-bold shadow-2xl
                                    bg-gradient-to-br from-cyan-500 to-teal-400
                                    transition-all duration-300 transform hover:scale-105 hover:shadow-xl
                                    focus:outline-none focus:ring-4 focus:ring-cyan-500">
                            Start Your Training
                        </button>
                        <p class="text-sm md:text-base text-gray-400 font-['Poppins']">
                            Sharpen your mind with our interactive quizzes and challenges.
                        </p>
                    </div>
                    <div class="flex flex-col items-center gap-4 w-full sm:w-1/2 animate-[fade-in-right_1.5s_ease-out_forwards] delay-[1.2s]">
                        <button
                            id="view-cards-btn"
                            class="w-full px-10 py-4 rounded-full text-lg font-bold shadow-2xl
                                    bg-gradient-to-br from-purple-600 to-indigo-700
                                    transition-all duration-300 transform hover:scale-105 hover:shadow-xl
                                    focus:outline-none focus:ring-4 focus:ring-purple-600">
                            View Your Collection
                        </button>
                        <p class="text-sm md:text-base text-gray-400 font-['Poppins']">
                            Collect and manage your unique cards and pets.
                        </p>
                    </div>
                </section>
                
                <section class="py-16 bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl shadow-2xl animate-[fade-in-up_1.5s_ease-out_forwards] delay-[1.8s]">
                    <h2 class="text-4xl font-bold mb-8 text-cyan-300 text-center">Features</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 px-8 text-justify">
                        <div class="flex flex-col items-center bg-gray-700 p-6 rounded-xl border-2 border-purple-500 hover:border-cyan-400 transition-all duration-300 transform hover:-translate-y-2">
                            <svg class="w-16 h-16 text-cyan-400 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                            <h3 class="text-2xl font-bold text-white mb-2">Pet Houses</h3>
                            <p class="text-md text-gray-400 font-['Poppins']">Takecare of your pets and collect pets. Study more and takecare of your pet.</p>
                        </div>
                        <div class="flex flex-col items-center bg-gray-700 p-6 rounded-xl border-2 border-purple-500 hover:border-cyan-400 transition-all duration-300 transform hover:-translate-y-2">
                            <svg class="w-16 h-16 text-cyan-400 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            <h3 class="text-2xl font-bold text-white text-center mb-2">Adventure Land</h3>
                            <p class="text-md text-gray-400 font-['Poppins']">A multiplayer game where you will battle to get more points, boardgame, minigame even a boss fight. </p>
                        </div>
                        <div class="flex flex-col items-center bg-gray-700 p-6 rounded-xl border-2 border-purple-500 hover:border-cyan-400 transition-all duration-300 transform hover:-translate-y-2">
                            <svg class="w-16 h-16 text-cyan-400 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <h3 class="text-2xl font-bold text-white mb-2">Quizzes</h3>
                            <p class="text-md text-gray-400 font-['Poppins']">Play quiz to get energy to play games. More knowledge while having fun.</p>
                        </div>
                    </div>
                </section>
                
                <section class="py-16">
                    <h2 class="text-4xl font-bold mb-8 text-cyan-300 text-center">COMING SOON-Community</h2>
                    <div class="bg-gray-800 p-8 rounded-xl shadow-2xl border-2 border-purple-500">
                        <p class="text-lg md:text-xl text-gray-400 font-['Poppins'] leading-relaxed">
                            At Althea, we believe in the power of a collective mind. Our platform is a nexus for
                            aspiring minds from around the world, all united by the goal of mastering new skills.
                            Join our forums, participate in collaborative projects, and connect with mentors
                            who can guide you on your journey. Your growth is our mission, and together,
                            we can unlock incredible potential.
                        </p>
                        <div class="mt-8 grid md:grid-cols-2 gap-8">
                            <div class="bg-gray-700 p-6 rounded-xl border-2 border-cyan-400">
                                <h3 class="text-2xl font-bold mb-2 text-white">Interactive Forums</h3>
                                <p class="text-gray-400">Discuss new topics, ask questions, and share your knowledge with other users.</p>
                            </div>
                            <div class="bg-gray-700 p-6 rounded-xl border-2 border-cyan-400">
                                <h3 class="text-2xl font-bold mb-2 text-white">Live Events</h3>
                                <p class="text-gray-400">Participate in real-time events, competitions,games and multiplayer quizzes</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="py-16">
                    <h2 class="text-4xl font-bold mb-8 text-cyan-300 text-center">Our Subjects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">Maths</h3>
                        </div>
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">English</h3>
                        </div>
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">Korean</h3>
                        </div>
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">Chinese</h3>
                        </div>
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">French</h3>
                        </div>
                        <div class="bg-gray-800 p-6 rounded-xl border-2 border-teal-500 text-center hover:shadow-cyan-400 hover:shadow-lg transition-all">
                            <h3 class="text-2xl font-bold mb-2">Japanese</h3>
                        </div>
                    </div>
                </section>
                
                <section class="py-16 h-[50vh]">
                    <h2 class="text-4xl font-bold mb-8 text-cyan-300 text-center">Enjoy ur time.</h2>
                    <div class="bg-gray-800 p-8 rounded-xl border-2 border-purple-500">
                        <p class="text-gray-400">Shhhhh, I have a secret gift. Invite your friend and receive a reward. :)))</p>
                    </div>
                </section>
                
                <footer class="text-center text-gray-400 py-16">
                    <p>&copy; 2025 ALTHEA. All rights reserved.</p>
                </footer>
            </main>
        </div>
    </div>
   <script>
document.addEventListener("DOMContentLoaded", () => {
  // Load sidebar
  fetch("sidebar.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("sidebar-container").innerHTML = data;
    });

  // Load music controls
  fetch("music.html")
    .then(res => res.text())
    .then(html => {
      document.getElementById("music-container").innerHTML = html;

      // 🎵 Init music logic
      const rhythmToggle = document.getElementById("rhythm-toggle");
      const playIcon = document.getElementById("play-icon");
      const stopIcon = document.getElementById("stop-icon");
      const audio = document.getElementById("rhythm-audio");
      const canvas = document.getElementById("visualizer");
      const ctx = canvas.getContext("2d");

      let audioCtx, analyser, source, dataArray;
      let animationId;

      if (rhythmToggle) {
        rhythmToggle.addEventListener("click", () => {
          if (!audioCtx) {
            audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            analyser = audioCtx.createAnalyser();
            source = audioCtx.createMediaElementSource(audio);
            source.connect(analyser);
            analyser.connect(audioCtx.destination);
            analyser.fftSize = 256;
            dataArray = new Uint8Array(analyser.frequencyBinCount);
          }

          if (audio.paused) {
            audio.play();
            playIcon.style.display = "none";
            stopIcon.style.display = "block";
            canvas.classList.add("active"); // ✅ add glow/border
            animate();
          } else {
            audio.pause();
            stopIcon.style.display = "none";
            playIcon.style.display = "block";
            canvas.classList.remove("active"); // ✅ remove glow/border
            cancelAnimationFrame(animationId); // stop animation
            ctx.clearRect(0, 0, canvas.width, canvas.height);
          }
        });
      }

      function animate() {
        animationId = requestAnimationFrame(animate);
        analyser.getByteFrequencyData(dataArray);

        ctx.clearRect(0, 0, canvas.width, canvas.height);

        const barWidth = (canvas.width / dataArray.length) * 2.5;
        let x = 0;
        for (let i = 0; i < dataArray.length; i++) {
          const barHeight = dataArray[i];
          ctx.fillStyle = `rgb(${barHeight + 100}, 50, 150)`;
          ctx.fillRect(x, canvas.height - barHeight / 2, barWidth, barHeight / 2);
          x += barWidth + 1;
        }
      }
    });
});

// Sidebar toggle function (must stay global)
function toggleSidebar() {
  document.querySelector(".sidebar").classList.toggle("active");
}
window.toggleSidebar = toggleSidebar;

 const gift = document.getElementById("gift");
    const overlay = document.getElementById("overlay");
    const claim = document.getElementById("claim");

    gift.addEventListener("click", () => {
      overlay.classList.remove("hidden"); // show overlay
      gift.classList.add("hidden"); // hide gift
    });

    claim.addEventListener("click", () => {
      overlay.classList.add("hidden"); // close overlay
      alert("Pet claimed! 🐾"); // you can replace with your own logic
    });
</script>

</body>
</html>
