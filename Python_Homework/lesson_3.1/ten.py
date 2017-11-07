# Задание отправил в 21:02 (по местному) в 19:02 (по Московскому) 06.08.2017

mass = [x for x in range(1000)]
list_one = []

for item in mass:
  if item%3 == 0 and item%4 == 0 and item != 0 :
    list_one.append(item**3)
    
print(list_one)