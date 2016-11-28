######################################
#### BACKENDLAYOUT: SPECIAL START ####
######################################
mod {
    web_layout {
        BackendLayouts {
            special_start {
                title = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.special_start
                config {
                    backend_layout {
                        colCount = 3
                        rowCount = 3
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.border
                                        colPos = 3
                                        colspan = 3
                                    }
                                }
                            }
                            2 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.normal
                                        colPos = 0
                                        colspan = 3
                                    }
                                }
                            }
                            3 {
                                columns {
                                    1 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.middle1
                                        colPos = 20
                                    }
                                    2 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.middle2
                                        colPos = 21
                                    }
                                    3 {
                                        name = LLL:EXT:theme_default/Resources/Private/Language/Backend.xlf:backend_layout.column.middle3
                                        colPos = 22
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:theme_default/Resources/Public/Images/BackendLayouts/special_start.gif
            }
        }
    }
}