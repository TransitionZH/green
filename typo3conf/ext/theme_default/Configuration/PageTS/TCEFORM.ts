#################
#### TCEFORM ####
#################
TCEFORM {
    pages {
        layout {
            removeItems = 1,2,3
        }
    }
    tt_content {
      subheader.disabled = 1
        linkToTop.disabled = 1
        header_layout {
            removeItems = 0,
            altLabels {
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
            }
            addItems {
              90 = Header Start (H1)
            }
        }
        list_type {
            removeItems = indexed_search
        }
        layout {
          altLabels {
            0 = Hintergrund Weiss
            1 = Hintergrund Rot
            2 = Hintergrund Grau
            3 = Team / Testimonial
          }
            removeItems = 
            disableNoMatchingValueElement = 1
            types {
                bullets {
                    removeItems = 0,1,2,3
                    addItems {
                        100 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:listlayout.unordered
                        110 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:listlayout.ordered
                        120 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:listlayout.unstyled
                        130 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:listlayout.inline
                    }
                }
                table {
                    removeItems = 0,1,2,3
                    addItems {
                        100 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.default
                        110 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.basic
                        120 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.striped
                        130 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.bordered
                        140 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.hover
                        150 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tablelayout.condensed
                    }
                }
                uploads {
                    removeItems = 3
                    altLabels {
                        0 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:uploadslayout.default
                        1 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:uploadslayout.icons
                        2 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:uploadslayout.iconsandpreview
                    }
                }
                bootstrap_package_carousel {
                    removeItems = 0,1,2,3
                    addItems {
                        100 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousellayout.default
                        110 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousellayout.small
                    }
                }
                bootstrap_package_panel {
                    removeItems = 0,1,2,3
                    addItems {
                        100 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.default
                        110 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.primary
                        120 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.success
                        130 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.info
                        140 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.warning
                        150 = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:contextualalternatives.danger
                    }
                }
            }
        }
        section_frame {
          addItems {
            100 = ohne Abstand
            101 = Rahmen links-rechts (Grid-Element)
            102 = Rahmen mit Abstand (Grid-Element)
          }
        }
        image_noRows.disabled = 1
        imageborder.disabled = 1
        imagecols {
            removeItems = 5,7,8
        }
        imageorient {
            removeItems = 1,2,9,10,17,18
            addItems {
              100 = Bild hinter Text
            }
            types {
                image {
                    disabled = 1
                }
            }
        }
        menu_type {
            addItems {
                thumbnail_dir = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir.description
                thumbnail_list = LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list.description
            }
        }

        // Disable imageheight and imagewidth for textpic and image
        // to avoid incorrect rendering in frontend
        imageheight.disabled = 1
        imagewidth.disabled = 1

        // NOBODY wants or should edit this - really, let them disappear
        table_bgColor.disabled = 1
        table_border.disabled = 1
        table_cellspacing.disabled = 1
        table_cellpadding.disabled = 1
        pi_flexform {
            table {
                sDEF {
                    acctables_nostyles.disabled = 1
                    acctables_tableclass.disabled = 1
                }
            }
        }
    }
}
