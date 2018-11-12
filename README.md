# Show All The Hooks

## Using

This extension will show all the hooks called by CiviCRM. The hook implementations are all in `showallthehooks.hooks.php`, and you'll find you can enable more debug about what parameters get passed in by uncommenting the additional debug in each hook.

## Additional output strategies

Improvements to output are most welcome. If you want to add support for a new means of debugging, look at the existing `_showallthehooks_debug` method and slot in your approach. For now, it's roughly ordered by specificity, ie the interface to prefer debug method A over B is to locate A first in that function. There's no UI to select preferred output.

## Updating

If a new hook is added, or if you have hacked the hook implementation and want to restore the original .hooks code, you can use this `cv` command in the extension directory.

    cv ev 'print _showallthehooks_generate_hooks()' > showallthehooks.hooks.php

For WordPress, you'll need to regenerate the WordPress hooks file with a similar command:

    cv ev 'print _showallthehooks_generate_hooks_wp()' > showallthehooks.wp.php
