

################
#### CONFIG ####
################
config {
    absRefPrefix = auto
    no_cache = {$config.no_cache}
    uniqueLinkVars = 1
    pageTitleFirst = 1
    linkVars = L
    prefixLocalAnchors = {$config.prefixLocalAnchors}
    renderCharset = utf-8
    metaCharset = utf-8
    doctype = html5
    removeDefaultJS = {$config.removeDefaultJS}
    inlineStyle2TempFile = 1
    admPanel = {$config.admPanel}
    debug = 0
    cache_period = 86400
    sendCacheHeaders = {$config.sendCacheHeaders}
    intTarget =
    extTarget =
    disablePrefixComment = 1
    index_enable = 1
    index_externals = 1
    index_metatags = 1
    headerComment = {$config.headerComment}

    // Enable RealUrl
    tx_realurl_enable = 1
    simulateStaticDocuments = 0

    // Disable Image Upscaling
    noScaleUp = 1

    // Language Settings
    sys_language_uid = 0
    sys_language_overlay = 1
    sys_language_mode = content_fallback
    language = de
    locale_all = de_DE.UTF-8
    htmlTag_setParams = lang="de" dir="ltr" class="no-js"

    // Compression and Concatenation of CSS and JS Files
    compressJs = {$config.compressJs}
    compressCss = {$config.compressCss}
    concatenateJs = {$config.concatenateJs}
    concatenateCss = {$config.concatenateCss}

    // spam protect emails
#    spamProtectEmailAddresses = 0
    spamProtectEmailAddresses = 2
    spamProtectEmailAddresses_atSubst = (at)

    contentObjectExceptionHandler = 0
}

#############################
#### LANGUAGE CONDITIONS ####
#############################
[globalVar = GP:L = 1]
    config {
        sys_language_uid = 1
        language = en
        locale_all = en_US.UTF-8
        htmlTag_setParams = lang="en" dir="ltr" class="no-js"
    }
[global]
[globalVar = GP:L = 2]
    config {
        sys_language_uid = 2
        language = fr
        locale_all = fr_FR.UTF-8
        htmlTag_setParams = lang="fr" dir="ltr" class="no-js"
    }
[global]