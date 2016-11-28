###########################################################
#### BACKENDLAYOUT: DEFAULT SUBNAVIGATION OFFSET RIGHT ####
###########################################################
mod {
    web_layout {
        BackendLayouts {
            default_subnavigation_left_offset_right {
                title = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.default_subnavigation_left_offset_right
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
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.subnav
                                        colspan = 1
                                    }
                                    2 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.normal
                                        colPos = 0
                                        colspan = 3
                                    }
                                    3 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.right
                                        colPos = 2
                                        colspan = 2
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:theme_default/Resources/Public/Images/BackendLayouts/default_subnavigation_left_offset_right.gif
            }
        }
    }
}