# coding=utf-8
# Задание
# мне нужно отыскать файл среди десятков других
# я знаю некоторые части этого файла (на память или из другого источника)
# я ищу только среди .sql файлов
# 1. программа ожидает строку, которую будет искать (input())
# после того, как строка введена, программа ищет её во всех файлах
# выводит список найденных файлов построчно
# выводит количество найденных файлов
# 2. снова ожидает ввод
# поиск происходит только среди найденных на этапе 1
# 3. снова ожидает ввод
# ...
# Выход из программы программировать не нужно.
# Достаточно принудительно остановить, для этого можете нажать Ctrl + C

# Пример на настоящих данных

# python3 find_procedure.py
# Введите строку: INSERT
# ... большой список файлов ...
# Всего: 301
# Введите строку: APPLICATION_SETUP
# ... большой список файлов ...
# Всего: 26
# Введите строку: A400M
# ... большой список файлов ...
# Всего: 17
# Введите строку: 0.0
# Migrations/000_PSE_Application_setup.sql
# Migrations/100_1-32_PSE_Application_setup.sql
# Всего: 2
# Введите строку: 2.0
# Migrations/000_PSE_Application_setup.sql
# Всего: 1

# не забываем организовывать собственный код в функции

import os
import re

migrations = 'Migrations'
current_dir = os.path.dirname(os.path.abspath(__file__))
files_dir = os.path.join(current_dir, migrations)


def get_sql_file_list():
    """ Функция возращает список с названиями файлов и раширением sql в файле с путем files_dir"""
    # Переменная tree - кортеж включает три элемента. Первый – это адрес каталога,
    # второй – список поддиректорий не глубже первого уровня,
    # третий – список имен файлов.
    tree = os.walk(files_dir)
    sql_file_list = []
    # выводим названия файлов в папке по порядку (как отдельнык элементы)
    for d, dirs, files in tree:
        for f in files:
            # Ищем названия с расширением sql
            if f.endswith('.sql'):
                sql_file_list.append(f)
    return sql_file_list


def get_list_for_search_word(user_input, sql_file_list):
    file_list = []
    user_input = user_input.strip()
    for file in sql_file_list:
        path_to_file = os.path.join(files_dir, file)
        with open(path_to_file, 'r') as f:
            text = f.read()
            search_word = re.search(user_input, text)
            if search_word is not None:
                # Добавляем в список файлы с искомым словом
                file_list.append(file)
    for item in file_list:
        print(item)
    print('Всего: {}'.format(len(file_list)))
    return file_list


if __name__ == '__main__':
    sql_file_list = get_sql_file_list()
    while True:
        user_input = input('Введите строку:')
        list_for_search_word = get_list_for_search_word(user_input, sql_file_list)
        sql_file_list = list_for_search_word
pass
