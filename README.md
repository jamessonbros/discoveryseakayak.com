# DiscoverySeaKayak.com

WordPress-based website, custom theme based on Roots.io.

## Installing locally

1. Clone the repository to your local workstation
    
        $ git clone https://github.com/jamessonbros/discoveryseakayak.com ~/path/to/local/project

2. Copy `wp-config-sample.php` to `wp-config.php` in the same directory (outside of `wp/`, next to `wp/`):
    
        dsk/
          wp-config.php
          wp/

3. Edit `wp-config.php` w/ local database credentials.
4. Add the following to `wp-config.php`, just before the database configs, replacing the host with your actual local host.
    
        define('WP_HOME', 'http://localhost:8888/path/to/wp');
        define('WP_SITE', 'http://localhost:8888/path/to/wp');

