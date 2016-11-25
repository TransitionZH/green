#################################################
#### CTYPE: BOOTSTRAP PACKAGE MENU THUMBNAIL ####
#################################################

tt_content.menu.thumbnail_list = FLUIDTEMPLATE
tt_content.menu.thumbnail_list {

    ################
    ### TEMPLATE ###
    ################
    templateName = ThemeDefaultMenuThumbnail
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

    ################
    ### SETTINGS ###
    ################
    settings {
        media {
            width = {$plugin.bootstrap_package_contentelements.menu_thumbnails.media.width}
            height = {$plugin.bootstrap_package_contentelements.menu_thumbnails.media.height}
        }
        title {
            crop = {$plugin.bootstrap_package_contentelements.menu_thumbnails.title.crop}
        }
        abstract {
            crop = {$plugin.bootstrap_package_contentelements.menu_thumbnails.title.crop}
        }
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = BK2K\ThemeDefault\DataProcessing\MenuProcessor
        10 {
            special = list
            special.value.field = pages
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
            }
        }
    }

}
tt_content.menu.thumbnail_dir < tt_content.menu.thumbnail_list
tt_content.menu.thumbnail_dir {
    dataProcessing {
        10 {
            special = directory
        }
    }
}
