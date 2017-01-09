<?php
namespace TransitionTeam\ThemeDefault\ViewHelpers;

use TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Fluid\Core\ViewHelper\Facets\CompilableInterface;

/**
 * @author Benno Flory
 */
class GPViewHelper extends AbstractViewHelper implements CompilableInterface
{

    /**
     * Render
     *
     * @param string $name
     * @return string
     */
    public function render($name = null)
    {
        return htmlspecialchars(\TYPO3\CMS\Core\Utility\GeneralUtility::_GP($name), ENT_QUOTES);
    }

}
