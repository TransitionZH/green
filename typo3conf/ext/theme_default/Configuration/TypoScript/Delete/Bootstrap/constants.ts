#######################
### BOOTSTRAP 3.3.5 ###
#######################

############################
### CUSTOM SUBCATEGORIES ###
############################
# customsubcategory=300=Colors
# customsubcategory=301=Scaffolding
# customsubcategory=302=Typography
# customsubcategory=303=Iconography
# customsubcategory=304=Components
# customsubcategory=305=Tables
# customsubcategory=306=Buttons
# customsubcategory=307=Forms
# customsubcategory=308=Dropdowns
# customsubcategory=309=Z-index master list
# customsubcategory=310=Media queries breakpoints
# customsubcategory=311=Grid system
# customsubcategory=312=Container sizes
# customsubcategory=313=Navbar
# customsubcategory=314=Navs
# customsubcategory=315=Tabs
# customsubcategory=316=Pills
# customsubcategory=317=Pagination
# customsubcategory=318=Pager
# customsubcategory=319=Jumbotron
# customsubcategory=320=Form states and alerts
# customsubcategory=321=Tooltips
# customsubcategory=322=Popovers
# customsubcategory=323=Labels
# customsubcategory=324=Modals
# customsubcategory=325=Alerts
# customsubcategory=326=Progress bars
# customsubcategory=327=List group
# customsubcategory=328=Panels
# customsubcategory=329=Thumbnails
# customsubcategory=330=Wells
# customsubcategory=331=Badges
# customsubcategory=332=Breadcrumbs
# customsubcategory=333=Carousel
# customsubcategory=334=Close
# customsubcategory=335=Code
# customsubcategory=336=Type

plugin.bootstrap_package {
    settings {
        less {
            # cat=bootstrap package: styling/300/gray-base; type=string; label=@gray-base:
            gray-base = #000
            # cat=bootstrap package: styling/300/gray-darker; type=string; label=@gray-darker:
            gray-darker = lighten(@gray-base, 13.5%)
            # cat=bootstrap package: styling/300/gray-dark; type=string; label=@gray-dark:
            gray-dark = lighten(@gray-base, 20%)
            # cat=bootstrap package: styling/300/gray; type=string; label=@gray:
            gray = lighten(@gray-base, 33.5%)
            # cat=bootstrap package: styling/300/gray-light; type=string; label=@gray-light:
            gray-light = lighten(@gray-base, 46.7%)
            # cat=bootstrap package: styling/300/gray-lighter; type=string; label=@gray-lighter:
            gray-lighter = lighten(@gray-base, 93.5%)
            # cat=bootstrap package: styling/300/brand-primary; type=string; label=@brand-primary:
            brand-primary = #c8000f
            # cat=bootstrap package: styling/300/brand-success; type=string; label=@brand-success:
            brand-success = #5cb85c
            # cat=bootstrap package: styling/300/brand-info; type=string; label=@brand-info:
            brand-info = #5bc0de
            # cat=bootstrap package: styling/300/brand-warning; type=string; label=@brand-warning:
            brand-warning = #f0ad4e
            # cat=bootstrap package: styling/300/brand-danger; type=string; label=@brand-danger:
            brand-danger = #d9534f
            # cat=bootstrap package: styling/301/body-bg; type=string; label=@body-bg: Background color for `<body>`.
            body-bg = @gray-lighter
            # cat=bootstrap package: styling/301/text-color; type=string; label=@text-color: Global text color on `<body>`.
            text-color = @gray-dark
            # cat=bootstrap package: styling/301/link-color; type=string; label=@link-color: Global textual link color.
            link-color = @brand-primary
            # cat=bootstrap package: styling/301/link-hover-color; type=string; label=@link-hover-color: Link hover color set via `darken()` function.
            link-hover-color = darken(@link-color, 15%)
            # cat=bootstrap package: styling/301/link-hover-decoration; type=string; label=@link-hover-decoration: Link hover decoration.
            link-hover-decoration = underline
            # cat=bootstrap package: styling/302/font-family-sans-serif; type=string; label=@font-family-sans-serif:
            font-family-sans-serif = "Helvetica Neue", Helvetica, Arial, sans-serif
            # cat=bootstrap package: styling/302/font-family-serif; type=string; label=@font-family-serif:
            font-family-serif = Georgia, "Times New Roman", Times, serif
            # cat=bootstrap package: styling/302/font-family-monospace; type=string; label=@font-family-monospace: Default monospace fonts for `<code>`, `<kbd>`, and `<pre>`.
            font-family-monospace = Menlo, Monaco, Consolas, "Courier New", monospace
            # cat=bootstrap package: styling/302/font-family-base; type=string; label=@font-family-base:
            font-family-base = @font-family-sans-serif
            # cat=bootstrap package: styling/302/font-size-base; type=string; label=@font-size-base:
            font-size-base = 16px
            # cat=bootstrap package: styling/302/font-size-large; type=string; label=@font-size-large:
            font-size-large = ceil((@font-size-base * 1.25))
            # cat=bootstrap package: styling/302/font-size-small; type=string; label=@font-size-small:
            font-size-small = ceil((@font-size-base * 0.85))
            # cat=bootstrap package: styling/302/font-size-h1; type=string; label=@font-size-h1:
            font-size-h1 = floor((@font-size-base * 2.6))
            # cat=bootstrap package: styling/302/font-size-h2; type=string; label=@font-size-h2:
            font-size-h2 = floor((@font-size-base * 2.15))
            # cat=bootstrap package: styling/302/font-size-h3; type=string; label=@font-size-h3:
            font-size-h3 = ceil((@font-size-base * 1.7))
            # cat=bootstrap package: styling/302/font-size-h4; type=string; label=@font-size-h4:
            font-size-h4 = ceil((@font-size-base * 1.25))
            # cat=bootstrap package: styling/302/font-size-h5; type=string; label=@font-size-h5:
            font-size-h5 = @font-size-base
            # cat=bootstrap package: styling/302/font-size-h6; type=string; label=@font-size-h6:
            font-size-h6 = ceil((@font-size-base * 0.85))
            # cat=bootstrap package: styling/302/line-height-base; type=string; label=@line-height-base: Unit-less `line-height` for use in components like buttons.
            line-height-base = 1.55
            # cat=bootstrap package: styling/302/line-height-computed; type=string; label=@line-height-computed: Computed "line-height" (`font-size` * `line-height`) for use with `margin`, `padding`, etc.
            line-height-computed = floor((@font-size-base * @line-height-base))
            # cat=bootstrap package: styling/302/headings-font-family; type=string; label=@headings-font-family: By default, this inherits from the `<body>`.
            headings-font-family = "Share", "Helvetica Neue", Helvetica, Arial, sans-serif
            # cat=bootstrap package: styling/302/headings-font-weight; type=string; label=@headings-font-weight:
            headings-font-weight = 500
            # cat=bootstrap package: styling/302/headings-line-height; type=string; label=@headings-line-height:
            headings-line-height = 1.1
            # cat=bootstrap package: styling/302/headings-color; type=string; label=@headings-color:
            headings-color = inherit
            # cat=bootstrap package: styling/303/icon-font-path; type=string; label=@icon-font-path: Load fonts from this directory.
            icon-font-path = "../../Fonts/"
            # cat=bootstrap package: styling/303/icon-font-name; type=string; label=@icon-font-name: File name for all font files.
            icon-font-name = "glyphicons-halflings-regular"
            # cat=bootstrap package: styling/303/icon-font-svg-id; type=string; label=@icon-font-svg-id: Element ID within SVG icon file.
            icon-font-svg-id = "glyphicons_halflingsregular"
            # cat=bootstrap package: styling/304/padding-base-vertical; type=string; label=@padding-base-vertical:
            padding-base-vertical = 6px
            # cat=bootstrap package: styling/304/padding-base-horizontal; type=string; label=@padding-base-horizontal:
            padding-base-horizontal = 12px
            # cat=bootstrap package: styling/304/padding-large-vertical; type=string; label=@padding-large-vertical:
            padding-large-vertical = 10px
            # cat=bootstrap package: styling/304/padding-large-horizontal; type=string; label=@padding-large-horizontal:
            padding-large-horizontal = 16px
            # cat=bootstrap package: styling/304/padding-small-vertical; type=string; label=@padding-small-vertical:
            padding-small-vertical = 5px
            # cat=bootstrap package: styling/304/padding-small-horizontal; type=string; label=@padding-small-horizontal:
            padding-small-horizontal = 10px
            # cat=bootstrap package: styling/304/padding-xs-vertical; type=string; label=@padding-xs-vertical:
            padding-xs-vertical = 1px
            # cat=bootstrap package: styling/304/padding-xs-horizontal; type=string; label=@padding-xs-horizontal:
            padding-xs-horizontal = 5px
            # cat=bootstrap package: styling/304/line-height-large; type=string; label=@line-height-large:
            line-height-large = 1.3333333
            # cat=bootstrap package: styling/304/line-height-small; type=string; label=@line-height-small:
            line-height-small = 1.5
            # cat=bootstrap package: styling/304/border-radius-base; type=string; label=@border-radius-base:
            border-radius-base = 0px
            # cat=bootstrap package: styling/304/border-radius-large; type=string; label=@border-radius-large:
            border-radius-large = 0px
            # cat=bootstrap package: styling/304/border-radius-small; type=string; label=@border-radius-small:
            border-radius-small = 0px
            # cat=bootstrap package: styling/304/component-active-color; type=string; label=@component-active-color: Global color for active items (e.g., navs or dropdowns).
            component-active-color = #fff
            # cat=bootstrap package: styling/304/component-active-bg; type=string; label=@component-active-bg: Global background color for active items (e.g., navs or dropdowns).
            component-active-bg = @brand-primary
            # cat=bootstrap package: styling/304/caret-width-base; type=string; label=@caret-width-base: Width of the `border` for generating carets that indicator dropdowns.
            caret-width-base = 4px
            # cat=bootstrap package: styling/304/caret-width-large; type=string; label=@caret-width-large: Carets increase slightly in size for larger components.
            caret-width-large = 5px
            # cat=bootstrap package: styling/305/table-cell-padding; type=string; label=@table-cell-padding: Padding for `<th>`s and `<td>`s.
            table-cell-padding = 8px
            # cat=bootstrap package: styling/305/table-condensed-cell-padding; type=string; label=@table-condensed-cell-padding: Padding for cells in `.table-condensed`.
            table-condensed-cell-padding = 5px
            # cat=bootstrap package: styling/305/table-bg; type=string; label=@table-bg: Default background color used for all tables.
            table-bg = transparent
            # cat=bootstrap package: styling/305/table-bg-accent; type=string; label=@table-bg-accent: Background color used for `.table-striped`.
            table-bg-accent = #f9f9f9
            # cat=bootstrap package: styling/305/table-bg-hover; type=string; label=@table-bg-hover: Background color used for `.table-hover`.
            table-bg-hover = #f5f5f5
            # cat=bootstrap package: styling/305/table-bg-active; type=string; label=@table-bg-active:
            table-bg-active = @table-bg-hover
            # cat=bootstrap package: styling/305/table-border-color; type=string; label=@table-border-color: Border color for table and cell borders.
            table-border-color = #ddd
            # cat=bootstrap package: styling/306/btn-font-weight; type=string; label=@btn-font-weight:
            btn-font-weight = normal
            # cat=bootstrap package: styling/306/btn-default-color; type=string; label=@btn-default-color:
            btn-default-color = #333
            # cat=bootstrap package: styling/306/btn-default-bg; type=string; label=@btn-default-bg:
            btn-default-bg = #fff
            # cat=bootstrap package: styling/306/btn-default-border; type=string; label=@btn-default-border:
            btn-default-border = #ccc
            # cat=bootstrap package: styling/306/btn-primary-color; type=string; label=@btn-primary-color:
            btn-primary-color = #fff
            # cat=bootstrap package: styling/306/btn-primary-bg; type=string; label=@btn-primary-bg:
            btn-primary-bg = @brand-primary
            # cat=bootstrap package: styling/306/btn-primary-border; type=string; label=@btn-primary-border:
            btn-primary-border = darken(@btn-primary-bg, 5%)
            # cat=bootstrap package: styling/306/btn-success-color; type=string; label=@btn-success-color:
            btn-success-color = #fff
            # cat=bootstrap package: styling/306/btn-success-bg; type=string; label=@btn-success-bg:
            btn-success-bg = @brand-success
            # cat=bootstrap package: styling/306/btn-success-border; type=string; label=@btn-success-border:
            btn-success-border = darken(@btn-success-bg, 5%)
            # cat=bootstrap package: styling/306/btn-info-color; type=string; label=@btn-info-color:
            btn-info-color = #fff
            # cat=bootstrap package: styling/306/btn-info-bg; type=string; label=@btn-info-bg:
            btn-info-bg = @brand-info
            # cat=bootstrap package: styling/306/btn-info-border; type=string; label=@btn-info-border:
            btn-info-border = darken(@btn-info-bg, 5%)
            # cat=bootstrap package: styling/306/btn-warning-color; type=string; label=@btn-warning-color:
            btn-warning-color = #fff
            # cat=bootstrap package: styling/306/btn-warning-bg; type=string; label=@btn-warning-bg:
            btn-warning-bg = @brand-warning
            # cat=bootstrap package: styling/306/btn-warning-border; type=string; label=@btn-warning-border:
            btn-warning-border = darken(@btn-warning-bg, 5%)
            # cat=bootstrap package: styling/306/btn-danger-color; type=string; label=@btn-danger-color:
            btn-danger-color = #fff
            # cat=bootstrap package: styling/306/btn-danger-bg; type=string; label=@btn-danger-bg:
            btn-danger-bg = @brand-danger
            # cat=bootstrap package: styling/306/btn-danger-border; type=string; label=@btn-danger-border:
            btn-danger-border = darken(@btn-danger-bg, 5%)
            # cat=bootstrap package: styling/306/btn-link-disabled-color; type=string; label=@btn-link-disabled-color:
            btn-link-disabled-color = @gray-light
            # cat=bootstrap package: styling/306/btn-border-radius-base; type=string; label=@btn-border-radius-base:
            btn-border-radius-base = @border-radius-base
            # cat=bootstrap package: styling/306/btn-border-radius-large; type=string; label=@btn-border-radius-large:
            btn-border-radius-large = @border-radius-large
            # cat=bootstrap package: styling/306/btn-border-radius-small; type=string; label=@btn-border-radius-small:
            btn-border-radius-small = @border-radius-small
            # cat=bootstrap package: styling/307/input-bg; type=string; label=@input-bg: `<input>` background color
            input-bg = #fff
            # cat=bootstrap package: styling/307/input-bg-disabled; type=string; label=@input-bg-disabled: `<input disabled>` background color
            input-bg-disabled = @gray-lighter
            # cat=bootstrap package: styling/307/input-color; type=string; label=@input-color: Text color for `<input>`s
            input-color = @gray
            # cat=bootstrap package: styling/307/input-border; type=string; label=@input-border: `<input>` border color
            input-border = #ccc
            # cat=bootstrap package: styling/307/input-border-radius; type=string; label=@input-border-radius:
            input-border-radius = @border-radius-base
            # cat=bootstrap package: styling/307/input-border-radius-large; type=string; label=@input-border-radius-large: Large `.form-control` border radius
            input-border-radius-large = @border-radius-large
            # cat=bootstrap package: styling/307/input-border-radius-small; type=string; label=@input-border-radius-small: Small `.form-control` border radius
            input-border-radius-small = @border-radius-small
            # cat=bootstrap package: styling/307/input-border-focus; type=string; label=@input-border-focus: Border color for inputs on focus
            input-border-focus = #66afe9
            # cat=bootstrap package: styling/307/input-color-placeholder; type=string; label=@input-color-placeholder: Placeholder text color
            input-color-placeholder = #999
            # cat=bootstrap package: styling/307/input-height-base; type=string; label=@input-height-base: Default `.form-control` height
            input-height-base = (@line-height-computed + (@padding-base-vertical * 2) + 2)
            # cat=bootstrap package: styling/307/input-height-large; type=string; label=@input-height-large: Large `.form-control` height
            input-height-large = (ceil(@font-size-large * @line-height-large) + (@padding-large-vertical * 2) + 2)
            # cat=bootstrap package: styling/307/input-height-small; type=string; label=@input-height-small: Small `.form-control` height
            input-height-small = (floor(@font-size-small * @line-height-small) + (@padding-small-vertical * 2) + 2)
            # cat=bootstrap package: styling/307/form-group-margin-bottom; type=string; label=@form-group-margin-bottom: `.form-group` margin
            form-group-margin-bottom = 15px
            # cat=bootstrap package: styling/307/legend-color; type=string; label=@legend-color:
            legend-color = @gray-dark
            # cat=bootstrap package: styling/307/legend-border-color; type=string; label=@legend-border-color:
            legend-border-color = #e5e5e5
            # cat=bootstrap package: styling/307/input-group-addon-bg; type=string; label=@input-group-addon-bg: Background color for textual input addons
            input-group-addon-bg = @gray-lighter
            # cat=bootstrap package: styling/307/input-group-addon-border-color; type=string; label=@input-group-addon-border-color: Border color for textual input addons
            input-group-addon-border-color = @input-border
            # cat=bootstrap package: styling/307/cursor-disabled; type=string; label=@cursor-disabled: Disabled cursor for form controls and buttons.
            cursor-disabled = not-allowed
            # cat=bootstrap package: styling/308/dropdown-bg; type=string; label=@dropdown-bg: Background for the dropdown menu.
            dropdown-bg = #fff
            # cat=bootstrap package: styling/308/dropdown-border; type=string; label=@dropdown-border: Dropdown menu `border-color`.
            dropdown-border = @navbar-default-border
            # cat=bootstrap package: styling/308/dropdown-fallback-border; type=string; label=@dropdown-fallback-border: Dropdown menu `border-color` **for IE8**.
            dropdown-fallback-border = #ccc
            # cat=bootstrap package: styling/308/dropdown-divider-bg; type=string; label=@dropdown-divider-bg: Divider color for between dropdown items.
            dropdown-divider-bg = #e5e5e5
            # cat=bootstrap package: styling/308/dropdown-link-color; type=string; label=@dropdown-link-color: Dropdown link text color.
            dropdown-link-color = @gray-dark
            # cat=bootstrap package: styling/308/dropdown-link-hover-color; type=string; label=@dropdown-link-hover-color: Hover color for dropdown links.
            dropdown-link-hover-color = #fff
            # cat=bootstrap package: styling/308/dropdown-link-hover-bg; type=string; label=@dropdown-link-hover-bg: Hover background for dropdown links.
            dropdown-link-hover-bg = @brand-primary
            # cat=bootstrap package: styling/308/dropdown-link-active-color; type=string; label=@dropdown-link-active-color: Active dropdown menu item text color.
            dropdown-link-active-color = @component-active-color
            # cat=bootstrap package: styling/308/dropdown-link-active-bg; type=string; label=@dropdown-link-active-bg: Active dropdown menu item background color.
            dropdown-link-active-bg = @component-active-bg
            # cat=bootstrap package: styling/308/dropdown-link-disabled-color; type=string; label=@dropdown-link-disabled-color: Disabled dropdown menu item background color.
            dropdown-link-disabled-color = @gray-light
            # cat=bootstrap package: styling/308/dropdown-header-color; type=string; label=@dropdown-header-color: Text color for headers within dropdown menus.
            dropdown-header-color = @gray-light
            # cat=bootstrap package: styling/308/dropdown-caret-color; type=string; label=@dropdown-caret-color: Deprecated `@dropdown-caret-color` as of v3.1.0
            dropdown-caret-color = #000
            # cat=bootstrap package: styling/309/zindex-navbar; type=string; label=@zindex-navbar:
            zindex-navbar = 1000
            # cat=bootstrap package: styling/309/zindex-dropdown; type=string; label=@zindex-dropdown:
            zindex-dropdown = 1000
            # cat=bootstrap package: styling/309/zindex-popover; type=string; label=@zindex-popover:
            zindex-popover = 1060
            # cat=bootstrap package: styling/309/zindex-tooltip; type=string; label=@zindex-tooltip:
            zindex-tooltip = 1070
            # cat=bootstrap package: styling/309/zindex-navbar-fixed; type=string; label=@zindex-navbar-fixed:
            zindex-navbar-fixed = 1030
            # cat=bootstrap package: styling/309/zindex-modal-background; type=string; label=@zindex-modal-background:
            zindex-modal-background = 1040
            # cat=bootstrap package: styling/309/zindex-modal; type=string; label=@zindex-modal:
            zindex-modal = 1050
            # cat=bootstrap package: styling/310/screen-xs; type=string; label=@screen-xs: Deprecated `@screen-xs` as of v3.0.1
            screen-xs = 480px
            # cat=bootstrap package: styling/310/screen-xs-min; type=string; label=@screen-xs-min: Deprecated `@screen-xs-min` as of v3.2.0
            screen-xs-min = @screen-xs
            # cat=bootstrap package: styling/310/screen-phone; type=string; label=@screen-phone: Deprecated `@screen-phone` as of v3.0.1
            screen-phone = @screen-xs-min
            # cat=bootstrap package: styling/310/screen-sm; type=string; label=@screen-sm: Deprecated `@screen-sm` as of v3.0.1
            screen-sm = 768px
            # cat=bootstrap package: styling/310/screen-sm-min; type=string; label=@screen-sm-min:
            screen-sm-min = @screen-sm
            # cat=bootstrap package: styling/310/screen-tablet; type=string; label=@screen-tablet: Deprecated `@screen-tablet` as of v3.0.1
            screen-tablet = @screen-sm-min
            # cat=bootstrap package: styling/310/screen-md; type=string; label=@screen-md: Deprecated `@screen-md` as of v3.0.1
            screen-md = 1024px
            # cat=bootstrap package: styling/310/screen-md-min; type=string; label=@screen-md-min:
            screen-md-min = @screen-md
            # cat=bootstrap package: styling/310/screen-desktop; type=string; label=@screen-desktop: Deprecated `@screen-desktop` as of v3.0.1
            screen-desktop = @screen-md-min
            # cat=bootstrap package: styling/310/screen-lg; type=string; label=@screen-lg: Deprecated `@screen-lg` as of v3.0.1
            screen-lg = 1200px
            # cat=bootstrap package: styling/310/screen-lg-min; type=string; label=@screen-lg-min:
            screen-lg-min = @screen-lg
            # cat=bootstrap package: styling/310/screen-lg-desktop; type=string; label=@screen-lg-desktop: Deprecated `@screen-lg-desktop` as of v3.0.1
            screen-lg-desktop = @screen-lg-min
            # cat=bootstrap package: styling/310/screen-xs-max; type=string; label=@screen-xs-max:
            screen-xs-max = (@screen-sm-min - 1)
            # cat=bootstrap package: styling/310/screen-sm-max; type=string; label=@screen-sm-max:
            screen-sm-max = (@screen-md-min - 1)
            # cat=bootstrap package: styling/310/screen-md-max; type=string; label=@screen-md-max:
            screen-md-max = (@screen-lg-min - 1)
            # cat=bootstrap package: styling/311/grid-columns; type=string; label=@grid-columns: Number of columns in the grid.
            grid-columns = 12
            # cat=bootstrap package: styling/311/grid-gutter-width; type=string; label=@grid-gutter-width: Padding between columns. Gets divided in half for the left and right.
            grid-gutter-width = 20px
            # cat=bootstrap package: styling/311/grid-float-breakpoint; type=string; label=@grid-float-breakpoint: Point at which the navbar becomes uncollapsed.
            grid-float-breakpoint = @screen-md-min
            # cat=bootstrap package: styling/311/grid-float-breakpoint-max; type=string; label=@grid-float-breakpoint-max: Point at which the navbar begins collapsing.
            grid-float-breakpoint-max = (@grid-float-breakpoint - 1)
            # cat=bootstrap package: styling/312/container-tablet; type=string; label=@container-tablet:
            container-tablet = (720px + @grid-gutter-width)
            # cat=bootstrap package: styling/312/container-sm; type=string; label=@container-sm: For `@screen-sm-min` and up.
            container-sm = @container-tablet
            # cat=bootstrap package: styling/312/container-desktop; type=string; label=@container-desktop:
            container-desktop = (940px + @grid-gutter-width)
            # cat=bootstrap package: styling/312/container-md; type=string; label=@container-md: For `@screen-md-min` and up.
            container-md = @container-desktop
            # cat=bootstrap package: styling/312/container-large-desktop; type=string; label=@container-large-desktop:
            container-large-desktop = (1140px + @grid-gutter-width)
            # cat=bootstrap package: styling/312/container-lg; type=string; label=@container-lg: For `@screen-lg-min` and up.
            container-lg = @container-large-desktop
            # cat=bootstrap package: styling/313/navbar-height; type=string; label=@navbar-height:
            navbar-height = 70px
            # cat=bootstrap package: styling/313/navbar-margin-bottom; type=string; label=@navbar-margin-bottom:
            navbar-margin-bottom = @line-height-computed
            # cat=bootstrap package: styling/313/navbar-border-radius; type=string; label=@navbar-border-radius:
            navbar-border-radius = @border-radius-base
            # cat=bootstrap package: styling/313/navbar-padding-horizontal; type=string; label=@navbar-padding-horizontal:
            navbar-padding-horizontal = floor((@grid-gutter-width / 2))
            # cat=bootstrap package: styling/313/navbar-padding-vertical; type=string; label=@navbar-padding-vertical:
            navbar-padding-vertical = ((@navbar-height - @line-height-computed) / 2)
            # cat=bootstrap package: styling/313/navbar-collapse-max-height; type=string; label=@navbar-collapse-max-height:
            navbar-collapse-max-height = 340px
            # cat=bootstrap package: styling/313/navbar-default-color; type=string; label=@navbar-default-color:
            navbar-default-color = #333
            # cat=bootstrap package: styling/313/navbar-default-bg; type=string; label=@navbar-default-bg:
            navbar-default-bg = #fff
            # cat=bootstrap package: styling/313/navbar-default-border; type=string; label=@navbar-default-border:
            navbar-default-border = darken(@navbar-default-bg, 6.5%)
            # cat=bootstrap package: styling/313/navbar-default-link-color; type=string; label=@navbar-default-link-color:
            navbar-default-link-color = lighten(@navbar-default-link-active-color,35%)
            # cat=bootstrap package: styling/313/navbar-default-link-hover-color; type=string; label=@navbar-default-link-hover-color:
            navbar-default-link-hover-color = @navbar-default-link-active-color
            # cat=bootstrap package: styling/313/navbar-default-link-hover-bg; type=string; label=@navbar-default-link-hover-bg:
            navbar-default-link-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-default-link-active-color; type=string; label=@navbar-default-link-active-color:
            navbar-default-link-active-color = #333
            # cat=bootstrap package: styling/313/navbar-default-link-active-bg; type=string; label=@navbar-default-link-active-bg:
            navbar-default-link-active-bg = transparent
            # cat=bootstrap package: styling/313/navbar-default-link-disabled-color; type=string; label=@navbar-default-link-disabled-color:
            navbar-default-link-disabled-color = #ccc
            # cat=bootstrap package: styling/313/navbar-default-link-disabled-bg; type=string; label=@navbar-default-link-disabled-bg:
            navbar-default-link-disabled-bg = transparent
            # cat=bootstrap package: styling/313/navbar-default-brand-color; type=string; label=@navbar-default-brand-color:
            navbar-default-brand-color = @navbar-default-link-color
            # cat=bootstrap package: styling/313/navbar-default-brand-hover-color; type=string; label=@navbar-default-brand-hover-color:
            navbar-default-brand-hover-color = @navbar-default-link-active-color
            # cat=bootstrap package: styling/313/navbar-default-brand-hover-bg; type=string; label=@navbar-default-brand-hover-bg:
            navbar-default-brand-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-default-toggle-hover-bg; type=string; label=@navbar-default-toggle-hover-bg:
            navbar-default-toggle-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-default-toggle-icon-bar-bg; type=string; label=@navbar-default-toggle-icon-bar-bg:
            navbar-default-toggle-icon-bar-bg = @navbar-default-link-color
            # cat=bootstrap package: styling/313/navbar-default-toggle-border-color; type=string; label=@navbar-default-toggle-border-color:
            navbar-default-toggle-border-color = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-color; type=string; label=@navbar-inverse-color:
            navbar-inverse-color = @gray-light
            # cat=bootstrap package: styling/313/navbar-inverse-bg; type=string; label=@navbar-inverse-bg:
            navbar-inverse-bg = @gray
            # cat=bootstrap package: styling/313/navbar-inverse-border; type=string; label=@navbar-inverse-border:
            navbar-inverse-border = darken(@navbar-inverse-bg, 6.5%)
            # cat=bootstrap package: styling/313/navbar-inverse-link-color; type=string; label=@navbar-inverse-link-color:
            navbar-inverse-link-color = darken(@navbar-inverse-link-active-color,35%)
            # cat=bootstrap package: styling/313/navbar-inverse-link-hover-color; type=string; label=@navbar-inverse-link-hover-color:
            navbar-inverse-link-hover-color = @navbar-inverse-link-active-color
            # cat=bootstrap package: styling/313/navbar-inverse-link-hover-bg; type=string; label=@navbar-inverse-link-hover-bg:
            navbar-inverse-link-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-link-active-color; type=string; label=@navbar-inverse-link-active-color:
            navbar-inverse-link-active-color = #fff
            # cat=bootstrap package: styling/313/navbar-inverse-link-active-bg; type=string; label=@navbar-inverse-link-active-bg:
            navbar-inverse-link-active-bg = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-link-disabled-color; type=string; label=@navbar-inverse-link-disabled-color:
            navbar-inverse-link-disabled-color = #444
            # cat=bootstrap package: styling/313/navbar-inverse-link-disabled-bg; type=string; label=@navbar-inverse-link-disabled-bg:
            navbar-inverse-link-disabled-bg = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-brand-color; type=string; label=@navbar-inverse-brand-color:
            navbar-inverse-brand-color = @navbar-inverse-link-color
            # cat=bootstrap package: styling/313/navbar-inverse-brand-hover-color; type=string; label=@navbar-inverse-brand-hover-color:
            navbar-inverse-brand-hover-color = @navbar-inverse-link-active-color
            # cat=bootstrap package: styling/313/navbar-inverse-brand-hover-bg; type=string; label=@navbar-inverse-brand-hover-bg:
            navbar-inverse-brand-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-toggle-hover-bg; type=string; label=@navbar-inverse-toggle-hover-bg:
            navbar-inverse-toggle-hover-bg = transparent
            # cat=bootstrap package: styling/313/navbar-inverse-toggle-icon-bar-bg; type=string; label=@navbar-inverse-toggle-icon-bar-bg:
            navbar-inverse-toggle-icon-bar-bg = @navbar-inverse-link-color
            # cat=bootstrap package: styling/313/navbar-inverse-toggle-border-color; type=string; label=@navbar-inverse-toggle-border-color:
            navbar-inverse-toggle-border-color = transparent
            # cat=bootstrap package: styling/314/nav-link-padding; type=string; label=@nav-link-padding:
            nav-link-padding = 10px 15px
            # cat=bootstrap package: styling/314/nav-link-hover-bg; type=string; label=@nav-link-hover-bg:
            nav-link-hover-bg = @gray-lighter
            # cat=bootstrap package: styling/314/nav-disabled-link-color; type=string; label=@nav-disabled-link-color:
            nav-disabled-link-color = @gray-light
            # cat=bootstrap package: styling/314/nav-disabled-link-hover-color; type=string; label=@nav-disabled-link-hover-color:
            nav-disabled-link-hover-color = @gray-light
            # cat=bootstrap package: styling/315/nav-tabs-border-color; type=string; label=@nav-tabs-border-color:
            nav-tabs-border-color = #ddd
            # cat=bootstrap package: styling/315/nav-tabs-link-hover-border-color; type=string; label=@nav-tabs-link-hover-border-color:
            nav-tabs-link-hover-border-color = @gray-lighter
            # cat=bootstrap package: styling/315/nav-tabs-active-link-hover-bg; type=string; label=@nav-tabs-active-link-hover-bg:
            nav-tabs-active-link-hover-bg = #f5f5f5
            # cat=bootstrap package: styling/315/nav-tabs-active-link-hover-color; type=string; label=@nav-tabs-active-link-hover-color:
            nav-tabs-active-link-hover-color = @gray
            # cat=bootstrap package: styling/315/nav-tabs-active-link-hover-border-color; type=string; label=@nav-tabs-active-link-hover-border-color:
            nav-tabs-active-link-hover-border-color = #ddd
            # cat=bootstrap package: styling/315/nav-tabs-justified-link-border-color; type=string; label=@nav-tabs-justified-link-border-color:
            nav-tabs-justified-link-border-color = #ddd
            # cat=bootstrap package: styling/315/nav-tabs-justified-active-link-border-color; type=string; label=@nav-tabs-justified-active-link-border-color:
            nav-tabs-justified-active-link-border-color = @body-bg
            # cat=bootstrap package: styling/316/nav-pills-border-radius; type=string; label=@nav-pills-border-radius:
            nav-pills-border-radius = @border-radius-base
            # cat=bootstrap package: styling/316/nav-pills-active-link-hover-bg; type=string; label=@nav-pills-active-link-hover-bg:
            nav-pills-active-link-hover-bg = @component-active-bg
            # cat=bootstrap package: styling/316/nav-pills-active-link-hover-color; type=string; label=@nav-pills-active-link-hover-color:
            nav-pills-active-link-hover-color = @component-active-color
            # cat=bootstrap package: styling/317/pagination-color; type=string; label=@pagination-color:
            pagination-color = @link-color
            # cat=bootstrap package: styling/317/pagination-bg; type=string; label=@pagination-bg:
            pagination-bg = #fff
            # cat=bootstrap package: styling/317/pagination-border; type=string; label=@pagination-border:
            pagination-border = #ddd
            # cat=bootstrap package: styling/317/pagination-hover-color; type=string; label=@pagination-hover-color:
            pagination-hover-color = @link-hover-color
            # cat=bootstrap package: styling/317/pagination-hover-bg; type=string; label=@pagination-hover-bg:
            pagination-hover-bg = @gray-lighter
            # cat=bootstrap package: styling/317/pagination-hover-border; type=string; label=@pagination-hover-border:
            pagination-hover-border = #ddd
            # cat=bootstrap package: styling/317/pagination-active-color; type=string; label=@pagination-active-color:
            pagination-active-color = #fff
            # cat=bootstrap package: styling/317/pagination-active-bg; type=string; label=@pagination-active-bg:
            pagination-active-bg = @brand-primary
            # cat=bootstrap package: styling/317/pagination-active-border; type=string; label=@pagination-active-border:
            pagination-active-border = @brand-primary
            # cat=bootstrap package: styling/317/pagination-disabled-color; type=string; label=@pagination-disabled-color:
            pagination-disabled-color = @gray-light
            # cat=bootstrap package: styling/317/pagination-disabled-bg; type=string; label=@pagination-disabled-bg:
            pagination-disabled-bg = #fff
            # cat=bootstrap package: styling/317/pagination-disabled-border; type=string; label=@pagination-disabled-border:
            pagination-disabled-border = #ddd
            # cat=bootstrap package: styling/318/pager-bg; type=string; label=@pager-bg:
            pager-bg = @pagination-bg
            # cat=bootstrap package: styling/318/pager-border; type=string; label=@pager-border:
            pager-border = @pagination-border
            # cat=bootstrap package: styling/318/pager-border-radius; type=string; label=@pager-border-radius:
            pager-border-radius = 15px
            # cat=bootstrap package: styling/318/pager-hover-bg; type=string; label=@pager-hover-bg:
            pager-hover-bg = @pagination-hover-bg
            # cat=bootstrap package: styling/318/pager-active-bg; type=string; label=@pager-active-bg:
            pager-active-bg = @pagination-active-bg
            # cat=bootstrap package: styling/318/pager-active-color; type=string; label=@pager-active-color:
            pager-active-color = @pagination-active-color
            # cat=bootstrap package: styling/318/pager-disabled-color; type=string; label=@pager-disabled-color:
            pager-disabled-color = @pagination-disabled-color
            # cat=bootstrap package: styling/319/jumbotron-padding; type=string; label=@jumbotron-padding:
            jumbotron-padding = 30px
            # cat=bootstrap package: styling/319/jumbotron-color; type=string; label=@jumbotron-color:
            jumbotron-color = #fff
            # cat=bootstrap package: styling/319/jumbotron-bg; type=string; label=@jumbotron-bg:
            jumbotron-bg = @brand-primary
            # cat=bootstrap package: styling/319/jumbotron-heading-color; type=string; label=@jumbotron-heading-color:
            jumbotron-heading-color = inherit
            # cat=bootstrap package: styling/319/jumbotron-font-size; type=string; label=@jumbotron-font-size:
            jumbotron-font-size = ceil((@font-size-base * 1.5))
            # cat=bootstrap package: styling/319/jumbotron-heading-font-size; type=string; label=@jumbotron-heading-font-size:
            jumbotron-heading-font-size = ceil((@font-size-base * 4.5))
            # cat=bootstrap package: styling/320/state-success-text; type=string; label=@state-success-text:
            state-success-text = #3c763d
            # cat=bootstrap package: styling/320/state-success-bg; type=string; label=@state-success-bg:
            state-success-bg = #dff0d8
            # cat=bootstrap package: styling/320/state-success-border; type=string; label=@state-success-border:
            state-success-border = darken(spin(@state-success-bg, -10), 5%)
            # cat=bootstrap package: styling/320/state-info-text; type=string; label=@state-info-text:
            state-info-text = #31708f
            # cat=bootstrap package: styling/320/state-info-bg; type=string; label=@state-info-bg:
            state-info-bg = #d9edf7
            # cat=bootstrap package: styling/320/state-info-border; type=string; label=@state-info-border:
            state-info-border = darken(spin(@state-info-bg, -10), 7%)
            # cat=bootstrap package: styling/320/state-warning-text; type=string; label=@state-warning-text:
            state-warning-text = #8a6d3b
            # cat=bootstrap package: styling/320/state-warning-bg; type=string; label=@state-warning-bg:
            state-warning-bg = #fcf8e3
            # cat=bootstrap package: styling/320/state-warning-border; type=string; label=@state-warning-border:
            state-warning-border = darken(spin(@state-warning-bg, -10), 5%)
            # cat=bootstrap package: styling/320/state-danger-text; type=string; label=@state-danger-text:
            state-danger-text = #a94442
            # cat=bootstrap package: styling/320/state-danger-bg; type=string; label=@state-danger-bg:
            state-danger-bg = #f2dede
            # cat=bootstrap package: styling/320/state-danger-border; type=string; label=@state-danger-border:
            state-danger-border = darken(spin(@state-danger-bg, -10), 5%)
            # cat=bootstrap package: styling/321/tooltip-max-width; type=string; label=@tooltip-max-width: Tooltip max width
            tooltip-max-width = 200px
            # cat=bootstrap package: styling/321/tooltip-color; type=string; label=@tooltip-color: Tooltip text color
            tooltip-color = #fff
            # cat=bootstrap package: styling/321/tooltip-bg; type=string; label=@tooltip-bg: Tooltip background color
            tooltip-bg = #000
            # cat=bootstrap package: styling/321/tooltip-opacity; type=string; label=@tooltip-opacity:
            tooltip-opacity = .9
            # cat=bootstrap package: styling/321/tooltip-arrow-width; type=string; label=@tooltip-arrow-width: Tooltip arrow width
            tooltip-arrow-width = 5px
            # cat=bootstrap package: styling/321/tooltip-arrow-color; type=string; label=@tooltip-arrow-color: Tooltip arrow color
            tooltip-arrow-color = @tooltip-bg
            # cat=bootstrap package: styling/322/popover-bg; type=string; label=@popover-bg: Popover body background color
            popover-bg = #fff
            # cat=bootstrap package: styling/322/popover-max-width; type=string; label=@popover-max-width: Popover maximum width
            popover-max-width = 276px
            # cat=bootstrap package: styling/322/popover-border-color; type=string; label=@popover-border-color: Popover border color
            popover-border-color = rgba(0,0,0,.2)
            # cat=bootstrap package: styling/322/popover-fallback-border-color; type=string; label=@popover-fallback-border-color: Popover fallback border color
            popover-fallback-border-color = #ccc
            # cat=bootstrap package: styling/322/popover-title-bg; type=string; label=@popover-title-bg: Popover title background color
            popover-title-bg = darken(@popover-bg, 3%)
            # cat=bootstrap package: styling/322/popover-arrow-width; type=string; label=@popover-arrow-width: Popover arrow width
            popover-arrow-width = 10px
            # cat=bootstrap package: styling/322/popover-arrow-color; type=string; label=@popover-arrow-color: Popover arrow color
            popover-arrow-color = @popover-bg
            # cat=bootstrap package: styling/322/popover-arrow-outer-width; type=string; label=@popover-arrow-outer-width: Popover outer arrow width
            popover-arrow-outer-width = (@popover-arrow-width + 1)
            # cat=bootstrap package: styling/322/popover-arrow-outer-color; type=string; label=@popover-arrow-outer-color: Popover outer arrow color
            popover-arrow-outer-color = fadein(@popover-border-color, 5%)
            # cat=bootstrap package: styling/322/popover-arrow-outer-fallback-color; type=string; label=@popover-arrow-outer-fallback-color: Popover outer arrow fallback color
            popover-arrow-outer-fallback-color = darken(@popover-fallback-border-color, 20%)
            # cat=bootstrap package: styling/323/label-default-bg; type=string; label=@label-default-bg: Default label background color
            label-default-bg = @gray-light
            # cat=bootstrap package: styling/323/label-primary-bg; type=string; label=@label-primary-bg: Primary label background color
            label-primary-bg = @brand-primary
            # cat=bootstrap package: styling/323/label-success-bg; type=string; label=@label-success-bg: Success label background color
            label-success-bg = @brand-success
            # cat=bootstrap package: styling/323/label-info-bg; type=string; label=@label-info-bg: Info label background color
            label-info-bg = @brand-info
            # cat=bootstrap package: styling/323/label-warning-bg; type=string; label=@label-warning-bg: Warning label background color
            label-warning-bg = @brand-warning
            # cat=bootstrap package: styling/323/label-danger-bg; type=string; label=@label-danger-bg: Danger label background color
            label-danger-bg = @brand-danger
            # cat=bootstrap package: styling/323/label-color; type=string; label=@label-color: Default label text color
            label-color = #fff
            # cat=bootstrap package: styling/323/label-link-hover-color; type=string; label=@label-link-hover-color: Default text color of a linked label
            label-link-hover-color = #fff
            # cat=bootstrap package: styling/324/modal-inner-padding; type=string; label=@modal-inner-padding: Padding applied to the modal body
            modal-inner-padding = 20px
            # cat=bootstrap package: styling/324/modal-title-padding; type=string; label=@modal-title-padding: Padding applied to the modal title
            modal-title-padding = 15px
            # cat=bootstrap package: styling/324/modal-title-line-height; type=string; label=@modal-title-line-height: Modal title line-height
            modal-title-line-height = @line-height-base
            # cat=bootstrap package: styling/324/modal-content-bg; type=string; label=@modal-content-bg: Background color of modal content area
            modal-content-bg = #fff
            # cat=bootstrap package: styling/324/modal-content-border-color; type=string; label=@modal-content-border-color: Modal content border color
            modal-content-border-color = rgba(0,0,0,.2)
            # cat=bootstrap package: styling/324/modal-content-fallback-border-color; type=string; label=@modal-content-fallback-border-color: Modal content border color **for IE8**
            modal-content-fallback-border-color = #999
            # cat=bootstrap package: styling/324/modal-backdrop-bg; type=string; label=@modal-backdrop-bg: Modal backdrop background color
            modal-backdrop-bg = #000
            # cat=bootstrap package: styling/324/modal-backdrop-opacity; type=string; label=@modal-backdrop-opacity: Modal backdrop opacity
            modal-backdrop-opacity = .5
            # cat=bootstrap package: styling/324/modal-header-border-color; type=string; label=@modal-header-border-color: Modal header border color
            modal-header-border-color = #e5e5e5
            # cat=bootstrap package: styling/324/modal-footer-border-color; type=string; label=@modal-footer-border-color: Modal footer border color
            modal-footer-border-color = @modal-header-border-color
            # cat=bootstrap package: styling/324/modal-lg; type=string; label=@modal-lg:
            modal-lg = 900px
            # cat=bootstrap package: styling/324/modal-md; type=string; label=@modal-md:
            modal-md = 600px
            # cat=bootstrap package: styling/324/modal-sm; type=string; label=@modal-sm:
            modal-sm = 300px
            # cat=bootstrap package: styling/325/alert-padding; type=string; label=@alert-padding:
            alert-padding = 15px
            # cat=bootstrap package: styling/325/alert-border-radius; type=string; label=@alert-border-radius:
            alert-border-radius = @border-radius-base
            # cat=bootstrap package: styling/325/alert-link-font-weight; type=string; label=@alert-link-font-weight:
            alert-link-font-weight = bold
            # cat=bootstrap package: styling/325/alert-success-bg; type=string; label=@alert-success-bg:
            alert-success-bg = @state-success-bg
            # cat=bootstrap package: styling/325/alert-success-text; type=string; label=@alert-success-text:
            alert-success-text = @state-success-text
            # cat=bootstrap package: styling/325/alert-success-border; type=string; label=@alert-success-border:
            alert-success-border = @state-success-border
            # cat=bootstrap package: styling/325/alert-info-bg; type=string; label=@alert-info-bg:
            alert-info-bg = @state-info-bg
            # cat=bootstrap package: styling/325/alert-info-text; type=string; label=@alert-info-text:
            alert-info-text = @state-info-text
            # cat=bootstrap package: styling/325/alert-info-border; type=string; label=@alert-info-border:
            alert-info-border = @state-info-border
            # cat=bootstrap package: styling/325/alert-warning-bg; type=string; label=@alert-warning-bg:
            alert-warning-bg = @state-warning-bg
            # cat=bootstrap package: styling/325/alert-warning-text; type=string; label=@alert-warning-text:
            alert-warning-text = @state-warning-text
            # cat=bootstrap package: styling/325/alert-warning-border; type=string; label=@alert-warning-border:
            alert-warning-border = @state-warning-border
            # cat=bootstrap package: styling/325/alert-danger-bg; type=string; label=@alert-danger-bg:
            alert-danger-bg = @state-danger-bg
            # cat=bootstrap package: styling/325/alert-danger-text; type=string; label=@alert-danger-text:
            alert-danger-text = @state-danger-text
            # cat=bootstrap package: styling/325/alert-danger-border; type=string; label=@alert-danger-border:
            alert-danger-border = @state-danger-border
            # cat=bootstrap package: styling/326/progress-bg; type=string; label=@progress-bg: Background color of the whole progress component
            progress-bg = #f5f5f5
            # cat=bootstrap package: styling/326/progress-bar-color; type=string; label=@progress-bar-color: Progress bar text color
            progress-bar-color = #fff
            # cat=bootstrap package: styling/326/progress-border-radius; type=string; label=@progress-border-radius: Variable for setting rounded corners on progress bar.
            progress-border-radius = @border-radius-base
            # cat=bootstrap package: styling/326/progress-bar-bg; type=string; label=@progress-bar-bg: Default progress bar color
            progress-bar-bg = @brand-primary
            # cat=bootstrap package: styling/326/progress-bar-success-bg; type=string; label=@progress-bar-success-bg: Success progress bar color
            progress-bar-success-bg = @brand-success
            # cat=bootstrap package: styling/326/progress-bar-warning-bg; type=string; label=@progress-bar-warning-bg: Warning progress bar color
            progress-bar-warning-bg = @brand-warning
            # cat=bootstrap package: styling/326/progress-bar-danger-bg; type=string; label=@progress-bar-danger-bg: Danger progress bar color
            progress-bar-danger-bg = @brand-danger
            # cat=bootstrap package: styling/326/progress-bar-info-bg; type=string; label=@progress-bar-info-bg: Info progress bar color
            progress-bar-info-bg = @brand-info
            # cat=bootstrap package: styling/327/list-group-bg; type=string; label=@list-group-bg: Background color on `.list-group-item`
            list-group-bg = #fff
            # cat=bootstrap package: styling/327/list-group-border; type=string; label=@list-group-border: `.list-group-item` border color
            list-group-border = #ddd
            # cat=bootstrap package: styling/327/list-group-border-radius; type=string; label=@list-group-border-radius: List group border radius
            list-group-border-radius = @border-radius-base
            # cat=bootstrap package: styling/327/list-group-hover-bg; type=string; label=@list-group-hover-bg: Background color of single list items on hover
            list-group-hover-bg = #f5f5f5
            # cat=bootstrap package: styling/327/list-group-active-color; type=string; label=@list-group-active-color: Text color of active list items
            list-group-active-color = @component-active-color
            # cat=bootstrap package: styling/327/list-group-active-bg; type=string; label=@list-group-active-bg: Background color of active list items
            list-group-active-bg = @component-active-bg
            # cat=bootstrap package: styling/327/list-group-active-border; type=string; label=@list-group-active-border: Border color of active list elements
            list-group-active-border = @list-group-active-bg
            # cat=bootstrap package: styling/327/list-group-active-text-color; type=string; label=@list-group-active-text-color: Text color for content within active list items
            list-group-active-text-color = lighten(@list-group-active-bg, 40%)
            # cat=bootstrap package: styling/327/list-group-disabled-color; type=string; label=@list-group-disabled-color: Text color of disabled list items
            list-group-disabled-color = @gray-light
            # cat=bootstrap package: styling/327/list-group-disabled-bg; type=string; label=@list-group-disabled-bg: Background color of disabled list items
            list-group-disabled-bg = @gray-lighter
            # cat=bootstrap package: styling/327/list-group-disabled-text-color; type=string; label=@list-group-disabled-text-color: Text color for content within disabled list items
            list-group-disabled-text-color = @list-group-disabled-color
            # cat=bootstrap package: styling/327/list-group-link-color; type=string; label=@list-group-link-color:
            list-group-link-color = #555
            # cat=bootstrap package: styling/327/list-group-link-hover-color; type=string; label=@list-group-link-hover-color:
            list-group-link-hover-color = @list-group-link-color
            # cat=bootstrap package: styling/327/list-group-link-heading-color; type=string; label=@list-group-link-heading-color:
            list-group-link-heading-color = #333
            # cat=bootstrap package: styling/328/panel-bg; type=string; label=@panel-bg:
            panel-bg = #fff
            # cat=bootstrap package: styling/328/panel-body-padding; type=string; label=@panel-body-padding:
            panel-body-padding = 15px
            # cat=bootstrap package: styling/328/panel-heading-padding; type=string; label=@panel-heading-padding:
            panel-heading-padding = 10px 15px
            # cat=bootstrap package: styling/328/panel-footer-padding; type=string; label=@panel-footer-padding:
            panel-footer-padding = @panel-heading-padding
            # cat=bootstrap package: styling/328/panel-border-radius; type=string; label=@panel-border-radius:
            panel-border-radius = @border-radius-base
            # cat=bootstrap package: styling/328/panel-inner-border; type=string; label=@panel-inner-border: Border color for elements within panels
            panel-inner-border = #ddd
            # cat=bootstrap package: styling/328/panel-footer-bg; type=string; label=@panel-footer-bg:
            panel-footer-bg = #f5f5f5
            # cat=bootstrap package: styling/328/panel-default-text; type=string; label=@panel-default-text:
            panel-default-text = @gray-dark
            # cat=bootstrap package: styling/328/panel-default-border; type=string; label=@panel-default-border:
            panel-default-border = #ddd
            # cat=bootstrap package: styling/328/panel-default-heading-bg; type=string; label=@panel-default-heading-bg:
            panel-default-heading-bg = #f5f5f5
            # cat=bootstrap package: styling/328/panel-primary-text; type=string; label=@panel-primary-text:
            panel-primary-text = #fff
            # cat=bootstrap package: styling/328/panel-primary-border; type=string; label=@panel-primary-border:
            panel-primary-border = @brand-primary
            # cat=bootstrap package: styling/328/panel-primary-heading-bg; type=string; label=@panel-primary-heading-bg:
            panel-primary-heading-bg = @brand-primary
            # cat=bootstrap package: styling/328/panel-success-text; type=string; label=@panel-success-text:
            panel-success-text = @state-success-text
            # cat=bootstrap package: styling/328/panel-success-border; type=string; label=@panel-success-border:
            panel-success-border = @state-success-border
            # cat=bootstrap package: styling/328/panel-success-heading-bg; type=string; label=@panel-success-heading-bg:
            panel-success-heading-bg = @state-success-bg
            # cat=bootstrap package: styling/328/panel-info-text; type=string; label=@panel-info-text:
            panel-info-text = @state-info-text
            # cat=bootstrap package: styling/328/panel-info-border; type=string; label=@panel-info-border:
            panel-info-border = @state-info-border
            # cat=bootstrap package: styling/328/panel-info-heading-bg; type=string; label=@panel-info-heading-bg:
            panel-info-heading-bg = @state-info-bg
            # cat=bootstrap package: styling/328/panel-warning-text; type=string; label=@panel-warning-text:
            panel-warning-text = @state-warning-text
            # cat=bootstrap package: styling/328/panel-warning-border; type=string; label=@panel-warning-border:
            panel-warning-border = @state-warning-border
            # cat=bootstrap package: styling/328/panel-warning-heading-bg; type=string; label=@panel-warning-heading-bg:
            panel-warning-heading-bg = @state-warning-bg
            # cat=bootstrap package: styling/328/panel-danger-text; type=string; label=@panel-danger-text:
            panel-danger-text = @state-danger-text
            # cat=bootstrap package: styling/328/panel-danger-border; type=string; label=@panel-danger-border:
            panel-danger-border = @state-danger-border
            # cat=bootstrap package: styling/328/panel-danger-heading-bg; type=string; label=@panel-danger-heading-bg:
            panel-danger-heading-bg = @state-danger-bg
            # cat=bootstrap package: styling/329/thumbnail-padding; type=string; label=@thumbnail-padding: Padding around the thumbnail image
            thumbnail-padding = 4px
            # cat=bootstrap package: styling/329/thumbnail-bg; type=string; label=@thumbnail-bg: Thumbnail background color
            thumbnail-bg = @body-bg
            # cat=bootstrap package: styling/329/thumbnail-border; type=string; label=@thumbnail-border: Thumbnail border color
            thumbnail-border = #ddd
            # cat=bootstrap package: styling/329/thumbnail-border-radius; type=string; label=@thumbnail-border-radius: Thumbnail border radius
            thumbnail-border-radius = @border-radius-base
            # cat=bootstrap package: styling/329/thumbnail-caption-color; type=string; label=@thumbnail-caption-color: Custom text color for thumbnail captions
            thumbnail-caption-color = @text-color
            # cat=bootstrap package: styling/329/thumbnail-caption-padding; type=string; label=@thumbnail-caption-padding: Padding around the thumbnail caption
            thumbnail-caption-padding = 9px
            # cat=bootstrap package: styling/330/well-bg; type=string; label=@well-bg:
            well-bg = #f5f5f5
            # cat=bootstrap package: styling/330/well-border; type=string; label=@well-border:
            well-border = darken(@well-bg, 7%)
            # cat=bootstrap package: styling/331/badge-color; type=string; label=@badge-color:
            badge-color = #fff
            # cat=bootstrap package: styling/331/badge-link-hover-color; type=string; label=@badge-link-hover-color: Linked badge text color on hover
            badge-link-hover-color = #fff
            # cat=bootstrap package: styling/331/badge-bg; type=string; label=@badge-bg:
            badge-bg = @gray-light
            # cat=bootstrap package: styling/331/badge-active-color; type=string; label=@badge-active-color: Badge text color in active nav link
            badge-active-color = @link-color
            # cat=bootstrap package: styling/331/badge-active-bg; type=string; label=@badge-active-bg: Badge background color in active nav link
            badge-active-bg = #fff
            # cat=bootstrap package: styling/331/badge-font-weight; type=string; label=@badge-font-weight:
            badge-font-weight = bold
            # cat=bootstrap package: styling/331/badge-line-height; type=string; label=@badge-line-height:
            badge-line-height = 1
            # cat=bootstrap package: styling/331/badge-border-radius; type=string; label=@badge-border-radius:
            badge-border-radius = 10px
            # cat=bootstrap package: styling/332/breadcrumb-padding-vertical; type=string; label=@breadcrumb-padding-vertical:
            breadcrumb-padding-vertical = 8px
            # cat=bootstrap package: styling/332/breadcrumb-padding-horizontal; type=string; label=@breadcrumb-padding-horizontal:
            breadcrumb-padding-horizontal = 15px
            # cat=bootstrap package: styling/332/breadcrumb-bg; type=string; label=@breadcrumb-bg: Breadcrumb background color
            breadcrumb-bg = #f5f5f5
            # cat=bootstrap package: styling/332/breadcrumb-color; type=string; label=@breadcrumb-color: Breadcrumb text color
            breadcrumb-color = #ccc
            # cat=bootstrap package: styling/332/breadcrumb-active-color; type=string; label=@breadcrumb-active-color: Text color of current page in the breadcrumb
            breadcrumb-active-color = @gray-light
            # cat=bootstrap package: styling/332/breadcrumb-separator; type=string; label=@breadcrumb-separator: Textual separator for between breadcrumb elements
            breadcrumb-separator = "/"
            # cat=bootstrap package: styling/333/carousel-text-shadow; type=string; label=@carousel-text-shadow:
            carousel-text-shadow = 0 1px 2px rgba(0,0,0,.6)
            # cat=bootstrap package: styling/333/carousel-control-color; type=string; label=@carousel-control-color:
            carousel-control-color = #fff
            # cat=bootstrap package: styling/333/carousel-control-width; type=string; label=@carousel-control-width:
            carousel-control-width = 15%
            # cat=bootstrap package: styling/333/carousel-control-opacity; type=string; label=@carousel-control-opacity:
            carousel-control-opacity = .5
            # cat=bootstrap package: styling/333/carousel-control-font-size; type=string; label=@carousel-control-font-size:
            carousel-control-font-size = 20px
            # cat=bootstrap package: styling/333/carousel-indicator-active-bg; type=string; label=@carousel-indicator-active-bg:
            carousel-indicator-active-bg = #fff
            # cat=bootstrap package: styling/333/carousel-indicator-border-color; type=string; label=@carousel-indicator-border-color:
            carousel-indicator-border-color = #fff
            # cat=bootstrap package: styling/333/carousel-caption-color; type=string; label=@carousel-caption-color:
            carousel-caption-color = #fff
            # cat=bootstrap package: styling/334/close-font-weight; type=string; label=@close-font-weight:
            close-font-weight = bold
            # cat=bootstrap package: styling/334/close-color; type=string; label=@close-color:
            close-color = #000
            # cat=bootstrap package: styling/334/close-text-shadow; type=string; label=@close-text-shadow:
            close-text-shadow = 0 1px 0 #fff
            # cat=bootstrap package: styling/335/code-color; type=string; label=@code-color:
            code-color = #c7254e
            # cat=bootstrap package: styling/335/code-bg; type=string; label=@code-bg:
            code-bg = #f9f2f4
            # cat=bootstrap package: styling/335/kbd-color; type=string; label=@kbd-color:
            kbd-color = #fff
            # cat=bootstrap package: styling/335/kbd-bg; type=string; label=@kbd-bg:
            kbd-bg = #333
            # cat=bootstrap package: styling/335/pre-bg; type=string; label=@pre-bg:
            pre-bg = #f5f5f5
            # cat=bootstrap package: styling/335/pre-color; type=string; label=@pre-color:
            pre-color = @gray-dark
            # cat=bootstrap package: styling/335/pre-border-color; type=string; label=@pre-border-color:
            pre-border-color = #ccc
            # cat=bootstrap package: styling/335/pre-scrollable-max-height; type=string; label=@pre-scrollable-max-height:
            pre-scrollable-max-height = 340px
            # cat=bootstrap package: styling/336/component-offset-horizontal; type=string; label=@component-offset-horizontal: Horizontal offset for forms and lists.
            component-offset-horizontal = 180px
            # cat=bootstrap package: styling/336/text-muted; type=string; label=@text-muted: Text muted color
            text-muted = @gray-light
            # cat=bootstrap package: styling/336/abbr-border-color; type=string; label=@abbr-border-color: Abbreviations and acronyms border color
            abbr-border-color = @gray-light
            # cat=bootstrap package: styling/336/headings-small-color; type=string; label=@headings-small-color: Headings small color
            headings-small-color = @gray-light
            # cat=bootstrap package: styling/336/blockquote-small-color; type=string; label=@blockquote-small-color: Blockquote small color
            blockquote-small-color = @gray-light
            # cat=bootstrap package: styling/336/blockquote-font-size; type=string; label=@blockquote-font-size: Blockquote font size
            blockquote-font-size = (@font-size-base * 1.25)
            # cat=bootstrap package: styling/336/blockquote-border-color; type=string; label=@blockquote-border-color: Blockquote border color
            blockquote-border-color = @gray-lighter
            # cat=bootstrap package: styling/336/page-header-border-color; type=string; label=@page-header-border-color: Page header border color
            page-header-border-color = @gray-lighter
            # cat=bootstrap package: styling/336/dl-horizontal-offset; type=string; label=@dl-horizontal-offset: Width of horizontal description list titles
            dl-horizontal-offset = @component-offset-horizontal
            # cat=bootstrap package: styling/336/dl-horizontal-breakpoint; type=string; label=@dl-horizontal-breakpoint: Point at which .dl-horizontal becomes horizontal
            dl-horizontal-breakpoint = @grid-float-breakpoint
            # cat=bootstrap package: styling/336/hr-border; type=string; label=@hr-border: Horizontal line color.
            hr-border = @gray-lighter
        }
    }
}