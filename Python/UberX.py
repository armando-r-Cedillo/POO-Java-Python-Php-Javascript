from car import Car

class UberX(Car):
    brand = str
    model = str

    def __init__(self, license, driver, brand, model):
        super().__init__(license, driver)
        self.brand = brand
        self.model = model

    def printdata(self):
        print(self.brand + " " + self.model + " " + self.license, " " + str(self.driver.email))
