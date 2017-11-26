import os
import re

import requests


def translate_it(text):
    """
    YANDEX translation plugin

    docs: https://tech.yandex.ru/translate/doc/dg/reference/translate-docpage/

    https://translate.yandex.net/api/v1.5/tr.json/translate ?
    key=<API-ключ>
     & text=<переводимый текст>
     & lang=<направление перевода>
     & [format=<формат текста>]
     & [options=<опции перевода>]
     & [callback=<имя callback-функции>]

    :param text: <str> text for translation.
    :return: <str> translated text.
    """

    # Определяем язык текса в файле
    url = 'https://translate.yandex.net/api/v1.5/tr.json/detect'
    key = 'trnsl.1.1.20161025T233221Z.47834a66fd7895d0.a95fd4bfde5c1794fa433453956bd261eae80152'

    params = {
        'key': key,
        'text': text,
    }

    response = requests.get(url, params=params).json()
    # print(response)
    language_text = response['lang']
    # print(language_text)

    # Переводим текст в файле с определеного языка (переменная language_text) на русский

    url = 'https://translate.yandex.net/api/v1.5/tr.json/translate'
    params = {
        'key': key,
        'lang': language_text + '-ru',
        'text': text,
    }

    response = requests.get(url, params=params).json()
    # print(response)
    return ' '.join(response.get('text', []))


current_dir = os.path.dirname(os.path.abspath(__file__))
migrations = 'translate'
save_translate = os.path.join(current_dir, migrations)

tree = os.walk(current_dir)
for d, dirs, files in tree:
    for f in files:
        # ищем название с txt для дальнейшей выборки
        search_word = re.search('txt', f)
        if search_word is not None:
            with open(f, 'r') as words:
                text = words.read()
                a = translate_it(text)
                translate_file = os.path.join(save_translate, f)
                with open(translate_file, 'w') as translate_words:
                    translate_words.write(a)
