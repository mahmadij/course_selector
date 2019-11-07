<?php require_once('../../../private/initialize.php'); ?>
<?php 

$title='Courses';

$courses = [
    ['course_id' => '1', 'course_name' => 'C++', 'course_code' => 'IT500', 'delivery_format' => 'online'],
    ['course_id' => '2', 'course_name' => 'Java', 'course_code' => 'IT501', 'delivery_format' => 'classroom'],
    ['course_id' => '3', 'course_name' => 'Client Server', 'course_code' => 'IT502', 'delivery_format' => 'mixed'],
    ['course_id' => '4', 'course_name' => 'Networking', 'course_code' => 'IT503', 'delivery_format' => 'selfstudy']
]
?>
<?php include(COMMON_PATH.'/header.php'); ?>
<?php include(COMMON_PATH.'/navigation.php'); ?>
<div id="content">
<div class="actions">
    <a href="" class="actions">Create New Course</a>
</div>
<table>
    <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Delivery Format</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
    </tr>

    <?php foreach($courses as $course){ ?>
        <tr>
            <td><?php echo $course['course_id']; ?></td>
            <td><?php echo $course['course_name']; ?></td>
            <td><?php echo $course['course_code']; ?></td>
            <td><?php echo $course['delivery_format']; ?></td>
            <td><a href="<?php echo route_to_url('/dashboard/courses/course.php?id=' . $course['course_id'].'&name='.$course['course_name'].'&code='.$course['course_code'].'&format='.$course['delivery_format']) ?>" class="action">View</a></td>
            <td><a href="<?php echo route_to_url('/dashboard/courses/course.php?id=' . $course['course_id'].'&name='.$course['course_name'].'&code='.$course['course_code'].'&format='.$course['delivery_format']) ?>" class="action">Edit</a></td>
            <td><button>Delete</button></td>
        </tr>
    <?php } ?>
</table>
</div>

<?php include(COMMON_PATH.'/footer.php'); ?>