<?php /* Smarty version Smarty-3.0.4, created on 2012-02-16 17:35:59
         compiled from "./templates/stickynotes.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:13658049024f3d84cf813b87-16524392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04b375aea2ca749dd637d2009309ebb8bdee47a0' => 
    array (
      0 => './templates/stickynotes.tpl.html',
      1 => 1329097001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13658049024f3d84cf813b87-16524392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script language="javascript" type="text/javascript" src="include/jquery-1.6.4.js"></script>
<script language="javascript" type="text/javascript" src="include/jquery-sticky-notes/script/jquery-ui-1.7.2.custom.min.js"></script>
<script language="javascript" type="text/javascript" src="include/jquery-sticky-notes/script/jquery.stickynotes.js"></script>
<link rel="stylesheet" href="include/jquery-sticky-notes/css/jquery.stickynotes.css" type="text/css">
<script type="text/javascript" language="javascript">
 $(document).ready(function() {
			var edited = function(note) {
			}
			var created = function(note) {
			}
			
			var deleted = function(note) {
			}
			
			var moved = function(note) {
			}	
			
			var resized = function(note) {
			}
			 
	var options = {
		notes:[{
			"id":1,
			"pos_x": 50,
			"pos_y": 50,
			"width": 400,
			"height": 500,
		}]
					,resizable: true
					,controls: true 
					,editCallback: edited
					,createCallback: created
					,deleteCallback: deleted
					,moveCallback: moved					
					,resizeCallback: resized					
	};				
	$('#notes').stickyNotes();
 });
</script>
<div id="notes" style="width: 1000px; height: 600px"> </div>
