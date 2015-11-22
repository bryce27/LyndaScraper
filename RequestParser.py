urls = []
output = ""
f = open("requests.txt", "r")

try:
    for line in f:
        if any( ["GET https://files" in line, "GET http://files" in line] ):
            pieces = line.split(" ")
            urls.append(pieces[1])

    for url in urls:
        output += url

except:
    print "Could not open file"
finally:
    f.close()

try:
    file = open("urls.txt", "w+")
    file.write(output)
    print "Successfully parsed requests.txt and wrote urls to urls.txt"
except:
    print "Could not open file or write to file"
finally:
    file.close()
