<?php
include("../../backend/config/Database.php");
include("../../backend/controllers/AdminController.php");

$name = "";
$category = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];

    if ($name && $category) {
        $sql = "INSERT INTO items (name, category) VALUES ('$name', '$category')";
        $q = mysqli_query($connect, $sql);
        if ($q) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data');</script>";
        }
    } else {
        echo "<script>alert('Silakan isi semua kolom');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>K-StyLabs</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../public/css/admin.css" />
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">K-<span>StyLabs</span></div>
            <div class="search-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search your own style" />
                </div>
                <div class="icons">
                    <button class="logout-btn">Logout</button>
                </div>
            </div>
        </header>

        <nav>
            <a href="../mainPage/landingPage.html">Korean Clothes</a>
            <a href="#">Accessories</a>
            <a href="../blog/blog.html">Fashion Tips</a>
            <a href="../mainPage/customize.html">Customize</a>
        </nav>

        <!-- Tombol Tambah -->
        <button class="btn tambah" onclick="openModal()">+ Tambah Data</button>

        <!-- Modal Form Tambah Data -->
        <div id="modalForm" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Tambah Style</h2>
                <form id="formTambah" method="post">
                    <input type="text" name="name" value="<?php echo $name ?>" placeholder="Nama Pakaian" required />
                    <input type="text" name="category" value="<?php echo $category ?>" placeholder="Kategori" required />
                    <button type="submit" name="submit" class="btn tambah">Simpan</button>
                </form>
            </div>
        </div>

        <div class="wrapper">
            <main class="content">
                <h1>Daftar Style</h1>
                <table id="studentTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pakaian</th>
                            <th>Kategori Style</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php
                        $no = 1;
                        $result = mysqli_query($connect, "SELECT * FROM items ORDER BY created_at DESC");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$no}</td>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                            echo "<td>
                            <button class='btn'>Edit</button>
                            <button class='btn'>Hapus</button>
                            </td>";
                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </main>
        </div>

        <!-- Footer -->
        <section class="footer">
            <div class="footer-container">
                <div class="footer-left">
                    <div class="logo">K-StyLabs</div>
                    <p>Let's Create A Custom Photo Session Just For You.</p>
                    <ul>
                        <li><a href="#">Data Privacy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Impressum</a></li>
                        <li><a href="#">Product</a></li>
                    </ul>
                </div>

                <div class="footer-middle">
                    <div class="address">
                        <h4>Address</h4>
                        <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                    </div>
                    <div class="address">
                        <h4>Address</h4>
                        <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                    </div>
                </div>

                <div class="footer-right">
                    <div class="contact">
                        <h4>Phone</h4>
                        <p>(704) 555-0127</p>
                    </div>
                    <div class="contact">
                        <h4>Email</h4>
                        <p>georgia.young@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>Cherish Your Special Day With Stunning, Candid Shots That Capture The Love And Joy.</p>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-discord"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </section>
    </div>

    <script src="../public/js/admin.js"></script>
</body>

</html>