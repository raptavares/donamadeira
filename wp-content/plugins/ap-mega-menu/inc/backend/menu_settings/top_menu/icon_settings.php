  <div class="settings_title"><h4><?php _e('Icon Settings',APMM_TD);?></h4></div>
  <div class="wpmm_mega_settings">
      <?php  if(isset($wpmmenu_item_meta['icons_settings']['icon_choose']) && $wpmmenu_item_meta['icons_settings']['icon_choose'] != ''){
						$attr_class = $wpmmenu_item_meta['icons_settings']['icon_choose']; 
						$style = 'display:block;';
						$check_icon = 1;
					}else{
					    $attr_class = ''; 
						$style = 'display:none;';
						$check_icon = 0;
					}
						?>

	<?php 
    $dashicons = array(
			        "blank",	// there is no "blank" but we need the option
					"menu",
					"admin-site",
					"dashboard",
					"admin-media",
					"admin-page",
					"admin-comments",
					"admin-appearance",
					"admin-plugins",
					"admin-users",
					"admin-tools",
					"admin-settings",
					"admin-network",
					"admin-generic",
					"admin-home",
					"admin-collapse",
					"admin-links",
					"format-links",
					"admin-post",
					"format-standard",
					"format-image",
					"format-gallery",
					"format-audio",
					"format-video",
					"format-chat",
					"format-status",
					"format-aside",
					"format-quote",
					"welcome-write-blog",
					"welcome-edit-page",
					"welcome-add-page",
					"welcome-view-site",
					"welcome-widgets-menus",
					"welcome-comments",
					"welcome-learn-more",
					"image-crop",
					"image-rotate-left",
					"image-rotate-right",
					"image-flip-vertical",
					"image-flip-horizontal",
					"undo",
					"redo",
					"editor-bold",
					"editor-italic",
					"editor-ul",
					"editor-ol",
					"editor-quote",
					"editor-alignleft",
					"editor-aligncenter",
					"editor-alignright",
					"editor-insertmore",
					"editor-spellcheck",
					"editor-distractionfree",
					"editor-kitchensink",
					"editor-underline",
					"editor-justify",
					"editor-textcolor",
					"editor-paste-word",
					"editor-paste-text",
					"editor-removeformatting",
					"editor-video",
					"editor-customchar",
					"editor-outdent",
					"editor-indent",
					"editor-help",
					"editor-strikethrough",
					"editor-unlink",
					"editor-rtl",
					"align-left",
					"align-right",
					"align-center",
					"align-none",
					"lock",
					"calendar",
					"visibility",
					"post-status",
					"post-trash",
					"edit",
					"trash",
					"arrow-up",
					"arrow-down",
					"arrow-left",
					"arrow-right",
					"arrow-up-alt",
					"arrow-down-alt",
					"arrow-left-alt",
					"arrow-right-alt",
					"arrow-up-alt2",
					"arrow-down-alt2",
					"arrow-left-alt2",
					"arrow-right-alt2",
					"leftright",
					"sort",
					"list-view",
					"exerpt-view",
					"share",
					"share1",
					"share-alt",
					"share-alt2",
					"twitter",
					"rss",
					"facebook",
					"facebook-alt",
					"networking",
					"googleplus",
					"hammer",
					"art",
					"migrate",
					"performance",
					"wordpress",
					"wordpress-alt",
					"pressthis",
					"update",
					"screenoptions",
					"info",
					"cart",
					"feedback",
					"cloud",
					"translation",
					"tag",
					"category",
					"yes",
					"no",
					"no-alt",
					"plus",
					"minus",
					"dismiss",
					"marker",
					"star-filled",
					"star-half",
					"star-empty",
					"flag",
					"location",
					"location-alt",
					"camera",
					"images-alt",
					"images-alt2",
					"video-alt",
					"video-alt2",
					"video-alt3",
					"vault",
					"shield",
					"shield-alt",
					"search",
					"slides",
					"analytics",
					"chart-pie",
					"chart-bar",
					"chart-line",
					"chart-area",
					"groups",
					"businessman",
					"id",
					"id-alt",
					"products",
					"awards",
					"forms",
					"portfolio",
					"book",
					"book-alt",
					"download",
					"upload",
					"backup",
					"lightbulb",
					"smiley");
$font_awesome_icons = array(
			       "blank",
				// Mail
				"inbox",
				"envelope",
				"envelope-o",
				"paperclip",
				"reply-all",
				"mail-reply-all",
				"mail-forward",
				"mail-reply",
				"reply",
				// Media
				"music",
				"film",
				"step-backward",
				"fast-backward",
				"backward",
				"play",
				"play-circle",
				"play-circle-o",
				"pause",
				"stop",
				"forward",
				"fast-forward",
				"step-forward",
				"eject",			
				"repeat",
				"refresh",
				"random",			
				"headphones",
				"volume-off",
				"volume-down",
				"volume-up",
				// Arrows
				"angle-double-left",
				"angle-double-right",
				"angle-double-up",
				"angle-double-down",
				"angle-left",
				"angle-right",
				"angle-up",
				"angle-down",
				"arrows",
				"arrow-left",
				"arrow-right",
				"arrow-up",
				"arrow-down",
				"arrows-alt",
				"arrows-v",
				"arrows-h",
				"arrow-circle-left",
				"arrow-circle-right",
				"arrow-circle-up",
				"arrow-circle-down",
				"arrow-circle-o-down",
				"arrow-circle-o-up",
				"arrow-circle-o-right",
				"arrow-circle-o-left",
				"caret-down",
				"caret-up",
				"caret-left",
				"caret-right",
				"chevron-left",
				"chevron-right",
				"chevron-up",
				"chevron-down",
				"chevron-circle-left",
				"chevron-circle-right",
				"chevron-circle-up",
				"chevron-circle-down",
				"expand",
				"compress",
				"hand-o-right",
				"hand-o-left",
				"hand-o-up",
				"hand-o-down",
				"level-up",
				"level-down",
				"long-arrow-down",
				"long-arrow-up",
				"long-arrow-left",
				"long-arrow-right",
				"rotate-right",
				"toggle-left",
				"toggle-down",
				"toggle-up",
				"toggle-right",
				// Search
				"search",
				"search-plus",
				"search-minus",
				// File Editing
				"cut",
				"crop",
				"copy",
				"paste",
				"font",
				"bold",
				"italic",
				"anchor",
				"link",
				"unlink",
				"chain-broken",
				"external-link",
				"external-link-square",
				"text-height",
				"text-width",
				"align-left",
				"align-center",
				"align-right",
				"align-justify",
				"list",
				"quote-left",
				"quote-right",
				"outdent",
				"indent",
				"undo",
				"adjust",
				"tint",
				"edit",
				"list-ul",
				"list-ol",
				"list-alt",
				"th-large",
				"th",
				"th-list",
				"strikethrough",
				"underline",
				"magic",	
				"superscript",
				"subscript",
				"eraser",			
				"pagelines",					
				// Punctuation
				"asterisk",
				"question",
				"info",
				"exclamation",
				// Emoticons
				"smile-o",
				"frown-o",
				"meh-o",
				// Math + Geometry
				"check",
				"times",
				"plus",
				"minus",
				"crosshairs",
				"spinner",
				"circle",
				"circle-o",
				"dot-circle-o",
				"minus-circle",
				"times-circle",
				"check-circle",
				"exclamation-circle",
				"question-circle",
				"info-circle",
				"plus-circle",
				"plus-square",
				"plus-square-o",
				"square",
				"square-o",
				"h-square",
				"share-square",
				"share-square-o",
				"check-square-o",
				"times-circle-o",
				"check-circle-o",
				"ellipsis-h",
				"ellipsis-v",
				"minus-square",
				"check-square",
				"bullseye",
				// Rate
				"thumbs-o-up",
				"thumbs-o-down",
				"star",
				"star-o",
				"star-half",
				"star-half-o",
				"heart",
				"heart-o",
				"lemon-o",
				"trophy",
				"thumbs-up",
				"thumbs-down",			
				// Accounts
				"user",
				"user-md",
				"group",
				"sign-in",			
				"sign-out",
				"key",
				"lock",
				"unlock",
				"unlock-alt",
				"gear",
				"gears",
				"ban",			
				"female",
				"male",	
				"comment",
				"comments",
				"ticket",
				"tasks",
				"calendar",
				"calendar-o",
				// Time
				"sun-o",
				"moon-o",
				"clock-o",			
				// Site	
				"home",	
				"comment-o",
				"comments-o",
				"sitemap",
				// File Operations
				"upload",
				"download",
				"exchange",
				"file-o",
				"files-o",	
				"file",
				"file-text",
				"file-text-o",		
				"folder",
				"folder-o",
				"folder-open",			
				"hdd-o",
				"cloud",
				"cloud-download",
				"cloud-upload",	
				"save",	
				"trash-o",	
				"print",	
				// Social Networks
				"adn",
				"dribbble",
				"dropbox",
				"facebook",
				"facebook-square",
				"flickr",
				"foursquare",
				"github",
				"github-square",
				"github-alt",
				"gittip",
				"google-plus",
				"google-plus-square",
				"instagram",
				"linkedin",
				"linkedin-square",
				"pinterest",
				"pinterest-square",
				"renren",
				"rss",
				"rss-square",
				"skype",
				"stack-exchange",
				"stack-overflow",
				"trello",
				"tumblr",
				"tumblr-square",
				"twitter",
				"twitter-square",
				"retweet",
				"vimeo-square",
				"vk",
				"weibo",
				"xing",
				"xing-square",
				"youtube",
				"youtube-square",
				"youtube-play",
				// Computer			
				"desktop",
				"laptop",
				"tablet",
				"mobile-phone",			
				"phone",			
				"phone-square",		
				"microphone",
				"microphone-slash",	
				"apple",
				"windows",
				"android",
				"linux",
				"html5",
				"css3",			
				"gamepad",
				"keyboard-o",						
				"signal",
				"power-off",
				"terminal",
				"code",			
				"code-fork",
				"bug",
				// Maps
				"glass",
				"globe",
				"map-marker",
				"thumb-tack",
				"building-o",
				"hospital-o",
				"location-arrow",
				"compass",
				"road",			
				// Tools & Objects
				"bell",
				"book",
				"bookmark",
				"bookmark-o",
				"bullhorn",
				"camera",
				"camera-retro",
				"video-camera",
				"picture-o",
				"pencil",
				"pencil-square",
				"flask",			
				"briefcase",
				"table",
				"truck",
				"wrench",
				"plane",			
				"lightbulb-o",			
				"stethoscope",
				"suitcase",
				"bell-o",
				"coffee",			
				"cutlery",
				"umbrella",
				"ambulance",
				"medkit",
				"fighter-jet",
				"beer",
				"wheelchair",		
				"gift",
				"leaf",
				"fire",
				"eye",
				"eye-slash",
				"warning",
				"magnet",
				"flag",
				"flag-o",
				"flag-checkered",
				"fire-extinguisher",
				"rocket",
				"shield",
				"puzzle-piece",
				"legal",
				"dashboard",
				"flash",						
				"bars",
				"bar-chart-o",
				// Sorting
				"columns",
				"filter",
				"sort",
				"sort-down",
				"sort-up",
				"sort-alpha-asc",
				"sort-alpha-desc",
				"sort-amount-asc",
				"sort-amount-desc",
				"sort-numeric-asc",
				"sort-numeric-desc",
				// e-Commerce
				"money",
				"certificate",
				"credit-card",
				"shopping-cart",
				"euro",
				"gbp",
				"dollar",
				"rupee",
				"yen",
				"ruble",
				"won",
				"bitcoin",
				"bitbucket-square",
				"turkish-lira",	
				"tag",
				"tags",
				"qrcode",
				"barcode"
				);

			$genericon_icon = array(
					"blank",
				"standard",
				"aside",
				"image",
				"gallery",
				"video",
				"status",
				"quote",
				"link",
				"chat",
				"audio",

				/* Social icons */
				"github",
				"dribbble",
				"twitter",
				"facebook",
				"facebook-alt",
				"wordpress",
				"googleplus",
				"linkedin",
				"linkedin-alt",
				"pinterest",
				"pinterest-alt",
				"flickr",
				"vimeo",
				"youtube",
				"tumblr",
				"instagram",
				"codepen",
				"polldaddy",
				"googleplus-alt",
				"path",
				"skype",
				"digg",
				"reddit",
				"stumbleupon",
				"pocket",

				/* Meta icons */
				"comment",
				"category",
				"tag",
				"time",
				"user",
				"day",
				"week",
				"month",
				"pinned",

				/* Other icons */
				"search",
				"unzoom",
				"zoom",
				"show",
				"hide",
				"close",
				"close-alt",
				"trash",
				"star",
				"home",
				"mail",
				"edit",
				"reply",
				"feed",
				"warning",
				"share",
				"attachment",
				"location",
				"checkmark",
				"menu",
				"refresh",
				"minimize",
				"maximize",
				"404",
				"spam",
				"summary",
				"cloud",
				"key",
				"dot",
				"next",
				"previous",
				"expand",
				"collapse",
				"dropdown",
				"dropdown-left",
				"top",
				"draggable",
				"phone",
				"send-to-phone",
				"plugin",
				"cloud-download",
				"cloud-upload",
				"external",
				"document",
				"book",
				"cog",
				"unapprove",
				"cart",
				"pause",
				"stop",
				"skip-back",
				"skip-ahead",
				"play",
				"tablet",
				"send-to-tablet",
				"info",
				"notice",
				"help",
				"fastforward",
				"rewind",
				"portfolio",
				"heart",
				"code",
				"subscribe",
				"unsubscribe",
				"subscribed",
				"reply-alt",
				"reply-single",
				"flag",
				"print",
				"lock",
				"bold",
				"italic",
				"picture",

				/* Generic shapes */
				"uparrow",
				"rightarrow",
				"downarrow",
				"leftarrow"
				);

		?>



       <table class="widefat">
           <tr>
				 <td class="wpmm_meta_table" style="width: 119px;"><label for="show_top_content"><?php _e("Choose Icon", APMM_TD) ?></label></td>
				  <td> 
				       <div class="topicons">

				           <input class="wpmm-icon-picker" type="hidden" id="icon_picker_icon1" name="wpmm_settings[icons_settings][icon_choose]" id="selected_font_icon" 
											value="<?php echo $attr_class;?>"/>
							<div class="icon-preview">
								<i class="<?php if( isset( $attr_class ) ) { $v=explode('|',$attr_class); echo $v[0].' '.$v[1]; } ?>"></i>
							</div>
							<div class="icon-main">
							<input type="hidden" id="current_selection" value="fontawesome"/>
								<select class="select-icon">
									<option value="1"><?php _e('Font Awesome Icons',APMM_TD);?></option>
									<option value="2"><?php _e('Generic Icons',APMM_TD);?></option>
									<option value="3"><?php _e('DashIcons',APMM_TD);?></option>
								</select>
								<div class="font-awesome-icon" id="fontawesome">
				                      <input type="text" class="search_icons" name="search" id="search_faicons" placeholder="<?php _e('Search Icon',APMM_TD);?>"/>
				                      <div class="clear"></div>
									  <?php 
										foreach($font_awesome_icons as $key){ ?>
										<div class="icon" id="icon-<?php echo $key;?>" title="<?php echo $key; ?>">
											<i class="fa fa-<?php echo $key; ?>"></i>
										</div>

									<?php } ?>

								</div>				

								<div class="genericon-icon" id="genericon">
				                    <input type="text" name="search" class="search_icons" id="search_gicons" placeholder="<?php _e('Search Icon',APMM_TD);?>"/>
				                    <div class="clear"></div>
									<?php 
										foreach($genericon_icon as $key){
									?>

										<div class="icon" id="icon-<?php echo $key;?>" title="<?php echo $key; ?>">
											<i class="genericon genericon-<?php echo $key; ?>"></i>
										</div>

									<?php } ?>

								</div>
							   <div class="dash-icon" id="dashicon">
				                    <input type="text" name="search" class="search_icons" id="search_dicons" placeholder="<?php _e('Search Icon',APMM_TD);?>"/>
				                    <div class="clear"></div>
									<?php 
										foreach($dashicons as $key){
									?>

										<div class="icon" id="icon-<?php echo $key;?>" title="<?php echo $key; ?>">
											<i class="dashicons dashicons-<?php echo $key; ?>"></i>
										</div>

									<?php } ?>

								</div>

							</div>
			
	                   </div>
				  </td>
			</tr>
       </table>
  </div>
<link rel='stylesheet' id='wpmm-icon-picker-genericons' href="<?php echo APMM_CSS_DIR.'/wpmm-icons/genericons.css';?>"/>
<link rel='stylesheet' id='wpmm-icon-picker-font-awesome' href="<?php echo APMM_CSS_DIR.'/wpmm-icons/font-awesome/font-awesome.css';?>"/>