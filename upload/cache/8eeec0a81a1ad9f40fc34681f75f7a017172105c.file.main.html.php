<?php /* Smarty version Smarty-3.1.15, created on 2014-01-18 18:14:25
         compiled from "/var/www/clipbucket/admin_area/styles/cb_2014/layout/main.html" */ ?>
<?php /*%%SmartyHeaderCode:2796097052da55348ec776-86679932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eeec0a81a1ad9f40fc34681f75f7a017172105c' => 
    array (
      0 => '/var/www/clipbucket/admin_area/styles/cb_2014/layout/main.html',
      1 => 1390050859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2796097052da55348ec776-86679932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52da5534b0d250_94635020',
  'variables' => 
  array (
    'row' => 0,
    'tzs' => 0,
    'tz' => 0,
    'name' => 0,
    'Cbucket' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'baseurl' => 0,
    'opt_list' => 0,
    'opt' => 0,
    'uploadOptId' => 0,
    'imageurl' => 0,
    'upload_max_size' => 0,
    'post_max_size' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52da5534b0d250_94635020')) {function content_52da5534b0d250_94635020($_smarty_tpl) {?><script language="javascript">

$(document).ready(function(){
	
	var thehash = window.location.hash.substr(9,3);
	$("#tabbed_div > div").hide();
	if(thehash=='')
	{
		display_tab('#tab_1','div_1');
	}else{
		display_tab('#tab_'+thehash,'div_'+thehash);
	}
	
	
	$('#convProfile').change(function
	(){
		var value = $("#convProfile option:selected").val();
		if(value>0)
			setVdoSettings(value);
	});
	
	function setVdoSettings(inType)
	{
		switch(inType)
		{
			default:
			{

				var convConfigs = { 
				  'video_codec': 'libx264', 
				  'audio_codec': 'libfaac' ,
				  'vrate' : '25',
				  'vbrate' : '512000',
				  'srate' : '22050',
				  'sbrate' : '128000',
				}; 
			}
			break;
			
			case '2':
			{
				var convConfigs = { 
				  'video_codec': 'flv', 
				  'audio_codec': 'libmp3lame' ,
				  'vrate' : '25',
				  'vbrate' : '512000',
				  'srate' : '22050',
				  'sbrate' : '128000',
				}; 
			}
			break;
			
			case '3':
			{
				var convConfigs = { 
				  'video_codec': 'libx264', 
				  'audio_codec': 'libfaac' ,
				  'vrate' : '30',
				  'vrate' : '30',
				  'vbrate' : '640000',
				  'srate' : '44100',
				  'sbrate' : '320000',
				}; 
			}
			break;
			
			case '4':
			{
				var convConfigs = { 
				  'video_codec': 'flv', 
				  'audio_codec': 'libmp3lame' ,
				  'vrate' : '25',
				  'vbrate' : '256000',
				  'srate' : '22050',
				  'sbrate' : '96000',
				}; 
			}
			break;
			
		}
		
		$.each(convConfigs,function(index,value){
			$('#'+index).val(value);
		});	
			
	}
	
});

</script>
<ul class="cbtab">
  <li onClick='display_tab(this,"div_1",true)' id="tab_1">Website Settings</li>
  <li onClick='display_tab(this,"div_2",true)' id="tab_2">Uploading and Conversion Settings</li>
  <li onClick='display_tab(this,"div_3",true)' id="tab_3">Display and Listing Settings</li>
  <li onClick='display_tab(this,"div_4",true)' id="tab_4">User Settings &amp; registration</li>
</ul>
<div class="clearfix"></div>

<form name="form1" method="post" action="" id="main_form">
<input name="baseurl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['baseurl'];?>
" type="hidden" />
<input name="basedir" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['baseurl'];?>
" type="hidden" />
<div id="tabbed_div">
    <div id="div_1" class="main_page_div">
      <div class="form-group">
        <label for="site_title">Website title</label>
        <input class="form-control" name="site_title" type="text" id="site_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['site_title'];?>
" size="45">
      </div>
      <div class="form-group">
        <label for="site_slogan">Website slogan</label>
        <input class="form-control" name="site_slogan" type="text" id="site_slogan" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['site_slogan'];?>
" size="45">
      </div>
      <div class="form-group">
        <label for="select">Website closed</label>
        <select class="form-control" name="closed" id="select">
          <option value="1"  
          <?php if ($_smarty_tpl->tpl_vars['row']->value['closed']==1) {?>
          selected="selected"
          <?php }?>
          >Yes</option>
          <option value="0"
          <?php if ($_smarty_tpl->tpl_vars['row']->value['closed']==0) {?>
          selected="selected"
          <?php }?>
          >No
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="closed_msg">Closed message</label>
        <textarea class="form-control" name="closed_msg" id="closed_msg" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed_msg'];?>
</textarea>
      </div>
      <div class="form-group">
        <label for="description">Meta Description</label>
        <textarea class="form-control" name="description" id="description" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
      </div>
      <div class="form-group">
        <label for="keywords">Meta Keywords</label>
        <input class="form-control" name="keywords" type="text" id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
" size="45" /></td>
      </div>
      <div class="form-group">
        <label for="select2">SEO Urls</label>
        <select class="form-control" name="seo" id="select2">
          <option value="yes"
          <?php if ($_smarty_tpl->tpl_vars['row']->value['seo']=='yes') {?>
          selected="selected"
          <?php }?>
          >Yes
          </option>
          <option value="no"
          <?php if ($_smarty_tpl->tpl_vars['row']->value['seo']=='no') {?>
          selected="selected"
          <?php }?>
          >No
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="allow_template_change">Allow template change</label>
        <select class="form-control" name="allow_template_change" id="allow_template_change">
        <option value="1"  
        <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_template_change']==1) {?>
        selected="selected"
        <?php }?>
        >Yes</option>
        <option value="0"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_template_change']==0) {?>
        selected="selected"
        <?php }?>
        >No</option>
        </select>
      </div>
      <div class="form-group">
        <label for="allow_language_change">Allow language change</label>
        <select class="form-control" name="allow_language_change" id="allow_language_change">
        <option value="1"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_language_change']==1) {?>
        selected="selected"
        <?php }?>
        >Yes</option>
        <option value="0"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_language_change']==0) {?>
        selected="selected"
        <?php }?>
        >No</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date_format">Date Format</label>
        <input class="form-control" name="date_format" type="text" id="date_format" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date_format'];?>
" size="45" />
      </div>
      <div class="form-group">
        <label for="default_time_zone">Default time zone</label>
        <select class="form-control" name="default_time_zone" id="default_time_zone">
        
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tzs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['tz']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['default_time_zone']==$_smarty_tpl->tpl_vars['tz']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
        <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="default_country_iso2">Default Country</label>
        <select class="form-control" name="default_country_iso2" id="default_country_iso2">
        <?php if (isset($_smarty_tpl->tpl_vars['countries'])) {$_smarty_tpl->tpl_vars['countries'] = clone $_smarty_tpl->tpl_vars['countries'];
$_smarty_tpl->tpl_vars['countries']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'); $_smarty_tpl->tpl_vars['countries']->nocache = null; $_smarty_tpl->tpl_vars['countries']->scope = 0;
} else $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
          <option  <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['row']->value['default_country_iso2']) {?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
              <?php echo $_smarty_tpl->tpl_vars['country']->value;?>

            </option>
        <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="use_subs">Use Sub-Categories</label>
        <select class="form-control" name="use_subs" id="use_subs">
        <option value="1"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['use_subs']==1) {?>
        selected="selected"
        <?php }?>
        >Yes</option>
        <option value="0"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['use_subs']==0) {?>
        selected="selected"
        <?php }?>
        >No</option>
        </select>
      </div>
      <div class="form-group">
        <label for="show_collapsed_checkboxes">Collpase Category Checkboxes</label>
        <select class="form-control" name="show_collapsed_checkboxes" id="show_collapsed_checkboxes">
        <option value="1"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['show_collapsed_checkboxes']==1) {?>
        selected="selected"
        <?php }?>
        >Yes</option>
        <option value="0"
        <?php if ($_smarty_tpl->tpl_vars['row']->value['show_collapsed_checkboxes']==0) {?>
        selected="selected"
        <?php }?>
        >No</option>
        </select>
          <span class="smallText" style="font-size:11px;">If selected <strong>YES</strong>, Categories shown while uploading <strong>video</strong> will be collapsed.</span>
      </div>

      <div class="title"><h2>Emails</h2></div>

      <div class="form-group">
        <label for="website_email">Website Email</label>
        <input class="form-control" name="website_email" type="text" id="website_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website_email'];?>
" size="45" />
      </div>
      <div class="form-group">
        <label for="support_email">Support Email</label>
        <input class="form-control" name="support_email" type="text" id="support_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['support_email'];?>
" size="45" />
      </div>
      <div class="form-group">
        <label for="welcome_email">Welcome Email</label>
        <input class="form-control" name="welcome_email" type="text" id="welcome_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['welcome_email'];?>
" size="45" />
      </div>
      <div class="form-group">
        <label for="send_comment_notification">Send Comment Notification</label>
        <select class="form-control" name="send_comment_notification" id="send_comment_notification">
          <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['send_comment_notification']=='yes') {?> selected="selected"<?php }?>>Yes</option>
          <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['send_comment_notification']=='no') {?> selected="selected"<?php }?>>No</option>
        </select>
      </div>
      <div class="form-group">
        <label for="approve_video_notification">Send Video Approve Notification</label>
        <select class="form-control" name="approve_video_notification" id="approve_video_notification">
          <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['approve_video_notification']=='yes') {?> selected="selected"<?php }?>>Yes</option>
          <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['approve_video_notification']=='no') {?> selected="selected"<?php }?>>No</option>
        </select>
      </div>

      <div class="title"><h2>Comments</h2></div>

      <div class="form-group">
        <div class="checkbox">
          <label>
            <input class="form-control" name="video_comments" type="checkbox" id="video_comments" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_comments']=='1') {?>checked="checked"<?php }?> />
            Allow video comments
          </label>
        </div>
      </div>
      <div class="form-group">
        <label><input name="channel_comments" type="checkbox" id="channel_comments" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['channel_comments']=='1') {?>checked="checked"<?php }?> /> Allow channel comments</label>
      </div>
      <div class="form-group">
        <label>
          <input name="anonym_comments" type="checkbox" id="anonym_comments" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['anonym_comments']=='yes') {?>checked<?php }?> /> Allow guests to comment
        </label>
      </div>
      <div class="form-group">
        <label for="max_comment_chr">Maximum Comment Characters</label>
        <input class="form-control" name="max_comment_chr" type="text" id="max_comment_chr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_comment_chr'];?>
" size="15" maxlength="5" />
      </div>
      <div class="form-group">
        <label>
          <input name="comment_rating" type="checkbox" id="comment_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['comment_rating']=='1') {?>checked="checked"<?php }?> /> Allow comments rating
        </label>
      </div>
      <div class="form-group">
        <label for="comments_captha">Comments captcha</label>
        <div class="radio">
          <label>
            <input type="radio" name="comments_captcha" value="all" id="comments_captcha_0" 
            <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='all') {?> checked="checked"<?php }?> />
            For Everyone
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="comments_captcha" value="guests" id="comments_captcha_1"
            <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='guests') {?> checked="checked"<?php }?> />
            For Guests Only
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="comments_captcha" value="none" id="comments_captcha_2" 
            <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='none') {?> checked="checked"<?php }?> />
            Disable
          </label>
        </div>
      </div>




        <fieldset class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
            
            <tr>
              <td>Comments Captcha</td>
              <td><p>
                <label>
                  
                
                
                <br />
              </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td colspan="2" valign="top" class="settings_inner_title">Videos</td>
            </tr>
            <tr>
              <td>Enable video section</td>
              <td><label for="videosSection"></label>
                <select name="videosSection" id="videosSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['videosSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['videosSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td>Enable facebook embed</td>
              <td><label for="facebook_embed"></label>
                <select name="facebook_embed" id="facebook_embed">
                   <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['facebook_embed']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['facebook_embed']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td><label for="video_embed">Allow video embedding</label></td>
              <td><input name="video_embed" type="checkbox" id="video_embed" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_embed']=='1') {?> checked="checked"<?php }?> /></td>
            </tr>
            <tr>
              <td><labe for="video_download">Allow video download</labe></td>
              <td><input name="video_download" type="checkbox" id="video_download" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_download']=='1') {?>checked="checked"<?php }?> /></td>
            </tr>
            <tr>
              <td>Max categories for each video</td>
              <td><input name="video_categories" type="text" id="php_path8" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['video_categories'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Category <label for="vid_cat_width">width</label> x <label for="vid_cat_height">height </label></td>
              <td>
              <input type="text" name="vid_cat_width" id="vid_cat_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vid_cat_width'];?>
" />
              x
             
              <input type="text" name="vid_cat_height" id="vid_cat_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vid_cat_height'];?>
"/></td>
            </tr>
            <tr>
              <td>Embed type</td>
              <td><label for="embed_type"></label>
                <select name="embed_type" id="embed_type">
                  <option value="iframe" <?php if ($_smarty_tpl->tpl_vars['row']->value['embed_type']=='iframe') {?> selected="selected"<?php }?>>Iframe</option>
                  <option value="embed_object" <?php if ($_smarty_tpl->tpl_vars['row']->value['embed_type']=='embed_object') {?> selected="selected"<?php }?>>Embed object</option>
              </select></td>
            </tr>
            <tr>
              <td>Seo video url pattern</td>
              <td>
                <label>
                  <input type="radio" name="seo_vido_url" value="0" id="seo_vido_url_0"
                   <?php if (!$_smarty_tpl->tpl_vars['row']->value['seo_vido_url']||$_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==0) {?> checked="checked"<?php }?>	 />
                  <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/ABCDXYZ/video-title</label>
                <br />
                <label>
                  <input type="radio" name="seo_vido_url" value="1" id="seo_vido_url_1"
                   <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==1) {?> checked="checked"<?php }?>/>
                  <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video-title-v123</label>
                <br />
                <label>
                  <input type="radio" name="seo_vido_url" value="2" id="seo_vido_url_2"
                   <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==2) {?> checked="checked"<?php }?>/>
                  <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/123/video-title</label>
               <br />
                <label>
                  <input type="radio" name="seo_vido_url" value="3" id="seo_vido_url_3"
                   <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==3) {?> checked="checked"<?php }?>/>
                  <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/123_video-title</label>
                </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" valign="top" class="settings_inner_title">Channels</td>
            </tr>
            <tr>
              <td>Enable channels</td>
              <td><label for="channelsSection"></label>
                <select name="channelsSection" id="channelsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['channelsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['channelsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" class="settings_inner_title">Groups</td>
            </tr>
            <tr>
              <td>Enable group section</td>
              <td><label for="groupsSection"></label>
                <select name="groupsSection" id="groupsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['groupsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['groupsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td>Group Thumb Height</td>
              <td><input name="grp_thumb_height" type="text" id="grp_thumb_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_thumb_height'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Group Thumb Width</td>
              <td><input name="grp_thumb_width" type="text" id="grp_thumb_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_thumb_width'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Group Max Title</td>
              <td><input name="grp_max_title" type="text" id="grp_max_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_max_title'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Group Max Description</td>
              <td><input name="grp_max_desc" type="text" id="grp_max_desc" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_max_desc'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Max group topic name </td>
              <td><input name="max_topic_title" type="text" id="max_topic_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_topic_title'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Max group topic content</td>
              <td><input name="max_topic_length" type="text" id="max_topic_length" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_topic_length'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>Max categories for each group</td>
              <td><input name="grp_categories" type="text" id="grp_categories" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_categories'];?>
" size="15" maxlength="5" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" valign="top" class="settings_inner_title">Photos</td>
            </tr>
            <tr>
              <td>Enable photos</td>
              <td><label for="photosSection"></label>
                <select name="photosSection" id="photosSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['photosSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['photosSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" class="settings_inner_title">General</td>
            </tr>
            <tr>
              <td>Enable Collections</td>
              <td><label for="collectionsSection"></label>
                <select name="collectionsSection" id="collectionsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select></td>
            </tr>
            <tr>
              <td colspan="2"><input name="video_rating" type="checkbox" id="video_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_rating']=='1') {?>checked="checked"<?php }?> />
                Allow  videos ratings
                
              - 
                  <input name="own_video_rating" type="checkbox" id="own_video_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_video_rating']=='1') {?>checked="checked"<?php }?> />
              Allow user to rate own videos </td>
            </tr>
            <tr>
              <td colspan="2"><input name="collection_rating" type="checkbox" id="collection_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['collection_rating']=='1') {?>checked="checked"<?php }?> />
                Allow collection ratings
                
                - 
                  <input name="own_collection_rating" type="checkbox" id="own_collection_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_collection_rating']=='1') {?>checked="checked"<?php }?> />
                Allow user to rate own collections </td>
            </tr>
            <tr>
              <td colspan="2"><input name="channel_rating" type="checkbox" id="channel_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['channel_rating']=='1') {?>checked="checked"<?php }?> />
                Allow channel ratings
                 
                - 
                  <input name="own_channel_rating" type="checkbox" id="own_channel_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_channel_rating']=='1') {?>checked="checked"<?php }?> />
                Allow users to rate own channels </td>
            </tr>
        </table>
</fieldset>
  </div>
    
    <div id="div_2" class="main_page_div">
      <fieldset  class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
        <tr>
          <td valign="top">Upoad Options</td>
          <td valign="top"> 	
    <?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
		<label><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['uploadOptId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?> checked="checked"<?php }?> value="yes"/><?php echo $_smarty_tpl->tpl_vars['opt']->value['title'];?>
</label>
	<?php } ?>
    </td>
        </tr>
        <tr>
          <td valign="top">Use Crons</td>
          <td valign="top">
            <label>
              <input type="radio" name="use_crons" value="yes" id="use_crons_0" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_crons']=='yes') {?> checked="checked"<?php }?> />
              Yes</label>
          
            <label>
              <input type="radio" name="use_crons" value="no" id="use_crons_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_crons']=='no') {?> checked="checked"<?php }?> />
              No</label>
            </td>
        </tr>
        <tr>
          <td width="200" valign="top">FFMPEG Path</td>
          <td valign="top"><input name="ffmpegpath" type="text" id="ffmpegpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ffmpegpath'];?>
" size="45" />
          <a href="http://docs.clip-bucket.com/clipbucket-docs/ffmpeg" target="_blank">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="FFMPEG Binary Paths - Click For More Details" /></a><br />
          Turn on VF
<label>
                <input type="radio" name="use_ffmpeg_vf" value="yes" id="use_ffmpeg_vf_0" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_ffmpeg_vf']=='yes') {?> checked<?php }?> />
              Yes</label>
              <label>
                <input type="radio" name="use_ffmpeg_vf" value="no" id="use_ffmpeg_vf_1"  <?php if ($_smarty_tpl->tpl_vars['row']->value['use_ffmpeg_vf']=='no') {?> checked<?php }?>/>
                No</label> 
              <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="In latest releases of FFMPEG (greator than 20000) Pad flag has been changed from pad* to vf , if your ffmpeg is greator than r20000 please check YES " /></a></td>
        </tr>
        <tr>
          <td valign="top">PHP Path</td>
          <td valign="top"><input name="php_path" type="text" id="php_path" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['php_path'];?>
" size="45" />
          <a href="http://docs.clip-bucket.com/clipbucket-docs/php" target="_blank">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="PHP Binary Paths - Click For More Details" /></a></td>
        </tr>
        <tr>
          <td valign="top">MP4Box Path</td>
          <td valign="top"><input name="mp4boxpath" type="text" id="mp4boxpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mp4boxpath'];?>
" size="45" />
          <a href="http://docs.clip-bucket.com/clipbucket-docs/mp4box" target="_blank">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="MP4Box Binary Paths - Click For More Details" /></a></td>
        </tr>
        <tr>
          <td valign="top">Flvtool2  Path</td>
          <td valign="top"><input name="flvtool2path" type="text" id="flvtool2path" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['flvtool2path'];?>
" size="45" />
          <a href="http://docs.clip-bucket.com/clipbucket-docs/flvtool2" target="_blank">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="FLVTool2 Binary Paths - Click For More Details" /></a></td>
        </tr>
        <tr>
          <td valign="top">Mplayer Path</td>
          <td valign="top"><input name="mplayerpath" type="text" id="mplayerpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mplayerpath'];?>
" size="45" />
            <a href="http://docs.clip-bucket.com/clipbucket-docs/mplayer" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="" border="0" class="tipsy_tip" title="MPlayer - Highly efficient library for generating thumbs from a video" /></a></td>
        </tr>
        <tr>
          <td valign="top">Flvtool++ Path</td>
          <td valign="top"><input name="flvtoolpp" type="text" id="flvtoolpp" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['flvtoolpp'];?>
" size="45" />
          <a href="http://docs.clip-bucket.com/clipbucket-docs/mplayer" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="" border="0" class="tipsy_tip" title="FLVTool++ - Flv Meta Data Injector from Facebook, flvtool2 can take upto an hour which flvtool++ can do it in minutes, or sometimes seconds" /></a></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">Turn on Quick Conversion</td>
          <td valign="top">
              <input type="checkbox" name="quick_conv" id="quick_conv" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['quick_conv']=='yes') {?> checked="checked"<?php }?>/>
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="" border="0" class="tipsy_tip" title="If you check this option, videos will be converted as soon as uploading is complete, make sure your php path is correct before enabling this option otherwise may cause your website inaccessible" /></a></td>
        </tr>
        <tr>
          <td valign="top">Server Friendly Conversion</td>
          <td valign="top">
            <input type="checkbox" name="server_friendly_conversion" id="server_friendly_conversion" <?php if ($_smarty_tpl->tpl_vars['row']->value['server_friendly_conversion']=='yes') {?> checked="checked"<?php }?> value="yes"/>
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="" border="0" class="tipsy_tip" title="If you enable this option then sever will process 1 video at a time, once it is finished, it will start processing new video" /></a></td>
        </tr>
        <tr>
          <td valign="top">Max Video Processes at once</td>
          <td valign="top"><input name="max_conversion" type="text" id="max_conversion" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_conversion'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td valign="top">Max time wait after max processes</td>
          <td valign="top"><input name="max_time_wait" type="text" id="max_time_wait" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_time_wait'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">Allowed extensions</td>
          <td valign="top"><label>
            <textarea name="allowed_types" id="allowed_types" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['allowed_types'];?>
</textarea>
            <br />
            Sperate by comma [case insensitive]</label></td>
        </tr>
        <tr>
          <td valign="top">Max upload file size</td>
          <td><input name="max_upload_size" type="text" id="max_upload_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_upload_size'];?>
" size="15" maxlength="5" /> 
      in MegaBytes <br />
      Default PHP Max Upload size is <strong><?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</strong> and Post max size is <strong><?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</strong>, if you set max upload file size larger than this, it will be override by default, however, if set lower than default, it will work fine.</td>
        </tr>
        <tr>
          <td>Max upload duration</td>
          <td><input name="max_video_duration" type="text" id="max_video_duration" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_duration'];?>
" size="15" maxlength="5" /> 
            in minutes</td>
        </tr>
        <tr>
          <td>Save original file </td>
          <td><input name="keep_original" type="checkbox" id="keep_original" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['keep_original']) {?> checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td>Mp4 HQ Output</td>
          <td><input name="hq_output" type="checkbox" id="hq_output" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['hq_output']) {?> checked="checked"<?php }?> />
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="" border="0" class="tipsy_tip" title="if enabled, ClipBucket will generate Highh Quality mp4 video if possible" /></a></td>
        </tr>
        <tr>
          <td>Keep Mp4 As Is</td>
          <td><input name="keep_mp4_as_is" type="checkbox" id="keep_mp4_as_is" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['keep_mp4_as_is']) {?> checked="checked"<?php }?> />
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="if enabled, ClipBucket will keep mp4 vieo as is and will be playable as HQ video" /></a></td>
        </tr>
        <tr>
          <td>Activation required</td>
          <td><input name="activation" type="checkbox" id="activation" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['activation']==1) {?> checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">Video Upload Form Settings</td>
        </tr>
        <tr>
          <td>Min - Max Video title</td>
          <td><input name="min_video_title" type="text" id="min_video_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_title'];?>
" size="20" />
            -
            <input name="max_video_title" type="text" id="max_video_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_title'];?>
" size="20" /></td>
        </tr>
        <tr>
          <td>Min - Max Video Description</td>
          <td><input name="min_video_desc" type="text" id="min_video_desc" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_desc'];?>
" size="20" />
-
  <input name="max_video_desc" type="text" id="php_path5" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_desc'];?>
" size="20" /></td>
        </tr>
        <tr>
          <td>Min - Max Video Tags</td>
          <td><input name="min_video_tags" type="text" id="php_path6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_tags'];?>
" size="20" />
-
  <input name="max_video_tags" type="text" id="php_path7" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_tags'];?>
" size="20" /></td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">Conversion Settings</td>
        </tr>
        <tr>
          <td>Normal video resolution</td>
          <td><label for="convProfile"></label>
            <label for="normal_resolution"></label>
            <select name="normal_resolution" id="normal_resolution">
              <option value="240" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='240') {?> selected="selected"<?php }?>>240p</option>
              <option value="320" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='320') {?> selected="selected"<?php }?>>320p</option>
              <option value="480" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='480') {?> selected="selected"<?php }?>>480p</option>
            </select>
            <label for="high_resolution"></label></td>
        </tr>
        <tr>
          <td>HQ video resolution</td>
          <td><select name="high_resolution" id="high_resolution">
            <option value="720" <?php if ($_smarty_tpl->tpl_vars['row']->value['high_resolution']=='720') {?> selected="selected"<?php }?>>720p</option>
              <option value="1080" <?php if ($_smarty_tpl->tpl_vars['row']->value['high_resolution']=='1080') {?> selected="selected"<?php }?>>1080p</option>
          </select></td>
        </tr>
        <tr>
          <td>Thumb Width</td>
          <td><input name="thumb_width" type="text" id="thumb_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb_width'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Thumb Height</td>
          <td><input name="thumb_height" type="text" id="thumb_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb_height'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Number of thumbs</td>
          <td><input name="num_thumbs" type="text" id="num_thumbs" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['num_thumbs'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Big Thumb Width</td>
          <td><input name="big_thumb_width" type="text" id="big_thumb_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['big_thumb_width'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Big Thumb Height</td>
          <td><input name="big_thumb_height" type="text" id="big_thumb_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['big_thumb_height'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">Change only if you have good knowledge of video conversion <a href="http://docs.clip-bucket.com/clipbucket-docs/video-conversion-settings" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="Video Conversion Info - Click For More Details" /></a></td>
        </tr>
        <tr>
          <td>Select profile</td>
          <td><label for="convProfile"></label>
            <select name="convProfile" id="convProfile">
              <option selected="selected" value="0">Choose from list</option>
              <option value="1">H.264, AAC - Youtube like</option>
              <option value="3">High Configurations with H264</option>
              <option value="2">Normal Configurations</option>
              <option value="4">Low Configurations</option>
            </select></td>
        </tr>
        <tr>
          <td>Video Codec</td>
          <td><input name="video_codec" type="text" id="video_codec" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['video_codec'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Audio Codec</td>
          <td><input name="audio_codec" type="text" id="audio_codec" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['audio_codec'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Video Rate</td>
          <td><input name="vrate" type="text" id="vrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vrate'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Video Bitrate</td>
          <td><input name="vbrate" type="text" id="vbrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vbrate'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Audio Rate</td>
          <td><input name="srate" type="text" id="srate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['srate'];?>
" size="45" /></td>
        </tr>
        <tr>
          <td>Audio Bitrate</td>
          <td><input name="sbrate" type="text" id="sbrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sbrate'];?>
" size="45" /></td>
        </tr>
        
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
</fieldset>
</div>
    
    <div id="div_3" class="main_page_div" ><fieldset  class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
        <tr>
          <td width="200" valign="top">Current Template</td>
          <td valign="top"><a href="templates.php">manage templates</a></td>
        </tr>
        <tr>
          <td valign="top">Current FLV Player</td>
          <td valign="top"><a href="manage_players.php">manage flv players</a></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" valign="top">Main Settings</td>
          </tr>
        <tr>
          <td valign="top">Use cached pagination</td>
          <td valign="top"><select name="use_cached_pagin" id="use_cached_pagin">
            <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_cached_pagin']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
            <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_cached_pagin']!='yes') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top">Pagination chaching time</td>
          <td valign="top"><input name="cached_pagin_time" type="text" id="cached_pagin_time" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cached_pagin_time'];?>
" size="45" /> 
            in minutes</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">Videos Listing</td>
        </tr>
        <tr>
          <td>Videos Page</td>
          <td><input name="videos_list_per_page" type="text" id="videos_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_list_per_page'];?>
" size="6" maxlength="3" /> 
          - 'videos' page </td>
        </tr>
        <tr>
          <td>Channel Page</td>
          <td><input name="videos_item_channel_page" type="text" id="videos_item_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_item_channel_page'];?>
" size="6" maxlength="3" />
          - 'view channel' page</td>
        </tr>
        <tr>
          <td>User Videos</td>
          <td><input name="videos_items_uvid_page" type="text" id="videos_items_uvid_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_uvid_page'];?>
" size="6" maxlength="3" /> 
          - 'user videos' page</td>
        </tr>
        <tr>
          <td>User Favorite</td>
          <td><input name="videos_items_ufav_page" type="text" id="videos_items_ufav_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_ufav_page'];?>
" size="6" maxlength="3" />
          - 'user favorits' page</td>
        </tr>
        <tr>
          <td>Group Page</td>
          <td><input name="videos_items_grp_page" type="text" id="videos_items_grp_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_grp_page'];?>
" size="6" maxlength="3" /> 
          - videos display in view group page</td>
        </tr>
        <tr>
          <td>Home Tabs</td>
          <td><input name="videos_items_hme_page" type="text" id="videos_items_hme_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_hme_page'];?>
" size="6" maxlength="3" /> 
          - videos display in home tab</td>
        </tr>
        <tr>
          <td>Search Page</td>
          <td><input name="videos_items_search_page" type="text" id="videos_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_search_page'];?>
" size="6" maxlength="3" /> 
          - videos display in search page</td>
        </tr>
        <tr>
          <td>Video Columns</td>
          <td><input name="videos_items_columns" type="text" id="videos_items_columns" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_columns'];?>
" size="6" maxlength="3" /> 
          - videos display in right columns ie (Random, Related etc)</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
 
        <tr>
          <td colspan="2" class="settings_inner_title">Photos Listing</td>
        </tr>
		<tr>
          <td><label for="photo_main_list">Main Limit</label></td>
          <td><input name="photo_main_list" type="text" id="photo_main_list" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_main_list'];?>
" size="6" maxlength="3" /> <span class="">We use this limit in most of place where photo is displayed like, My Account, Manage Photos, Manage Favotires Photos etc.</span></td>
        </tr>         
		<tr>
          <td><label for="photo_home_tabs">Home Tabs</label></td>
          <td><input name="photo_home_tabs" type="text" id="photo_home_tabs" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_home_tabs'];?>
" size="6" maxlength="3" /> <span class="">Number of photos to display on Homepage.</span></td>
        </tr>
		<tr>
          <td><label for="photo_search_result">Search Result</label></td>
          <td><input name="photo_search_result" type="text" id="photo_search_result" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_search_result'];?>
" size="6" maxlength="3" /> <span class="">Number of photos to display on Search page.</span></td>
        </tr>
        <tr>
          <td><label for="photo_channel_page">Channel Page</label></td>
          <td><input name="photo_channel_page" type="text" id="photo_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_channel_page'];?>
" size="6" maxlength="3" /> <span class="">Number of photos to display on User's page.</span></td>
        </tr>
        <tr>
          <td><label for="photo_user_photos">User photos</label></td>
          <td><input name="photo_user_photos" type="text" id="photo_user_photos" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_user_photos'];?>
" size="6" maxlength="3" /> <span class="">Number of photos to display on User's photos page.</span></td>
        </tr>
		<tr>
          <td><label for="photo_user_favorites">User favorites</label></td>
          <td><input name="photo_user_favorites" type="text" id="photo_user_favorites" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_user_favorites'];?>
" size="6" maxlength="3" /> <span class="">Number of photos to display on User's favorites page.</span></td>
        </tr>
        <tr>
          <td><label for="photo_other_limit">Other Limit</label></td>
          <td><input name="photo_other_limit" type="text" id="photo_other_limit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_other_limit'];?>
" size="6" maxlength="3" /> <span class="">Use anywhere you want.</span></td>
        </tr>                         
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="2" class="settings_inner_title">Collection Listing</td>
        </tr>        
		<tr>
          <td><label for="collection_per_page">Collection Page</label></td>
          <td><input name="collection_per_page" type="text" id="collection_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_per_page'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on Collections page.</span></td>
        </tr>

		<tr>
          <td><label for="collection_home_page">Home Page</label></td>
          <td><input name="collection_home_page" type="text" id="collection_home_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_home_page'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on Homepage.</span></td>
        </tr>
        <tr>
          <td><label for="collection_items_page">Items Page</label></td>
          <td><input name="collection_items_page" type="text" id="collection_items_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_items_page'];?>
" size="6" maxlength="3" /> <span class="">Number of items to display in a Collection.</span></td>
        </tr>
         <tr>
          <td><label for="collection_search_result">Search Result</label></td>
          <td><input name="collection_search_result" type="text" id="collection_search_result" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_search_result'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on Homepage.</span></td>
        </tr>
        <tr>
          <td><label for="collection_channel_page">Channel Page</label></td>
          <td><input name="collection_channel_page" type="text" id="collection_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_channel_page'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on Channel page.</span></td>
        </tr>
        <tr>
          <td><label for="collection_user_collections">User Collections</label></td>
          <td><input name="collection_user_collections" type="text" id="collection_user_collections" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_user_collections'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on User's collection page.</span></td>
        </tr>
        <tr>
          <td><label for="collection_user_favorites">User Favorites</label></td>
          <td><input name="collection_user_favorites" type="text" id="collection_user_favorites" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_user_favorites'];?>
" size="6" maxlength="3" /> <span class="">Number of collections to display on User's favorite page.</span></td>
        </tr>         
       <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
                
        <tr>
          <td colspan="2" class="settings_inner_title">Users Listing</td>
        </tr>
        <tr>
          <td>User list per page</td>
          <td><input name="channels_list_per_page" type="text" id="channels_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['channels_list_per_page'];?>
" size="6" maxlength="3" /> 
          - 'users' page</td>
        </tr>
        <tr>
          <td>Subscribers in channel view</td>
          <td><input name="users_items_subscibers" type="text" id="users_items_subscibers" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_subscibers'];?>
" size="6" maxlength="3" /> 
          - subscribers in view channel page</td>
        </tr>
        <tr>
          <td>Subscriptions in channel view</td>
          <td><input name="users_items_subscriptions" type="text" id="users_items_subscriptions" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_subscriptions'];?>
" size="6" maxlength="3" /> 
          - subscriptions in view channel page</td>
        </tr>
        <tr>
          <td>Users contacts in channel view</td>
          <td><input name="users_items_contacts_channel" type="text" id="users_items_contacts_channel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_contacts_channel'];?>
" size="6" maxlength="3" /> 
          - users contacts in view channel</td>
        </tr>
        <tr>
          <td>View Group Page</td>
          <td>          <input name="users_items_group_page" type="text" id="users_items_group_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_group_page'];?>
" size="6" maxlength="3" />
            - users in view group page</td>
        </tr>
        <tr>
          <td>Search Page</td>
          <td><input name="users_items_search_page" type="text" id="users_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_search_page'];?>
" size="6" maxlength="3" /> 
          - users in search page</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">Groups</td>
          </tr>
        <tr>
          <td>Groups Page</td>
          <td><input name="groups_list_per_page" type="text" id="groups_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groups_list_per_page'];?>
" size="6" maxlength="3" /> 
            - 'groups' page</td>
        </tr>
        <tr>
          <td>Search Page</td>
          <td><input name="grps_items_search_page" type="text" id="grps_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grps_items_search_page'];?>
" size="6" maxlength="3" /> 
            - groups in search page</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="settings_inner_title">General</td>
          </tr>
        <tr>
          <td>Search results per page</td>
          <td><input name="search_list_per_page" type="text" id="search_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['search_list_per_page'];?>
" size="6" maxlength="3" /> 
            - other search results</td>
        </tr>
        <tr>
          <td>Recently viewed videos</td>
          <td><input name="recently_viewed_limit" type="text" id="recently_viewed_limit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['recently_viewed_limit'];?>
" size="6" maxlength="3" /> 
            - recently viewed videos</td>
        </tr>
        <tr>
          <td>Comments per page</td>
          <td><input name="comments_per_page" type="text" id="comments_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['comments_per_page'];?>
" size="6" maxlength="3" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
</fieldset>
    </div>
    
    
    <div id="div_4" class="main_page_div" ><fieldset  class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
        <tr>
          <td valign="top">Anonymous UserID</td>
          <td valign="top"><input name="anonymous_id" type="text" id="anonymous_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['anonymous_id'];?>
" size="6" maxlength="3" />
            <a href="http://docs.clip-bucket.com/clipbucket-v2/anonymous-user" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="Set Anoymous Userid, Click For More Details" /></a></td>
        </tr>
        <tr>
          <td width="200" valign="top">Turn on registrations</td>
          <td valign="top"><input name="allow_registeration" type="checkbox" id="allow_registeration" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_registeration']=='1') {?>checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td valign="top">Email verification</td>
          <td valign="top"><input name="email_verification" type="checkbox" id="email_verification" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['email_verification']=='1') {?>checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td valign="top">Image verification (captcha)</td>
          <td valign="top"><select name="captcha_type">
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==0) {?>
          selected="selected"
          <?php }?>>No</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==1) {?>
          selected="selected"
          <?php }?>>Simple</option>
            <option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==2) {?>
          selected="selected"
          <?php }?>>Secured</option>
            </select></td>
        </tr>
        <tr>
          <td valign="top">Username maximum characters</td>
          <td valign="top"><input name="user_max_chr" type="text" id="user_max_chr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_max_chr'];?>
" size="6" maxlength="3" /></td>
        </tr>
        <tr>
          <td valign="top">Disallowed usernames</td>
          <td valign="top"><label>
            <textarea name="disallowed_usernames" id="disallowed_usernames" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['disallowed_usernames'];?>
</textarea>
            <br />
            sperate by commas
          </label></td>
        </tr>
        <tr>
          <td valign="top">Allow Special Characters in usernames</td>
          <td valign="top"><input name="allow_unicode_usernames" type="checkbox" 
          id="allow_unicode_usernames" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_unicode_usernames']=='yes') {?>checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td valign="top">Allow spaces in usernames</td>
          <td valign="top"><input name="allow_username_spaces" type="checkbox" 
          id="allow_username_spaces" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_username_spaces']=='yes') {?>checked="checked"<?php }?> /></td>
        </tr>
        <tr>
          <td valign="top">Minimum Username Length</td>
          <td valign="top"><label>
            <input name="min_username" type="text" id="min_username" value="<?php echo form_val($_smarty_tpl->tpl_vars['row']->value['min_username']);?>
" />
          </label></td>
        </tr>
        <tr>
          <td valign="top">Maximum Username Length</td>
          <td valign="top"><input name="max_username" type="text" id="max_username" value="<?php echo form_val($_smarty_tpl->tpl_vars['row']->value['max_username']);?>
" /></td>
        </tr>
        <tr>
          <td valign="top">Minimum age for registration</td>
          <td valign="top"><input name="min_age_reg" type="text" id="min_age_reg" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_age_reg'];?>
" size="6" maxlength="3" />
          leave blank to disable this option</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" valign="top" class="settings_inner_title">Profile Pictures &amp; Background</td>
          </tr>
        <tr>
          <td valign="top">Use Gravatars</td>
          <td valign="top"><label>
<select name="gravatars" id="gravatars">
<option value="yes"
<?php if ($_smarty_tpl->tpl_vars['row']->value['gravatars']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
              <option value=""
<?php if ($_smarty_tpl->tpl_vars['row']->value['gravatars']=='') {?>
selected="selected"
<?php }?>>No</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td valign="top">Max Porfile Pic Size</td>
          <td valign="top"><input name="max_profile_pic_size" type="text" id="max_profile_pic_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_profile_pic_size'];?>
" size="6" maxlength="10" /> 
            KBs           </td>
        </tr>
        <tr>
          <td valign="top">Max Porfile Pic Dimension</td>
          <td valign="top"><input name="max_profile_pic_width" type="text" id="max_profile_pic_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_profile_pic_width'];?>
" size="6" maxlength="10" />
            Pixels</td>
        </tr>
        <tr>
          <td valign="top">Allow Picture URL</td>
          <td valign="top">
<select name="picture_url" id="select4">
<option value="yes" 
<?php if ($_smarty_tpl->tpl_vars['row']->value['picture_url']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
<option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['picture_url']=='no') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top">Allow Picture Upload</td>
          <td valign="top"><select name="picture_upload" id="select5">
            <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['picture_upload']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
            <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['picture_upload']=='no') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top">Max Background Size</td>
          <td valign="top"><input name="max_bg_size" type="text" id="max_bg_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_bg_size'];?>
" size="6" maxlength="10" />
            KBs</td>
        </tr>
        <tr>
          <td valign="top">Max Background Dimension</td>
          <td valign="top"><input name="max_bg_width" type="text" id="max_bg_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_bg_width'];?>
" size="6" maxlength="10" />
            Pixels</td>
        </tr>
        <tr>
          <td valign="top">Allow Background URL</td>
          <td valign="top"><select name="background_url" id="select6">
            <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_url']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
            <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_url']=='no') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top">Allow Background Upload</td>
          <td valign="top"><select name="background_upload" id="select7">
            <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_upload']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
            <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_upload']=='no') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top">Allow Background Color</td>
          <td valign="top"><select name="background_color" id="background_color">
            <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_color']=='yes') {?>
selected="selected"
<?php }?>>Yes</option>
            <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_color']=='no') {?>
selected="selected"
<?php }?>>No</option>
          </select></td>
        </tr>
      </table>
</fieldset>
    </div>
</div>
<div align="right"class="main_page_div" style="padding:5px; min-height:0px; margin-top:10px"><label>
  <input type="submit" name="update" class="button" value="Update Settings" id="udpate" />
</label>
</div>
</form>
<?php }} ?>
