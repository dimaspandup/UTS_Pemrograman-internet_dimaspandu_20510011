                    
                    <?php
                    if($_GET['modul']=='home'){
                    ?>
                    <div class="container-fluid ">
                        <h1 class="mt-4">PANEL ADMIN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    Selamat Datang Di Panel Kasir. Anda Bisa Meggunakan Halaman Menu-Menu Yang Tersedia. 
                                </p>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">Semoga Anda Puas.</div></div>
                    </div>
                    <?php
                    }else if($_GET['modul']=='user'){
                        include"modul/user/user.php";
                    }
                    ?>