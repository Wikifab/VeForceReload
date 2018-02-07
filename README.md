# VE Force Reload


Description
===============

Mediawiki extension to force reload page after an edition with Visual Editor.


When editing a page with visual editor, after saving editions, the page is not reload, but the content is replace by the new in javascript, after the api call to save the page.
This may cause some troubles with the layout in some specials cases. So by enabling this extension, the page is always reload after a Visual editor edition.

Installation
===============

1. Put VeForceReload into the 'extensions' directory of your mediawiki installation
2. add the folling Line to your LocalSettings.php file :
> wfLoadExtension('VeForceReload');

done !


MediaWiki Versions
===============
Version 1.0 of this extension has been tested on MediaWiki version 1.29 
