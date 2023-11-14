<?php
//Trắc nghiệm
//Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
//Câu 2: A. True
//Câu 3: A. array()
//Câu 4: B. fopen()
//Câu 5:B. Chuyển đổi một đối tượng thành một chuỗi
//Tự luận
//Bài 1:
function generateFibonacci($n) {
    $day_fibonacci = array();
    if ($n == 1) {
        $day_fibonacci[] = 0;
    } elseif ($n >= 2) {
        $day_fibonacci[] = 0;
        $day_fibonacci[] = 1;
        for ($i = 2; $i < $n; $i++) {
            $day_fibonacci[] = $day_fibonacci[$i - 1] + $day_fibonacci[$i - 2];
        }
    }
    return $day_fibonacci;
}

$nhap_so_n = 10; 
$dayFibonacci = generateFibonacci($nhap_so_n);

echo "Dãy số Fibonacci đầu tiên có $nhap_so_n phần tử là: ";
foreach ($dayFibonacci as $so) {
    echo $so . " ";
}


// Bài 2:
function hoc_sinh_diem_cao_nhat($hocSinhs) {
    $diem_cao_nhat = 0;
    $hoc_sinh_diem_cao_nhat = null;
    foreach ($hocSinhs as $hocSinh) {
        if ($hocSinh['grade'] > $diem_cao_nhat) {
            $diem_cao_nhat = $hocSinh['grade'];
            $hoc_sinh_diem_cao_nhat = $hocSinh;
        }
    } 
    return $hoc_sinh_diem_cao_nhat;
}

$hocSinhs = array(
    array(
        'id' => 1,
        'name' => 'Nguyễn Thị Mỹ Huyền',
        'age' => 20,
        'grade' => 8.5
    ),
    array(
        'id' => 2,
        'name' => 'Nguyễn vũ Châu Anh',
        'age' => 21,
        'grade' => 8.56
    ),
    array(
        'id' => 3,
        'name' => 'Hoàng Ngọc Diệp',
        'age' => 21,
        'grade' => 8.5
    )
);


echo "<br> Thông tin của tất cả học sinh trong lớp: <br>";
foreach ($hocSinhs as $hocSinh) {
    echo "ID: " . $hocSinh['id'] . "<br>";
    echo "Họ tên: " . $hocSinh['name'] . "<br>";
    echo "Tuổi: " . $hocSinh['age'] . "<br>";
    echo "Điểm: " . $hocSinh['grade'] . "<br><br>";
}
$hocSinhDiemCaoNhat = hoc_sinh_diem_cao_nhat($hocSinhs);
echo "Học sinh có điểm cao nhất là: <br>";
echo "ID: " . $hocSinhDiemCaoNhat['id'] . "<br>";
echo "Họ tên: " . $hocSinhDiemCaoNhat['name'] . "<br>";
echo "Tuổi: " . $hocSinhDiemCaoNhat['age'] . "<br>";
echo "Điểm: " . $hocSinhDiemCaoNhat['grade'] . "<br>";
//
?>