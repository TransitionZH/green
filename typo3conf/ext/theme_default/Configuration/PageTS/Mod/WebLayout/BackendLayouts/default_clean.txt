################################
#### BACKENDLAYOUT: DEFAULT ####
################################
mod {
    web_layout {
        BackendLayouts {
            default_clean {
                title = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.default_clean
                config {
                    backend_layout {
                        colCount = 6
                        rowCount = 1
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.normal
                                        colPos = 0
                                        colspan = 6
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:theme_default/Resources/Public/Images/BackendLayouts/default_clean.gif
            }
        }
    }
}