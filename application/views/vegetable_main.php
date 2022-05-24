<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'vegetable_head.php';?>
    <body>
        <?php include 'header.php';?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <div class="containers">
            <div class="menu_way_new_for_2017">
                <ul>
                    <li>HOME <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>VEGETABLES</li>
                </ul>
            </div>

            <div class="text-new_for_2017">
                Vegetables
            </div>

            <div class="view-categories">
                <div class="column-categories ">
                    <div class="text-categories">CATEGORIES</div>
                    <div class="menu-categories-croll">
                        <div class="text-vegetable">
                            <i class="text-vegetable-1" onclick="clickMenu(id)">Vegetables </i><i class="fa fa-angle-down" aria-hidden="true"></i>
                            <ul id="vegetables">
                                <li>
                                    <i class="text-peper" onclick="clickMenu2(id)">Pepper Seeds </i><i class="fa fa-angle-down"></i>
                                    <ul id="peper">
                                        <li>New for 2017</li>
                                        <li>Hot Pepper Seeds</li>
                                    </ul>
                                </li>
                                <li>Tomato Seeds & Plants</li>
                                <li>Cucumber Seeds</li>
                                <li>Carrot Seeds</li>
                            </ul>
                        </div>
                        <div class="text-vegetable2"><i class="text-vegetable-1">Flowers</i></div>
                        <div class="text-vegetable2"><i class="text-vegetable-1">Herbs</i></div>
                        <div class="text-vegetable2"><i class="text-vegetable-1">Fruits</i></div>
                        <div class="text-vegetable2"><i class="text-vegetable-1">Organics</i></div>
                    </div>

                    <div class="text-filter">
                        FILTER BY
                    </div>
                    <div class="price">
                        <div class="text-price">Price</div>
                        <div class="input-max-min">
                            <span id="input-max"> <input type="number" id="quantity" name="quantity" placeholder="Max" min="1" max="5" /></span>
                            <span id="input-min"> <input type="number" id="quantity" name="quantity" placeholder="Min" min="1" max="5" /></span>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu3(id)"><span1> Brands </span1><i1 class="fa fa-angle-down"></i1></button>
                        </div>
                        <div id="text-brand-1">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> Botanical Interests</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> Seed Savers</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu4(id)"><span2>Organic</span2><i2 class="fa fa-angle-down"></i2></button>
                        </div>
                        <div id="text-brand-2">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> yes</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> no</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu5(id)"><span3>Day to Germinate</span3><i3 class="fa fa-angle-down"></i3></button>
                        </div>
                        <div id="text-brand-3">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">10 - 15 days</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">14 - 24days</label><br />
                            </div>
                            <div class="checkbox-3">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> 21 - 28 days</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu6(id)"><span4>Lyfe Cycle </span4><i4 class="fa fa-angle-down"></i4></button>
                        </div>
                        <div id="text-brand-4">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">Annual</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu7(id)"><span5>Days to Harvest</span5><i5 class="fa fa-angle-down"></i5></button>
                        </div>
                        <div id="text-brand-5">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> Approx. 55</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">Approx. 35</label><br />
                            </div>
                            <div class="checkbox-3">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">Approx. 60</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu8(id)"><span6>Sun</span6> <i6 class="fa fa-angle-down"></i6></button>
                        </div>
                        <div id="text-brand-6">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> Full sun</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">Part sun</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu9(id)"><span7>Heirloom</span7> <i7 class="fa fa-angle-down"></i7></button>
                        </div>
                        <div id="text-brand-7">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> yes</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1">no</label><br />
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="text-brand">
                            <button onclick="clickMenu10(id)"><span8>Mature Height </span8><i8 class="fa fa-angle-down"></i8></button>
                        </div>
                        <div id="text-brand-8">
                            <div class="checkbox-1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> 5 - 10 inches</label><br />
                            </div>
                            <div class="checkbox-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> 12 -18 inches</label><br />
                            </div>
                            <div class="checkbox-3">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                                <label for="vehicle1"> 17 - 25 inches</label><br />
                            </div>
                        </div>
                    </div>

                    <div class="button">
                        <div class="button-apply">
                            <button>APPLY</button>
                        </div>
                        <div class="button-clear">
                            <button>CLEAR</button>
                        </div>
                    </div>
                </div>

                <div class="list-product" id="product-list-sale-page-1">

                <?php  include 'products.php'  ?>



   

                </div>
            </div>
        </div>

        <?php include 'footer.php';?>
    </body>
</html>
