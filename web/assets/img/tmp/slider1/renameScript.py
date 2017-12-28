def getExt(filename):
	return filename.split('.')[len(filename.split('.'))-1].lower()
import os

basename = "slide"
counter = 1

files = os.listdir(".");
for file in files:
	if getExt(file) != "py":
		os.rename(file, (str(counter)+'slide.'+getExt(file)))
	counter+=1

print(counter)

input()
