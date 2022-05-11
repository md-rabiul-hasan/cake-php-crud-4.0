<?= $this->Form->create($student, [
  "id" => "frm-edit-branch"
]) ?>
 <h5><?= $title ?></h5>
<div class="row custom-padding">
   
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Name</label>
           <input type="text" value="<?= $student->name ?>" required class="form-control" placeholder="Name" name="name">
       </div>
   </div>
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Email</label>
           <input type="email" value="<?= $student->email ?>" required class="form-control" placeholder="email" name="email">
       </div>
   </div>
</div>
<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Phone No</label>
           <input type="text" value="<?= $student->phone_no ?>" required class="form-control" placeholder="Phone No" name="phone_no">
       </div>
   </div>
</div>


<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- Select multiple-->
       <div class="form-group">
           <button class="btn btn-primary">Submit</button>
       </div>
   </div>
</div>
  <?= $this->Form->end() ?>