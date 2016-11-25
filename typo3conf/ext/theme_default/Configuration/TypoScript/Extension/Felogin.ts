######################
#### CTYPE: LOGIN ####
######################
plugin {
    tx_felogin_pi1 {
        storagePid = {$plugin.tx_felogin_pi1.storagePid}
        templateFile = {$plugin.tx_felogin_pi1.templateFile}
        showPermaLogin = {$plugin.tx_felogin_pi1.showPermaLogin}

        welcomeMessage_stdWrap.wrap = <p>|</p>
        logoutMessage_stdWrap.wrap = <p>|</p>
        errorMessage_stdWrap.wrap = <p class="text-danger">|</p>
        successMessage_stdWrap.wrap = <p class="text-success">|</p>
        cookieWarning_stdWrap.wrap = <p class="text-warning">|</p>
        forgotMessage_stdWrap.wrap = <p>|</p>
        forgotErrorMessage_stdWrap.wrap = <p class="text-danger">|</p>
        forgotResetMessageEmailSentMessage_stdWrap.wrap = <p class="text-success">|</p>
        changePasswordNotValidMessage_stdWrap.wrap = <p class="text-danger">|</p>
        changePasswordTooShortMessage_stdWrap.wrap = <p class="text-danger">|</p>
        changePasswordNotEqualMessage_stdWrap.wrap = <p class="text-danger">|</p>
        changePasswordMessage_stdWrap.wrap = <p>|</p>
        changePasswordDoneMessage_stdWrap.wrap = <p class="text-success">|</p>

        _CSS_DEFAULT_STYLE >
    }
}
tt_content.login >
tt_content.login = FLUIDTEMPLATE
tt_content.login {

    ################
    ### TEMPLATE ###
    ################
    templateName = Login
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
        plugin =< plugin.tx_felogin_pi1
    }

}
