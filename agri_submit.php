<?php
include 'header.php';
?>
<div style="background-image: radial-gradient(yellow 5%, green 60%); bottom:0px;">
    <div class="row">
        <div class="col-md-9">
            <form method="post" action=""><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Product id:</label>
                    <input type="number" class="col-sm-3" placeholder="product id..." required>
                    <label class="col-sm-3 colr">Product name:</label>
                    <input type="agri" class="col-sm-3" placeholder="product name..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Production quantity:</label>
                    <input type="number" class="col-sm-3" placeholder="quantity(number)..." required>
                    <label class="col-sm-3 colr">Product demand:</label>
                    <input type="number" class="col-sm-3" placeholder="demand(number)..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Product supply:</label>
                    <input type="number" class="col-sm-3" placeholder="supply(number)..." required>
                    <label class="col-sm-3 colr">Product consumption:</label>
                    <input type="number" class="col-sm-3 " placeholder="consumption(number)..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Import quantity:</label>
                    <input type="number" class="col-sm-3" placeholder="quantity(number)..." required>
                    <label class="col-sm-3 colr">Export quantity:</label>
                    <input type="number" class="col-sm-3" placeholder="quantity(number)..." required>
                </div><br><br>
                <div class="row">
                    <label class="col-sm-3 colr">Source:</label>
                    <select type="agri" class="col-sm-3" required>
                    <option>Dhaka</option>
                    <option>Chittagong</option>
                    <option>Comilla</option>
                    <option>Rajshahi</option>  
                    <option>Sylhet</option> 
                    <option>Barisal</option>
                    <option>Mymensingh</option>
                    <option>Khulna</option>
                    <option>Rangpur</option>
                    </select>
                </div>
                <button Class="btn btn-info dn " value="Submit" name="submit" id="submit">Submit</button>
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