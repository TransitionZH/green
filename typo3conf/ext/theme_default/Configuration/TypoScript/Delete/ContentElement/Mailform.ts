#########################
#### CTYPE: MAILFORM ####
#########################

tt_content.mailform >
tt_content.mailform = FLUIDTEMPLATE
tt_content.mailform {

    ################
    ### TEMPLATE ###
    ################
    templateName = Mailform
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

    20 = FORM
    20 {

    }

}


######################
#### PLUGIN: FORM ####
######################

plugin.tx_form {
    features {
        skipDefaultArguments = 1
    }
    view {
        templateRootPaths {
            0 = EXT:form/Resources/Private/Templates/
            5 = EXT:theme_default/Resources/Private/Templates/Form/
            10 = {$plugin.tx_form.view.templateRootPath}
        }
        partialRootPaths {
            0 = EXT:form/Resources/Private/Partials/
            5 = EXT:theme_default/Resources/Private/Partials/Form/
            10 = {$plugin.tx_form.view.partialRootPath}
        }
        layoutRootPaths {
            0 = EXT:form/Resources/Private/Layouts/
            5 = EXT:theme_default/Resources/Private/Layouts/Form/
            10 = {$plugin.tx_form.view.layoutRootPath}
        }
    }
}
