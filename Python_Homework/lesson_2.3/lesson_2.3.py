import json
import chardet
from collections import Counter
import re
from pprint import pprint

filename = ['newsafr.json', 'newscy.json', 'newsfr.json', 'newsit.json']


def get_chardet(file):
    top = []
    allDescription = []
    description = []
    with open(file, 'rb') as f:
        data = f.read()  # прочитали bytes
        res = chardet.detect(data)
        decoded_string = data.decode(res['encoding'])  # Декодируем байты в строку
        # print(decoded_string)
        data = json.loads(decoded_string)
        # pprint(data)
        for item in data['rss']['channel']['items']:
            # print(data ['rss']['channel']['items'][i]['description'])
            allDescription.append(item['description'])
        # pprint(allDescription)
        # allDescription = map(str.strip, allDescription)
        # pprint(allDescription)
        # allDescription = re.sub('[^А-Яа-яA-Za-z\s\w]*', '', allDescription)
        # data = re.sub('[^А-Яа-яA-Za-z\s\w]*', '', data)
        # data = data ['rss']['channel']['items'][0]['description']
        for item in allDescription:
            item = item.split(" ")
            # print (item)
            description.extend(item)
        # allDescription.append(item)
        # pprint(description)
        for word in description:
            if len(word) > 6:
                top.append(word)
                c = Counter(top)
    # print(top)
    print("Топ 10 слов в файле", file, ":", "\n", c.most_common(10))


for file in filename:
    get_chardet(file)
