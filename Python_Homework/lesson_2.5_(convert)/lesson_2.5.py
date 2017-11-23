import subprocess
import os


migrations = 'Source'
current_dir = os.path.dirname(os.path.abspath(__file__))
files_dir = os.path.join(current_dir, migrations)


def get_new_photo():
    '''Функция для конвертации фото ширина указываеться переменной width_of_photo_in_pixels
    (высота меняется пропорционально) фото береться из папки Source, и сохраняеться в Result'''
    width_of_photo_in_pixels = 200
    tree = os.walk(files_dir)
    for d, dirs, files in tree:
        for f in files:
            print(f)
            subprocess.run('convert Source/' + f + ' -resize ' + str(width_of_photo_in_pixels) + ' Result/' + f)

get_new_photo()

# subprocess.run('convert Source/26694fe81544dcf4c14217d6ace7e4f6.jpg -resize 200 Result/output.jpg')
