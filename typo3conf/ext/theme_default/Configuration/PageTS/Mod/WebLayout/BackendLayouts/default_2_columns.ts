##########################################
#### BACKENDLAYOUT: DEFAULT 2 COLUMNS ####
##########################################
mod {
    web_layout {
        BackendLayouts {
            default_2_columns {
                title = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.default_2_columns
                config {
                    backend_layout {
                        colCount = 6
                        rowCount = 2
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.border
                                        colPos = 3
                                        colspan = 6
                                    }
                                }
                            }
                            2 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.normal
                                        colPos = 0
                                        colspan = 4
                                    }
                                    2 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.right
                                        colPos = 2
                                        colspan = 2
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:theme_default/Resources/Public/Images/BackendLayouts/default_2_columns.gif
            }
        }
    }
}