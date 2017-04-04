<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Page;
use UserInfo;

class PageAuthorNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            $user = UserInfo::getByID($c->getCollectionUserID());
            if (is_object($user)) {
                return $user->getUserDisplayName();
            }
        }
    }
}
