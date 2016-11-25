# Default configuration for content elements which are using FLUIDTEMPLATE directly
lib.fluidContent >
lib.fluidContent = FLUIDTEMPLATE
lib.fluidContent {
	templateName = Default
	templateRootPaths {
		0 = EXT:theme_default/Resources/Private/Extensions/FluidStyledContent/Templates/
		10 = {$styles.templates.templateRootPath}
	}
	partialRootPaths {
		0 = EXT:theme_default/Resources/Private/Extensions/FluidStyledContent/Partials/
		10 = {$styles.templates.partialRootPath}
	}
	layoutRootPaths {
		0 = EXT:theme_default/Resources/Private/Extensions/FluidStyledContent/Layouts/
		10 = {$styles.templates.layoutRootPath}
	}
	settings {
		defaultHeaderType = {$styles.content.defaultHeaderType}

		media {
			popup {
				bodyTag = <body style="margin:0; background:#fff;">
				wrap = <a href="javascript:close();"> | </a>
				width = {$styles.content.textmedia.linkWrap.width}
				height = {$styles.content.textmedia.linkWrap.height}
				crop.data = file:current:crop

				JSwindow = 1
				JSwindow {
					newWindow = {$styles.content.textmedia.linkWrap.newWindow}
					if.isFalse = {$styles.content.textmedia.linkWrap.lightboxEnabled}
				}

				directImageLink = {$styles.content.textmedia.linkWrap.lightboxEnabled}

				linkParams.ATagParams.dataWrap =  class="{$styles.content.textmedia.linkWrap.lightboxCssClass}" rel="{$styles.content.textmedia.linkWrap.lightboxRelAttribute}"
			}
		}
	}
}
