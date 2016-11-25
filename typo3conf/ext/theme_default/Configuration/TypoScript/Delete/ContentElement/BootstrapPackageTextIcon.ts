###########################################
#### CTYPE: BOOTSTRAP PACKAGE TEXTICON ####
###########################################

tt_content.bootstrap_package_texticon >
tt_content.bootstrap_package_texticon = FLUIDTEMPLATE
tt_content.bootstrap_package_texticon {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultTextIcon
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
