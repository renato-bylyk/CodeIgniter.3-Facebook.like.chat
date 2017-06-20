<div id="chatbox_Chat" class="chatbox" style="bottom: 0px; right: 10px; display: block;">
    <div class="chatboxhead" onclick="javascript:toggleChatBoxGrowth('Chat')">
        <div class="chatboxtitle">Chat</div>
        <br clear="all">
    </div>
    <div id='kouta' class="chatboxcontent" style="display : none;">
        <?php
        if (isset($session_data_user['onlineUsers'])) {
            ?> <div> <ul style="list-style-type: none; margin: 0; padding: 0;"><?php
            foreach ($session_data_user['onlineUsers'] as $res) {
                if ($session_data_user['username'] != $res->username) { ?>
                    <li>
                        <a style="line-height: 32px; cursor: pointer; text-decoration: none;" href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $res->username; ?>');" rel="ignore">
                            <div style="padding-left: 1px;position: relative;">
                                <div style="float: left; height: 12px; position: relative;  width: 55px;">
                                     <?php
                                    foreach ($session_data_user['chatPhotos'] as $row1):
                                        if($res->username===$row1['username']){ ?>
                                            <img id="image<?php echo $res->username; ?>" src="<?php echo base_url(); ?>mboufos/assets/uploads/<?php echo $row1['photo']; ?>" width="32" height="32" alt="" class="img">
                                <?php   }
                                    endforeach;?>
                                </div>
                                <div style="overflow: hidden; padding-left: 8px; text-overflow: ellipsis; white-space: nowrap; padding-top: 6px;">
                                    <?php echo $res->username; ?>

                                    <div style="float: right; margin: 0 1px 0 4px; text-align: right;">
                                        <div class="_568z">
                                            <span id="<?php echo $res->username; ?>" style="background: <?php if ($res->is_online == 1) echo 'rgb(66, 183, 42)';  else echo 'red'; ?>; border-radius: 50%;display: inline-block;height: 6px;margin-left: 4px;width: 6px;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
              <?php }
                } // end foreach loop\
                ?></ul> </div> <?php
            }else{ echo "Nothing to load"; } // end if condition
            ?>
    </div>
</div>
