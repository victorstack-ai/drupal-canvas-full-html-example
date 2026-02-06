# Drupal Canvas Full HTML example config

Example configuration for enabling the `full_html` text format and a matching CKEditor 5 profile for use with the Canvas Full HTML module.

This repository ships a tiny Drupal module named `canvas_full_html_example` that provides example config for a Full HTML text format and CKEditor 5 profile. It also includes a minimal install profile at `profiles/canvas_full_html_example` for quick spins. You can either:

- Enable the module to install the config automatically, or
- Copy the config into your site's config sync directory and import it manually.

## Requirements

- Drupal 10.3+ or 11
- Core modules: Filter, Editor, CKEditor 5, Media, Media Library
- Contrib modules: Canvas, Canvas Full HTML

## Usage

1. Enable `canvas_full_html_example` so the module is visible in the codebase.

Option A: Install on module enable

- Enable the module (the config in `config/install` is installed automatically).

Option B: Import manually

- Copy the example config files into your config sync directory:

```
config/example/filter.format.full_html.yml
config/example/editor.editor.full_html.yml
```

- Import configuration (`drush cim` or the admin UI).

Option C: Install profile

- Use the `Canvas Full HTML Example` profile during site install to enable required modules and the example config.
- Or install with Drush:

```
drush site:install canvas_full_html_example --yes
```

2. Visit the Canvas Full HTML settings page to enable the format and adjust permissions.

## Notes

- The config mirrors the Drupal 11 standard profile Full HTML defaults (including toolbar and allowed tags).
- The `config/install` copy is identical to the `config/example` files for transparency.
- Adjust filters, toolbar items, and allowed roles (the default is `administrator`) to fit your security model.
