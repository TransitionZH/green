########################
#### CTYPE: UPLOADS ####
########################

tt_content.uploads >
tt_content.uploads = FLUIDTEMPLATE
tt_content.uploads {

    ################
    ### TEMPLATE ###
    ################
    templateName = Uploads
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
        preview {
            height = {$plugin.bootstrap_package_contentelements.uploads.preview.height}
            width = {$plugin.bootstrap_package_contentelements.uploads.preview.width}
        }
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = media
            collections.field = file_collections
            sorting.field = filelink_sorting
        }
    }

}
