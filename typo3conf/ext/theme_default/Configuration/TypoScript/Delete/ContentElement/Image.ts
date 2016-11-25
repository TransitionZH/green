######################
#### CTYPE: IMAGE ####
######################

tt_content.image >
tt_content.image = FLUIDTEMPLATE
tt_content.image {

    ################
    ### TEMPLATE ###
    ################
    templateName = Image
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
            preload = {$config.preloadImages}
        }
        lightbox {
            cssClass = {$plugin.bootstrap_package_contentelements.lightbox.cssClass}
            prefix = {$plugin.bootstrap_package_contentelements.lightbox.prefix}
        }
        maxWBigger = {$plugin.bootstrap_package_contentelements.media.maxWBigger}
        maxWLarge = {$plugin.bootstrap_package_contentelements.media.maxWLarge}
        maxWMedium = {$plugin.bootstrap_package_contentelements.media.maxWMedium}
        maxWSmall = {$plugin.bootstrap_package_contentelements.media.maxWSmall}
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = image
        }
    }

}
