plugin.tx_news {
	rss.channel {
		title = Dummy Title
		description =
		link = http://example.com
		language = en-gb
		copyright = TYPO3 News
		category =
		generator = TYPO3 EXT:news
	}

	opengraph {
		site_name =
	}

	view {
		# cat=plugin.tx_news/file; type=string; label=Path to template root (FE)
		templateRootPath = EXT:theme_default/Resources/Private/Extensions/News/Templates/
		# cat=plugin.tx_news/file; type=string; label=Path to template partials (FE)
		partialRootPath = EXT:theme_default/Resources/Private/Extensions/News/Partials/
		# cat=plugin.tx_news/file; type=string; label=Path to template layouts (FE)
		layoutRootPath = EXT:theme_default/Resources/Private/Extensions/News/Layouts/
	}

	settings {
		# cat=plugin.tx_news/file; type=string; label=Path to CSS file
		cssFile = EXT:news/Resources/Public/Css/news-basic.css
	}
}