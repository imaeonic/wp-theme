# Theme Architecture

## Overview

Rismor is a native WordPress block theme. Its architecture separates design, editable page structure and optional functionality so the website can evolve without creating page-builder lock-in.

## Layers

### 1. Global design system - `theme.json`

`theme.json` owns the site-wide visual primitives exposed to the WordPress editor:

- colour palette and gradients
- typography and fluid type scale
- layout widths
- spacing scale
- shadows
- borders and appearance tools
- lightbox and sticky-position support
- element and block defaults
- custom page templates
- template-part registration

Site owners can override these through Global Styles.

### 2. Template structure - `/templates` and `/parts`

Templates define sensible starting structures for common WordPress routes. Template parts own global repeated regions such as the header and footer.

Because this is a block theme, users can edit these visually in Appearance > Editor. WordPress stores user-edited versions in the database and uses them instead of the shipped defaults until reset.

### 3. Reusable sections - `/patterns`

Patterns provide polished starting sections. They should use core blocks wherever possible, remain editable, and avoid baking business data into PHP.

Current starter patterns:

- editorial hero
- capabilities index
- featured project story
- featured testimonial
- closing CTA

Future patterns should cover project galleries, stats, logos, team, comparison, FAQs, pricing, process, contact, article features and case-study structures.

### 4. Global visual presets - `/styles`

Style variations provide whole-site looks that users can switch from the Site Editor. They are deliberately separate from page structure.

Current variations:

- default Rismor Light
- Midnight
- Graphite
- High Contrast

### 5. Progressive enhancement - `/assets`

CSS and JavaScript enhance the native block output. They must not be required for content to remain readable or navigable.

Current enhancements:

- sticky header visual state
- reveal-on-scroll utility class
- block style presentation
- reduced-motion handling
- accessible focus state

### 6. Functionality boundary

Do not put persistent business functionality into the theme. Examples that should live in a companion plugin if required:

- Projects custom post type
- Clients/testimonials custom post types
- service taxonomies
- custom REST endpoints
- structured business data beyond basic theme presentation
- forms and CRM integrations
- analytics

This keeps content portable if the visual theme changes later.

## WooCommerce

WooCommerce is optional. The theme declares support but does not copy WooCommerce template internals. Prefer Woo blocks and Global Styles. Add theme-specific Woo styling only where the public block APIs and semantic output require it.

## Performance philosophy

- native blocks first
- no builder runtime
- no jQuery dependency
- no external font/CDN dependency by default
- small presentation script only
- responsive images through WordPress core
- animations only when they add useful polish
- avoid layout shifts and unnecessary above-the-fold media

## Accessibility

Use semantic landmarks and core blocks, maintain visible keyboard focus, ensure meaningful contrast, keep text scalable and honour reduced motion. Block themes receive WordPress core's skip-link handling when a `<main>` landmark is present.
