from car import Car

class UberX(Car):
    __brand = str
    __model = str

    def __init__(self, brand, model,id, driver ,license,passenger):
        super().__init__(id, driver ,license,passenger)
        self.__brand = brand
        self.__model = model

    def printdataCar(self):
        print("Marca: " + self.__brand + " Modelo: " + self.__model)
        return super().printDataCar()
         
