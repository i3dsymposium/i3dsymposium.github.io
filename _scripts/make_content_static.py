import subprocess
import sys
import shutil
from pathlib import Path

if len(sys.argv) < 2:
	print("Expected an argument giving the year to convert")
	exit(-1)

year = sys.argv[1]

if year.find(",") == -1 and year.isnumeric():
	years = [year]
elif year.find(",") != -1:
	years = year.split(",")
else:
	print("Expected an argument giving the year to convert")
	exit(-1)

subprocess.run(["bundle", "exec", "jekyll", "build", "--destination", "_build"], shell=True)

Path("_old").mkdir(parents=True, exist_ok=True)

for y in years:
	shutil.move(y, f"_old/{y}")

	shutil.move(f"_build/{y}", y)

