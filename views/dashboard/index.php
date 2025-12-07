<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SecInsight</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #0A0F1D;
        }
    </style>
</head>

<body class="text-white">

    <!-- NAVBAR -->
    <nav class="flex justify-between items-center px-8 py-4 bg-[#0D1324] border-b border-gray-800">
        <div class="text-xl font-semibold">🛡️ SecInsight</div>

        <div class="flex gap-6">
            <a class="hover:text-gray-300" href="#">Home</a>
            <a class="hover:text-gray-300" href="#">News</a>
            <a class="hover:text-gray-300" href="#">Forum</a>
            <a class="hover:text-gray-300" href="#">About</a>
        </div>

        <div class="flex gap-4">
            <span class="text-gray-300">Hi, <?php echo $_SESSION['user']; ?></span>
            <a href="../process/logout.php" class="bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700">Logout</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="px-8 mt-10">
        <div class="bg-[#111827] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h1 class="text-2xl font-bold mb-2">Recent Cyber Attack on ABC Corporation</h1>
            <p class="text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elit
                vulputate consectetur elit vulputate malesuada est.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT GRID -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-8 mt-10">

        <!-- LEFT SIDE (NEWS) -->
        <div class="lg:col-span-2 space-y-6">

            <!-- CARD 1 -->
            <div class="p-6 bg-[#111827] rounded-xl border border-gray-800 shadow-lg">
                <p class="text-sm text-gray-400 uppercase">Incident • Ransomware</p>
                <h2 class="text-xl font-semibold mt-1">Ransomware attack disrupts hospital operations</h2>
                <p class="text-gray-400 mt-2">
                    A ransomware attack on a major healthcare provider has disrupted operations across multiple facilities.
                </p>
                <button class="mt-4 px-4 py-2 bg-gray-200 text-black rounded hover:bg-white">Read More</button>
            </div>

            <!-- CARD 2 -->
            <div class="p-6 bg-[#111827] rounded-xl border border-gray-800 shadow-lg">
                <p class="text-sm text-gray-400 uppercase">Subscribe • Encryption</p>
                <h2 class="text-xl font-semibold mt-1">Encryption standards to be updated in 2025</h2>
                <p class="text-gray-400 mt-2">
                    National cybersecurity agencies announce plans to update encryption standards ahead of emerging quantum threats.
                </p>
                <button class="mt-4 px-4 py-2 bg-gray-200 text-black rounded hover:bg-white">Read More</button>
            </div>

            <!-- CARD 3 -->
            <div class="p-6 bg-[#111827] rounded-xl border border-gray-800 shadow-lg">
                <p class="text-sm text-gray-400 uppercase">Zero • Vulnerability</p>
                <h2 class="text-xl font-semibold mt-1">Zero-day vulnerability discovered</h2>
                <p class="text-gray-400 mt-2">
                    Researchers have disclosed a critical zero-day vulnerability affecting millions worldwide.
                </p>
                <button class="mt-4 px-4 py-2 bg-gray-200 text-black rounded hover:bg-white">Read More</button>
            </div>

        </div>

        <!-- RIGHT SIDE (SIDEBAR) -->
        <div class="space-y-6">

            <!-- TOP CYBER POSTS -->
            <div class="bg-[#111827] p-5 rounded-xl border border-gray-800 shadow-lg">
                <h3 class="text-lg font-semibold mb-4">Top Cyber Posts on X</h3>

                <div class="p-3 mb-3 bg-[#0D1324] rounded-lg border border-gray-700">
                    <strong>Security</strong>
                    <p class="text-gray-400 text-sm">New malware strain targeting financial institutions.</p>
                </div>

                <div class="p-3 mb-3 bg-[#0D1324] rounded-lg border border-gray-700">
                    <strong>Weakness</strong>
                    <p class="text-gray-400 text-sm">CVE-2024-XXXX impacts multiple industries.</p>
                </div>

                <div class="p-3 mb-3 bg-[#0D1324] rounded-lg border border-gray-700">
                    <strong>Encryption</strong>
                    <p class="text-gray-400 text-sm">Quantum-safe encryption becoming critical.</p>
                </div>

                <div class="p-3 bg-[#0D1324] rounded-lg border border-gray-700">
                    <strong>Division</strong>
                    <p class="text-gray-400 text-sm">IR teams on alert after recent attacks.</p>
                </div>
            </div>

            <!-- RECENT DISCUSSIONS -->
            <div class="bg-[#111827] p-5 rounded-xl border border-gray-800 shadow-lg">
                <h3 class="text-lg font-semibold mb-4">Recent Discussions</h3>

                <div class="p-3 mb-2 bg-[#0D1324] rounded-lg border border-gray-700">
                    Unpatched Vulnerability in XYZ System
                </div>

                <div class="p-3 mb-2 bg-[#0D1324] rounded-lg border border-gray-700">
                    How to Secure Remote Workers
                </div>

                <div class="p-3 bg-[#0D1324] rounded-lg border border-gray-700">
                    DDoS Attack on DEF Website
                </div>
            </div>

        </div>
    </section>

    <!-- FORUM SECTION -->
    <section class="px-8 mt-16 pb-16">
        <h2 class="text-2xl font-bold mb-6">Forum</h2>

        <input id="searchInput"
               class="w-full p-3 bg-[#0D1324] border border-gray-700 rounded-lg mb-6"
               placeholder="Search topics..." />

        <div id="forumList" class="bg-[#111827] rounded-xl border border-gray-800 p-4">

            <!-- Topics -->
            <div class="topic py-4 border-b border-gray-800 text-lg font-semibold">
                Unpatched Vulnerability in XYZ System
            </div>
            <div class="topic py-4 border-b border-gray-800 text-lg font-semibold">
                How to Secure Remote Workers
            </div>
            <div class="topic py-4 border-b border-gray-800 text-lg font-semibold">
                DDoS Attack on DEF Website
            </div>
            <div class="topic py-4 border-b border-gray-800 text-lg font-semibold">
                New Ransomware Variant
            </div>
            <div class="topic py-4 text-lg font-semibold">
                Cybersecurity Regulations 2024
            </div>

        </div>
    </section>

    <!-- JAVASCRIPT (Search Filter) -->
    <script>
        const searchInput = document.getElementById("searchInput");
        const topics = document.querySelectorAll(".topic");

        searchInput.addEventListener("keyup", () => {
            const value = searchInput.value.toLowerCase();

            topics.forEach(topic => {
                topic.style.display = topic.textContent.toLowerCase().includes(value)
                    ? "block"
                    : "none";
            });
        });
    </script>

</body>
</html>
