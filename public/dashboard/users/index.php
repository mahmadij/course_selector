<?php require_once('../../../private/initialize.php'); ?>
<?php $title='Users';
    $users=[
        ['user_id' => '1','user_name' => 'John Doe','username' => 'jdoe','user_year' => '2019', 'city'=>'Madison'],
        ['user_id' => '2','user_name' => 'Jason Doe','username'=> 'j_doe','user_year' => '2010', 'city'=>'Middleton'],
        ['user_id' => '3','user_name' => 'Jane Doe','username' => 'jndoe','user_year' => '2009', 'city'=>'Milwaukee']
    ]
?>

<?php include(COMMON_PATH.'/header.php'); ?>
<?php include(COMMON_PATH.'/navigation.php'); ?>
<div id="content">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
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
                    <td><?php echo htm_safe($user['user_name']); ?></td>
                    <td><?php echo htm_safe($user['username']); ?></td>
                    <td><?php echo htm_safe($user['user_year']); ?></td>
                    <td><?php echo htm_safe($user['city']); ?></td>
                    <td><a href="<?php echo route_to_url('/dashboard/users/user.php?id=' . $user['user_id'].'&name='.$user['use_name'].'&code='.$user['username'].'&username='.$user['username'].'&year='.$user['user_year'].'&city='.$user['city']) ?>" class="action">View</a></td>
                    <td><a href="<?php echo route_to_url('/dashboard/users/user.php?id=' . $user['user_id'].'&name='.$user['use_name'].'&code='.$user['username'].'&username='.$user['username'].'&year='.$user['user_year'].'&city='.$user['city']) ?>" class="action">Edit</a></td>
                    <td><button>Delete</button></td>
                </tr>

            <?php } ?>
        </table>
</div>

<?php include(COMMON_PATH.'/footer.php'); ?>