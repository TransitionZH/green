#############################
#### CTYPE: MENU SITEMAP ####
#############################

tt_content.menu.2 = FLUIDTEMPLATE
tt_content.menu.2 {

    ################
    ### TEMPLATE ###
    ################
    templateName = MenuSitemap
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
            special = list
            special.value.field = pages
            levels = 7
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
            }
        }
    }

}
