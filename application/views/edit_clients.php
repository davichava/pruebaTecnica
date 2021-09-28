<div class="container">
  <form action="<?php echo base_url().'/create_clients/updateClients?id=' . $client->id ?>" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" id="name" value="<?php echo $client->name ?>" name="name" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Lastname</label>
      <input type="text" id="lastname" value="<?php echo $client->lastname ?>" name="lastname" class="form-control" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">email</label>
      <input type="email" id="email" value="<?php echo $client->email ?>" name="email" class="form-control" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">identification</label>
      <input type="text" id="identification" value="<?php echo $client->identification ?>" name="identification" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

