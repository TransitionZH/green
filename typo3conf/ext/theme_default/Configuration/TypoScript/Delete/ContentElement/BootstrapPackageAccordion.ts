############################################
#### CTYPE: BOOTSTRAP PACKAGE ACCORDION ####
############################################

tt_content.bootstrap_package_accordion >
tt_content.bootstrap_package_accordion = FLUIDTEMPLATE
tt_content.bootstrap_package_accordion {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultAccordion
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
            width = {$plugin.bootstrap_package_contentelements.settings.accordion.media.height}
            height = {$plugin.bootstrap_package_contentelements.settings.accordion.media.width}
        }
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        10 {
            table = tx_ThemeDefault_accordion_item
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
