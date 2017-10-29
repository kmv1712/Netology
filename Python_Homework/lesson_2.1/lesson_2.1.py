# coding=utf-8
def get_cook_book():
    global cook
    cook_book = {}

    with open('list_recipes.txt') as file:
        for line in file:
            dish = line.strip()
            if dish.isalpha():
                cook = dish
                cook_book[cook] = []
            elif dish.isdigit():
                # print (int(dish))
                i = 0
                while i < int(dish):
                    ingridient_book = {}
                    another_line = file.readline()
                    another_line = another_line.strip()
                    another_line = another_line.split('|')
                    ingridient_book['ingridient_name'] = another_line[0]
                    ingridient_book['quantity'] = another_line[1]
                    ingridient_book['measure'] = another_line[2]
                    i = i + 1
                    cook_book[cook].append(ingridient_book)
                    # print (ingridient_book)
    # print (cook_book)
    return cook_book


def get_shop_list_by_dishes(dishes, person_count):
    shop_list = {}
    cook_book = get_cook_book()
    # print (cook_book)
    for dish in dishes:
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
        print('{} {} {}'.format(shop_list_item['ingridient_name'], shop_list_item['quantity'],
                                shop_list_item['measure']))


def create_shop_list():
    person_count = int(input('Введите количество человек: '))
    dishes = input('Введите блюда в расчете на одного человека (через запятую): ').lower().split(', ')
    shop_list = get_shop_list_by_dishes(dishes, person_count)
    print_shop_list(shop_list)


create_shop_list()
