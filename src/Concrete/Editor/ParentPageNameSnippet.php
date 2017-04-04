<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Page;

class ParentPageNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            $parent = Page::getByID($c->getCollectionParentID());
            if (is_object($parent)) {
                return $parent->getCollectionName();
            }
        }
    }
}
