
###############################################
#### PAGETYPES FOR ASYNC / AJAX INTERFACES ####
###############################################

# Ajax interface
ajaxInterface < page
ajaxInterface {
	typeNum = {$page.typeNum.ajaxContent}

    headerData >
    meta >
    bodyTag =

    5 >
    10.settings >
    10.settings.layout = AjaxInterface
    10.settings.showPageTitles = 1

	config {
		disableAllHeaderCode = 1
#		additionalHeaders = Content-type:application/json
		xhtml_cleaning = 0
		admPanel = 0
		debug = 0

        # Refresh cache period for content (900 seconds = 15 minutes)
#		cache_period = 900
#		no_cache = 1

        # Add type parameter to all links
#		forceTypeValue = {$page.typeNum.ajax}
	}
}

# Keyvisuals for ajax
ajaxPageMedia < ajaxInterface
ajaxPageMedia {
	typeNum = {$page.typeNum.ajaxPageMedia}
    10.settings {
        renderElement = ajaxPageMedia
    }
}

# Content for ajax
ajaxContent < ajaxInterface
ajaxContent {
	typeNum = {$page.typeNum.ajaxContent}
    10.settings {
        renderElement = ajaxContent
    }
}

# MainNavi for ajax
ajaxMainNavi < ajaxInterface
ajaxMainNavi {
	typeNum = {$page.typeNum.ajaxMainNavi}
    10.settings {
        renderElement = ajaxMainNavi
    }
}
