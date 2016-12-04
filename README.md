## csgoevents.gg

> csgoevents.gg is a directory of CS:GO events and tournaments running in North America.

This repository serves as the Vagrantfile, WordPress installation and contains all the theme files and plugins required for the site.

### Environment Setup

Download [Vagrant](https://www.vagrantup.com/downloads.html)

Download [Virtual Box](https://www.virtualbox.org/wiki/Downloads)

We're using [Scotch Box](http://box.scotch.io/) for the fully configured Vagrant box. The first thing you're going to do is set that up.

```bash
$ cd [SITE DIRECTORY]
$ git clone git@github.com:madcitygg/csgoevents.gg.git
$ cd csgoevents.gg
$ vagrant up
```

### If you get the error:

The box 'scotch/box' could not be found or
could not be accessed in the remote catalog. If this is a private
box on HashiCorp's Atlas, please verify you're logged in via
`vagrant login`. Also, please double-check the name. The expanded
URL and error message are shown below:

Try this (don't do the `vagrant login` as it describes):
[http://stackoverflow.com/questions/40473943/vagrant-box-could-not-be-found-or-could-not-be-accessed-in-the-remote-catalog](http://stackoverflow.com/questions/40473943/vagrant-box-could-not-be-found-or-could-not-be-accessed-in-the-remote-catalog)

### Local MySQL Database Access

```
| Database User | root |
| Database Password | root |
| Database Host | 127.0.0.1 |
| SSH Host | 192.168.33.11 |
| SSH User | vagrant |
| SSH Password | vagrant |
```

### WP-API Documentation
[http://v2.wp-api.org/](http://v2.wp-api.org/)
