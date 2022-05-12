<style type="text/css">
 
  .secondrow > .row {
     border: 1px solid #ddd;
    /*padding: 5px 30px;*/
    text-align: center; 
    margin: 20px;
    min-height: 50px;
     border-radius: 50%;
  }
  .imgstretch{ 
    padding: 10px 30px;
  }
  .imgstretch img {
    width: 100%;
    height: 100px;
    object-fit: contain;
  }

 
</style>

<div class="container">
  <h3>Teacher Panel:Welcome <?php echo $_SESSION['NAME'];?></h3>
 
  <div class="row"> 
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/lesson/index.php" title="Lessons"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/lesson1.gif"> 
         </div>
         <label>Lessons</label>
        </a>
      </div>
    </div> 
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/exercises/index.php" title="Exercises"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/exercises.jpg"> 
         </div>
         <label>Exercises</label>
        </a>
      </div>
    </div> 
  </div>
    <div class="row">
       <?php if($_SESSION['TYPE']=="Administrator"){ ?>
    
  <?php } ?>
    
  </div>
  
</div>