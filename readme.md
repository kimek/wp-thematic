# What to do…

A slimmed down version of [_s](http://underscores.me/)

I've changed it all to PHP_CodeSniffer standard, ish. It's a bit difficult in
templates where you're jumping in and out of php. WordPress has different standards so this is in violation, but I prefer it this way.

# What To Do
* Do a find replace on `THEME_NAME` with your new theme name. There will be 159
matches across 18 files.
* Rename `THEME_NAME/wp/languages/THEME_NAME.pot` to your new theme name.