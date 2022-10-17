import argparse

parser = argparse.ArgumentParser(description="Create the banner image for the given year")
parser.add_argument("year", type=int, help="What year is the banner for")
args = parser.parse_args()

import subprocess

with open("banner_plain_template.svg") as b:
    svg = b.read()

svg = svg.replace("{{year}}", str(args.year))

args = ["inkscape", "--pipe", "-o", f"../{args.year}/img/banner.png"]
subprocess.run(args, input=svg, text=True)
