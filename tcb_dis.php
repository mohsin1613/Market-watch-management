<?php
include 'header.php';
?>
<?php
$db = new Database();
$query = "select *from tcb_information";
$result = $db->select($query);
?>
<div class="navbar">
    <input class="form-control" class="nav navbar-left" id="myinput" type="text" placeholder="Search...">

    <button type="button" style="float:right;" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add
        Information</button>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="customers">
        <tr>
            <th>Item</th>
            <th>TCB Information</th>
            <th>Information Type</th>
            <th>Rename</th>
        </tr>
    </thead>

    <tbody id="mytable" class="customers">
        <?php
    if ($result) {
      while ($row = $result->fetch_assoc()) {
    ?> <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['tcb_info']; ?></td>
            <td><?php echo $row['info_type']; ?></td>
            <td><a href="edittcb.php?id=<?php echo $row['id'];?><button type="button" class="btn btn-primary btn-sm"
                    id="<?php echo $row['id'];?>"><?php echo $row['Edit']; ?></button></a></td>
        </tr>
        <?php  
      }
    } else {
      echo "NOT Available the TCB distribution sheet.";
    }
    ?>
    </tbody>
</table>

<div class="modal fade bg-primary" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="text-align:center;" class="modal-title">Add information</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label style="color:green;" class="control-label col-sm-2">Item No</label>
                        <div class="col-sm-8">
                            <input type="item" class="form-control" id="item" placeholder="Enter Item number...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:green;" class="control-label col-sm-2">TCB Information</label>
                        <div class="col-sm-8">
                            <input type="cci" class="form-control" id="cci" placeholder="Enter the information...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:green;" class="control-label col-sm-2">Information Type</label>
                        <div class="col-sm-8">
                            <input type="type" class="form-control" id="type" placeholder="Enter  the information type">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
            </div>
        </div>

    </div>
</div>
<script>
$(document).ready(function() {
    $("#myinput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#mytable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<?php
include 'footer.php';
?>