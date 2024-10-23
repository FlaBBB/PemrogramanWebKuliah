<?php
include_once("check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Home</title>
    <style>
        .banner-slider img {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-expand-lg" style="background-color: #5b9bd5">
        <div class="collapse navbar-collapse px-4">
            <a class="navbar-brand text-white me-auto" href="index.php"
                >Laundry XYZ</a
            >
            <div class="navbar-nav">
                <a class="navbar-brand text-white" href="home.php">Home</a>
                <a class="navbar-brand text-white" href="cek_harga.php"
                    >Cek Harga</a
                >
                <a class="navbar-brand text-white" href="logout.php"
                    >Logout</a
                >
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
        <div class="banner-slider">
            <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="laundry1.jpg" alt="Laundry 1">
                    </div>
                    <div class="carousel-item">
                        <img src="laundry2.jpg" alt="Laundry 2">
                    </div>
                    <div class="carousel-item">
                        <img src="laundry3.jpg" alt="Laundry 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae voluptatum sapiente molestias praesentium dolor doloribus similique iure consectetur facere expedita accusantium reprehenderit ullam quisquam facilis, necessitatibus tenetur! Officiis laborum ullam quod ab temporibus ad in similique aliquam et perspiciatis aspernatur voluptatibus tenetur, aut reiciendis vitae. Corrupti, laborum ea. Fuga fugiat quam, suscipit esse eius repudiandae deserunt unde laborum reiciendis facilis iste iusto voluptate molestias sunt expedita voluptates non, ipsam, vero labore aliquam! Qui consectetur autem unde deleniti explicabo. Hic, dignissimos. Ipsam labore facilis mollitia, id neque officia autem commodi nisi cumque fugit, perspiciatis impedit nostrum eveniet! Tenetur possimus voluptatibus officiis iste minus nulla assumenda recusandae ut quas, omnis animi eaque doloribus error? A dolore placeat repellat! Vero esse, minima quam labore voluptate a nisi officiis aperiam molestiae mollitia animi et eaque natus quae blanditiis accusantium tenetur quibusdam nihil, eum, accusamus dolorem. Ipsam corrupti earum eaque perspiciatis voluptatibus deleniti, consequuntur dolor laboriosam sed suscipit porro nostrum ab eos, dolore cumque necessitatibus error numquam nesciunt atque nemo. Aliquid voluptate similique numquam ab corrupti. Quaerat nobis consectetur recusandae eligendi architecto dolores quae sed, velit explicabo enim maiores soluta ratione, laudantium ducimus, eveniet officia et quas! Dolor, autem impedit nulla aliquid exercitationem quia ab corrupti velit necessitatibus possimus at quod asperiores vero eos deserunt laboriosam architecto rem minus qui amet! Porro excepturi totam rem voluptate, incidunt aut exercitationem, hic accusantium nobis et dolor unde veniam? Nihil eligendi placeat velit, laudantium quo illum iusto quas ducimus beatae molestiae ipsum, quis odio nobis tempore praesentium sunt unde doloremque explicabo rerum temporibus obcaecati aspernatur dicta earum ad? Voluptates molestias repellat quia accusantium accusamus qui esse praesentium eveniet numquam voluptas eum ullam dolore commodi officia possimus quibusdam, nisi neque ad dolores sed molestiae nihil. Illo error quibusdam delectus asperiores cupiditate unde animi excepturi. Ratione eos maiores ipsum ad?
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>