############################################################
#### CTYPE: DEFAULT                                     ####
#### This template is used when TYPO3 is unable to find ####
#### a rendering definition for the given cType.        ####
############################################################

tt_content.default >
tt_content.default = FLUIDTEMPLATE
tt_content.default {

    ################
    ### TEMPLATE ###
    ################
    templateName = Default
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
