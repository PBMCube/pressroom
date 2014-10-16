<?php
define( "TPL_PLUGIN_PATH", dirname(__FILE__ ) . '/../' );
define( "TPL_LIBS_PATH", dirname(__FILE__) . '/' );
define( "TPL_VENDORS_PATH", TPL_LIBS_PATH . 'vendors/' );
define( "TPL_CORE_PATH", TPL_PLUGIN_PATH . 'core/' );
define( "TPL_THEME_PATH", TPL_PLUGIN_PATH . 'themes/' );
define( "TPL_EXTENSIONS_PATH", TPL_PLUGIN_PATH . 'extensions/' );

/* API */
define( "TPL_API_DIR", TPL_PLUGIN_PATH . 'api/' );
define( "TPL_HPUB_DIR", TPL_API_DIR . 'hpub/' );
define( "TPL_TMP_DIR", TPL_API_DIR . 'tmp/' );
define( "TPL_PREVIEW_DIR", TPL_TMP_DIR . 'preview/' );
define( "TPL_SHELF_DIR", TPL_API_DIR . 'shelf/' );

define( "TPL_PLUGIN_URI", plugin_dir_url(TPL_LIBS_PATH) );
define( "TPL_CORE_URI", TPL_PLUGIN_URI . 'core/' );
define( "TPL_SHELF_URI", TPL_PLUGIN_URI . 'api/shelf/' );
define( "TPL_PLUGIN_ASSETS", TPL_PLUGIN_URI. 'assets/' );
define( "TPL_HPUB_URI", TPL_PLUGIN_URI . 'api/hpub/' );
define( "TPL_THEME_URI", TPL_PLUGIN_URI . 'themes/' );
define( "TPL_PREVIEW_URI", TPL_PLUGIN_URI . 'api/tmp/preview/' );

/* Packager */
define( "TPL_EDITION_MEDIA", 'gfx/' );

/* Custom posts type */
define( "TPL_EDITION", 'tpl_edition' );
define( "P2P_EDITION_CONNECTION", 'edition_post' );

/* Custom taxonomies */
define( "TPL_EDITORIAL_PROJECT", 'tpl_editorial_project' );

/* Database */
define( "TPL_TABLE_RECEIPTS", 'tpl_receipts' );
define( "TPL_TABLE_PURCHASED_ISSUES", 'tpl_purchased_issues' );
define( "TPL_TABLE_APNS_TOKENS", 'tpl_apns_tokens' );

/* ADBundle */
define( "TPL_AD_BUNDLE", 'tpl_adbundle' );
