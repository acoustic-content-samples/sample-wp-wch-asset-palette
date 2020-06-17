# WordPress integration with Acoustic Content

This plugin provides an installable plugin for WordPress which integrates with Acoustic Content (formerly Watson Content Hub). 
The main goal of this plugin is to show how simple both technologies could get combined. 
It allows to use the palette for selecting published assets into a blog or page.

## Pre-requisites
There is no known pre-requisite, but this module was mainly tested on
Wordpress: 3.4 till 5.4 (last tested version) using the classic Rich Text Editor (RTE).

## Installation
Installation may occur via copy of files or ZIP install
### Installation using the files
1. Upload files to the `/wp-content/plugins/` directory
### Installation using the ZIP
1. Upload the zip using Plugins -> Add New -> Upload Plugin -> Browse -> Install Now
### Activation and configuration
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Access the Settings > Asset Palette configuration page
4. Provide the APIurl for your WCH tenant
Obtain the API URL from the "Hub Information" dialog available from the "About" menu in Acoustic Content authoring UI. 
The API URL is of the form: https://{tenant-host}/api/{tenant-id}

## Getting started
To use it you require access to an Acoustic Content instance
- having the APIUrl of an existing instance
- registering a new instance here: https://acoustic.com/products/content/

Note: The instance need to allow CORS calls from https://content-us.goacoustic.com

As soon the Plugin is activated it will open up automatically on the Post/Pages edit screens in the lower area.
![Insert asset](https://github.com/acoustic-content-samples/sample-wp-wch-asset-palette/blob/master/doc/images/selectImage.jpg?raw=true)

![Search using tags](https://github.com/acoustic-content-samples/sample-wp-wch-asset-palette/blob/master/doc/images/searchTag.jpg?raw=true)

## Features
- Use the WYSIWYG WordPress editor to insert Acoustic Content hosted pictures
- Images get integrated using a IMG tag (jpeg, jpg, gif, png)
- Videos get integrated using a LINK

### Known limitations
- Classic RTE required

### Possible future enhancements
- Configure/Display list of tenants and allow to switch tenants
- integrate palette html into plugin instead of IFrame
- Use new JSON response 'paletteData' instead of combining the akamai url
- Support also content (if label "text" insert a quote)
- Add "test connection" on config page
- Feed tags from outside (WCH feature required)
- config if “asset” or "content" (e.g. fq=classification:asset)
- Support for other WordPress features (e.g. Blocks)
