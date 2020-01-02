<?php require APPROOT . '/views/inc/header.php'; ?>

<ul>
    <li><a href="<?php echo URLROOT; ?>pages"> Homepage </a></li>
    <li><a href="<?php echo URLROOT; ?>rides/add"> Add Rides </a></li>
</ul>


<?php if(sizeof($data['rides']) == 0): ?>
<p>You've not posted anything !!</p>
<?php else: ?>
<p>You've posted the following:</p>
<?php endif; ?>
<hr>
<?php foreach ($data['rides'] as $ride) : ?>
<div>
    <label for="source"> Source: <?php echo $ride->source; ?> </label> <br>
    <label for="destination"> Destination: <?php echo $ride->destination; ?> </label> <br>
    <label for="departure"> Departure: <?php echo $ride->departure; ?> </label> <br>
    <label for="vehicle"> Vehicle: <?php echo $ride->vehicle; ?> </label> <br>
    <label for="seats"> Seats Available: <?php echo $ride->seats; ?> </label> <br>

    <br>
    <div>
        Booked by:
        <br>
        <ul>
        <?php foreach($data['selected_users'][$ride->id] as $user):?>
        <li>
            <?=$user->full_name?>
        </li>
        <?php endforeach;?>
        </ul>
        
        <br>
    </div>
</div>
<br>
<a href="<?php echo URLROOT; ?>rides/delete/<?php echo $ride->id; ?>">Delete ride</a>
<a href="<?php echo URLROOT; ?>rides/update/<?php echo $ride->id; ?>">Edit ride</a>
<hr>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>