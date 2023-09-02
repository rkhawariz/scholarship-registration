<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa | Rifqi Khawarij</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <?php
    include("connection.php");

    //mendeteksi apakah ada parameter link_page yang dikirimkan
    $result = mysqli_query($conn, "SELECT * FROM pendaftar");

    if (isset($_GET['link_page'])) {
        $link_page = $_GET['link_page'];
    } else {
        $link_page = 1;
    }

    //fungction untuk menentukan link yang aktif
    function SetLinkPage($actual_link, $reference_link)
    {
        $result = "";
        if ($actual_link == $reference_link) {
            $result = "active";
        }
        return $result;
    }

    //menentukan konten yang aktif
    function SetContentPage($actual_content, $reference_content)
    {
        $result = "";
        if ($actual_content == $reference_content) {
            $result = "show active";
        }
        return $result;
    }

    // function untuk generate bilangan di IPK
    function generateRandomFloat(float $minValue, float $maxValue): float
    {
        return $minValue + mt_rand() / mt_getrandmax() * ($maxValue - $minValue);
    }

    // function agar disable komponen apabila ipk tidak mencukupi
    function SetDisable($ipk)
    {
        $result = "";
        if ($ipk < 3) {
            $result = "disabled";
        }
        return $result;
    }
    ?>
    <div class="container"> <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Beasiswa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
    </div> <!-- End Navbar -->

    <div class="container"> <!-- Start Base Navbar -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link <?php echo SetLinkPage("1", $link_page) ?>" id="beasiswa-tab" data-bs-toggle="tab" data-bs-target="#beasiswa" type="button" role="tab" aria-controls="beasiswa" aria-selected="true">Pilihan Beasiswa</button>

                <button class="nav-link <?php echo SetLinkPage("2", $link_page) ?>" id="daftar-tab" data-bs-toggle="tab" data-bs-target="#daftar" type="button" role="tab" aria-controls="daftar" aria-selected="false">Daftar</button>

                <button class="nav-link <?php echo SetLinkPage("3", $link_page) ?>" id="hasil-tab" data-bs-toggle="tab" data-bs-target="#hasil" type="button" role="tab" aria-controls="hasil" aria-selected="false">Hasil</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade <?php echo SetContentPage("1", $link_page) ?>" id="beasiswa" role="tabpanel" aria-labelledby="beasiswa-tab" tabindex="0"> <!-- Section link_page 1 -->
                <div class="section-menu">
                    <h2>Beasiswa Mahasiswa Universitas A</h2>
                    <hr>
                    <h4>Pilihan Basiswa yang disediakan</h4>
                    <br>
                    <p>Beasiswa Prestasi <strong>Akademik</strong> dan <b>Non-Akademik</b> adalah beasiswa kepada mahasiswa yang memiliki prestasi dalam bidang akademik maupun non-akademik yang dibuktikan dengan scan juara tingkat kota maupun provinsi. Beasiswa kuliah yang kamu terima disebut penuh bila pembiayaannya mencakup biaya pendidikan dan biaya hidup. Bila kamu kuliah di luar negeri, full scholarship seperti ini akan sangat membantu karena menopang hampir seluruh kebutuhan hidupmu di perantauan, termasuk asuransi.

                        Beasiswa berupa potongan sebesar 20% dari biaya BP3. Adapun syarat dan ketentuan dari beasiswa ini adalah sebagai berikut:
                    <ol>
                        <li>
                            Terdaftar sebagai mahasiswa aktif dari semester 1-8
                        </li>
                        <li>
                            Minimal IPK mahasiswa 3.0
                        </li>
                        <li>
                            Melengkapi berkas-berkas yang diperlukan
                        </li>
                    </ol>
                    Tim Seleksi akan langsung menseleksi dari berkas yang Anda upload dan keputusan Tim Seleksi tidak dapat diganggu gugat.
                    Semua pengumuman beasiswa langsung dapat dilihat pada tanggal kelulusan setiap gelombang. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, voluptatum eius in porro ratione, repellendus expedita beatae explicabo ex fugit voluptatibus? Facilis modi molestiae tenetur corrupti repellat rerum deserunt omnis?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium doloribus aperiam earum provident fuga, perspiciatis quidem, consequatur tenetur, velit totam rem facilis aliquam amet sit soluta laudantium. Sed quaerat vel similique necessitatibus distinctio aut aliquid quisquam. Dolorum excepturi ipsa quasi, atque non aliquid quam commodi quaerat dignissimos? Inventore, iure! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio excepturi et non, illo a ipsa fugiat molestiae, ipsam doloribus consectetur quod ex sapiente corrupti deleniti veniam repudiandae quisquam exercitationem tenetur? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi cumque voluptates doloribus esse corrupti officiis autem velit saepe quidem consectetur porro iure, aliquam ipsa totam quae enim, similique vero aspernatur?</p>
                    <a class="btn btn-success btn-lg" href="index.php?link_page=2">Daftar Beasiswa</a>
                </div>
            </div>

            <div class="tab-pane fade <?php echo SetContentPage("2", $link_page) ?>" id="daftar" role="tabpanel" aria-labelledby="daftar-tab" tabindex="0"> <!-- Section link_page 2 -->
                <br>
                <h4>Form Pendaftaran</h4>
                <div class="container doff">
                    <form action="add_pendaftar.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hp" class="col-sm-2 col-form-label">No Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="hp" name="hp" placeholder="Masukkan No HP" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester" id="semester" required>
                                    <?php
                                    for ($i = 1; $i <= 8; $i++) {
                                    ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php // pemanggilan fungsi untuk menampilkan angka random
                        $minValue = 2.9;
                        $maxValue = 3.4;
                        $ipk = round(generateRandomFloat($minValue, $maxValue), 1);
                        ?>

                        <div class="mb-3 row">
                            <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ipk" name="ipk" value="<?php echo $ipk ?>" required readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="beasiswa" class="col-sm-2 col-form-label">Beasiswa</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="beasiswa" id="beasiswa" required <?php echo SetDisable($ipk) ?>>
                                    <option value="akademik">Akademik</option>
                                    <option value="non_akademik">Non-Akademik</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="upload_file" class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputGroupFile02" name="berkas" required <?php echo SetDisable($ipk) ?>>
                            </div>
                        </div>
                        <input class="btn btn-success btn-lg" type="submit" value="Daftar" <?php echo SetDisable($ipk) ?>>
                        <a class="btn btn-danger btn-lg" href="index.php?link_page=2">Batal</a>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade <?php echo SetContentPage("3", $link_page) ?>" id="hasil" role="tabpanel" aria-labelledby="hasil-tab" tabindex="0"> <!-- Section link_page 3 -->
                <br>
                <h4>Pendaftar</h4>
                <div class="box-body bg-warning">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Berkas</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Semester</th>
                                    <th>IPK</th>
                                    <th>Jenis Beasiswa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = $conn->query("SELECT * from pendaftar");
                                while ($user_data = $sql->fetch_assoc()) {
                                ?>

                                    <tr>
                                        <td>
                                            <img class="img" src="uploads/<?php echo $user_data['berkas']; ?>" alt="">
                                        </td>
                                        <td>
                                            <?php echo $user_data['nama']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['hp']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['semester']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['ipk']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['beasiswa']; ?>
                                        </td>
                                        <td>
                                            <?php echo $user_data['status']; ?>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Base Navbar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>