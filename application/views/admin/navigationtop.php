<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/userPic.png" alt="" /></a><span>Hola, <?=$logeado->name?>!</span></div>
            <div class="userNav">
                <ul>
                   <!-- <li><a href="#" title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="menu_body">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                  -->  <li><a href="/admin/main/logout" title=""><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); 
?>images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>
