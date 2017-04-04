<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Page;
use UserInfo;

class PageModifiedAuthorNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            $lastModifiedAuthorUserID = $c->getVersionObject()->getVersionAuthorUserID();
            $lastModifiedAuthorUser = UserInfo::getByID($lastModifiedAuthorUserID);
            if (is_object($lastModifiedAuthorUser)) {
                return $lastModifiedAuthorUser->getUserName();
            }
        }
    }
}
