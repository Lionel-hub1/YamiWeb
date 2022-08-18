        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#payyc">Pay using Y-credits</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#buyyc">Buy Y-credits</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="payyc" class="container tab-pane active"><br>
                <h3>Number of credits</h3>
                <input type="number" name="" id="">
                <button type="submit"></button>
            </div>
            <div id="buyyc" class="container tab-pane fade"><br>
                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#momopayy">Use MoMo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#airtelpayy">Use Aitel Money</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#ccpayy">Use Credit card</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="momopayy" class="container tab-pane active"><br>

                        <form action="">
                            <input type="number" name="" id="" shareholder="100">
                            <!-- place for the function -->
                            <?php 
                            
                            function yvalues(){

                            }
                            
                            ?>
                            <input type="text" value="<?php include 'yvalues()'?>">
                            <button type="submit"></button>

                        </form>
                        
                    </div>
                    <div id="airtelpayy" class="container tab-pane fade"><br>
                        <form action="">
                            <input type="number" name="" id="" shareholder="100">
                            <!-- place for the function -->
                            <?php 
                            
                            
                            
                            ?>
                            <input type="text" value="<?php include 'yvalues()'?>">
                            <button type="submit"></button>

                        </form>
                    </div>
                    <div id="ccpayy" class="container tab-pane fade"><br>
                        <form action="">
                            <input type="email" name="" id="">
                            <input type="text" name="" id="">
                            <div class="row">
                                <div class="col-xl-4">
                                    <input type="date" name="" id="">
                                </div>
                                <div class="col-xl-3">
                                    <input type="number" name="" id="">
                                </div>
                                <div class="col-xl-5">
                                    <input type="text">
                                </div>
                                <input type="checkbox" name="" id="">
                                <button type="submit"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>