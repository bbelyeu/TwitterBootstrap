CakePhp 2.x Plugin for Twitter Bootstrap

The plugin adds two elements.
1. For including the bootstrap css in the html head
2. For including the bootstrap js at the bottom of your html

Steps to install:
1. Clone this plugin in your app/Plugins folder.
2. Then add the line "CakePlugin::load('TwitterBootstrap');" to Config/bootstrap.php
3. Then use the element in any view file.
	example:
	echo $this->element('twitter_bootstrap_css', array(), array(
		'plugin' => 'TwitterBootstrap'
	);

Link for help using the plugins elements:
http://book.cakephp.org/2.0/en/plugins.html
http://book.cakephp.org/2.0/en/views.html#requesting-elements-from-a-plugin
