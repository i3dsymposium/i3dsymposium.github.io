import subprocess
from pathlib import Path
import shutil

tmp = Path("./tmp")

tmp.mkdir(exist_ok=True, parents=True)

sizes = [16, 24, 32, 64, 128]

for sz in sizes:
	subprocess.run(["inkscape", "logo.svg", "-o", (tmp/f"{sz}.png").as_posix(), "-w", f"{sz}", "-h", f"{sz}"])

subprocess.run(["magick", "convert", *[(tmp/f"{sz}.png").as_posix() for sz in sizes], "../img/favicon.ico"])

shutil.rmtree(tmp)
