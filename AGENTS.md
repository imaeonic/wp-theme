# Rismor Theme - Agent Instructions

These instructions apply to all automated and human contributors working in this repository.

## Product goal

Build a premium, distinctive, production-quality WordPress theme for Rismor Technologies that looks exceptional out of the box while remaining genuinely customisable through native WordPress controls.

The theme must never become a fixed HTML website disguised as a WordPress theme.

## Non-negotiables

1. Use native WordPress Site Editing, `theme.json`, templates, template parts, patterns and core blocks first.
2. Do not introduce Elementor, Divi, WPBakery, Bootstrap or another page-builder/framework dependency.
3. Do not hard-code content that a site editor should reasonably be able to change.
4. Header, footer, menus, page structures, sections, colours, fonts, spacing and media must remain editable in WordPress.
5. Presentation belongs in the theme. Business functionality and persistent content models belong in plugins.
6. Prefer a small amount of progressive JavaScript over a client-side application.
7. JavaScript enhancements must degrade gracefully and honour `prefers-reduced-motion`.
8. Do not load fonts, analytics, trackers or third-party assets from external services by default.
9. Keep the front end fast. Avoid libraries for effects that can be achieved cleanly with CSS or small native scripts.
10. Maintain keyboard navigation, visible focus, semantic landmarks, sufficient contrast and responsive behaviour.

## Visual direction

- Primarily white/off-white canvas.
- Premium technology/engineering consultancy, not a generic MSP or cyber-security template.
- Strong editorial typography and generous whitespace.
- Rismor blue/cyan as controlled accents rather than everywhere.
- Dark navy sections only where they add contrast and drama.
- Avoid repetitive card grids as the default solution.
- Avoid pills/chips and excessive border-radius.
- Avoid generic neon cyber imagery, stock padlocks and glowing cloud hubs.
- Favour real project imagery, product UI, architecture/topology diagrams and technical annotations.
- Use asymmetric and alternating compositions where appropriate, while keeping navigation and interaction familiar.

## Customisability standard

Every major shipped section should be one of:

- an editable pattern made from core blocks;
- a native template/template part;
- a block style variation;
- a Global Styles preset;
- a custom block only when core blocks cannot reasonably provide the experience.

If a custom block becomes necessary, document why and keep user-editable content explicit in the block UI. Do not create opaque shortcodes.

## Compatibility target

- WordPress 7.1+
- PHP 8.1+
- WooCommerce compatible but optional
- Current evergreen browsers

## Before merging

- Validate `theme.json` and style variation JSON.
- Run PHP syntax checks.
- Check editor and front-end output.
- Test mobile, tablet and desktop.
- Test keyboard-only navigation.
- Test with `prefers-reduced-motion`.
- Confirm no new external network requests were introduced.
