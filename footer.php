<style>
    .footer-icons a {
        transition: transform 0.3s ease, color 0.3s ease;
        margin: 0 10px;
    }
    .footer-icons a:hover {
        transform: scale(1.2);
        color: #ffffff;
    }
    @media (min-width: 768px) {
        .footer-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .footer-icons .category {
            margin-right: 30px;
        }
    }
</style>

<footer class="bg-gray-800 text-gray-400 py-6">
    <div class="container mx-auto text-center">
        <div class="footer-icons mb-4">
            <!-- Contact Links -->
            <div class="category">
                <a href="path/to/yourvcard.vcf" class="text-gray-400 hover:text-white mx-2">
                    <i class="fas fa-id-card"></i>
                </a>
            </div>
            <!-- Social Media Links -->
            <div class="category">
                <a href="https://www.instagram.com/patricioguzman" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/yourchannelr" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/yourprofile" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://soundcloud.com/yourprofile" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-soundcloud"></i>
                </a>
                <a href="https://www.twitch.tv/yourchannel" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-twitch"></i>
                </a>
                <a href="https://open.spotify.com/user/yourprofile" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-spotify"></i>
                </a>
            </div>
            
            <!-- Other Links -->
            <div class="category">
             
                <a href="https://www.paypal.com/paypalme/yourprofile" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-paypal"></i>
                </a>
                <a href="https://www.yourwebsite1.com" class="text-gray-400 hover:text-white mx-2">
                    <i class="fas fa-globe"></i>
                </a>
                <a href="https://www.yourwebsite2.com" class="text-gray-400 hover:text-white mx-2">
                    <i class="fas fa-globe"></i>
                </a>
            </div>
        </div>
        <p class="text-sm">
            Copyright © 1989 – <?php echo date("Y"); ?> ByPat.com.au All Rights Reserved.
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>