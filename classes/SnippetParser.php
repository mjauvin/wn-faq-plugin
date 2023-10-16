<?php namespace StudioAzura\FAQ\Classes;

use Cms\Classes\Theme;
use Cms\Classes\Controller as CmsController;

use Winter\Pages\Classes\Snippet;

class SnippetParser extends Snippet
{
    public static function parse($markup, $params = [])
    {
        $theme = Theme::getActiveTheme();
        $controller = CmsController::getController();

        $map = self::extractSnippetsFromMarkup($markup, $theme);

        foreach ($map as $snippetDeclaration => $snippetInfo) {
            $snippetCode = $snippetInfo['code'];

            if (isset($snippetInfo['component'])) {
                // The snippet is a component registered as a snippet
                $snippetAlias = SnippetLoader::registerComponentSnippet($snippetInfo);
                $generatedMarkup = $controller->renderComponent($snippetAlias, $params);
            }
            else {
                // The snippet is a partial
                $partialName = SnippetLoader::registerPartialSnippet($snippetInfo);
                $generatedMarkup = $controller->renderPartial($partialName, array_merge($params, $snippetInfo['properties']));
            }

            $pattern = preg_quote($snippetDeclaration);
            $markup = mb_ereg_replace($pattern, $generatedMarkup, $markup);
        }

        return $markup;
    }
}
