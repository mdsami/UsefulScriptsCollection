# Useful Scripts Collection
In this repository I'll share with you some small (or not) script that help me in my daily work routine and might help you too! :smile:

# Available Scripts
## Bash
### Commit

This is just a small script written in Bash that helps you manage your commits and pushes to the Git server.

It's a quite simple script but allows me to save a few lines of commands, just that stupid. :smile:

I've tested this in:
- Mac OS X
- Linux Mint 

#### Instructions

- Download the script to your computer
- Type "mv commit /usr/local/bin && chmod +x commit" (That way you don't need to modify you PATH variable :smile: )
- To start using all you must do is type the following command:
    - commit [dir] [message] push
- If you want to commit using your configured GPG key:
    - commit [dir] [message] push safe
- If you want to commit but you don't want to push your changes yet:
    - commit [dir] [message]

#### Usage examples
**commit ~/projects/newProject "Commit message for your new project" push**

Commits all the changed files in ~/projects/newProject with the message "Commit message for your new project" and then pushes the changes to the server

**commit ~/projects/newProject "Commit message for your new project and signing using GPG" push safe**

Commits all the changed files in ~/projects/newProject with the message "Commit message for your new project and signing using GPG" and then pushes the changes to the server, using your GPG key to sign your commit

**commit ~/projects/otherProject "I'm commiting... but not pushing"**

Commits all the changed files in ~/projects/otherProject with the message "I'm commiting... but not pushing" but it doesn't push any changes yet

## PHP
### Find array deepness 

This is just a small script written in PHP by [ScalioXTX] that tells you the deepness of the value you want to search in the nested array.

#### Usage examples
```php
var_dump(array_find_deep($array, 'valueYouWantToLookup'));
```

# FAQ's
## Will there be more scripts?
Yes, I'm counting on adding more scripts as I write them to improve my work routines :relaxed:

## Mind if I use this code and make it better?
Not at all. Suit yourself!

## Can I share my own scripts as well?
Sure! Just open a PR :raised_hands:


   [ScalioXTX]: https://www.scallioxtx.com/
