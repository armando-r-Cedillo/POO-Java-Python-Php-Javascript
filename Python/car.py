from account import Account

class Car (Account):
    __id= int
    __license = str
    __driver = Account("","","","")
    __passenger = int

    def __init__(self, id, driver ,license,passenger):
        if passenger == 4 or passenger == 6:
            self.__id =id
            self.__license=license
            self.__driver=driver
            self.__passenger = passenger
        else:
            print(" el numero de pasajeros es invalido")
        
    def printDataCar(self):
        if self.__passenger == 4 or self.__passenger == 6:
            print("id carro: " + str(self.__id) + 
            "licencia carro: " + self.__license +
            "numero pasajeros: " + str(self.__passenger))
            return self.__driver.printAccountData()
        else:
            print(" el numero de pasajeros es invalido")

