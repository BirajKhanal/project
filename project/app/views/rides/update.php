<div>
    <?=$data['display_error']?>
</div>

<form action="<?php echo URLROOT; ?>rides/update/<?php echo $data['rides']['rideid'];?>" method="POST">

<label for="rideid"> ride id: </label>
    <input type="text" name="rideid" value="<?php echo $data['rides']['rideid']; ?>" readonly> 
    <br>

<label for="source"> source: </label> 
    <input type="text" name="source" value="<?php echo $data['rides']['source']; ?>"> 
    <br>
    
    <label for="destination"> destination: </label>
    <input type="text" name="destination" value="<?php echo $data['rides']['destination']; ?>"> 
    <br>
    
    <label for="departure"> departure: </label> 
    <input type="datetime-local" name="departure" value="<?php echo $data['rides']['departure']; ?>"> 
    <br>
    
    <label for="vehicle"> vehicle: </label> 
    <input type="text" name="vehicle" value="<?php echo $data['rides']['vehicle']; ?>"> 
    <br>
    
    <label for="seats"> seats: </label> 
    <input type="number" name="seats" value="<?php echo $data['rides']['seats']; ?>"> 
    <br>
    
   <input type="submit" value="Update Ride">
</form>