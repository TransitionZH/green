#################################################
#### CTYPE: BOOTSTRAP PACKAGE EXTERNAL MEDIA ####
#################################################

tt_content.bootstrap_package_external_media >
tt_content.bootstrap_package_external_media = FLUIDTEMPLATE
tt_content.bootstrap_package_external_media {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultExternalMedia
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

}
