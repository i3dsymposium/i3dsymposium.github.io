# i3dsymposium.github.io
webpage for [i3d symposium](https://i3dsymposium.org)

## Local build

To test the site locally, follow the instructions from https://docs.github.com/en/pages/setting-up-a-github-pages-site-with-jekyll/testing-your-github-pages-site-locally-with-jekyll


## Creating banner images for a new year

You will need:

- Inkscape installed and accessible through your PATH https://inkscape.org
- Python >=3.6

In a terminal, open the `/img_src` directory, and run

    $ python banner.py <current_year>

This will create a set of images in the `/<current_year>/img/` directory:
 - `banner.png` (this is the banner in the top-left of the website)
 - `banner-subtitle.png` (to be used in things like the mailing list posts)
 - `banner-narrow-subtitle.png` (used as preview image in opengraph (facebook) posts)


## Other icons and images

The `/img/` and `/img_src/` directories have several images and icons to be used anywhere outside the website.

The `/img/logo-square-twitter.png` icon is used by twitter for the small icon in link previews.
