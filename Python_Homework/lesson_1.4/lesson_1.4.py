documents = [
        {"type": "passport", "number": "2207 876234", "name": "Василий Гупкин"},
        {"type": "invoice", "number": "11-2", "name": "Геннадий Покемонов"},
        {"type": "insurance", "number": "10006", "name": "Аристарх Павлов"}
      ]
      
directories = {
    '1': ['2207 876234', '11-2'],
    '2': ['10006'],
    '3': []
  }



def get_people():
  print ('Введите номер документа')
  number = input()
  for item in documents:
        if (number == item['number']):
            print (item['name'])
            return
        # else: 
        #     print ('Нет такого пользователя')

# p = get_people()


def get_list():
  for item in documents:
    print ("\"" + item['type'] + "\" " + "\"" + item['number'] + "\"" + " " + "\""+ item['name'] + "\"") 
        
# l = get_list()

def get_shelf():
  print ('Введите номер документа')
  number = input()
  for key, value in directories.items():
      # print (value)
    # print('{0} {1}'. format(key, value))
    if (item in value):
      print (key)
      
# s = get_shelf()

def get_add():
  print ('Введите номер документа')
  number = input()
  print ('Введите тип документа')
  document = input()
  print ('Введите имя владельца')
  name = input()
  print ('Введите номер полки')
  direct = input()
  documents.append( {"type":document, "number": number, "name": name})  
  print ("Данные занесены")
  for key, value in directories.items():
    if (key == direct):
      value.append(number)
      print('{0} {1}'. format(key, value))
      return

while (input('Введите символ и нажмите enter для запуска программы или нажмите enter для выхода из нее') != ""):
  # a = get_add()
  print ("Введите команду p, l , s , a")
  user = input()
  if (user == 'a'):
    a = get_add()
  elif (user == 's'):
    s = get_shelf()
  elif (user == 'l'):
    l = get_list()
  elif (user == 'p'):
    p = get_people()