import argparse

parser = argparse.ArgumentParser(description="Create the banner image for the given year")
parser.add_argument("year", type=int, help="For what year the banner should be generated. 0 to build the generic banners and logos.")
args = parser.parse_args()

import subprocess

def svg2png(src, dst, *, bg=False):
    with open(src) as b:
        svg = b.read()

    args = ["inkscape", "--pipe", "-o", f"../img/{dst}"]
    if bg:
        args += ["-b", "#ffffff", "-y", "1.0"]
    subprocess.run(args, input=svg, text=True)

def svg2png_year(src, dst, year, *, bg=False):
    with open(src) as b:
        svg = b.read()

    svg = svg.replace("{{year}}", str(year))

    args = ["inkscape", "--pipe", "-o", f"../{year}/img/{dst}"]
    if bg:
        args += ["-b", "#ffffff", "-y", "1.0"]
    subprocess.run(args, input=svg, text=True)


if args.year == 0:
    svg2png("banner-general.svg", "banner.png")
    svg2png("banner-general.svg", "banner-bg.png", bg=True)
    svg2png("banner-youtube.svg", "banner-youtube.png")
    svg2png("logo-square.svg", "logo-square.png")
    svg2png("logo-square.svg", "logo-square-bg.png", bg=True)
    svg2png("logo-square-title.svg", "logo-square-title.png")
    svg2png("logo-square-title.svg", "logo-square-title-bg.png", bg=True)
    svg2png("cvent-banner.svg", "cvent-banner.png")
    svg2png("cvent-logo.svg", "cvent-logo.png")
else:
    svg2png_year("banner-year.svg", "banner.png", args.year)
    svg2png_year("banner-year.svg", "banner-bg.png", args.year, bg=True)
    svg2png_year("social-card-year.svg", "social-card.png", args.year)
    svg2png_year("logo-square-title-year.svg", "logo-square-title.png", args.year)
    svg2png_year("logo-square-title-year.svg", "logo-square-title-bg.png", args.year, bg=True)
