smarty-placeholder
==================

New function for smarty for quickly creating placeholder images

Currently hard coded to use http://placehold.it, but this is easy to edit

Usage;

<code>{placeholder width="300" height="150" class="img-class" text="Placeholder" bg-color="#000" text-color="#f00660"}</code>

Defaults;

 * Width => 350
 * Height => 150
 * Class => none
 * Text => none (placehold.it defaults to "_width_x_height_")
 * Background Color => none (placehold.it defaults to "#ccc")
 * Text Color => none (placehold.it defaults to "#969696")

Tested with Smarty 3, but there is no reason it won't work in Smarty 2.
