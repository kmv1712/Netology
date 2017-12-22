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

    # def get_who(self):
    #     print(str(self.name) + ' ')

    def __init__(self, name, weight, color):
        self.name = name
        self.weight = weight
        self.color = color

    def get_sound(self):
        print(str(self.name) + ' говорит ' + str(self.sound))


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


class Cow(Mammal):
    sound = 'Му'


class Goat(Mammal):
    sound = 'Бе-е'


class Sheep(Mammal):
    sound = 'Ме-е'


class Pig(Mammal):
    sound = 'Хрю'


class Duck(Bird):
    sound = 'Кря'


class Hen(Bird):
    sound = 'Ко-ко-ко'


class Goose(Bird):
    sound = 'Га-га-га'


class Mammal(Animals):
    does_not_fly = 'не летает'
    walks_the_ground = 'ходит по Земле'

    def get_feature(self):
        print(str(self.name) + " " + str(self.does_not_fly) + " и " + str(self.walks_the_ground))


cow = Cow('Зорька', 100, 'белый')
cow.get_color()
cow.get_weight()
cow.get_sound()
cow.get_feature()

print()

cow_another = Cow('Буренка', 100, 'Черный')
cow_another.get_color()
cow_another.get_weight()
cow_another.get_sound()
cow_another.get_feature()

print()

goat = Goat('Бешка', 30, 'бело-серый')
goat.get_weight()
goat.get_color()
goat.get_sound()
goat.get_feature()

print()

sheep = Sheep('Мешка', 20, 'кремовый')
sheep.get_weight()
sheep.get_color()
sheep.get_sound()
sheep.get_feature()

print()

pig = Pig('Хрюша', 40, 'розовый')
pig.get_weight()
pig.get_color()
pig.get_sound()
pig.get_feature()

print()

duck = Duck('Бело-шейка', 5, 'коричневый')
duck.get_weight()
duck.get_color()
duck.get_sound()
duck.get_feature()

print()

hen = Hen('Рябушка', 3, 'коричневый')
hen.get_weight()
hen.get_color()
hen.get_sound()
hen.get_feature()

print()

goose = Goose('Кусач', 6, 'белый')
goose.get_weight()
goose.get_color()
goose.get_sound()
goose.get_feature()

print()
