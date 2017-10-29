import json
import chardet
from collections import Counter
import re
from pprint import pprint

filename = ['newsafr.json', 'newscy.json', 'newsfr.json', 'newsit.json']


def get_chardet(file):
    top = []
    with open(file, 'rb') as f:
        data = json.load(f)
        data = data['rss']['channel']['description']
        # pprint(data)
        data = re.sub('[^А-Яа-яA-Za-z\data\w]*', '', data)
        # print (s)
        data = data.replace("\r", " ").split(" ")
        # print (s)
        for word in data:
            if len(word) > 6:
                top.append(word)
                c = Counter(top)
    # print(top)
    print("Топ 10 слов в файле", file, ":", "\n", c.most_common(10))


for file in filename:
    get_chardet(file)

