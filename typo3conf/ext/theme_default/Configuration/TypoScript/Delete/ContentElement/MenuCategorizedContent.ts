############################################
#### CTYPE: MENU OF CATEGORIZED CONTENT ####
############################################

tt_content.menu.categorized_content = FLUIDTEMPLATE
tt_content.menu.categorized_content {

    ################
    ### TEMPLATE ###
    ################
    templateName = MenuCategorizedContent
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
        10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        10 {
            table = tt_content
            selectFields = tt_content.*
            groupBy = uid
            pidInList.data = leveluid : 0
            recursive = 99
            join.data = field:selected_categories
            join.wrap = sys_category_record_mm ON uid = sys_category_record_mm.uid_foreign AND sys_category_record_mm.uid_local IN(|)
            where.data = field:category_field
            where.wrap = tablenames='tt_content' and fieldname='|'
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

