<?php
// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myform";

// إستقبال البيانات القادمة من الأزرار في صفحة index.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = $_POST['forward'];
    $v2 = $_POST['left'];
    $v3 = $_POST['stop'];
    $v4 = $_POST['right'];
    $v5 = $_POST['backward'];
    }
// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
#قم بتحديث البيانات في جدول الاتجاهات في الخلية ذات المعرف 1 بقيمة المتغير للزر ذو الاتجاه الامامي

$update = "update directions set value= '$v1' where id=1";
#تحقق من تحديث البيانات بنجاح 
if (mysqli_query($conn, $update)) {
echo "تم  ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول الاتجاهات في الخلية ذات المعرف 2 بقيمة المتغير للزر ذو الاتجاه اليسار 
$update2 = "update directions set value= '$v2' where id=2";
if (mysqli_query($conn,$update2)) {
echo " إرسال ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول الاتجاهات في الخلية ذات المعرف 3 بقيمة المتغير لزر الإيقاف 
$update3 = "update directions set value= '$v3' where id=3";
if (mysqli_query($conn, $update3)) {
echo " البيانات ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول الاتجاهات في الخلية ذات المعرف 4 بقيمة المتغير للزر ذو الاتجاه اليمين 
$update4 = "update directions set value= '$v4' where id=4";
if (mysqli_query($conn, $update4)) {
echo " بنجاح ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول الاتجاهات في الخلية ذات المعرف 5 بقيمة المتغير للزر ذو الاتجاه الخلفي
$update5 = "update directions set value= '$v5' where id=5";
if (mysqli_query($conn, $update5)) {
echo " والتحديث ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
# إنهاء الاتصال بقاعدة البيانات

?>