<?php
/**
Language English
@file en.lang.php
@version 1.0
@date 3 de marzo del 2007
@author Macos Julian <marcos@Yourpacs.com>
@revision Azucena Casado                                    |
@revision Albert Sellar�s <whats@Yourpacs.com>

 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

# General
# ------------------------------------------------------------------------------
$LANG['general']['by']       = "By";
$LANG['general']['of']       = "of";
$LANG['general']['to']       = "to";
$LANG['general']['and']      = "and";
$LANG['general']['or']       = "or";
$LANG['general']['with']     = "width";
$LANG['general']['years']    = "years";
$LANG['general']['author']   = "Author";
$LANG['general']['the']      = "the";
$LANG['general']['day']      = "day";
$LANG['general']['accept']   = "Accept";
$LANG['general']['send']     = "Send";
$LANG['general']['comments'] = "Comments";

$LANG['general']['options'] = "Options";
$LANG['general']['help']    = "Help";
$LANG['general']['save']    = "Save";
$LANG['general']['change']  = "Change";

$LANG['general']['dayweek_0'] = "sunday";
$LANG['general']['dayweek_1'] = "monday";
$LANG['general']['dayweek_2'] = "tuesday";
$LANG['general']['dayweek_3'] = "wednesday";
$LANG['general']['dayweek_4'] = "thursday";
$LANG['general']['dayweek_5'] = "friday";
$LANG['general']['dayweek_6'] = "saturday";

$LANG['general']['email'] = "Direcci�n de email";

# E-Mails
# ------------------------------------------------------------------------------
$LANG['email']['nasubject'] = "Welcome to Yourpacs. Account data.";
$LANG['email']['nabody']    = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
							   <html><head>
							   <title>Yourpacs :: Confirmation</title>
							   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
							   </head><body>
							   <h1>Welcome to Yourpacs</h1><br/>
							   From now on, you can access your control panel to send and receive images to any user of Yourpacs.
                               <br/>
                               <br/>
                               In the control panel, you can find the configuration data and the software needed to start using Yourpacs. You can also upgrade your account to Yourpacs PRO to have your own PACS at internet!! What are you waiting for?
							   <br/><br/>
							   Account data:<br/>
							   Account: <strong>[%LOGIN%]</strong><br/>
							   Password: <strong>[%PASSWD%]</strong><br/>
							   <br/>
							   Thank you to trust us and use Yourpacs.<br/>
							   <a href='http://www.yourpacs.com'>http://www.yourpacs.com</a><br/>
							   support@yourpacs.com
							   </body></html>
							  ";

$LANG['email']['rpsubject'] = "Yourpacs. Password recovery.";
$LANG['email']['rpbody']    = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
								<html><head>
								<title>Yourpacs :: Password recovery</title>
								<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
								</head><body>
								<h1>Password recovery</h1><br/>
								A security code has just been generated and is still valid during 30 minutes in order to change the password of your account of Yourpacs. If after this time you have not used it, it will stop being valid and it will have to be requested again.
								<br/><br/>
								Information about your account:<br/>
								Account: <strong>[%LOGIN%]</strong><br/>
								e-Mail: <strong>[%EMAIL%]</strong><br/>
								<br/>
								To change the password press the following link:<br/>
								<a href=\"[%URL%]\">[%URL%]</a>
								<br/><br/>
								We thank you for trusting Yourpacs.<br/>
							   <a href='http://www.yourpacs.com'>http://www.yourpacs.com</a><br/>
								support@Yourpacs.com
								</body></html>
								";

$LANG['email']['invsubject'] = "Someone wants to invite you to Yourpacs.";
$LANG['email']['invbody']    = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
							   <html><head>
							   <title>Yourpacs :: Invitation</title>
							   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
							   </head><body>
							   <h1>Discover Yourpacs</h1><br/>
                               The user [%USER%] with the email [%EMAIL%] wants you to know Yourpacs.
                               <br/>
                               <br/>
                               You can start reading <a href='http://www.yourpacs.com/en/help/whatis'>�What is Yourpacs?</a> and 
                               <a href='http://www.yourpacs.com/en/help/sothat'>�What is used for?</a>.
                               Follow the advice of your friend and start using us! What are you waiting for?
							   <br/><br/>
							   <a href='http://www.yourpacs.com'>http://www.yourpacs.com</a><br/>
							   support@yourpacs.com
							   </body></html>
							  ";
# Sections
# ------------------------------------------------------------------------------
$LANG['sections']['whatis']   = "What is Yourpacs?";
$LANG['sections']['sothat']   = "What it is used for?";
$LANG['sections']['faq']  = "FAQ";
$LANG['sections']['because']  = "Why choose Yourpacs?";
$LANG['sections']['doc']  = "Documentation";
$LANG['sections']['contact']  = "Contact";
$LANG['sections']['register'] = "Create new account";
$LANG['sections']['help']     = "Help";

# Pager
# ------------------------------------------------------------------------------
$LANG['pager']['page']  = "Page";
$LANG['pager']['pages'] = "Pages";
$LANG['pager']['next']  = "Next";
$LANG['pager']['prev']  = "Previous";
$LANG['pager']['first'] = "First";
$LANG['pager']['last']  = "Last";

# Summary
# ------------------------------------------------------------------------------
$LANG['summary']['pagetitle']   = "Yourpacs :: ";
$LANG['summary']['optionblog']  = "Blog";
$LANG['summary']['optionalbum'] = "Album";
$LANG['summary']['optionwiki']  = "Wiki";
$LANG['summary']['optionlinks'] = "Links";
$LANG['summary']['optionforum'] = "Forum";

$LANG['summary']['lastphotos'] = "Last photos";
$LANG['summary']['nophotos']   = "There are not photos at this moment";
$LANG['summary']['lastblog']   = "Last blog entries";
$LANG['summary']['noentries']  = "There are not entries at this moment";
$LANG['summary']['lastwiki']   = "Last wiki entries";
$LANG['summary']['lastlinks']  = "Last links";
$LANG['summary']['nolinks']    = "There are not links at this moment";
$LANG['summary']['lastforum']  = "Last forum messages";
$LANG['summary']['noforum']    = "There are not messages at this moment";

# Header
# ------------------------------------------------------------------------------
$LANG['header']['language']     = "Language:";
$LANG['header']['enteryourpacs'] = "Enter Yourpacs";
$LANG['header']['welcome']      = "Welcome";
$LANG['header']['newaccount']   = "Register";
$LANG['header']['haveaccount']  = "Enter";
$LANG['header']['disconnect']   = "Disconnect";
$LANG['header']['sentfriend']   = "I want to recommend Yourpacs to a friend";
$LANG['header']['gotocpanel']   = "Control Panel";

# Footer
# ------------------------------------------------------------------------------
$LANG['footer']['license'] = "Terms and conditions of Service";
$LANG['footer']['copy']    = " :: Yourpacs - 2010 ::";
$LANG['footer']['info']    = "";

# Section: Home
# ------------------------------------------------------------------------------
$LANG['home']['pagetitle']  = "Yourpacs :: Your own internet PACS";
$LANG['home']['starttitle'] = "Your own internet PACS";
$LANG['home']['startdesc']  = "<br/>
With <strong>YourPACS</strong> the profesionals that are working with medical image, can work from everywhere. <br/> <br/>
<img style='margin-left: 50px' src='/img/portada.png' HEIGHT='275', WIDTH='359' align='middle' />
<br/><br/>
What are you waiting for? <a href='/en/newaccount'>Register</a> and start using the first pacs in the cloud!
";
$LANG['home']['enddesc']    = "<strong>always</strong>";
$LANG['home']['createtitle'] = "Create your account in only 10 seconds";
$LANG['home']['onestep']     = "Choose a name";
$LANG['home']['twostep']     = "Choose the category";
$LANG['home']['threestep']   = "Press \"accept\"";
$LANG['home']['arrowcreate'] = "Create your account now!";
$LANG['home']['randomusers'] = "Last users";
$LANG['home']['lastposts']   = "Some Blogs entries";

# Section: Login
# ------------------------------------------------------------------------------
$LANG['login']['pagetitle'] = "Yourpacs :: Enter";
$LANG['login']['error1']    = "Name or password incorrect";

$LANG['login']['enterl']        = "Log into Yourpacs";
$LANG['login']['recoverpass']   = "Recover password";
$LANG['login']['sentcode']      = "You have received a confirmation email";
$LANG['login']['emailnoexists'] = "The email does not exist";
$LANG['login']['changepass']    = "Change password";
$LANG['login']['change']        = "Change";

# Section: New account
# ------------------------------------------------------------------------------
$LANG['newaccount']['pagetitle']      = "Yourpacs :: New account";
$LANG['newaccount']['summary']        = "Create account it's very easy.";
$LANG['newaccount']['onesteptitle']   = "Choose a name";
$LANG['newaccount']['twosteptitle']   = "Choose the category";
$LANG['newaccount']['threesteptitle'] = "Press accept";

$LANG['newaccount']['desctitle'] = "Create Yourpacs account";
$LANG['newaccount']['desc']      =  "You fill up the following form with the requested information and you will have
									your account working instantly. All information
									are compulsory and <strong>remember</strong>: The email is necessary to send you the information of your account and to retrieve your password, as well as to receive
									any changes in <strong>Yourpacs</strong>, improvements
									or instructions so that you can start using the novelties. You must use a valid e-mail address.";
$LANG['newaccount']['name']      = "User";
$LANG['newaccount']['captcha']   = "Security code";
$LANG['newaccount']['verify']    = "Verify";
$LANG['newaccount']['email']     = "e-Mail";
$LANG['newaccount']['cemail']    = "Confirm e-Mail";
$LANG['newaccount']['password']  = "Password";
$LANG['newaccount']['cpassword'] = "Confirm password";
$LANG['newaccount']['acceptthe'] = "I agree the";
$LANG['newaccount']['terms']     = "terms and conditions of use";
$LANG['newaccount']['ofYourpacs'] = "";

$LANG['newaccount']['error'][0]  = "Required";
$LANG['newaccount']['error'][1]  = "Not identical";
$LANG['newaccount']['error'][2]  = "Not valid or does not exist";
$LANG['newaccount']['error'][3]  = "At least 6 characters";
$LANG['newaccount']['error'][4]  = "Not identical";
$LANG['newaccount']['error'][5]  = "Choose the category";
$LANG['newaccount']['error'][6]  = "Not agree";

$LANG['newaccount']['maintetitle'] = "Maintenance";
$LANG['newaccount']['maintenance'] = "We are currently performing maintenance tasks and
									  is not possible to create new accounts.
									  <br/><br/>
									  This action has started at 19:00h
									  (GMT +1) and end at 21:00h (GMT +1).
									  <br/><br/>
									  Sorry for the inconvenience.";

# Section: Control panel
# ------------------------------------------------------------------------------
$LANG['controlpanel']['warning']          = "Warning";
$LANG['controlpanel']['useradmin']        = "Admin user";
$LANG['controlpanel']['passadmin']        = "Admin password";
$LANG['controlpanel']['wchangepassdesc1'] = "Already you have the password assigned";
$LANG['controlpanel']['wchangepassdesc2'] = "you will be able to access on your pages to configure them.
									The user <strong>admin</strong> is needed for setup all your pages, with its own options. We recommend 										that you change the password from the menu \"Configure pages\", and access in a simple way easy to remember.";
$LANG['controlpanel']['pagetitle'] = "Yourpacs :: Control panel";
$LANG['controlpanel']['desctitle'] = "Control panel";
$LANG['controlpanel']['desc']      = "From here you will be able to change the
									  data of your account. Also you will be
									  able to select your starting page.";
$LANG['controlpanel']['stilldemo']     = "Your account is under a demo period from:";
$LANG['controlpanel']['stopdemo']      = "The demo period has expired!";
$LANG['controlpanel']['menu']          = "Menu";
$LANG['controlpanel']['home']          = "Home";
$LANG['controlpanel']['configYourpacs'] = "Config Yourpacs";
$LANG['controlpanel']['configwebs']    = "Config webs";
$LANG['controlpanel']['configdomain']  = "Config domain";
$LANG['controlpanel']['installsoft']   = "Install / Uninstall";
$LANG['controlpanel']['startweb']      = "Start page";
$LANG['controlpanel']['logaccess']     = "Registry of changes";
$LANG['controlpanel']['freespace']     = "Free space";
$LANG['controlpanel']['using']         = "I'm using";
$LANG['controlpanel']['available']     = "available";
$LANG['controlpanel']['mydataccount']  = "My account";
$LANG['controlpanel']['name']          = "Name:";
$LANG['controlpanel']['email']         = "e-Mail:";
$LANG['controlpanel']['dateadded']     = "Date creation:";
$LANG['controlpanel']['urlhome']       = "Url home:";
$LANG['controlpanel']['titleaccess']   = "Registry of last 50 configuration access ";
$LANG['controlpanel']['nologaccess']   = "Registry empty";

$LANG['controlpanel']['upgradeaccount']   = "Upgrade your account to Yourpacs PRO!";
$LANG['controlpanel']['upgradeaccountdesc']   = "If you upgrade you account, you could start enjoying your own PACS!
Check the advantages that you have with a <a href='/en/help/yourpacspro'>Yourpacs PRO</a> account and what can you  <a href='/en/help/sothat'>do</a> with it.";
$LANG['controlpanel']['titlepayments'] = "Last payments";
$LANG['controlpanel']['downgradeaccount']  = "Remove your account Yourpacs PRO!";
$LANG['controlpanel']['downgradeaccountdesc']   = "If you don't whant to continue with us, you can remove your account whenever you want.";
$LANG['controlpanel']['upgradetitle']  = "Upgrade your account to Yourpacs PRO!";
$LANG['controlpanel']['upgradedesc']   = "Upgrade your account and start using your own PACS.";
$LANG['controlpanel']['nopayments']    = "There are no payments";

$LANG['controlpanel']['myblog']        = "my blog";
$LANG['controlpanel']['myweb']         = "my web";
$LANG['controlpanel']['mywiki']        = "my wiki";
$LANG['controlpanel']['mylinks']       = "my links";
$LANG['controlpanel']['myalbum']       = "my album";
$LANG['controlpanel']['myforum']       = "my forum";
$LANG['controlpanel']['samepass']      = "It can not be the same than the account of Yourpacs";
$LANG['controlpanel']['shortpass']     = "It is too short";

$LANG['controlpanel']['configsuccess']       = "Done";
$LANG['controlpanel']['configstats']         = "Change stats access password";
$LANG['controlpanel']['configstatspasswd']   = "Password:";
$LANG['controlpanel']['statspasswdsuccess']  = "Password changed";

$LANG['controlpanel']['mypagesdata']         = "Information about my pages";
$LANG['controlpanel']['mypagesdatadesc']     = "You can access your pages from the following directions:";
$LANG['controlpanel']['configaccount']       = "Account configutation";
$LANG['controlpanel']['configallpages']      = "My pages configuration";
$LANG['controlpanel']['configallpagesdesc']  = "With this option you can change the password of the user \"<strong>admin</strong>\" of all your pages at the same time.";
$LANG['controlpanel']['cadminpasswdsuc']     = "Changed password";
$LANG['controlpanel']['configwiki']          = "Wiki configuration";
$LANG['controlpanel']['configwordpress']     = "Blog configuration";
$LANG['controlpanel']['configwikititle']     = "Title:";
$LANG['controlpanel']['configwikiurl']       = " Logo Url:";
$LANG['controlpanel']['configwikilang']      = "Language:";
$LANG['controlpanel']['configwikitheme']     = "Theme:";
$LANG['controlpanel']['selectstartpage']     = "Choose the first page ";
$LANG['controlpanel']['selectstartpagedesc'] = "You can use as a first page as a  summary of your entries or
									using one of your pages directly.";

$LANG['controlpanel']['configsuccess']         = "Done";
$LANG['controlpanel']['domain']                = "Domain:";
$LANG['controlpanel']['configdomaintitle']     = "Domain setup";
$LANG['controlpanel']['configdomaindesc']      = "Here, you can setup your on domain. To do so, you have to point your domain to";
$LANG['controlpanel']['configdomainconfirm']   = "Are you sure?";
$LANG['controlpanel']['success']               = "Domain added";
$LANG['controlpanel']['success2']              = "Domain deleted";
$LANG['controlpanel']['error1']                = "Is not a valid domain";
$LANG['controlpanel']['error2']                = "Your domain is not configured";
$LANG['controlpanel']['deletedomain']          = "Delete domain";
$LANG['controlpanel']['newsmail']              = "Send me by e-Mail the news and updates";

$LANG['controlpanel']['installsofttitle']      = "Install or uninstall software";
$LANG['controlpanel']['installsoftdesc']       = "<strong>IMPORTANT:</strong> When uninstall software, the configuration and all its content will be lost and the next time that you install it you will have one by default.
												  Also we recommended to you that you make sure that you have sufficient space to be able to install software (20MBytes free by each one) before conducting the action.";
$LANG['controlpanel']['installsofterror1']     = "You cannot uninstall all";
$LANG['controlpanel']['installsofterror2']     = "You have not marked the confirmation box";
$LANG['controlpanel']['installsoftsuccess']    = "Changes saved.";
$LANG['controlpanel']['installsoftcheck']      = "I sure of these changes";
$LANG['controlpanel']['installsoftconfirm']    = "When uninstalling a software, the configuration and all its content will be lost, �are you sure?";
$LANG['controlpanel']['installsoftcheckerror'] = "You must mark the confirmation box in orther to do the changes. ";
$LANG['controlpanel']['restorewp']             = "Restore:";
$LANG['controlpanel']['restorewpdesc']         = "<i>(It desactivates all plugins and it puts theme by default)</i>";
$LANG['controlpanel']['confirmrestorewp']      = "This option, desactivates all plugins and puts theme by default of se. From the Control Panel of your Blog you will be able to return to activate plugins and put theme that you want. �Are you sure?";

$LANG['controlpanel']['pacs']      = "PACS";
$LANG['controlpanel']['payments']      = "Payments";
$LANG['controlpanel']['search']      = "Search users";
$LANG['controlpanel']['invitation']      = "Invite a friend";
$LANG['controlpanel']['documentation']      = "Documentation";


# Section: Help
# ------------------------------------------------------------------------------
$LANG['help']['alltitle']  = "Yourpacs :: Help";
$LANG['help']['pagetitle'] = "Yourpacs :: ";

# Section: Verify Account
# ------------------------------------------------------------------------------
$LANG['verifyaccount']['ok']     = "Name valid";
$LANG['verifyaccount']['error1'] = "It is too short";
$LANG['verifyaccount']['error2'] = "Only can have numbers and letters";
$LANG['verifyaccount']['error3'] = "Already used";
$LANG['verifyaccount']['error4'] = "Not valid";
$LANG['verifyaccount']['error5'] = "Code incorrect";

# Section: Contact
# ------------------------------------------------------------------------------
$LANG['contact']['title']   = "Contact to Yourpacs";
$LANG['contact']['desc']    = "If you want to contact us, please fill and submit this form.";

$LANG['contact']['email']   = "Email";
$LANG['contact']['message'] = "Message";
$LANG['contact']['error1']  = "Not valid";
$LANG['contact']['error2']  = "Too short";
$LANG['contact']['success'] = "Shortly we will reply your message. Thank you very much.";
$LANG['contact']['text_new'] = "If you have some doubt or problem with some <b>Yourpacs</b> software, do not doubt to consult our <a href='http://wiki.Yourpacs.com'>Wiki</a>.<br/><br/>
								If you are installed some theme or plugin, and your Blog stops working, you have the option of '<i>Restore</i>' in the <b>Yourpacs</b> control panel, this option allow you to deactivate all the plugins and place a default theme to solve the problem.<br/><br/>";

# Section: Invitation
#
$LANG['invitation']['title'] = "Invite a friend";
$LANG['invitation']['desc'] = "Put here the email of the person to invite into YourPACS.";
$LANG['invitation']['success'] = "Invitation sent.";

# Section: Searchuser
#
$LANG['searchuser']['title'] = "Look for a user";
$LANG['searchuser']['desc'] = "In this box, you can put the name of a YourPACS PRO (or part of the name) or an email to know if that user exist and in that case, found the information to send images to their pacs.";
$LANG['searchuser']['user'] = "User";
$LANG['searchuser']['aet'] = "PACS Aetitle";
$LANG['searchuser']['ip'] = "IP address";
$LANG['searchuser']['port'] = "Port";
$LANG['searchuser']['notfound'] = "No users found";

#TODO

# Section: Pacs
#
$LANG['pacs']['title'] = "Your PACS";
$LANG['pacs']['desc_free'] = "Here you have the config information that you need to send studies to a PACS into YourPACS. You can use the <a href='/en/controlpanel/searchuser'>search box</a> to see the configuration data of any user.";
$LANG['pacs']['desc_pro'] = "Here you have the information to configure your viewer. Also the information of your PACS node.";
$LANG['pacs']['aet'] = "Aetitle:";
$LANG['pacs']['ip'] = "IP Address";
$LANG['pacs']['port'] = "Port:";
$LANG['pacs']['client'] = "Viewer settings";
$LANG['pacs']['server'] = "PACS settings";

# Section: Studies
#
$LANG['studies']['title'] = "Study Viewer";
$LANG['studies']['patientname'] = "Name";
$LANG['studies']['studytype'] = "Modality";
$LANG['studies']['studydesc'] = "Description";
$LANG['studies']['studydate'] = "Date";

# Section: Recoverpass
# ------------------------------------------------------------------------------
$LANG['recoverpass']['pagetitle']     = "Yourpacs :: Recover password";
$LANG['recoverpass']['codenovalid']   = "The code, is not valid.";
$LANG['recoverpass']['codechanged']   = "The code is out off date.";
$LANG['recoverpass']['notexists']     = "Does not exist";
$LANG['recoverpass']['tooshort']      = "It is too short";
$LANG['recoverpass']['notsame']       = "Are not the same";
$LANG['recoverpass']['codeincorrect'] = "This is not the account code";
$LANG['recoverpass']['codenotexists'] = "The code, does not exist.";

# Section: Userlist
# ------------------------------------------------------------------------------
$LANG['userlist']['pagetitle'] = "Yourpacs :: Users directory";
$LANG['userlist']['title']     = "Users directory";
$LANG['userlist']['desc']      = "Here you will be able to see a organized list sort by subject that
								  matters to the users of <strong>Yourpacs</strong> than have written
								  <strong>more than one entry</strong> in their Blog. To go out in
								  the directory, only you have to start to write in yours.";
