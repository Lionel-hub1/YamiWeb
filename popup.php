<!-- Modal -->
<div class="modal fade " id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    
        <!-- Modal content-->
        <div class="modal-content finds-body">
            <div class="modal-header">
                <h4 class="modal-title">Payments</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#payyc">Pay using Y-credits</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#buyyc">Buy Y-credits</a>
                    </li>
                </ul>
        
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="payyc" class="container tab-pane active"><br>
                        <div class="row">

                            <div class="col-sm-6">
                                <h5>Your data</h5>
                                <!--The function to calculate the amount of credits to be added-->
                                <?php
                                function ycalc($inamt){
                                    $ncred = $inamt / 2;
                                    echo $ncred;
                                }
                                ?>
                                <p>You have: 0 Y-credits</p>
                                <p>Click on <span class="text-primary">Buy Y-credits</span> to get some</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Y-credits(Yami Credits)</p>
                                <p>100Frw::50Y-credits</p>
                                <p>3 Y-credits==>2days</p>
                                <p>6 Y-credits==>4days</p>
                                <p>12 Y-credits==>8days</p>
                            </div>

                        </div>
                        
                        <div class="row">
                            <h5 class="col-sm-3">Credits to Offer:</h5>
                            <div class="col-sm-8 form-group">
                                <form action="">
                                    <div class="row">
                                        <input class="col-sm-6 form-control mr-4" type="number" name="amt" id="">
                                        <button type="submit" class="col-sm-5 btn btn-success" name="submit">Pay</button>
                                    </div>
                                    
                                </form>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <div id="buyyc" class="container tab-pane fade"><br>
                        <!-- Nav pills -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
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
                                <div class="col-sm-6">
                                    <p>Y-credits(Yami Credits)</p>
                                    <p>100Frw::50Y-credits</p>
                                    
                                </div>
                                <div class="col-sm-12 form-group">
                                    <form action="">
                                        <div class="row">
                                            <input type="number" class="col-sm-5 mr-1 form-control" name="mocash" id="" shareholder="100">
                                            <!-- place for the function -->
                                            <?php
                                            //$inamt  = $POST['mocash'];
                                            //function yvalue(){
                                            //    $creamt = $inamt / 2;
                                            //    echo $creamt;
                                            //}
                                            
                                            ?>
                                            
                                            <p class="col-sm-4 mr-1 form-control">You will receive: 50%</p>
                                            <button type="submit" class="col-sm-3 btn btn-success">Confirm</button>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                                
                                    
                            </div>
                            <div id="airtelpayy" class="container tab-pane fade"><br>
                            <div class="col-sm-6">
                                    <p>Y-credits(Yami Credits)</p>
                                    <p>100Frw::50Y-credits</p>
                                    
                                </div>
                                <div class="col-sm-12 form-group">
                                    <form action="">
                                        <div class="row">
                                            <input type="number" class="col-sm-5 mr-1 form-control" name="mocash" id="" shareholder="100">
                                            <!-- place for the function -->
                                            <?php
                                            //$inamt  = $POST['mocash'];
                                            //function yvalue(){
                                            //    $creamt = $inamt / 2;
                                            //    echo $creamt;
                                            //}
                                            
                                            ?>
                                            
                                            <p class="col-sm-4 mr-1 form-control">You will receive: 50%</p>
                                            <button type="submit" class="col-sm-3 btn btn-success">Confirm</button>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div id="ccpayy" class="container tab-pane fade"><br>
                                <form action="">
                                    <div class="row">
                                        <div class="col-sm-3">

                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="col-sm-12 form-control" name="" id="" placeholder="E-mail"><br>
                                            <input type="text" class="form-control" name="" id="" placeholder="Name on card"><br>
                                            <div class="row">
                                                
                                                <input type="date" class="col-sm-4 mr-1 ml-3 form-control" name="" id="" placeholder="MM/YY">
                                                
                                                <input type="text" class="col-sm-2 mx-1 form-control" name="" id="" placeholder="CVC">
                                                
                                                <input type="text" class="col-sm-4 ml-1 form-control" placeholder="Postal code">
                                                
                                                
                                            </div><br>
                                            <label class="col-sm-12 form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Save the card
                                            </label>
                                            <br><br>
                                            <button type="submit" class="col-sm-12 btn btn-success">Confirm</button>
                                        </div>
                                        <div class="col-sm-3">
                                            
                                        </div>
                                    </div>
                                        
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
      
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#myBtn3").click(function(){
            $("#myModal3").modal({backdrop: "static"});
        });
    });
</script>