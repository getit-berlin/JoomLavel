<?php
class JConfig {
	#APP
	public $live_site = '';
	public $sitename = 'joomlavel-joomla-dev';	
	
	#DB
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'root';
	public $password = '';
	public $db = 'joomlavel-joomla-dev';
	public $dbprefix = 'f862e_';
	
	#SESSION
	public $session_handler = 'database';
	public $shared_session = '0';
	public $lifetime = '15';
		
	#MAIL
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'mail@joomlavel-joomla.test';
	public $fromname = 'joomlavel-joomla-dev';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';	
	
	#JOOMLA Site
	public $offline = '1';
	public $offline_message = 'Diese Website ist zurzeit im Wartungsmodus.<br />Bitte später wiederkommen.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $editor = 'tinymce';
	public $list_limit = '20';
	public $access = '1';
	
	#JOOMLA Debug
	public $debug = '0';
	public $debug_lang = '0';
	public $debug_lang_const = '1';
	public $error_reporting = 'default';
	public $log_path = '..\\JoomLavel-Joomla-dev\\administrator/logs';
	public $tmp_path = '..\\JoomLavel-Joomla-dev/tmp';
	
	#JOOMLA FTP
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	
	#JOOMLA CACHE
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	
	#JOOMLA META
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	
	#JOOMLA MISC
	public $captcha = '0';
	public $secret = 'BcjpjCc3vhvj19Hc';
	public $gzip = '0';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';	
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	
}
