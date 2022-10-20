import argparse

parser = argparse.ArgumentParser(description="Create the banner image for the given year")
parser.add_argument("year", type=int, help="What year is the banner for")
args = parser.parse_args()

import subprocess

def svg2png(src, dst, year):
    with open(src) as b:
        svg = b.read()

    svg = svg.replace("{{year}}", str(year))

    args = ["inkscape", "--pipe", "-o", f"../{year}/img/{dst}"]
    subprocess.run(args, input=svg, text=True)


svg2png("banner_plain_template.svg", "banner.png", args.year)
svg2png("banner_subtitle_template.svg", "banner-subtitle.png", args.year)
svg2png("banner_narrow_subtitle_template.svg", "banner-narrow-subtitle.png", args.year)
