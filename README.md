# Handle

[Git Repo](https://github.com/adampatterson/handle)

Handle is a child theme of [Axe](https://github.com/adampatterson/Axe)

Opening `theme-helpers.php` and uncommenting the function
on [line 6](https://github.com/adampatterson/Handle/blob/master/lib/theme-helpers.php#L6) and allows the child theme to
serve all of your themes assets.

If you want to sue a custom data file then all you need to do is rename `/lib/data_rename_to_use.php`
to `/lib/data.php`.

To see Handle in action checkout [Blade](https://github.com/adampatterson/Blade)

### Theme Structure

    Handle/
    ├── acf-json/
    │   └── ...
    ├── assets/
    │   └── ...
    │   └── css
    │   └── fonts
    │   └── img
    │   └── js
    │   └── vendor
    ├── lib/
    │   └── ...
    │   └── data_rename_to_use.php
    ├── src/
    │   └── ...
    │   └── js
    │   └── scss
    ├── templates/
    │   └── ...    
    │   └── blocks/
    │   └── partials/   
    │   └── content-{slug}.php
    │   └── sub-{parent_slug}.php
    ├── vendor/
    │   └── ...    
    ├── woocommerce/
    │   └── ...
    ├── bower.json
    ├── composer.json
    ├── package.json
    └── webpack.mix.js

#### Local Development

```
ln -s ~/Sites/personal/Handle ~/Sites/personal/wordpress.test/wp-content/themes
```
