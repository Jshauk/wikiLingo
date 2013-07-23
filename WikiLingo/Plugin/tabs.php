<?php
class WikiLingo_Plugin_tabs extends WikiLingo_Plugin_HtmlBase
{
    public $tabs = '';

    public function render(&$plugin, &$parser)
    {
        $this->paramDefaults($plugin->parameters);

        //add a js src to the page like this: $parser->addScriptLocation("location");
        //add js to the page like this: $parser->addScript("location");
        //add css to the page like this: $parser->addCssLocation("location");
        //split content by "/////"
        $child = new WikiLingo_Expression();
        $plugin->body->addChild($child);

        return parent::render($plugin, $parser);
    }
}

