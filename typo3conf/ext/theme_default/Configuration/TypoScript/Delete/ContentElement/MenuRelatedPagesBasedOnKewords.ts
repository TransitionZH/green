#####################################################
#### CTYPE: MENU RELATED PAGES BASED ON KEYWORDS ####
#####################################################

tt_content.menu.6 = FLUIDTEMPLATE
tt_content.menu.6 {

    ################
    ### TEMPLATE ###
    ################
    templateName = MenuRelatedPagesBasedOnKewords
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
            special = keywords
            special {
                value.field = pages
                excludeNoSearchPages = 1
            }
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
            }
        }
    }

}
