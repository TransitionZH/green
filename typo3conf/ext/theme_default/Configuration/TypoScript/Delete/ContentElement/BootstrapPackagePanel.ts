########################################
#### CTYPE: BOOTSTRAP PACKAGE PANEL ####
########################################

tt_content.bootstrap_package_panel >
tt_content.bootstrap_package_panel = FLUIDTEMPLATE
tt_content.bootstrap_package_panel {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultPanel
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
