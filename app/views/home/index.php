<h3> Home Page </h3>

<ul>
    <?php foreach($data as $user)  :  ?>
        <li><?php echo $user->name; ?></li>
        <li><?php echo $user->email; ?></li>
        <hr>

    <?php endforeach;   ?>
</ul>