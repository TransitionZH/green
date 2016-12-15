lib.math = TEXT
lib.math {
    current = 1
    prioriCalc = 1
}

####################
#### PAGE CLASS ####
####################
lib.page.class = COA
lib.page.class {
    // Page alias or id as fallback
    10 = TEXT
    10 {
        field = alias // uid
        noTrimWrap = |page-||
    }
    // Current level of the page within the tree structure
    20 = TEXT
    20 {
        data = level:1
        noTrimWrap = | pagelevel-||
    }
    // Language
    30 = TEXT
    30 {
        data = TSFE:sys_language_uid
        noTrimWrap = | language-||
    }
    // Backend layout
    40 = TEXT
    40 {
        data = levelfield:-1, backend_layout_next_level, slide
        override.field = backend_layout
        ifEmpty = default
        noTrimWrap = | backendlayout-||
    }
    // Layout
    50 = TEXT
    50 {
        field = layout
        noTrimWrap = | layout-||
    }
}


##############
#### PAGE ####
##############
page = PAGE
page {
    bodyTag = <body>
    typeNum = 0
    shortcutIcon = {$page.includePath.icons}favicon.ico

    headerData {
        // Flip ahead browsing for IE10/11
        // http://msdn.microsoft.com/en-us/library/ie/jj883726(v=vs.85).aspx
        10 = HMENU
        10 {
            special = browse
            special {
                items = prev|next
            }
            1 = TMENU
            1.NO {
                allWrap = <link rel="prev" href="|"> |*| <link rel="next" href="|">
                doNotLinkIt = 1
                stdWrap {
                    typolink {
                        parameter.data = field:uid
                        useCacheHash = 1
                        returnLast = url
                    }
                }
            }
        }
    }

    5 < styles.content.editPanelPage
    5 {
        stdWrap.wrap = <div class="typo3-feedit-page">|</div>
        stdWrap.required = 1
    }

    10 = FLUIDTEMPLATE
    10 {
        templateName = TEXT
        templateName.stdWrap.cObject = CASE
        templateName.stdWrap.cObject {
            key.data = levelfield:-1, backend_layout_next_level, slide
            key.override.field = backend_layout

            pagets__default_clean = TEXT
            pagets__default_clean.value = DefaultClean

            pagets__default_2_columns = TEXT
            pagets__default_2_columns.value = Default2Columns

            pagets__default_2_columns_25_75 = TEXT
            pagets__default_2_columns_25_75.value = Default2Columns2575

            pagets__default_2_columns_50_50 = TEXT
            pagets__default_2_columns_50_50.value = Default2Columns5050

            pagets__default_2_columns_offset_right = TEXT
            pagets__default_2_columns_offset_right.value = Default2ColumnsOffsetRight

            pagets__default_3_columns = TEXT
            pagets__default_3_columns.value = Default3Columns

            pagets__default_subnavigation_right = TEXT
            pagets__default_subnavigation_right.value = DefaultSubNavRight

            pagets__default_subnavigation_right_2_columns = TEXT
            pagets__default_subnavigation_right_2_columns.value = DefaultSubNavRight2Columns

            pagets__default_subnavigation_left = TEXT
            pagets__default_subnavigation_left.value = DefaultSubNavLeft

            pagets__default_subnavigation_left_2_columns = TEXT
            pagets__default_subnavigation_left_2_columns.value = DefaultSubNavLeft2Columns

            pagets__default_subnavigation_left_offset_right = TEXT
            pagets__default_subnavigation_left_offset_right.value = DefaultSubNavLeftOffsetRight

            pagets__default_subnavigation_left_offset_right = TEXT
            pagets__default_subnavigation_left_offset_right.value = DefaultSubNavLeftOffsetRight

            pagets__special_start = TEXT
            pagets__special_start.value = SpecialStart

            pagets__special_feature = TEXT
            pagets__special_feature.value = SpecialFeature

            default = TEXT
            default.value = Default
        }

        templateRootPaths {
            0 = EXT:theme_default/Resources/Private/Templates/Page/
            1 = {$page.fluidtemplate.templateRootPath}
        }
        partialRootPaths {
            0 = EXT:theme_default/Resources/Private/Partials/Page/
            1 = {$page.fluidtemplate.partialRootPath}
        }
        layoutRootPaths {
            0 = EXT:theme_default/Resources/Private/Layouts/Page/
            1 = {$page.fluidtemplate.layoutRootPath}
        }

        ##########################
        ### DATA PREPROCESSING ###
        ##########################
        dataProcessing {
            10 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            10 {
                levels = 2
                as = mainnavigation
            }
            20 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            20 {
                entryLevel = 1
                levels = 3
                expandAll = 0
                as = subnavigation
            }
            30 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            30 {
                special = rootline
                special.range = 0|-1
                includeNotInMenu = 1
                as = breadcrumb
                if {
                    value = {$page.theme.breadcrumbEnableLevel}
                    value {
                        insertData = 1
                        prioriCalc = 1
                        stdWrap.wrap = |-1
                    }
                    isGreaterThan {
                        data = level
                    }
                }
            }
            40 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            40 {
                special = language
                special.value = 0,1,2
                special.normalWhenNoLanguage = 0
                as = languagenavigation
            }
            50 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            50 {
                special = directory
                special.value = {$page.pid.socialNavigation}
                as = socialnavigation
            }
            55 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            55 {
                special = directory
                special.value = {$page.pid.serviceNavigation}
                levels = 2
                as = servicenavigation
            }
            60 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            60 {
                special = directory
                special.value = {$page.pid.infoNavigation}
                as = infonavigation
            }
            65 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            65 {
                special = directory
                special.value = {$page.pid.usefulInfoNavigation}
                as = usefulinfonavigation
            }

            # Magento footer menus
            70 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            70 {
                special = directory
                special.value = {$page.pid.magentoFooterCol2}
                as = magentofootercol2
            }
            75 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            75 {
                special = directory
                special.value = {$page.pid.magentoFooterCol3}
                as = magentofootercol3
            }
            80 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
            80 {
                special = directory
                special.value = {$page.pid.magentoFooterBottom}
                as = magentofooterbottom
            }
        }

        ################
        ### SETTINGS ###
        ################
        settings {
            layout = Default
            logo {
                file = {$page.logo.file}
                height = {$page.logo.height}
                width = {$page.logo.width}
            }
            breadcrumb {
                enable = {$page.theme.breadcrumb}
            }
            navigation {
                style = {$page.theme.navigationstyle}
                type = {$page.theme.navigationtype}
            }
            copyright {
                enable = {$page.theme.copyright.enable}
                text = {$page.theme.copyright.text}
            }
            settings.showPageTitles = 0
            extbase.controllerExtensionName = ThemeDefault
        }

        #################
        ### VARIABLES ###
        #################
        variables {
            pageNameInfo = TEXT
            pageNameInfo.data = db:pages:{$page.pid.infoNavigation}:title
            pageNameUsefulInfo = TEXT
            pageNameUsefulInfo.data = db:pages:{$page.pid.usefulInfoNavigation}:title
            pageNameSocial = TEXT
            pageNameSocial.data = db:pages:{$page.pid.socialNavigation}:title
#            backend_layout = TEXT
#            backend_layout.field = backend_layout
            backend_layout < lib.page.class
            showFooter = TEXT
            showFooter.value = {$page.theme.footersection.enable}
            showMeta = TEXT
            showMeta.value = {$page.theme.metasection.enable}
            pageTitle = TEXT
            pageTitle.data = page:title
            siteTitle = TEXT
            siteTitle.data = TSFE:tmpl|setup|sitetitle
            rootPage = TEXT
            rootPage.data = leveluid:0
            logoAlt = COA
            logoAlt {
                10 = TEXT
                10 {
                    data = TSFE:tmpl|setup|sitetitle
                    noTrimWrap = || logo|
                    if.isFalse = {$page.logo.alt}
                }
                20 = TEXT
                20 {
                    value = {$page.logo.alt}
                    if.isTrue = {$page.logo.alt}
                }
            }
            pageClass < lib.page.class
            sysLanguage = TEXT
            sysLanguage.data = TSFE:sys_language_uid
            
        }

        stdWrap.replacement {
            1 {
                search = http://###BACKEND_URL###/
                replace.typolink {
                    parameter = typo3/
                    returnLast = url
                }
            }
            2 {
                search = ###CURRENTYEAR###
                replace {
                    data = date:U
                    strftime = %Y
                }
            }
            3 {
                search = ###SPACE###
                replace {
                    char = 32
                }
            }
        }
    }

    meta {
        # New notation available since TYPO3 7.4
        # see https://forge.typo3.org/issues/67360 for more details
        viewport = {$page.meta.viewport}
        robots = {$page.meta.robots}
        google = {$page.meta.google}
        apple-mobile-web-app-capable = {$page.meta.apple-mobile-web-app-capable}
        description = {$page.meta.description}
        description {
            override.field = description
        }
        author = {$page.meta.author}
        author {
            override.field = author
        }
        keywords = {$page.meta.keywords}
        keywords {
            override.field = keywords
        }
        X-UA-Compatible = {$page.meta.compatible}
        X-UA-Compatible {
            attribute = http-equiv
        }

        # OpenGraph Tags
        og:title {
            attribute = property
            field = title
        }
        og:site_name {
            attribute = property
            data = TSFE:tmpl|setup|sitetitle
        }
        og:description = {$page.meta.description}
        og:description {
            attribute = property
            field = description
        }
        og:image {
            attribute = property
            stdWrap.cObject = FILES
            stdWrap.cObject {
                references {
                    data = levelfield:-1, media, slide
                }
                maxItems = 1
                renderObj = COA
                renderObj {
                    10 = IMG_RESOURCE
                    10 {
                        file {
                            import.data = file:current:uid
                            treatIdAsReference = 1
                            width = 1280c
                            height = 720c
                        }
                        stdWrap {
                            typolink {
                                parameter.data = TSFE:lastImgResourceInfo|3
                                returnLast = url
                                forceAbsoluteUrl = 1
                            }
                        }
                    }
                }
            }
        }
    }

    includeCSS {
#        googleFont = https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300
#        googleFont = https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Oxygen:400,300,700
#        googleFont = https://fonts.googleapis.com/css?family=Oxygen:400,300,700|Roboto+Condensed:300
#        googleFont = https://fonts.googleapis.com/css?family=Merriweather:300,400,400italic,700|Oxygen:400,300,700
#        googleFont.external = 1

        # bootstrap will be included in the themes.less file
        # for standalone usage just uncomment the following line
        # bootstrap = EXT:theme_default/Resources/Public/Less/Bootstrap/bootstrap.less
        theme = EXT:theme_default/Resources/Public/Css/Theme/theme.css
    }

    includeJSLibs {
        modernizr = EXT:theme_default/Resources/Public/JavaScript/Libs/modernizr-2.8.3.min.js
        modernizr.forceOnTop = 1
        modernizr.async = 1
        wpfix = EXT:theme_default/Resources/Public/JavaScript/windowsphone-viewportfix.min.js
        wpfix.async = 1        
    }

    includeJSFooterlibs {
      # Include jQuery as first library in footer - https://jquery.com/
      jquery = EXT:theme_default/Resources/Public/JavaScript/Libs/jquery.min.js
      jquery.forceOnTop = 1
      # Bootstrap library - http://getbootstrap.com/
      bootstrap = EXT:theme_default/Resources/Public/JavaScript/Libs/bootstrap.min.js
      # Ask if cookies are allowed in footer - http://www.primebox.co.uk/projects/jquery-cookiebar/
      cookiebar = EXT:theme_default/Resources/Public/JavaScript/Libs/jquery.cookiebar.js
      # Lightbox (klick enlarge) - http://www.jacklmoore.com/colorbox/
      colorbox = EXT:theme_default/Resources/Public/JavaScript/Libs/jquery.colorbox.js
      # Make height of set of elements equal - http://brm.io/jquery-match-height/
      matchheight = EXT:theme_default/Resources/Public/JavaScript/Libs/jquery.matchheight.min.js
      # Slick slider
#      slick = EXT:theme_default/Resources/Public/JavaScript/Libs/slick.min.js
      # Add swipe support for boostrap components - http://hammerjs.github.io/
      hammerjs = EXT:theme_default/Resources/Public/JavaScript/Libs/hammer.min.js
      # Custom scripts for this theme
      theme = EXT:theme_default/Resources/Public/JavaScript/theme.js
    }

    jsFooterInline {
        # Google Analytics
        10 = COA
        10 {
            if {
                isTrue = {$page.tracking.google.trackingID}
            }
            10 = TEXT
            10.value (
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '{$page.tracking.google.trackingID}', 'auto');
            )
            20 = TEXT
            20 {
                if {
                    isTrue = {$page.tracking.google.anonymizeIp}
                }

                value (

    ga('set', 'anonymizeIp', true);
                )
            }

            90 = TEXT
            90.value (

    ga('send', 'pageview');
            )

            wrap = if(jQuery.cookieBar('cookies')){ | } /* If user decides to disable cookies, don't track with ga */
        }
    }
}


###################################################
#### EXCLUDE PAGE FROM EXTERNAL SEARCH RESULTS ####
#### IF NO SEARCH IS SET FOR THIS PAGE         ####
###################################################
[globalVar = TSFE:page|no_search = 1]
    page.meta.robots = noindex,follow
[end]

# Set news title as page title (not in News/.../setup.ts, because PageBasic.ts is loaded AFTER News/.../setup.ts)
[globalVar = GP:tx_news_pi1|news > 0]
    temp.newsTitle = RECORDS
    temp.newsTitle {
        source = {GP:tx_news_pi1|news}
        source.insertData = 1
        tables = tx_news_domain_model_news
        conf.tx_news_domain_model_news >
        conf.tx_news_domain_model_news = TEXT
        conf.tx_news_domain_model_news.field = title
    }
    #Remove default page title, set news title
    page.10.variables.pageTitle >
    page.10.variables.pageTitle < temp.newsTitle
[global]