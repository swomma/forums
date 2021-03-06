<?php if (!defined('APPLICATION')) exit();
// This is the global application configuration file that sets up default values for configuration settings.
$Configuration = [];

// Auto-enable some addons.
$Configuration['EnabledApplications']['Dashboard'] = 'dashboard';
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';
$Configuration['EnabledPlugins']['stubcontent'] = true;
$Configuration['EnabledPlugins']['swagger-ui'] = true;
$Configuration['EnabledPlugins']['rich-editor'] = true;
$Configuration['EnabledPlugins']['recaptcha'] = true;
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';

// Custom plugins
$Configuration['EnabledPlugins']['AddMenuitem'] = true;
$Configuration['EnabledPlugins']['bootstrapmarkdown'] = true;
$Configuration['EnabledPlugins']['conversationSearch'] = true;
$Configuration['EnabledPlugins']['ConversationsClearButton'] = true;
$Configuration['EnabledPlugins']['ConversationsPreview'] = true;
$Configuration['EnabledPlugins']['ConversationsUserSearch'] = true;
$Configuration['EnabledPlugins']['DiscussionFiltersMenu'] = true;
$Configuration['EnabledPlugins']['MentionsPlus'] = true;
$Configuration['EnabledPlugins']['OnlineNow'] = true;
$Configuration['EnabledPlugins']['Participated'] = true;
$Configuration['EnabledPlugins']['PersonnelFiles'] = true;
$Configuration['EnabledPlugins']['Signatures'] = true;
$Configuration['EnabledPlugins']['Spoilers'] = true;
$Configuration['EnabledPlugins']['UnreadOnIndex'] = true;

// Plugin configuration
$Configuration['Plugins']['AddMenuitem']['Name1'] = 'Donate';
$Configuration['Plugins']['AddMenuitem']['Link1'] = 'http://29th.org/donate';
$Configuration['Plugins']['AddMenuitem']['Name2'] = 'Search';
$Configuration['Plugins']['AddMenuitem']['Link2'] = 'search';
$Configuration['Plugins']['OnlineNow']['Frequency'] = '300';
$Configuration['Plugins']['OnlineNow']['Location']['Show'] = 'every';
$Configuration['Plugins']['OnlineNow']['Hide'] = '1';
$Configuration['Signatures']['Images']['MaxNumber'] = '3';
$Configuration['Signatures']['Images']['MaxHeight'] = '30';
$Configuration['Signatures']['Hide']['Guest'] = '1';
$Configuration['Signatures']['Hide']['Embed'] = '1';
$Configuration['Signatures']['Hide']['Mobile'] = '1';
$Configuration['Signatures']['Allow']['Embeds'] = '1';
$Configuration['Signatures']['Text']['MaxLength'] = '200';
$Configuration['conversationSearch']['PerPage'] = 20;

// ImageUpload
$Configuration['ImageUpload']['Limits']['Enabled'] = false;
$Configuration['ImageUpload']['Limits']['Width'] = '1000';
$Configuration['ImageUpload']['Limits']['Height'] = '1400';

// Database defaults.
$Configuration['Database']['Engine'] = 'MySQL';
// $Configuration['Database']['Host'] = 'dbhost';
// $Configuration['Database']['Name'] = 'dbname';
// $Configuration['Database']['User'] = 'dbuser';
// $Configuration['Database']['Password']  = '';
$Configuration['Database']['CharacterEncoding'] = 'utf8mb4';
$Configuration['Database']['DatabasePrefix'] = 'GDN_';
$Configuration['Database']['ExtendedProperties']['Collate'] = 'utf8mb4_unicode_ci';
$Configuration['Database']['ConnectionOptions'] = [
    12 => false, // PDO::ATTR_PERSISTENT
    1000 => true, // PDO::MYSQL_ATTR_USE_BUFFERED_QUERY (missing in some PHP installations)
];

// Use a dirty cache by default. Try Vanilla with memcached!
$Configuration['Cache']['Enabled'] = true;
$Configuration['Cache']['Method'] = 'dirtycache';
$Configuration['Cache']['Filecache']['Store']  = PATH_CACHE.'/Filecache';

// Technical content stuff.
$Configuration['Garden']['ContentType'] = 'text/html';
$Configuration['Garden']['Locale'] = 'en';
$Configuration['Garden']['LocaleCodeset'] = 'UTF8';

$Configuration['HotReload']['IP'] = '127.0.0.1';

$Configuration['ContentSecurityPolicy']['ScriptSrc']['AllowedDomains'] = [];

// Site specifics.
$Configuration['Garden']['Installed'] = true; // Has Garden been installed yet? This blocks setup when true.
$Configuration['Garden']['Title'] = '29th Infantry Division';
$Configuration['Garden']['Domain'] = '';
$Configuration['Garden']['WebRoot'] = false; // You can set this value if you are using htaccess to direct into the application, but the correct webroot isn't being recognized.
$Configuration['Garden']['StripWebRoot'] = false;
$Configuration['Garden']['AllowSSL'] = true;
$Configuration['Garden']['PrivateCommunity'] = false;
$Configuration['Garden']['Forms']['HoneypotName'] = 'hpt';

// Developer stuff.
// $Configuration['Garden']['Debug'] = false;
$Configuration['Garden']['Errors']['LogFile'] = 'php://stderr';
$Configuration['Garden']['FolderBlacklist'] = ['.', '..', '_svn', '.git']; // Folders we should never search for classes.

// User registration & authentication.
$Configuration['Garden']['Session']['Length'] = '15 minutes';
// $Configuration['Garden']['Cookie']['Salt'] = ''; // We do this during setup, chill.
$Configuration['Garden']['Cookie']['Name'] = 'Vanilla';
$Configuration['Garden']['Cookie']['Path']  = '/';
// $Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Cookie']['HashMethod'] = 'md5'; // md5 or sha1
$Configuration['Garden']['Authenticator']['DefaultScheme'] = 'password'; // Types include 'Password', 'Handshake', 'Openid'
$Configuration['Garden']['Authenticator']['RegisterUrl'] = '/entry/register?Target=%2$s';
$Configuration['Garden']['Authenticator']['SignInUrl'] = '/entry/signin?Target=%2$s';
$Configuration['Garden']['Authenticator']['SignOutUrl'] = '/entry/signout/{Session_TransientKey}?Target=%2$s';
$Configuration['Garden']['Authenticator']['EnabledSchemes'] = ['password'];
$Configuration['Garden']['Authenticator']['SyncScreen'] = "smart";
$Configuration['Garden']['Authenticators']['password']['Name'] = "Password";
$Configuration['Garden']['UserAccount']['AllowEdit'] = true; // Allow users to edit their account information? (SSO requires accounts be edited in external system).
$Configuration['Garden']['Registration']['Method'] = 'Captcha'; // Options are: Basic, Captcha, Approval, Invitation
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week'; // When invitations expire. This will be plugged into strtotime().
$Configuration['Garden']['Registration']['InviteRoles'] = 'FALSE';
$Configuration['Garden']['Registration']['ConfirmEmail'] = true;
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['MinPasswordLength'] = 6;
$Configuration['Garden']['Registration']['NameUnique'] = true;
$Configuration['Garden']['TermsOfService'] = '/home/termsofservice'; // The url to the terms of service.
$Configuration['Garden']['Password']['MinLength'] = 6;
$Configuration['Garden']['Roles']['Manage'] = true; // @deprecated

// Garden security features
$Configuration['Garden']['Security']['Hsts']['IncludeSubDomains'] = false;
$Configuration['Garden']['Security']['Hsts']['Preload'] = false;
$Configuration['Garden']['Security']['Hsts']['MaxAge'] = 604800;

// Outgoing email.
$Configuration['Garden']['Email']['UseSmtp'] = true;
// $Configuration['Garden']['Email']['SmtpHost'] = '';
// $Configuration['Garden']['Email']['SmtpUser'] = '';
// $Configuration['Garden']['Email']['SmtpPassword'] = '';
// $Configuration['Garden']['Email']['SmtpPort'] = '25';
// $Configuration['Garden']['Email']['SmtpSecurity'] = ''; // ssl/tls
$Configuration['Garden']['Email']['MimeType'] = 'text/plain';
// $Configuration['Garden']['Email']['SupportName'] = 'Support';
// $Configuration['Garden']['Email']['SupportAddress'] = '';

// Contact with the mothership.
$Configuration['Garden']['UpdateCheckUrl'] = 'https://open.vanillaforums.com/addons/update';
$Configuration['Garden']['AddonUrl'] = 'https://open.vanillaforums.com/addons';
$Configuration['Garden']['VanillaUrl'] = 'https://open.vanillaforums.com';

// File handling.
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Upload']['MaxFileSize'] = '50M';
$Configuration['Garden']['Upload']['AllowedFileExtensions'] = [
    'txt', 'jpg', 'jpeg', 'gif', 'png', 'bmp', 'tiff', 'ico', 'zip', 'gz', 'tar.gz', 'tgz', 'psd', 'ai', 'pdf', 'doc', 'xls', 'ppt', 'docx', 'xlsx', 'pptx', 'log', 'rar', '7z'
];
$Configuration['Garden']['Profile']['MaxHeight'] = 560;
$Configuration['Garden']['Profile']['MaxWidth'] = 560;
$Configuration['Garden']['Thumbnail']['Size'] = 200;

// Appearance.
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['MobileTheme'] = 'mobile';
$Configuration['Garden']['Menu']['Sort'] = ['Dashboard', 'Discussions', 'Questions', 'Activity', 'Applicants', 'Conversations', 'User'];
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Military';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_military';
$Configuration['Garden']['FavIcon'] = 'favicon_f06e9f5a2f7eb907.ico';
$Configuration['Garden']['ShareImage'] = 'OS9LZL2PF3NE.png';
$Configuration['Garden']['DefaultAvatar'] = 'defaultavatar/154KLUS2L8EB.jpg';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';

// Profiles.
$Configuration['Garden']['Profile']['Public']= true;
$Configuration['Garden']['Profile']['ShowAbout'] = true;
$Configuration['Garden']['Profile']['EditPhotos'] = true; // false to disable user photo editing
$Configuration['Garden']['Profile']['EditUsernames'] = false;
$Configuration['Garden']['BannedPhoto'] = 'https://images.v-cdn.net/banned_large.png';

// Embedding forum & comments.
$Configuration['Garden']['Embed']['Allow'] = true;
$Configuration['Garden']['Embed']['CommentsPerPage'] = 50;
$Configuration['Garden']['Embed']['SortComments'] = 'desc';
$Configuration['Garden']['Embed']['PageToForum'] = true;
$Configuration['Garden']['SignIn']['Popup'] = true; // Should the sign-in link pop up or go to it's own page? (SSO requires going to it's own external page)
// $Configuration['Garden']['TrustedDomains'] = '';

// User experience & formatting.
$Configuration['Garden']['InputFormatter'] = 'Markdown'; // Html, BBCode, Markdown, Text, Rich
$Configuration['Garden']['MobileInputFormatter'] = 'Rich';
$Configuration['Garden']['Html']['AllowedElements'] = "a, abbr, acronym, address, area, audio, b, bdi, bdo, big, blockquote, br, caption, center, cite, code, col, colgroup, dd, del, details, dfn, div, dl, dt, em, figure, figcaption, font, h1, h2, h3, h4, h5, h6, hgroup, hr, i, img, ins, kbd, li, map, mark, menu, meter, ol, p, pre, q, s, samp, small, span, strike, strong, sub, sup, summary, table, tbody, td, tfoot, th, thead, time, tr, tt, u, ul, var, video, wbr";
$Configuration['Garden']['Search']['Mode'] = 'boolean'; // matchboolean, match, boolean, like
$Configuration['Garden']['EditContentTimeout'] = 3600; // -1 means no timeout. 0 means immediate timeout. > 0 is in seconds. 60 * 60 = 3600 (aka 1hr)
$Configuration['Garden']['Format']['Mentions'] = true;
$Configuration['Garden']['Format']['Hashtags'] = false;
$Configuration['Garden']['Format']['YouTube'] = true;
$Configuration['Garden']['Format']['Vimeo'] = true;
$Configuration['Garden']['Format']['EmbedSize'] = 'normal'; // tiny/small/normal/big/huge or WIDTHxHEIGHT
$Configuration['Vanilla']['Comment']['MaxLength'] = '16000';
$Configuration['Vanilla']['Comment']['MinLength'] = '2';

// Default preferences. Setting these to 'false' disables them globally.
$Configuration['Preferences']['Email']['ConversationMessage'] = '1';
$Configuration['Preferences']['Email']['BookmarkComment'] = '1';
$Configuration['Preferences']['Email']['ParticipateComment'] = '0';
$Configuration['Preferences']['Email']['WallComment'] = '0';
$Configuration['Preferences']['Email']['ActivityComment'] = '0';
$Configuration['Preferences']['Email']['DiscussionComment'] = '0';
$Configuration['Preferences']['Email']['Mention'] = '0';
$Configuration['Preferences']['Popup']['ConversationMessage'] = '1';
$Configuration['Preferences']['Popup']['BookmarkComment'] = '1';
$Configuration['Preferences']['Popup']['ParticipateComment'] = '0';
$Configuration['Preferences']['Popup']['WallComment'] = '1';
$Configuration['Preferences']['Popup']['ActivityComment'] = '1';
$Configuration['Preferences']['Popup']['DiscussionComment'] = '1';
$Configuration['Preferences']['Popup']['Mention'] = '1';

// Module visibility and sorting.
$Configuration['Garden']['Modules']['ShowGuestModule'] = true;
$Configuration['Garden']['Modules']['ShowSignedInModule'] = false;
$Configuration['Garden']['Modules']['ShowRecentUserModule'] = false;
$Configuration['Modules']['Dashboard']['Panel'] = ['MeModule', 'UserBoxModule', 'ActivityFilterModule', 'UserPhotoModule', 'ProfileFilterModule', 'SideMenuModule', 'UserInfoModule', 'GuestModule', 'Ads'];
$Configuration['Modules']['Dashboard']['Content'] = ['MessageModule', 'MeModule', 'UserBoxModule', 'ProfileOptionsModule', 'Notices', 'ActivityFilterModule', 'ProfileFilterModule', 'Content', 'Ads'];
$Configuration['Modules']['Vanilla']['Panel'] = ['MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'DiscussionFilterModule', 'SignedInModule', 'Ads'];
$Configuration['Modules']['Vanilla']['Content'] = ['MessageModule', 'MeModule', 'UserBoxModule', 'NewDiscussionModule', 'ProfileOptionsModule', 'Notices', 'NewConversationModule', 'NewDiscussionModule', 'DiscussionFilterModule', 'CategoryModeratorsModule', 'Content', 'Ads'];
$Configuration['Modules']['Conversations']['Panel'] = ['MeModule', 'UserBoxModule', 'NewConversationModule', 'SignedInModule', 'GuestModule', 'Ads'];
$Configuration['Modules']['Conversations']['Content'] = ['MessageModule', 'MeModule', 'UserBoxModule', 'NewConversationModule', 'Notices', 'Content', 'Ads'];

// Routes.
$Configuration['Routes']['DefaultController'] = 'categories';
$Configuration['Routes']['DefaultForumRoot'] = 'discussions';
$Configuration['Routes']['Default404'] = ['dashboard/home/filenotfound', 'NotFound'];
$Configuration['Routes']['DefaultPermission'] = ['dashboard/home/unauthorized', 'NotAuthorized'];
$Configuration['Routes']['UpdateMode'] = 'dashboard/home/updatemode';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Conversations']['Version'] = '3.0';
$Configuration['Conversations']['Subjects']['Visible'] = true;
