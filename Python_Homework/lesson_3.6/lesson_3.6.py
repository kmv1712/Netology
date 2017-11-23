class Animals:
    name = None
    color = None
    sound = None
    weight = None

    def get_sound(self):
        print(str(self.name) + " говорит: " + str(self.sound))

    def get_weight(self):
        print("Вес: " + str(self.weight) + " кг")

    def get_color(self):
        print(str(self.name) + " имеет " + str(self.color) + " цвет ")


class Cows(Animals):
    name = "Корова"
    sound = "Му"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Goats(Animals):
    name = "Коза"
    sound = "Ме-е"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Sheeps(Animals):
    name = "Овца"
    sound = "Бе-е"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Pigs(Animals):
    name = "Свинья"
    sound = "Хрю-Хрю"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Ducks(Animals):
    name = "Утка"
    sound = "Кря-Кря"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Hens(Animals):
    name = "Курица"
    sound = "Ко-Ко-Ко"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


class Geese(Animals):
    name = "Гусь"
    sound = "Га-га-га"

    def __init__(self, weight, color):
        self.weight = weight
        self.color = color


cow = Cows(100, 'белый')
cow.get_sound()
cow.get_weight()
cow.get_color()

print()

goat = Goats(30, 'бело-серый')
goat.get_sound()
goat.get_weight()
goat.get_color()

print()

sheep = Sheeps(20, 'кремовый')
sheep.get_sound()
sheep.get_weight()
sheep.get_color()

print()

pig = Pigs(40, 'розовый')
pig.get_sound()
pig.get_weight()
pig.get_color()

print()

duck = Ducks(5, 'коричневый')
duck.get_sound()
duck.get_weight()
duck.get_color()

print()

hen = Hens(3, 'коричневый')
hen.get_sound()
hen.get_weight()
hen.get_color()

print()

goose = Geese(6, 'белый')
goose.get_sound()
goose.get_weight()
goose.get_color()