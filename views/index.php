<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý đại học</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Hiển thị Danh sách</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add.php">Thêm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update.php" tabindex="-1" aria-disabled="true">Sửa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="delete.php" tabindex="-1" aria-disabled="true">Xóa</a>
                        </li>

                    </ul>
                
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <div class="container">
            <h1 class="text-center mt-5">Hệ thống quản lý đại học</h1>
            <div class="col mt-5">
                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã giáo viên</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Trình độ</th>
                            <th scope="col">Chuyên môn</th>
                            <th scope="col">Học vấn</th>
                            <th scope="col">Học vị</th>
                            <th scope="col">Cơ quan/Đơn vị</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', '1951060543_university');
                        $sql = "SELECT * from giangvien";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['magv']; ?></th>
                                    <td><?php echo $row['hovaten']; ?></td>
                                    <td><?php echo $row['ngaysinh']; ?></td>
                                    <td><?php echo $row['gioitinh']; ?></td>
                                    <td><?php echo $row['trinhdo']; ?></td>
                                    <td><?php echo $row['chuyenmon']; ?></td>
                                    <td><?php echo $row['hocham']; ?></td>
                                    <td><?php echo $row['hocvi']; ?></td>
                                    <td><?php echo $row['coquan']; ?></td>
                                </tr>
                        <?php
                                $i++;
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</body>

</html>