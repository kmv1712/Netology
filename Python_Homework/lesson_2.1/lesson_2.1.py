def get_dish_list():
  dish_list = []
  with open('list_recipes.txt') as f:
    for line in f:
      dish = line.strip()
      if(dish.isalpha() == True):
        dish_list.append(dish)
  return dish_list 

def get_quantity_list():
  quantity_list = []
  with open('list_recipes.txt') as f:
    for line in f:
      quantity = line.strip()
      if (quantity.isdigit() == True):
        quantity_list.append(int(quantity))
  return quantity_list


def get_ingridient_book():
    ingridient_book['ingridient_name'] = parameter[0]
    ingridient_book['quantity'] = parameter[1]
    ingridient_book['measure'] = parameter[2]
    return ingridient_book
	        
	      




dish_list = get_dish_list()  
quantity_list = get_quantity_list()
print (dish_list)
print (quantity_list)
with open('list_ingridient.py', 'w') as f:
  f.write('')

ingridient_book = {}
ingridient_book_list = []
part_ingridient_book = []
with open('list_recipes.txt') as f:
  for line in f:
    parameter = line.strip()
    parameter = parameter.split('|')
    if (len(parameter) == 3):
      ingridient_book = get_ingridient_book()
      # print (ingridient_book)
      # part_ingridient_book  = [ingridient_book for i in [""]]
      # print (part_ingridient_book)
      with open('list_ingridient.py', 'a') as f:
        f.write(str (ingridient_book) + '\n')
var = 0
# part_cook = ['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',]
with open('list_ingridient.py', 'r') as f:
  part_cook = ['' for i in range(sum(quantity_list) + 1)]
  for quantity in quantity_list:
    a = ['' for i in range(quantity)]
    for line in f:
      for i in range(sum(quantity_list)):
        if i != quantity - 1:
          text = line.strip()
          part_cook[var] = text
        else:
          var = var + 1 
      
  



        
# var = 0     
# cook_book = {}
# with open('list_ingridient.py') as f:
#   for quantity in quantity_list:
#     for i in range(quantity):
#       a = [text for i in range(quantity)]
#       text = f.readline().strip()
#       cook_book[dish_list[var]] = a 
#       if i == quantity - 1:
#         var = var + 1



def gen_list():
  text = f.readline().strip()
  text_list = ['' for i in range((quantity_list[var]))]
  text_list[var_one] = (text)
  a[var_one] = text_list[var_one]
  var_one = var_one + 1  
  n = n + 1
  print (a)
  cook_book[dish_list[var]] = a 
  return 

  




n = 0    
i = 0          
var = 0    
var_one = 0
cook_book = {}
with open('list_ingridient.py') as f:
  while i < len(quantity_list):
    i = i + 1
    while var != len(quantity_list) and var < quantity_list[var]:
      a = [text for i in range((quantity_list[var]))]
      var_one = 0
      n = 0
      while n < quantity_list[var]:
        text = f.readline().strip()
        text_list = ['' for i in range((quantity_list[var]))]
        text_list[var_one] = (text)
        # print(text)
        # print()
        # print (text_list[var_one])
        # print()
        # print (var_one)
        a[var_one] = text_list[var_one]
        var_one = var_one + 1  
        n = n + 1
        # print (a)
        cook_book[dish_list[var]] = a
       
      var = var + 1
      # print(var)
      # print(len(quantity_list))
      
      # print(var)
    
     
      
      # cook_book[dish_list[var]] = a 
      # if var == quantity_list[var] - 1:
      #   var = var + 1   
with open('cook_book_list.py', 'w') as f:    
  print('')
        
print(cook_book)  

with open('cook_book_list.py', 'a') as f:
  f.write(str(cook_book))

def get_shop_list_by_dishes(dishes, person_count):
	shop_list = {}
	cook_book = {}
	with open('cook_book_list.py', 'r' ) as f:
	  for line in f:
	    line = line.replace('\"', ' ')
	    cook_book = line
	for dish in dishes:
	  print (cook_book)
	  print (dish)
	  print (dishes)
	  print (cook_book[dish])
	 # cook_book.get(dish)
	  for ingridient in cook_book[dish]:
	    new_shop_list_item = dict(ingridient)
	    new_shop_list_item['quantity'] *= person_count
	    if new_shop_list_item['ingridient_name'] not in shop_list:
	      shop_list[new_shop_list_item['ingridient_name']] = new_shop_list_item
	    else:
	      shop_list[new_shop_list_item['ingridient_name']]['quantity'] += new_shop_list_item['quantity']
	      
	return shop_list

def print_shop_list(shop_list):
	for shop_list_item in shop_list.values():
		print('{} {} {}' . format(shop_list_item['ingridient_name'], shop_list_item['quantity'], shop_list_item['measure']))


def create_shop_list():
	person_count = int(input('Введите количество человек: '))
	dishes = input('Введите блюда в расчете на одного человека (через запятую): ').lower().split(', ')
	shop_list = get_shop_list_by_dishes(dishes, person_count)
	print_shop_list(shop_list)



  
create_shop_list()
