<?php require_once('../../../private/initialize.php'); ?>
<?php
$id=$_GET['id'] ?? '';
$name=$_GET['name'] ?? '';
$user=$_GET['user'] ?? '';
$city=$_GET['city'] ?? '';
$year=$_GET['year'] ?? '';
?>
<?php $title=$_GET['name'] ?? 'Please Enter new User'  ?>
<?php include(COMMON_PATH.'/header.php'); ?>
<?php include(COMMON_PATH.'/navigation.php'); ?>
<div id="content">
<div class="actions">
    <button>Create New Course</button>
</div>
<body>
    <div id="content">
        <form action="">
            Name: <input type="text" value="<?php echo $name ?>"/><br/>
            Username <input type="text" value="<?php echo $user ?>"/><br/>
            City <input type="text" value="<?php echo $city ?>"/><br/>
            Year <input type="text" value="<?php echo $year ?>"/><br/>
        </form>
    </div>
</body>


<?php include(COMMON_PATH.'/footer.php'); ?>