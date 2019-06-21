
           
            <div class="i-content listPa">
            <?php foreach($data5 as $value5){ ?>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="i-username"><?php echo $value5['HoTen']?>

                            </div>
                        </div>
                    </div>
                    <div class="clear">

                    </div>
                    <div class="i-datetime">
                        <i class="fa fa-calendar">

                        </i>22:10 21/03/2019
                    </div>
                    <p class="i-text"><?php echo $value5['NoiDung']?>
                    </p>
                    <div class="clear">

                    </div>
                    <div class="i-toolcontrol">
                        <div class="pull-right">
                            <span class="cmplus" onclick="showplus(this)">
                                <i class="fa fa-plus-circle" title="Hiển thị đầy đủ"></i>
                            </span>
                        </div>
                    </div>
                    <div class="i-reply hidden">
                        <div class="i-repname">UBND Quận Gò Vấp - Phường 12

                        </div>
                        <span class="span-reply">Đã trả lời</span>
                        <div class="i-repdatetime">
                            <i class="fa fa-calendar"></i>22:16 21/03/2019
                        </div>
                        <p class="i-reptext">Đang xác minh thực tế</p>
                        <span class="cmminus" onclick="hiddenplus(this)">
                            <i class="fa fa-minus-circle" title="Hiển thị bớt đi"></i></span>
                    </div>
                </div>
            <?php }?>
            </div>

  