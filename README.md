# i3dsymposium.github.io
webpage for [i3d symposium](https://i3dsymposium.org)

## Local build

To test the site locally, follow the instructions from https://docs.github.com/en/pages/setting-up-a-github-pages-site-with-jekyll/testing-your-github-pages-site-locally-with-jekyll


## Creating banner images for a new year

### Requirements

- [Inkscape](https://inkscape.org) installed and accessible through your PATH
- Python >=3.6
- Install the fonts in `img_src/fonts`:
  - `Jost` is used for the I3D logo titles
  - `Outfit` is used for the social card subtitle

### Process

In a terminal, open the `/img_src` directory, and run

    $ python banner.py <current_year>

This will create a set of images in the `/<current_year>/img/` directory:
 - `banner.png` (this is the banner used in the top-left of the website)
 - `banner-bg.png` (same as banner.png but with white background)
 - `logo-square-title-bg.png` (preview for twitter, with white background)
 - `logo-square-title.png` (same as `logo-square-title-bg.png` but with transparent background)
 - `social-card.png` (used as preview image in opengraph (facebook, mastodon) posts)


## Favicon generation

### Requirements

- [Inkscape](https://inkscape.org) installed and accessible through your PATH
- [ImageMagick](https://imagemagick.org) installed and accessible through your PATH
- Python >=3.6


### Process

In a terminal, open the `/img_src` directory, and run

    $ python logo-ico.py

This will create the `favicon.ico` file in the `/img` directory, which includes the sizes 16, 32, 64, 128.


## Generating general icons and banners

This is similar to generating for a specific year

### Requirements

- [Inkscape](https://inkscape.org) installed and accessible through your PATH
- Python >=3.6
- Install the fonts in `img_src/fonts`:
  - `Jost` is used for the I3D logo titles
  - `Outfit` is used for the youtube banner subtitle

### Process

In a terminal, open the `/img_src` directory, and run

    $ python banner.py 0

This will create a set of images in the `/img/` directory:
 - `banner.png` (General I3D symposium banner)
 - `banner-bg.png` (Same as `banner.png` with white background)
 - `banner-youtube.png` (Banner to be used in youtube)
 - `logo-square.png` (Just the logo)
 - `logo-square-bg.png` (Just the logo with white background)
 - `logo-square-title.png` (The logo with I3D symposium title beneath)
 - `logo-square-title-bg.png` (Same as `logo-square-title.png` with white background)

