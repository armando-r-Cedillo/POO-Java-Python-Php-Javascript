from car import Car

class UberBlack(Car):
    typeOfCar =[]
    seatsMaterial = []
    def __init__(self, license, driver,typeOfCar,seatsMaterial):
        super().__init__(license, driver)
        self.typeOfCar = typeOfCar
        self.seatsMaterial = seatsMaterial
    