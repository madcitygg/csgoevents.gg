## csgoevents.gg

> csgoevents.gg is a directory of CS:GO events and tournaments running in North America.

This repo serves as the Vagrantfile, WordPress installation and contains all the theme files as well as plugins.

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

### MySQL Database Access

```
| Database Name | csgoeventsgg |
| Database User | root |
| Database Password | root |
| Database Host | localhost |
| SSH Host | 192.168.33.11 |
| SSH User | vagrant |
| SSH Password | vagrant |
```

### WP Credentials

```
| User | madcitygg |
| Password | QcKkM9HYMPDBP9 |
```
