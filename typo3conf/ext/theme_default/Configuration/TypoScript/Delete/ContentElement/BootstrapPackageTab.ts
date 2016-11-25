######################################
#### CTYPE: BOOTSTRAP PACKAGE TAB ####
######################################

tt_content.bootstrap_package_tab >
tt_content.bootstrap_package_tab = FLUIDTEMPLATE
tt_content.bootstrap_package_tab {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultTab
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

    ################
    ### SETTINGS ###
    ################
    settings {
        media {
            width = {$plugin.bootstrap_package_contentelements.settings.tab.media.height}
            height = {$plugin.bootstrap_package_contentelements.settings.tab.media.width}
            preload = {$config.preloadImages}
        }
        lightbox {
            cssClass = {$plugin.bootstrap_package_contentelements.lightbox.cssClass}
            prefix = {$plugin.bootstrap_package_contentelements.lightbox.prefix}
        }
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = BK2K\ThemeDefault\DataProcessing\FlexFormProcessor
        20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        20 {
            table = tx_ThemeDefault_tab_item
            where {
                data = field:uid
                intval = 1
                wrap = tt_content=|
            }
            orderBy = sorting
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
            }
        }
    }

}
