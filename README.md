# Drupal Canvas Full HTML example config

Example configuration for enabling the `full_html` text format and a matching CKEditor 5 profile for use with the Canvas Full HTML module.

This repository ships a tiny Drupal module named `canvas_full_html_example` that provides **example config** only. The config is **not installed automatically**; it is meant to be copied into your site's config sync directory and imported.

## Requirements

- Drupal 10.3+ or 11
- Core modules: Filter, Editor, CKEditor 5
- Contrib modules: Canvas, Canvas Full HTML

## Usage

1. Enable `canvas_full_html_example` so the module is visible in the codebase.
2. Copy the example config files into your config sync directory:

```
config/example/filter.format.full_html.yml
config/example/editor.editor.full_html.yml
```

3. Import configuration (`drush cim` or the admin UI).
4. Visit the Canvas Full HTML settings page to enable the format and adjust permissions.

## Notes

- The config is intentionally minimal and mirrors the standard profile's Full HTML defaults.
- Adjust filters, toolbar items, and allowed roles to fit your security model.
