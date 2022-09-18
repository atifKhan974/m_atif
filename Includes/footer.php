<?php
    $query = "SELECT * FROM `contact` ";
    $run_query = mysqli_query($conn, $query);
    $row =  mysqli_fetch_row($run_query);
?>

<footer>
            <div class="container">
                <p class="content footerText">&copy; Copyright - <?php echo $row[3]; ?> | <?php echo date("F Y"); ?> </p>
            </div>
        </footer>
    </div>
    <!-- --- LottiePlayer Link ---  -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- --- GSAP Link ---  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <!-- --- Scroll Trigger ---  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <!-- --- jquery Link ---  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- --- smtp Link ---  -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- --- Flickity Link ---  -->
    <script src="/path/to/flickity.pkgd.min.js"></script>
    <!-- --- My Script Link ---  -->
    <script src="Sources/script/script.js?<?php $version; ?>"></script>
</body>

</html>