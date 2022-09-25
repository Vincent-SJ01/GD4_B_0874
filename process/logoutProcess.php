



<?php
include '../component/sidebar.php'?>


<?php

    echo
        '
        <script>

            let konfirmasi = confirm("Apakah Ingin Logout?");

            if(konfirmasi){
                alert("Berhasil logout");
                window.location = "../page/loginPage.php"
            }else{
                alert("Tidak Jadi Logout");
                window.history.back()
            }

        </script>
        '
        ?>

</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>