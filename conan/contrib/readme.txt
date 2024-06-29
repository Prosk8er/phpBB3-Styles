#############################################################################################################################
## Style Title: Conan
## Style-Idea is based for phpBB-3.0 by styleauthors at ( earlier spieleresidenz.de ) also by Wuerzi ( https://www.phpbb.de/phpbbde/team/#group27563 )
#############################################################################################################################
## Style History phpBB-Olympus:
##
##		Version 1.0.0
##		- First Version
##		Version 1.0.1
##		- Fix Copyright Footer
##		Version 1.0.2
##		- Update phpBB 3.0.9
##		Version 1.0.3
##		- Update phpBB 3.0.10
##		Version 1.0.4
##		- Fix Bug overall_header.html
##		- Move Timezone to other position
##		- Some css changes
##		Version 1.0.5
##		- Update phpBB 3.0.11
##
## End Style History for phpBB-Olympus
##############################################################
## Note:
## Language: en, de
##
##############################################################
## End Style History and notes for phpBB-Olympus
##############################################################
#
#
#				phpBB-3.1 Ascraeus
#
#############################################################################################################################
## Style-Idea is based for phpBB-3.0 by styleauthors at ( earlier spieleresidenz.de ) and also by Wuerzi ( https://www.phpbb.de/phpbbde/team/#group27563 ) with kind
## approval modified by: Talk19Zehn ( ongray-design.de ) for phpBB-3.1 Ascraeus
#############################################################################################################################
## Begin Style History for phpBB-3.1 Ascraeus
##
# 3.1.6
# 3.1.7pl1
# 3.1.8
# 3.1.9
# 3.1.10
# 3.1.11
# 3.1.12
##
###############################################################
## End Style History for phpBB-3.1 Ascraeus
###############################################################
#
#				phpBB-3.2 Rhea
#
#############################################################################################################################
## Begin Style History for phpBB-3.2 Rhea
##
# created for phpBB-3.2 Rhea (2017ff)
##
# Hint: A lot of changes for phpBB-3.2.x - for phpBB-Rhea, because
# earlier standardconcepts ( phpBB-Olympus, phpBB-Ascraeus ) are not or never binding.
##
## phpBB-Version 3.2.1 - 27.08.2017
##
# Created as a Child-Style for phpBB-3.2.2 - 08.06.2018
# by Talk19Zehn ( ongray-design.de ) a lot changes. Earlier spieleresidenz.de never exist anymore in this context.
##
## phpBB 3.2.3 - 04.10.2018
## phpBB 3.2.4 - 29.11.2018
## phpBB 3.2.5 - 07.01.2019, 04.03.2019
## phpBB 3.2.7 - 07.07.2019
## phpBB 3.2.7 - 16.07.2019 - set a linklist
## phpBB 3.2.8 - 25.09.2019
## phpBB 3.2.9 - 08.01.2020
## phpBB 3.2.10 - 23.07.2020, 09.08.2020
## phpBB 3.2.11 - 12.11.2020
#
###############################################################
## Show a linklist: use few words (important)
## overall_header.html find the contents and follow the instructions: link examples
#
		<!-- NOTE: change the style="display: none" to style="display: block" when you want to show the linklist and fill the placeholder, set the title-Attribut and change inside perhaps your IF-Statements -->
		<div style="display: none">
		<!-- IF not S_IS_BOT and S_USER_LOGGED_IN -->
		<div class="navbar">
			<ul class="linklist">
				<li class="rightside"><a href="#" title="">&diams;&nbsp; use few words</a></li>
				<li class="rightside"><a href="#" title="">&diams;&nbsp; use few words</a></li>
				<li class="rightside"><a href="#" title="">&diams;&nbsp; use few words</a></li>
				<li class="rightside"><a href="#" title="">&diams;&nbsp; use few words</a></li>
			</ul>
		</div>
		<!-- ENDIF -->
		</div>
#
##
###############################################################
## End Style History and notes for phpBB-3.2 Rhea
###############################################################
#
#				phpBB-3.3 Proteus
#
###############################################################
## Begin Style History for phpBB 3.3 Proteus
##
## phpBB 3.3.0-b1 - 05.11.2019, 3.3.0-b2 - 27.11.2019
## phpbb 3.3.0-RC1 - 07.01.20
## phpbb 3.3.0 - 16.01.2020, style-version: 3.3.0
## phpbb 3.3.1 - 11.08.2020, style-version: 3.3.1
## phpbb 3.3.2 - 11/2020, 13.05.2021, style-version: 3.3.2
## phpbb 3.3.3 - 01/2021, style-version: 3.3.3, change css minimal incidents
## phpbb 3.3.4 - 05/2021, style-version: 3.3.4
## phpbb 3.3.4 - 07/2021, style-version: 3.3.4.1, some changes: few color and html corrections, media instructions adapted, @media print css inserted
## @media print css inserted:
## Note:
CSS - media print
 - /* ToDo - Supplement, edit your own works here - ADDs print help output the page (Browser-Print-Page)
---------------------------------------------------------------------------------------------------------- */
@media print {
...
...
##
## phpBB 3.3.5 - 10/2021, style-version: 3.3.5, code-changes 3.3.4 to 3.3.5 for phpBB 3.3.5 "Ich bin ein Bertie" and css minimal adjustments changed
## phpBB 3.3.7 - 03/2022, style-version: 3.3.7, code-changes 3.3.5 to 3.3.7 for phpBB 3.3.7 "The Book of Bertie, Part Two"
## phpBB 3.3.8 - 06/2022, style-version: 3.3.8, code-changes 3.3.7 to 3.3.8 for phpBB 3.3.8 "Bertie: Beer and Summer" and minimal adjustments changed
## phpBB 3.3.9 - 11/2022, style-version: 3.3.9, code-changes 3.3.8 to 3.3.9 for phpBB 3.3.9 "Bertie's lunar flyby" and CSS, HTML minimal adjustments changed
## phpBB 3.3.10 - 02/2023, style-version: 3.3.10, a maintenance release of the 3.3.x branch - naming: "The Way of Bertie"
## phpBB 3.3.11 - 10/2023, style-version: 3.3.11, a maintenance release of the 3.3.x branch - naming: "Bertie’s trip to Zagreb"
## phpBB 3.3.12 - 06/2024, style-version: 3.3.12, a maintenance release of the 3.3.x branch - naming: "Bertie: A phpBB Saga"
##
#
###############################################################
###############################################################
##
## Languages: Look here
## https://www.phpbb.com/languages/
##
###############################################################
##
## Smilies, Topic Icons for Light-, and Dark-Styles
## https://www.phpbb.com/customise/db/style/dark_style_phpbb3_smilies/
## https://www.phpbb.com/customise/db/style/topic_icons_dark_hd/
##
###############################################################
# You find some images (EXAMPLES) into the contrib-directory.
###############################################################
# Important Hints
#############################################################################################################################
# Please note the important very informations in the readme.txt, in the footer as well as in the source code(!) and do not remove it
# under any circumstances unless otherwise noted. Please pay attention to the licenses of third parties for this style.
##
# Note - Please asked for all your instructions friendly:
##
# Copyright 2008 Funcom. All rights reserved. Copyright 2008 Conan Properties International LLC ("CPI").
# CONAN, CONAN THE BARBARIAN, HYBORIA, and/or ROBERT E. HOWARD and related logos, characters, names,
# and distinctive likenesses thereof are trademarks or registered trademarks of CPI and/or
# Robert E. Howard Properties Inc. unless otherwise noted. All Rights Reserved.
##
#############################################################################################################################