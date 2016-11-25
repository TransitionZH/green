######################
#### CTYPE: TABLE ####
######################

tt_content.table >
tt_content.table = FLUIDTEMPLATE
tt_content.table {

    ################
    ### TEMPLATE ###
    ################
    templateName = Table
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

        10 = TYPO3\CMS\Frontend\DataProcessing\CommaSeparatedValueProcessor
        10 {
            fieldName = bodytext
            fieldDelimiter.char.cObject = TEXT
            fieldDelimiter.char.cObject {
                field = table_delimiter
            }
            fieldEnclosure.char.cObject = TEXT
            fieldEnclosure.char.cObject {
                field = table_enclosure
            }
            as = table
        }

    }

}
