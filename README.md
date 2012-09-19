##Functionality
* Adds an access key tab to any page
* Adds an Include template to render access keys in HTML
* Adds an accessibility information page that displays the access keys in readable form

## Installation
    git clone git://github.com/gordonbanderson/weboftalent-access-keys.git
    cd weboftalent-access-keys
    git checkout stable24

The name of the output directory does not matter

## Usage
### SiteMap Pages
Any class that extends Page, and thus appears in the SiteTree, will have an AccessKey field associated with it.  When editing this appears in an Accessibility tab.

### Templates
Add the following to your Page templates, after the body tag.

    <% include AccessKeys %>

#### CSS

Note that the following CSS will be required in your site in order to not have the access key list showing at the top of each page.  Positioning it off the screen still allows screenreaders to read the text, but it will not be visible on the visual output.

	#accesskeys {
		position: fixed;
		left: -100000px;
	}

### Accessibility Page
An Accessibility Information Page is like any other page except that after the main body, a list of access keys that have been configured is shown.

## Silverstripe Version Compatibility
2.4 only (tested with 2.4.5+) - stable24 branch