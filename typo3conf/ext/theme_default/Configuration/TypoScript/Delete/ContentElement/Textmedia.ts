##########################
#### CTYPE: TEXTMEDIA ####
##########################

tt_content.textmedia >
tt_content.textmedia = FLUIDTEMPLATE
tt_content.textmedia {

    ################
    ### TEMPLATE ###
    ################
    templateName = TEXT
    templateName.stdWrap.cObject = CASE
    templateName.stdWrap.cObject {

        key.field = imageorient

        8 = TEXT
        8.value = TextmediaBelow

        25 = TEXT
        25.value = TextmediaRight

        26 = TEXT
        26.value = TextmediaLeft
        
        100 = TEXT
        100.value = TextmediaInside

        default = TEXT
        default.value = TextmediaAbove

    }
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
            references.fieldName = assets
        }
    }

}
