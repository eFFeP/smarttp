<?php
// Carica le variabili d'ambiente se presenti
$dbHost = getenv('_JENV_DB_HOST');
$dbUser = getenv('_JENV_DB_USER');
$dbPassword = getenv('_JENV_DB_PASSWORD');
$dbName = getenv('_JENV_DB_NAME');

// Classe JConfig
class JConfig {
    public $offline = false;
    public $offline_message = 'Sito fuori servizio per manutenzione.<br> Riprovare più tardi.';
    public $display_offline_message = 1;
    public $offline_image = '';
    public $sitename = 'Smart TP';
    public $editor = 'tinymce';
    public $captcha = '0';
    public $list_limit = 20;
    public $access = 1;
    public $debug = false;
    public $debug_lang = false;
    public $debug_lang_const = true;
    public $host;
    public $user;
    public $password;
    public $db;
    public $dbtype = 'pgsql';
    public $dbprefix = 'x6uws_';
    public $dbencryption = 0;
    public $dbsslverifyservercert = false;
    public $dbsslkey = '';
    public $dbsslcert = '';
    public $dbsslca = '';
    public $dbsslcipher = '';
    public $force_ssl = 0;
    public $live_site = '';
    public $secret = 'IRY7tu651dfHs2xM';
    public $gzip = false;
    public $error_reporting = 'default';
    public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
    public $offset = 'UTC';
    public $mailonline = true;
    public $mailer = 'mail';
    public $mailfrom = 'fabrizio@pellegrini.biz';
    public $fromname = 'Smart TP';
    public $sendmail = '/usr/sbin/sendmail';
    public $smtpauth = false;
    public $smtpuser = '';
    public $smtppass = '';
    public $smtphost = 'localhost';
    public $smtpsecure = 'none';
    public $smtpport = 25;
    public $caching = 0;
    public $cache_handler = 'file';
    public $cachetime = 15;
    public $cache_platformprefix = false;
    public $MetaDesc = '';
    public $MetaAuthor = true;
    public $MetaVersion = false;
    public $robots = '';
    public $sef = true;
    public $sef_rewrite = false;
    public $sef_suffix = false;
    public $unicodeslugs = false;
    public $feed_limit = 10;
    public $feed_email = 'none';
    public $log_path = '/Applications/XAMPP/xamppfiles/htdocs/joomla/administrator/logs';
    public $tmp_path = '/Applications/XAMPP/xamppfiles/htdocs/joomla/tmp';
    public $lifetime = 15;
    public $session_handler = 'database';
    public $shared_session = false;
    public $session_metadata = true;

    public function __construct() {
        global $dbHost, $dbUser, $dbPassword, $dbName;
        $this->host = $dbHost ?: 'localhost';
        $this->user = $dbUser ?: 'postgres';
        $this->password = $dbPassword ?: 'Moni140585??';
        $this->db = $dbName ?: 'joomla_db';
    }
}
