<?php
include 'header.php';
?>
<div style="background-image: linear-gradient(to bottom right, green, blue);">
    <div class="row">
        <div class="col-md-9">
            <form method="post" action=""><br><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Product id:</label>
                    <input type="number" class="col-sm-3" placeholder="product id..." required>
                    <label class="col-sm-3 colr">Product name:</label>
                    <input type="tcb" class="col-sm-3" placeholder="product name..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Local price:</label>
                    <input type="number" class="col-sm-3" placeholder="price(number)..." required>
                    <label class="col-sm-3 colr">International price:</label>
                    <input type="number" class="col-sm-3" placeholder="price(number)..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Export price:</label>
                    <input type="number" class="col-sm-3" placeholder="price(number)..." required>
                    <label class="col-sm-3 colr">Import price:</label>
                    <input type="number" class="col-sm-3 " placeholder="price(number)..." required>
                </div><br><br>
                <button Class="btn btn-primary dn " value="Submit" name="submit" id="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            <table class="table table-striped" style="margin-top:0px;">
                <thead class="customers">
                    <tr>
                        <th class="align">Item No</th>
                        <th class="align">Product Name</th>
                    </tr>
                </thead>
                <tbody class="customers">
                    <tr>
                        <td class="align">01</td>
                        <td class="align">Onion</td>
                    </tr>
                    <tr>
                        <td class="align">02</td>
                        <td class="align">Potato</td>
                    </tr>
                    <tr>
                        <td class="align">03</td>
                        <td class="align">Tomato</td>
                    </tr>
                    <tr>
                        <td class="align">04</td>
                        <td class="align">Oil</td>
                    </tr>
                    <tr>
                        <td class="align">05</td>
                        <td class="align">Rice</td>
                    </tr>
                    <tr>
                        <td class="align">06</td>
                        <td class="align">Wheat</td>
                    </tr>
                    <tr>
                        <td class="align">07</td>
                        <td class="align">Tea</td>
                    </tr>
                    <tr>
                        <td class="align">08</td>
                        <td class="align">Garlic</td>
                    </tr>
                    <tr>
                        <td class="align">09</td>
                        <td class="align">Ginger</td>
                    </tr>
                    <tr>
                        <td class="align">10</td>
                        <td class="align">Flour</td>
                    </tr>
                    <tr>
                        <td class="align">11</td>
                        <td class="align">Sugar</td>
                    </tr>
                    <tr>
                        <td class="align">12</td>
                        <td class="align">Fish</td>
                    </tr>
                    <tr>
                        <td class="align">13</td>
                        <td class="align">Milk</td>
                    </tr>
                    <tr>
                        <td class="align">14</td>
                        <td class="align">Banana</td>
                    </tr>
                    <tr>
                        <td class="align">15</td>
                        <td class="align">Pepper</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php
include 'footer.php'; 
?>