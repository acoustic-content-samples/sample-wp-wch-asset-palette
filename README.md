# WordPress integration with IBM Watson Content Hub

This plugin provides an installable plugin for WordPress which integrates with IBM Watson Content Hub. 
The main goal of this plugin is to show how simple both technologies could get combined. 
It allows to use the palette for selecting published assets into a blog or page.

## Pre-requisites
There is no known pre-requisite, but this module was mainly tested on
Wordpress: 3.4 till 4.7.4 (last tested version)

## Installation
Installation may occur via copy of files or ZIP install
### Installation using the files
1. Upload files to the `/wp-content/plugins/` directory
### Installation using the ZIP
1. Upload the zip using Plugins -> Add New -> Upload Plugin -> Browse -> Install Now
### Activation and configuration
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Open the plugin configuration page
4. Provide the APIurl for your WCH tenant
Obtain the API URL from the "Hub Information" dialog available off the top navigation bar of the content hub authoring UI. 
The API URL is of the form: https://{tenant-host}/api/{tenant-id}
### Or use the official build-in plugin-search
![Install plugin](https://raw.githubusercontent.com/ibm-wch/sample-wp-wch-asset-palette/master/doc/images/installPlugin.jpg)

## Getting started
To use it you require access to a IBM Watson Content Hub SaaS instance
- having the APIUrl of an existing instance.
- registering a new instance here: ![IBM Watson Content Hub](https://www.ibm.com/marketplace/cloud/cloud-cms-solution)
And the instance need to allow CORS calls from https://www.digitalexperience.ibm.com

As soon the Plugin is activated it will open up automatically on the Post/Pages edit screens in the lower area.
![Insert asset](https://raw.githubusercontent.com/ibm-wch/sample-wp-wch-asset-palette/master/doc/images/selectImage.jpg)

![Search using tags](https://raw.githubusercontent.com/ibm-wch/sample-wp-wch-asset-palette/master/doc/images/searchTag.jpg)

## Features
- Use the WYSIWYG WordPress editor to insert IBM Watson Content Hub hosted pictures.

### Known limitations
- Only for images for now
- Iframe has a fixed size

### Possible future enhancements
- Display list of tenants of the user and allow to switch tenants
- Enhance config page explaining how to retrieve the APIUrl
- Support also other asset types (e.g. if video is clicked, add a link)
- Support also content (if label "text" insert a quote)
- Add "test connection" on config page
- Auto-resize IFrame
- Feed tags from outside (WCH feature required)
