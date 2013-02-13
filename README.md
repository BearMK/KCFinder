# KCFinder (with ZendFramework 2 support)

KCFinder is free open-source alternative to the CKFinder web file manager. It
can be integrated into FCKeditor, CKEditor, and TinyMCE WYSIWYG web editors
(or your custom web applications) to upload and manage images, flash movies,
and other files that can be embedded in an editor's generated HTML content.
--From [http://kcfinder.sunhater.com/](http://kcfinder.sunhater.com/)

This version of KCFinder is slightly modified to add integration support for
ZendFramework 2, mainly due to ZF2 v.2.1.1 session support changes.

## Documentation

Please check the [`doc` dir](https://github.com/raykolbe/KCFinder/tree/master/doc)
for more detailed documentation on the features provided by this package.

## Installation

Drag and drop, git clone, or git submodule
(https://github.com/raykolbe/KCFinder.git) into your public web directory. Install
and configuration options can be found [`here`](http://kcfinder.sunhater.com/docs/install).

If using ZendFramework 2 integration support, you **MUST** make sure that your `vendor/autoload.php`
file is in the pathway to your public directory.

**Example**

A typical ZendFramework 2 project structure looks like this:

```
/myproject
  /config
  /module
  /vendor
    autoload.php       <---KCFinder package looks for this file.
    /zendframework
  /public
    index.php
    /css
    /js
      /ckeditor
      /kcfinder        <---Place KCFinder package here.
```
