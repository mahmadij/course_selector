<?php require_once('../../../private/initialize.php'); ?>
<?php $title='Users';?>
<?php
    $users=[
        ['user_id' => '1','user_fname' => 'John','user_mname' => 'L','user_lname' => 'Doe','username' => 'jdoe','user_year' => '2019', 'city'=>'Madison'],
        ['user_id' => '2','user_fname' => 'Jason','user_mname' => 'C','user_lname' => 'Doe','username'=> 'j_doe','user_year' => '2010', 'city'=>'Middleton'],
        ['user_id' => '3','user_fname' => 'Jane','user_mname' => 'M','user_lname' => 'Doe','username' => 'jndoe','user_year' => '2009', 'city'=>'Milwaukee']
    ]
?>

<?php include(COMMON_PATH.'/header.php'); ?>
<?php include(COMMON_PATH.'/navigation.php'); ?>
<div id="content">
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Year</th>
                <th>City</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo htm_safe($user['user_id']); ?></td>
                    <td><?php echo htm_safe($user['user_fname']); ?></td>
                    <td><?php echo htm_safe($user['user_mname']); ?></td>
                    <td><?php echo htm_safe($user['user_lname']); ?></td>
                    <td><?php echo htm_safe($user['username']); ?></td>
                    <td><?php echo htm_safe($user['user_year']); ?></td>
                    <td><?php echo htm_safe($user['city']); ?></td>
                    <td><a href="<?php echo route_to_url('/dashboard/users/user.php?id=' . $user['user_id'].'&name='.$user['user_fname'].' '.$user['user_lname'].'&user='.$user['username'].'&year='.$user['user_year'].'&city='.$user['city']) ?>" class="action">View</a></td>
                    <td><a href="<?php echo route_to_url('/dashboard/users/user.php?id=' . $user['user_id'].'&name='.$user['user_fname'].' '.$user['user_lname'].'&user='.$user['username'].'&year='.$user['user_year'].'&city='.$user['city']) ?>" class="action">Edit</a></td>
                    <td><button>Delete</button></td>
                </tr>

            <?php } ?>
        </table>
</div>

<?php include(COMMON_PATH.'/footer.php'); ?>