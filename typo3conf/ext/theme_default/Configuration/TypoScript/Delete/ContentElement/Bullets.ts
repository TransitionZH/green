########################
#### CTYPE: BULLETS ####
########################

tt_content.bullets >
tt_content.bullets = FLUIDTEMPLATE
tt_content.bullets {

    ################
    ### TEMPLATE ###
    ################
    templateName = Bullets
    templateRootPaths {
        0 = EXT:theme_default/Resources/Private/Templates/ContentElements/
        10 = {$plugin.bootstrap_package_contentelements.view.templateRootPath}
    }
    partialRootPaths {
        0 = EXT:theme_default/Resources/Private/Partials/ContentElements/
        10 = {$plugin.bootstrap_package_contentelements.view.partialRootPath}
    }
    layoutRootPaths {
        0 = EXT:theme_default/Resources/Private/Layouts/ContentElements/
        10 = {$plugin.bootstrap_package_contentelements.view.layoutRootPath}
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\SplitProcessor
        10 {
            fieldName = bodytext
            removeEmptyEntries = 1
            as = bullets
        }
    }

}
