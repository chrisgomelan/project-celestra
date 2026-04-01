# Celestra Child Theme

An elegant WordPress child theme based on **Twenty Twenty-Five**, designed with a focus on cinematic aesthetics, rich brown and golden tones, and smooth interactive elements.

## 🌟 Overview

Celestra is a bespoke child theme tailored for high-end luxury experiences. It leverages the power of WordPress block-based architecture while adding custom interactive components and a refined design system.

- **Parent Theme:** [Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/)
- **Author:** Christian Gomelan
- **Version:** 1.0.0

## ✨ Key Features

- **Custom Block Library:** 8 modular blocks for sections ranging from Hero to Footer.
- **Cinematic Animations:** Integration of scroll-curtain reveal and interaction-based transitions.
- **Automated SEO:** Programmatic injection of meta tags (OG, Keywords, Description) and optimized site titles.
- **Accessibility & UX:** Automated `title` attributes for navigation links and optimized mobile menus.
- **External Integrations:** Pre-configured with Font Awesome 6.5.1.

## 🎨 Design System

The theme uses a curated color palette and typography system defined in `theme.json`:
- **Primary Colors:** Celestra Slate (#323732), Golden Sand (#CCA564/C6A05D).
- **Typography:** Modern serif and sans-serif pairings for a premium feel.
- **Interactions:** Custom hover effects for buttons and scroll-reveal animations for sections.

## 🧱 Custom Blocks

Celestra features a suite of custom blocks located in the `/blocks` directory. Each block follows a modular structure with its own `render.php`, `block.json`, and `style.css`.

- **Hero Section:** A cinematic entrance with animation support.
- **Scroll Curtain Reveal:** A utility block that adds smooth reveal animations to its children.
- **Distinction Section:** Highlights core value propositions.
- **Offers Section:** Dynamically showcases special promotions.
- **Privileges Section:** Dedicated to member-exclusive benefits.
- **Relish Section:** Focuses on dining or culinary experiences.
- **Celestra Footer:** A unified, responsive footer navigation system.

## 📂 Project Structure

```text
child-celestra/
├── assets/             # Global assets (images, fonts, CSS)
├── blocks/             # Modular custom block library
├── parts/              # Template parts for headers, footers, etc.
├── templates/          # Page and post templates
├── functions.php       # Theme logic and initialization
├── style.css           # Theme metadata and global overrides
└── theme.json          # Global styles and settings
```

## 🚀 Installation

1. **Clone the repository** into your WordPress themes directory:
   ```bash
   cd /path/to/your/wordpress/wp-content/themes/
   git clone https://github.com/chrisgomelan/project-celestra.git child-celestra
   ```

2. **Verify Parent Theme:** Ensure that the [Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/) theme is installed in your WordPress environment, as Celestra is a child theme.

3. **Activate Theme:** Log in to your WordPress admin dashboard, navigate to **Appearance > Themes**, and activate the **Celestra Child Theme**.

## 🛠️ Development

### Prerequisites
- WordPress 6.x or higher
- PHP 7.4+

### Adding New Blocks
1. Create a new directory in `blocks/`.
2. Include `block.json`, `render.php`, and `style.css`.
3. Register the block if necessary in `functions.php` (though most are auto-registered if using standard conventions).

## 📄 License

This theme is licensed under the GPL-2.0-or-later.
