###########################################
#### CTYPE: BOOTSTRAP PACKAGE CAROUSEL ####
###########################################

tt_content.bootstrap_package_carousel >
tt_content.bootstrap_package_carousel = FLUIDTEMPLATE
tt_content.bootstrap_package_carousel {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultCarousel
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
        10 = BK2K\ThemeDefault\DataProcessing\FlexFormProcessor
    }

}
