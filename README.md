## Instructions

**First**, install [homebrew](http://brew.sh/) if you haven't already:

    ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

**Second**, using Homebrew, install [ansible](http://www.ansible.com/home):

    brew install ansible

You could also use [Cakebrew](https://www.cakebrew.com/) for this, which is a GUI for Homebrew, but since you still have to install Homebrew from the command line anyway (c'mon Bruno, Marek, what's the hold-up?), it's not really worth it.

**Third**, edit the `droplet.yaml` "playbook" in this folder. You might want to:

1. Change the Droplet name (currently set to `mysterymachine`)
2. Change the Digital Ocean region (currently set to New York City)

**Fourth**, set up a few variables with your credentials

Go to the [API v1 Access](https://cloud.digitalocean.com/api_access) page. Click "Generate new key" and Copy the resulting Client ID and API Key as specified below. Apparently this method is deprecated, which explains why you can't find a direct link to that page in the Digital Ocean admin, but it works and it's convenient.

    export DO_CLIENT_ID=<your digital ocean client id>
    export DO_API_KEY=<your digital ocean api key>

Also, because we like living on the edge (aren't paranoid):

    export ANSIBLE_HOST_KEY_CHECKING=False

**Fifth**, run the playbook with ansible:

    ansible-playbook droplet.yaml

**Sixth**, finish installing WordPress. The output of that last command will say something like:

> Open http://104.131.64.126/wp-admin/install.php in your browser

Except that the `104.131.64.126` bit will be different. Copy that url into your browser and follow WordPress's directions from there. After you do that, you're done!

**Cleaning up**

Ansible will have created a file called `tmp/mysql_blog_password`. You might want to take note of that.


## Cost

As soon as you run the ansible-playbook command, Digital Ocean will start charging your account. The minimum is one hour. Even if you destroy your droplet immediately, you will still be charged a $0.01. That's right, 1 penny! Highway robbery, amirite? No really, that's quite a deal for your very own VPS, and means that you should feel free to run the steps above to get a handle on Digital Ocean even if you don't like WordPress.


## Helpful references

* http://www.howtoforge.com/how-to-install-wordpress-on-centos-7
* http://www.cyberciti.biz/faq/howto-install-linux-apache-mariadb-php-lamp-stack-on-centos7-rhel7/
