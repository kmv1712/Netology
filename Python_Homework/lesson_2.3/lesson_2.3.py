import json
import chardet
from collections import Counter
import re
from pprint import pprint

filename = ['newsafr.json', 'newscy.json', 'newsfr.json', 'newsit.json']


def get_chardet(file):
  top = []
  with open(file, 'rb') as f:
      data = f.read() # прочитали bytes
      res = chardet.detect(data)
      decoded_string = data.decode(res['encoding']) # Декодируем байты в строку
      # print(decoded_string)
      data = json.loads(decoded_string)
      # data = re.sub('[^А-Яа-яA-Za-z\s\w]*', '', data)
      data = data ['rss']['channel']['items'][0]['description']
      data = data.split(" ")
      for word in data:
          if len(word) > 6:
              top.append(word)
              # print (top)
              c = Counter(top)
  # print(top)
  print("Топ 10 слов в файле", file, ":", "\n", c.most_common(10))

for file in filename:
    get_chardet(file)