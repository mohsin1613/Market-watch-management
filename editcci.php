<?php include 'header.php'; ?>
<?php
    $id=$_GET['id'];
    $query="select *from cci_information where id='$id' order by id desc";
    $result=$db->select($query);
    while($row=$result->fetch_assoc())
    {
?> <div style="background-color:lightgreen">
    <form class="form-horizontal" action="cci_dis.php">
        <div class="form-group">
            <br />
            <label class="control-label col-sm-2">Item number</label>
            <div class="col-sm-5">
                <input type="agri_id" class="form-control" value="<?php  echo $row['id'];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">CCI Information</label>
            <div class="col-sm-5">
                <input type="agri_info" class="form-control" value="<?php  echo $row['cci_info'];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Information Type</label>
            <div class="col-sm-5">
                <input type="info_type" class="form-control" value="<?php  echo $row['info_type'];?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
    </form>
    <?php } ?>
</div>

<br />
<br />
<br />
<br />
<br />
<?php include 'footer.php';?>