########################
#### INDEXED SEARCH ####
########################
plugin.tx_indexedsearch >
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:indexed_search/Configuration/TypoScript/setup.txt">


################
#### PLUGIN ####
################
plugin.tx_indexedsearch {
    view {
        templateRootPaths {
            20 = EXT:theme_default/Resources/Private/Templates/IndexedSearch/
            21 = {$plugin.bootstrap_package.view.templateRootPath}IndexedSearch/
        }
        partialRootPaths {
            20 = EXT:theme_default/Resources/Private/Partials/IndexedSearch/
            21 = {$plugin.bootstrap_package.view.partialRootPath}IndexedSearch/
        }
        layoutRootPaths {
            20 = EXT:theme_default/Resources/Private/Layouts/IndexedSearch/
            21 = {$plugin.bootstrap_package.view.layoutRootPath}IndexedSearch/
        }
    }
}
