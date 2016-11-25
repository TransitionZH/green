#############################################################
#### CTYPE: MENU OF SUBPAGES TO THESE PAGES AND SECTIONS ####
#############################################################

tt_content.menu.7 = FLUIDTEMPLATE
tt_content.menu.7 {

    ################
    ### TEMPLATE ###
    ################
    templateName = MenuOfSubpagesToThesePagesAndSections
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
        10 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
        10 {
            special = directory
            special.value.field = pages
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
                20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
                20 {
                    table = tt_content
                    pidInList.field = uid
                    as = content
                    dataProcessing {
                        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                        10 {
                            references.fieldName = image
                        }
                    }
                }
            }
        }
    }

}
