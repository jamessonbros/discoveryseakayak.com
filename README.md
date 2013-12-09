# DiscoverySeaKayak.com

WordPress-based website, custom theme based on Roots.io.

## Installing locally

1. Clone the repository to your local workstation
    
        $ git clone https://github.com/jamessonbros/discoveryseakayak.com ~/path/to/local/project

2. Copy `wp-config-sample.php` to `wp-config.php` in the same directory (outside of `wp/`, next to `wp/`):
    
        dsk/
          README.md
          wp-config-sample.php
          wp-config.php
          wp/

3. Edit `wp-config.php` w/ local database credentials.
4. Add the following to `wp-config.php`, just before the database configs, replacing the host with your actual local host.
    
        define('WP_HOME', 'http://localhost:8888/path/to/wp');
        define('WP_SITEURL', 'http://localhost:8888/path/to/wp');

5. Point your local web server's (ie MAMP) document root to the `wp/` directory. Full path to `DOCUMENT_ROOT` might be something like `/Users/myusername/Sites/dsk/wp/` and restart the web server.

## Working locally

When developing, use a terminal to work with roots.

        $ cd path/to/local/dsk
        $ cd wp/wp-content/themes/dsk
        $ grunt dev
        # (Ctrl+C) to stop Grunt task

When reaching a point where you're ready to commit to the repository, first run `git status` to see an overview of your changes:

        $ git status

If you've created any **new** files, you'll need to add them to the git repo. This tells git to track these files.

        $ git add -A

Then you need to commit your changes to the repository. Include a message for the commit. In the example below, replace "Updated header links" with an actual message.

        $ git commit -am 'Updated header links'

Then push it to the remote repository:

        $ git push origin master

* `push` - *Push* my local copy to the remote repository
* `origin` - the name of remote repository, in this case origin lives on github
* `master` - the name of the branch to which we're pushing changes - this is typically `master`

Then visit https://github.com/jamessonbros/discoveryseakayak.com in the browser, and you should see your commit message and your updated file(s).

**That's the basic workflow when dealing with git.**

## Pushing to dev/production environments

Eventually you'll be able to push to a production environment by issuing a command similar to 

        $ git push web master

* `web` - the remote, in that case, this is the production server
* `master` - the same branch we use for development