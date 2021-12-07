# @(#)Cshrc 1.4 90/10/25 SMI
#################################################################
#
#         .cshrc file
#
#         initial setup file for both interactive and noninteractive
#         C-Shells
#
#    promjene dodao Mrki 5.01.96, 20.02.96
#
#################################################################

set lcd = ( )  #  add parents of frequently used directories
set prompt="`/bin/hostname`> "
set cdpath = (.. ~ ~/bin ~/src $lcd)

set path=( ~/bin $path . )

#         set this for all shells
set autolist=ambiguous
set noclobber

#         aliases for all shells

alias cd            'cd \!*;echo $cwd'
alias cp            'cp -i'
alias mv            'mv -i'
alias rm            'rm -i'
alias pwd           'echo $cwd'
alias m more
alias f finger
alias l ls -ls
alias la ls -a
alias ll ls -al
alias h history
alias dir 'ls -alF \!* |more'


#         skip remaining setup if not an interactive shell

if ($?USER == 0 || $?prompt == 0) exit

#          settings  for interactive shells
set history=50
#set ignoreeof

set term=vt100
