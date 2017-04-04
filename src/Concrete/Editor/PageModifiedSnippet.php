<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Concrete\Core\Support\Facade\Application;
use Page;

class PageModifiedSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            $dateLastModified = $c->getCollectionDateLastModified();
            $app = Application::getFacadeApplication();
            $formattedDateTime = $app->make('helper/date')->formatDateTime($dateLastModified);

            return $formattedDateTime;
        }
    }
}
