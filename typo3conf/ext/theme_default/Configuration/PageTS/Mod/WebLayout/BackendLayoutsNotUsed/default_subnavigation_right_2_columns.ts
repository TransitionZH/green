########################################################
#### BACKENDLAYOUT: DEFAULT SUBNAVIGATION 2 COLUMNS ####
########################################################
mod {
    web_layout {
        BackendLayouts {
            default_subnavigation_right_2_columns {
                title = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.default_subnavigation_right_2_columns
                config {
                    backend_layout {
                        colCount = 6
                        rowCount = 2
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.normal
                                        colPos = 0
                                        colspan = 4
                                    }
                                    2 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.right
                                        colPos = 2
                                        colspan = 1
                                    }
                                    3 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.subnav
                                        colspan = 1
                                    }
                                }
                            }
                            2 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.footer1
                                        colPos = 10
                                        colspan = 2
                                    }
                                    2 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.footer2
                                        colPos = 11
                                        colspan = 2
                                    }
                                    3 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.footer3
                                        colPos = 12
                                        colspan = 2
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:theme_default/Resources/Public/Images/BackendLayouts/default_subnavigation_right_2_columns.gif
            }
        }
    }
}