# Задание отправил в 20:42 (по местному) в 18:42 (по Московскому) 15.11.2017

mass = [x for x in range(1000)]
list_one = []
list_one = [x ** 3 for x in mass if x % 3 == 0 and x % 4 == 0 and x != 0]

# for item in mass:
#   if item%3 == 0 and item%4 == 0 and item != 0 :
#     list_one.append(item**3)

print(list_one)
