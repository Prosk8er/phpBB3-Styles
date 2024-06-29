#######################################################################################
## Style Name: ProsilverSlideEdition
## based on my own color scheme, own ideas since 2010
## Styleauthor at ( ongray-design.de ) Talk19Zehn
# ( https://www.phpbb.de/phpbbde/team/#group27563 )
#######################################################################################
#######################################################################################
#
#				phpBB-3.2 Rhea
#
#######################################################################################
## Begin Style History for phpBB-3.2 Rhea
##
# created for phpBB-3.2 Rhea (2016ff)
##
# Updates
##
## phpBB-Version 3.2.0-RC2 - 15.12.2016
## phpBB-Version 3.2.1 - 04.09.2017
##
# Created as a Child-Style for phpBB-3.2.2 - 13.05.2018
# by Talk19Zehn ( ongray-design.de ) some changes
##
##
## phpBB 3.2.3 - 03.10.2018
## phpBB 3.2.4 - 28.11.2018
#
## phpBB 3.2.5 - 01.04.2019, 19.05.2019
## phpBB 3.2.7 - 21.08.2019 style-version: 1.1.4
## phpBB 3.2.7 - 07.09.2019 style-version: 1.1.5 (toggle-sidebar - css, html, js)
## phpBB 3.2.8 - 25.09.2019 style-version: 1.1.6
## phpBB 3.2.9 - 15.01.2020 style-version: 1.1.7
## phpBB 3.2.10 - 16.07.2020, 03.08.2020 style-version: 1.1.8 - changed js-slideshow to css-slideshow (headerbar) by Ebene elf,
# Imageslider: Ebene elf ( https://ebene11.com/imageslider-ohne-javascript ) modified by Talk19Zehn ( ongray-design.de ) for this phpBB-Style)
## phpBB 3.2.11 - 22.11.2020 style-version: 1.1.9
##
#######################################################################################
## End Style History and notes for phpBB-3.2 Rhea
#######################################################################################
#
#				phpBB-3.3 Proteus
#
#######################################################################################
## Begin Style History for phpBB 3.3 Proteus
##
## phpBB 3.3.0-b1 - 05.11.2019, 3.3.0-b2 - 27.11.2019
## phpBB 3.3.0-RC1 - 06.01.20
## phpBB 3.3.0 - 17.01.2020, style-version: 3.3.0
#
## Update 26.08.2020, style_version = 1.0.1 for phpbb_version = 3.3.0 (changed js-slideshow to css-slideshow (headerbar)) by Ebene elf
#
## phpbb 3.3.1 - 11.09.2020, style-version: 1.0.2
## phpBB 3.3.2 - 11/2020, style-version: 1.0.3
## phpBB 3.3.3 - 01/2021, style-version: 1.0.4, change css minimal incidents
## phpBB 3.3.4 - 05/2021, style-version: 1.0.5
## phpBB 3.3.4 - 07/2021, style-version: 1.0.5.1, inserted examples for text-site-logos (top, footer), few changes: css, media instructions adapted, @media print css inserted
## Note:
CSS - media print
 - /* ToDo - Supplement, edit your own works here - ADDs print help output the page (Browser-Print-Page)
---------------------------------------------------------------------------------------------------------- */
@media print {
...
...
##
## phpBB 3.3.5 - 10/2021, style-version: 1.0.6, code-changes 3.3.4 to 3.3.5 for phpBB-System V_3.3.5 "Ich bin ein Bertie" and css minimal adjustments changed
## phpBB 3.3.7 - 03/2022, style-version: 1.0.7, code-changes 3.3.5 to 3.3.7 for phpBB 3.3.7 "The Book of Bertie, Part Two"
## phpBB 3.3.8 - 06/2022, style-version: 1.0.8, code-changes 3.3.7 to 3.3.8 for phpBB 3.3.8 "Bertie: Beer and Summer" and minimal adjustments changed
## phpBB 3.3.9 - 11/2022, style-version: 1.0.9, code-changes 3.3.8 to 3.3.9 for phpBB 3.3.9 "Bertie's lunar flyby" and CSS, HTML minimal adjustments changed
## phpBB 3.3.10 - 02/2023, style-version: 1.0.10, a maintenance release of the 3.3.x branch - naming: "The Way of Bertie"
## phpBB 3.3.11 - 10/2023, style-version: 1.0.11, a maintenance release of the 3.3.x branch - naming: "Bertie’s trip to Zagreb"
## phpBB 3.3.12 - 06/2024, style-version: 1.0.12, a maintenance release of the 3.3.x branch - naming: "Bertie: A phpBB Saga"
##
#
#######################################################################################
#
#######################################################################################
## Languages: Please look here
## https://www.phpbb.com/languages/
##
## Smilies, Topic Icons for Light-, and Dark-Styles
## https://www.phpbb.com/customise/db/style/dark_style_phpbb3_smilies/
## https://www.phpbb.com/customise/db/style/topic_icons_dark_hd/
##
#######################################################################################
#
#			Notes since 2019
#
##################################################################################################################################################################
##
## Hint: overall_footer.html the linkimages have a size width 94px and height 50px(maximum!). Do not change sizes, create perhaps own images.
## Please create three times few words for your own linktexts between <span>Few words X link</span> (three examples) and replace the placeholders. Change style="display: none;" to style="display: block;" if you want to show the small linkimages.

	<div style="display: none;">
		<div id="imgpslmenu">
			<a href="#"><img src="{T_THEME_PATH}/images/imagebookfirst.png" width="94" height="50" alt="" title="{{ lang('SKIP') }}" /><span>Drei Worte Linktext</span></a>
			<a href="#"><img src="{T_THEME_PATH}/images/imagebooksecond.png" width="94" height="50" alt="" title="{{ lang('SKIP') }}" /><span>Erklärbär Link</span></a>
			<a href="#"><img src="{T_THEME_PATH}/images/imagebookthird.png" width="94" height="50" alt="" title="{{ lang('SKIP') }}" /><span>Few words X link</span></a>
		</div>
	</div>
##
##################################################################################################################################################################
##
## Imageslider/Credits: Ebene elf ( https://ebene11.com/imageslider-ohne-javascript ) modified by Talk19Zehn ( https://www.ongray-design.de/ ) for this phpBB-Design)
## Hint: Slideshow
## Important: Please note the dimensions for your pictures - the width is 1140px(!) - to maintain the layout.
## Ideally you can use 1140px x 119px for your own pictures. Please complete your own alt-TAGs.
## Into the folder (path: ProsilverSlideEdition/contrib/sliderimgs) you found also another images (examples).
##
## By default, figcaption has no subtitles. Please set this independently, if desired. Example: overall_header.html
#
###########################################################################################
Find:								<figcaption>&nbsp;</figcaption>
Setting:							<figcaption>Your picture description</figcaption>
#
## By default, figcaption sets the subtitles from the field of view: stylesheet.css
#
Find:
.sliderElementsPSE figcaption {
	display: inline-block;
	text-align: left;
	text-indent: -5500px;
}
#
This line:
	text-indent: -5500px;
#
If you want to show your picture description, just change only this line (!) to:
	/* text-indent: -5500px; */
#
##################################################################################################################################################################
##
##################################################################################################################################################################
#
# toggle-sidebar
# Please set your own links and note the IF-Statements urgently!
# Incorrectly setttings, they inevitably lead to significant errors!
#
###########################################################################################
				<div id="mySidebarpsl" class="sidebarpsl">
					<a href="javascript:void(0)" class="closebtnpsl" onclick="closeNav()">×</a>
					<a href="{U_INDEX}" title="{L_INDEX}">{L_INDEX}</a>
				<ul>
					<li><a href="#">Your Link</a>
						<ul>
							<li><a href="#">Your Link</a></li>
							<li><a href="#">Your Link</a>
								<ul>
								<!-- IF S_DISPLAY_SEARCH -->
									<li><a href="{U_SEARCH}">{L_SEARCH_ADV}</a></li>
								<!-- ENDIF -->
								</ul>
							</li>
						</ul>
					</li>
					<li><!-- IF not S_IS_BOT --><a href="#">Your Link</a><!-- ENDIF -->
						<ul>
						<!-- IF not S_IS_BOT and S_USER_LOGGED_IN -->
							<!-- IF S_DISPLAY_PM and S_NOTIFICATIONS_DISPLAY -->
								<li class="rightside" data-skip-responsive="true">
								<!-- IF S_USER_NEW_PRIVMSG -->
									<a href="{U_PRIVATEMSGS}">
										<i class="icon fa-envelope fa-fw icon-lightyellow" aria-hidden="true"></i><span>{L_NEW_MESSAGES}&nbsp;[{S_USER_NEW_PRIVMSG}]</span>
									</a>
									<!-- ELSEIF S_USER_UNREAD_PRIVMSG -->
										<a href="{U_PRIVATEMSGS}">
											<i class="icon fa fa-envelope-square fa-fw icon-lightyellow" aria-hidden="true"></i><span>{L_UNREAD_MESSAGES}&nbsp;[{S_USER_UNREAD_PRIVMSG}]</span>
										</a>
									<!-- ELSE -->
										<a href="{U_PRIVATEMSGS}">
											<i class="icon fa-inbox fa-fw" aria-hidden="true"></i><span>{L_PRIVATE_MESSAGES} </span><strong class="badge<!-- IF not PRIVATE_MESSAGE_COUNT --> hidden<!-- ENDIF -->">{PRIVATE_MESSAGE_COUNT}</strong>
										</a>
								<!-- ENDIF -->
								</li>
							<!-- ENDIF -->
						<!-- ENDIF -->
							<li><a href="#">Your Link</a>
								<ul>
									<li><a href="#">Your Link</a></li>
									<li><a href="#">Your Link</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<p style="height: 4px;">&nbsp;</p>
				</div>
###########################################################################################
#
###########################################################################################