
<?php
//الكود هنا
$fullname = $_POST['fullname']; //هذا الكود الخاص بتعريف مدخل الاسم بالكامل
$email = $_POST['email']; //هذا الكود الخاص بتعريف مدخل البريد الالكتروني
$country = $_POST['country']; //هذا الكود الخاص بتعريف مدخل البلد
$subject = $_POST['subject']; //هذا الكود الخاص بتعريف مدخل العنوان
$message = $_POST['message'];//هذا الكود الخاص بتعريف مدخل الرسائل
$send = "example@gmail.com";//دالة خاصة بالبريد الذي سوف يتم الارسال له
$msg .="-----بيانات المرسل-----\n";
$msg .="الاسم :".$fullname."\n";
$msg .="البريد الالكتروني".$email."\n";
$msg .="البلد".$country."\n";
$msg .="العنوان".$subject."\n";
$msg .="الرسالة".$message."\n";
$header = 'Extra-theme' . "\r\n";
mail($send,$subject,$msg,$header);
echo "<center><h3 style='color:red;'>تم ارسال الرسالة بنجاح</h3></center><br><a href='#'>الرجوع للصفحة الرئيسية</a>" ;

?>