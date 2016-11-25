############################################
#### CTYPE: BOOTSTRAP PACKAGE LISTGROUP ####
############################################

tt_content.bootstrap_package_listgroup >
tt_content.bootstrap_package_listgroup = FLUIDTEMPLATE
tt_content.bootstrap_package_listgroup {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultListGroup
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
            as = items
        }
    }

}
