<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Page;

class PageTypeNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            return $c->getPageTypeName();
        }
    }
}
