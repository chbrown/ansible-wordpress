## Instructions

## Install `ansible`

**First**, install [homebrew](http://brew.sh/):

    ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

**Second**, using Homebrew, install [ansible](http://www.ansible.com/home):

    brew install ansible

**Third**, edit the `droplet.yaml` "playbook" in this folder. You might want to:

1. Change the Droplet name (currently set to `mysterymachine`)
2. Change the Digital Ocean region (currently set to New York City)

**Fourth**, set up a few variables with your credentials

    ANSIBLE_HOST_KEY_CHECKING=False
    DO_CLIENT_ID=<your digital ocean client id>
    DO_API_KEY=<your digital ocean api key>

**Fifth**, run the playbook with ansible:

    ansible-playbook droplet.yaml

**Sixth**, finish installing WordPress. The output of that last command will say something like:

> Open http://104.131.64.126/wp-admin/install.php in your browser

Except that the `104.131.64.126` bit will be different. Copy that url into your browser and follow Wordpress's directions from there. After you do that, you're done!

**Cleaning up**

Ansible will have created a file called `tmp/mysql_blog_password`. You might want to take note of that.


## Helpful references

* http://www.howtoforge.com/how-to-install-wordpress-on-centos-7
* http://www.cyberciti.biz/faq/howto-install-linux-apache-mariadb-php-lamp-stack-on-centos7-rhel7/
