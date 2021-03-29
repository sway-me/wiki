<?php
# This file was automatically generated by the MediaWiki 1.35.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Sway Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = getenv("FQ_URL");

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ 'svg' => "https://minio.swayme.xyz/assets/logo.svg" ];
$wgFavicon = "https://minio.swayme.xyz/assets/logo.svg";
## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@🌻.invalid";
$wgPasswordSender = "info@swayme.xyz";

$wgSMTP = [
    'host' => 'ssl://mail.privateemail.com', // outbox server of the email account
    'IDHost' => 'swayme.xyz',
    'port' => 465,
    'username' => 'info@swayme.xyz', // user of the email account
    'password' => getenv("EMAIL_PASSWORD"), // app password of the email account
    'auth' => true
];

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Debug Settings
$wgShowExceptionDetails = getenv("DEBUG");
$wgShowDBErrorBacktrace = getenv("DEBUG");
$wgShowSQLErrors = getenv("DEBUG");


## Database settings
$wgDBname = getenv("DB_NAME");
$wgDBpassword = getenv("DB_PASSWORD");
$wgDBserver = getenv("DB_SERVER");
$wgDBuser = "swayme";
$wgDBtype = "mysql";


# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "e92870d6e83d266cb7a357d5b951f869920519ea5161c96a6c06adf373057bab";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "688820391a596b3a";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "GNU Free Documentation License 1.3 or later";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/gnu-fdl.svg";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'Vector' );

if (preg_match("/(mobile|webos|opera mini|android|blackberry|tablet)/i", $_SERVER['HTTP_USER_AGENT'])) {
    $wgDefaultSkin = 'minerva';
} else{
    $wgDefaultSkin = 'vector';
}

$wgCachePages = getenv("DEBUG");
$wgGroupPermissions['*']['edit'] = false;

# End of automatically generated settings.
# Add more configuration options below.

