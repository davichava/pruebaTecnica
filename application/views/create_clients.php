<div class="container">
  <form name="formulario" action="<?php echo base_url() . 'create_clients/insertClients ' ?>" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" aria-describedby="emailHelp" required="require">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Lastname</label>
      <input type="text" name="lastname" class="form-control" required="require">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">email</label>
      <input type="email" name="email" class="form-control"  required="require">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">identification</label>
      <input type="number" name="identification" class="form-control" required="require">
    </div>    
    <button type="submit" id="btn" name="btn" class="btn btn-primary">Save</button>
  </form>
</div>










