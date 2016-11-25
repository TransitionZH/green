lib.pageImage = COA
lib.pageImage {
    5 = LOAD_REGISTER
    5 {
        colPos.cObject = TEXT
        colPos.cObject {
            field = colPos
            ifEmpty.cObject = TEXT
            ifEmpty.cObject {
                value.current = 1
                ifEmpty = 0
            }
        }
        pageUid.cObject = TEXT
        pageUid.cObject {
            field = pageUid
            ifEmpty.data = TSFE:id
        }
        contentFromPid.cObject = TEXT
        contentFromPid.cObject {
            data = DB:pages:{register:pageUid}:content_from_pid
            data.insertData = 1
        }
        wrap.cObject = TEXT
        wrap.cObject {
            field = wrap
        }
    }
    20 = CONTENT
    20 {
        table = tt_content
        select {
            includeRecordsWithoutDefaultTranslation = 1
            orderBy = sorting
            where = colPos={register:colPos}
            where.insertData = 1
            pidInList.data = register:pageUid
            pidInList.override.data = register:contentFromPid
            max = 1
        }
        renderObj = COA
        renderObj {
#          stdWrap.wrap = <div class="heroWrapper">|</div>
          10 = FILES
          10 {
            references {
              table = tt_content
              uid.data = field:uid
              fieldName = assets              
            }
            maxItems = 2
            begin = 0
            renderObj = IMG_RESOURCE
            renderObj {
              file.import.data = file:current:publicUrl
              file.treatIdAsReference = 1
              stdWrap.wrap = <div class="hero relPosition" style="background-image: url(/|);">

            }
      #			stdWrap.wrap = <div class="carousel-inner">|</div>
          }
          20 = COA
          20 {
            wrap = <div class="heroIntro paddingTop"><div class="row padding clearfix"><div class="hero-content">|</div></div></div>
            10 = TEXT
            10 {
              wrap = <h6>|</h6><div class="divider"></div>
              field = extend_ttcontent_overline
              required = 1
            }

            20 = TEXT
            20 {
              wrap = <h1>|</h1>
              field = header
              required = 1
              br = 1
            }

            30 = TEXT
            30 {
              wrap = |
              field = bodytext
              parseFunc < lib.parseFunc_RTE
              required = 1

              // mögliche ... 
              parseFunc {
                nonTypoTagStdWrap.encapsLines {
                  # Umschließende Tags
                  encapsTagList = div,p
                  # alle DIV-Tags in <p> umwandeln
                  remapTag.DIV = P
                  # alle noch nicht umschlossenen Zeilen mit <p> wrappen
                  nonWrappedTag >
                  # Leerzeilen mit kodiertem Leerzeichen ersetzen
                  innerStdWrap_all.ifBlank =
                  # hier wird die - häufig beklagte - Klasse bodytext gesetzt
                  addAttributes.P.class >
                  # addAttributes nur einsetzen, wenn noch kein Attribut vorhanden
                  addAttributes.P.class.setOnly=blank
                }
              }
      #                required = 1
      #                crop = 250|...|1

              encapsLines {
                encapsTagList = p
                remapTag.DIV = p
                wrapNonWrappedLines = <p>|</p>
                innerStdWrap_all.ifEmpty =
              }
            }
          }
          30 = COA
          30 {
            10 = TEXT
            10.value = </div>
          }
        }
        stdWrap {
            dataWrap = {register:wrap}
            required = 1
        }
    }
    90 = RESTORE_REGISTER
}
lib.pageImageSlide =< lib.pageImage
lib.pageImageSlide.20.slide = -1
#lib.imageSlider = TEXT
#lib.imageSlider.value = bla bla bla



lib.imageSlider = COA
lib.imageSlider {
	wrap = <div class="mediaImageWrapper carousel slide" id="carouselMedia" data-ride="carousel" data-interval="8000">|</div>

  5 = LOAD_REGISTER
  5 {
    colPos.cObject = TEXT
    colPos.cObject {
      field = colPos
      ifEmpty.cObject = TEXT
      ifEmpty.cObject {
        value.current = 1
        ifEmpty = 0
      }
    }
  }
	10 = COA
	10 {
		wrap = <div class="carousel-indicators-wrapper><ol class="carousel-indicators hidden-xs hidden-sm"></ol></div>
	}

	20 = COA 
	20 {
		wrap = <div class="carousel-inner">|</div>
		10 < styles.content.get
		10.select {
      where = colPos = {register:colPos}
      where.insertData = 1
    }
		10.slide = -1
		10.renderObj = COA
		10.renderObj {
			stdWrap.wrap = <div class="item">|</div>
			10 = FILES
			10 {
				references {
					table = tt_content
					uid.data = field:uid
					fieldName = assets
				}
				renderObj = IMG_RESOURCE
				renderObj {
					file.import.data = file:current:publicUrl
					file.treatIdAsReference = 1
					stdWrap.wrap = <div class="mediaItem" style="background-image: url(/|);"></div>

				}
	#			stdWrap.wrap = <div class="carousel-inner">|</div>
			}
			20 = COA
			20 {
				wrap = <div class="carouselItemContent">|</div>
				10 = TEXT
				10 {
					wrap = <div class="container"><div class="carouselItemHeader"><h1><span>|</span></h1></div></div>
					field = header
					required = 1
				}
				
				20 = TEXT
				20 {
					wrap = <div class="carouselItemBodytextWrapper"><div class="container"><div class="row"><div class="carouselItemBodytext">|</div></div></div></div>
					field = bodytext
					parseFunc < lib.parseFunc_RTE
					required = 1

					// mögliche ... 
					parseFunc {
						nonTypoTagStdWrap.encapsLines {
							# Umschließende Tags
							encapsTagList = div,p
							# alle DIV-Tags in <p> umwandeln
							remapTag.DIV = P
							# alle noch nicht umschlossenen Zeilen mit <p> wrappen
							nonWrappedTag >
							# Leerzeilen mit kodiertem Leerzeichen ersetzen
							innerStdWrap_all.ifBlank =
							# hier wird die - häufig beklagte - Klasse bodytext gesetzt
							addAttributes.P.class >
							# addAttributes nur einsetzen, wenn noch kein Attribut vorhanden
							addAttributes.P.class.setOnly=blank
						}
					}
	#                required = 1
	#                crop = 250|...|1

					encapsLines {
						encapsTagList = p
						remapTag.DIV = p
						wrapNonWrappedLines = <p>|</p>
						innerStdWrap_all.ifEmpty =
					}
				}
			}
		}
	}
	

	30 = COA
	30 {
		wrap = <div class="container carousel-control-wrapper">|</div>
    10 = TEXT
		10.value = <a class="left carousel-control" href="#carouselMedia" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		20 = TEXT
		20.value = <a class="right carousel-control" href="#carouselMedia" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>

	}
	
}
#
#lib.mediaContentPages < lib.media
#lib.mediaContentPages {
#	20.10 {
#		require = 1
#		select.where = colPos = 10
#		renderObj.20 >
#	}
#	30 >
#}
#
#lib.mediaE = COA
#lib.mediaE {
#	10 < styles.content.get
#	10.select.where = colPos = 9
#}