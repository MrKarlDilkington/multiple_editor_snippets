<?php
namespace Concrete\Package\MultipleEditorSnippets;

use Concrete\Core\Editor\Snippet;
use Package;

class Controller extends Package
{
    protected $pkgHandle = 'multiple_editor_snippets';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.9';
    // if the $appVersionRequired is "8.0" $pkgAutoloaderMapCoreExtensions is not required
    protected $pkgAutoloaderMapCoreExtensions = true;

    public function getPackageName()
    {
        return t('Multiple Editor Snippets');
    }

    public function getPackageDescription()
    {
        return t('Add multiple snippets to the rich text editor.');
    }

    public function install()
    {
        $pkg = parent::install();

        // add($scsHandle, $scsName, $pkg = false)
        // - $scsHandle is the snippet class name, minus "Snippet", and in snake_case (lowercase and words spaced with underscores)
        // activate()
        // - using method chaining, activate() is applied to the new snippet created
        Snippet::add('page_added', 'Page Added', $pkg)->activate();
        Snippet::add('page_author_name', 'Page Author Name', $pkg)->activate();
        Snippet::add('page_modified_author_name', 'Page Modified Author Name', $pkg)->activate();
        Snippet::add('page_modified', 'Page Modified', $pkg)->activate();
        Snippet::add('page_type_name', 'Page Type Name', $pkg)->activate();
        Snippet::add('parent_page_name', 'Parent Page Name', $pkg)->activate();

        /*when the package is uninstalled, the snippets will be removed from the SystemContentEditorSnippets table*/
    }
}
