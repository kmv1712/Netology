class Animals:
    name = None
    color = None
    sound = None
    weight = None
    type = None

    def get_weight(self):
        print("Вес: " + str(self.weight) + " кг")

    def get_color(self):
        print(str(self.name) + " имеет " + str(self.color) + " цвет ")

    def get_who(self):
        print(str(self.name) + ' ' + str(self.type))

    def __init__(self, name, weight, color, type):
        self.name = name
        self.weight = weight
        self.color = color
        self.type = type


class Bird(Animals):
    wings = 'Крылья'
    feathers = 'Перья'

    def get_feature(self):
        print('Имеет ' + str(self.wings) + " и " + str(self.feathers))


class Mammal(Animals):
    does_not_fly = 'не летает'
    walks_the_ground = 'ходит по Земле'

    def get_feature(self):
        print(str(self.name) + " " + str(self.does_not_fly) + " и " + str(self.walks_the_ground))


cow = Mammal('Зорька', 100, 'белый', 'корова')
cow.get_weight()
cow.get_color()
cow.get_who()
cow.get_feature()

print()

goat = Mammal('Бешка', 30, 'бело-серый', 'Овца')
goat.get_weight()
goat.get_color()
goat.get_who()
goat.get_feature()
print()

sheep = Mammal('Мешка', 20, 'кремовый', 'Коза')
sheep.get_weight()
sheep.get_color()
sheep.get_who()
sheep.get_feature()
print()

pig = Mammal('Хрюша', 40, 'розовый', 'Свинья')
pig.get_weight()
pig.get_color()
pig.get_who()
pig.get_feature()
print()

duck = Bird('Бело-шейка', 5, 'коричневый', 'Утка')
duck.get_weight()
duck.get_color()
duck.get_who()
duck.get_feature()
print()

hen = Bird('Рябушка', 3, 'коричневый', 'Курица')
hen.get_weight()
hen.get_color()
hen.get_who()
hen.get_feature()
print()

goose = Bird('Кусач', 6, 'белый', 'Гусь')
goose.get_weight()
goose.get_color()
goose.get_who()
goose.get_feature()
print()
