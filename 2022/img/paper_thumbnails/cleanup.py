import subprocess
from pathlib import Path

images = []
for f in Path(".").iterdir():
	if f.suffix == ".png":
		images.append(f)

for i in images:
	subprocess.run(["magick", i.as_posix(), "-resize", "800x800", "-quality", "95%", i.with_suffix(".jpg")])
	i.unlink()
