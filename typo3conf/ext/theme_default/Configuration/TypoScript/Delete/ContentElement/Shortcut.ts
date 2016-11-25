#########################
#### CTYPE: SHORTCUT ####
#########################

tt_content.shortcut >
tt_content.shortcut = FLUIDTEMPLATE
tt_content.shortcut {

    ################
    ### TEMPLATE ###
    ################
    templateName = Shortcut
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

    #################
    ### VARIABLES ###
    #################
    variables {
        shortcuts = RECORDS
        shortcuts {
            source.field = records
            tables = tt_content
        }
    }

}
