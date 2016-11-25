#####################
#### CTYPE: MENU ####
#####################

tt_content.menu >
tt_content.menu = CASE
tt_content.menu {

    key.field = menu_type

    # "Menu of these pages"
    default = FLUIDTEMPLATE
    default {

        ################
        ### TEMPLATE ###
        ################
        templateName = Menu
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

                dataProcessing {
                    10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                    10 {
                        references.fieldName = media
                    }
                }
            }
        }

    }

}
