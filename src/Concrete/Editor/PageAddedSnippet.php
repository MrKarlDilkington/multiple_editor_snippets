<?php
namespace Concrete\Package\MultipleEditorSnippets\Editor;

use Concrete\Core\Editor\Snippet;
use Concrete\Core\Support\Facade\Application;
use Page;

class PageAddedSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();

        if (is_object($c)) {
            $dateAdded = $c->getCollectionDateAdded();
            $app = Application::getFacadeApplication();
            $formattedDateTime = $app->make('helper/date')->formatDateTime($dateAdded);

            return $formattedDateTime;
        }
    }
}
