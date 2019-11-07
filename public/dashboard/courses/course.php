<?php require_once('../../../private/initialize.php'); ?>
<?php
$id=isset($_GET['id']) ? $_GET['id'] : '';
$name=isset($_GET['name']) ? $_GET['name'] : '';
$code=$_GET['code'] ?? '';
$format=$_GET['format'] ?? '';
?>
<?php $title=$_GET['name'] ?? 'Please Enter new Course'  ?>

<?php include(COMMON_PATH.'/header.php'); ?>
<?php include(COMMON_PATH.'/navigation.php'); ?>
<div id="content">
<div class="actions">
    <button>Create New Course</button>
</div>

<body>
    <div class="content">
        <form action="">
            ID: <input type="text" id="id" value="<?php echo $id ?>"/><br/>
            Name: <input type="text" id="Name" value="<?php echo $name ?>"/><br/>
            Code: <input type="text" id="id" value="<?php echo $code ?>"/><br/>
            Format: <input type="text" id="id" value="<?php echo $format ?>"/><br/>
            <input type="submit" value="Add/Edit"/>
        </form>
    </div>
</body>



<?php include(COMMON_PATH.'/footer.php'); ?>