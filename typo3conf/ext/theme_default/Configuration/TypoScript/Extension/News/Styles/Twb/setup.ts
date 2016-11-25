plugin.tx_news {
	view {
		templateRootPaths {
			0 = EXT:theme_default/Resources/Private/Extensions/News/Templates/
			1 = EXT:theme_default/Resources/Private/Extensions/News/Templates/Styles/Twb/Templates
			2 = {$plugin.tx_news.view.twb.templateRootPath}
		}

		partialRootPaths {
			0 = EXT:theme_default/Resources/Private/Extensions/News/Partials/
			1 = EXT:theme_default/Resources/Private/Extensions/News/Templates/Styles/Twb/Partials/
			2 = {$plugin.tx_news.view.twb.partialRootPath}
		}

		layoutRootPaths {
			0 = EXT:theme_default/Resources/Private/Extensions/News/Layouts/
			1 = EXT:theme_default/Resources/Private/Extensions/News/Templates/Styles/Twb/Layouts/
			2 = {$plugin.tx_news.view.twb.layoutRootPath}
		}

		widget.GeorgRinger\News\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = EXT:news/Resources/Private/Templates/Styles/Twb/Templates/
	}

	settings {
		list {
			media {
				image >
				image {
					width = 300
				}
			}
		}
	}
}