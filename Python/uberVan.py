from car import Car

class UberVan(Car):
    __typeCarAccepted = []
    __SeatsMaterial = []
    def __init__(self,id, driver ,license,passenger, typeCarAccepted, SeatsMaterial):
        super().__init__(id,driver,license, passenger)
        self.__typeCarAccepted = typeCarAccepted
        self.__SeatsMaterial = SeatsMaterial 
    
    def setTypeCarAccepted(self,typeCarAccepted):
        self.__typeCarAccepted = typeCarAccepted
    
    def getTypeCarAccepted(self):
        return self.__typeCarAccepted
    
    def setSeatsMaterial(self,seatsMaterial):
        self.__SeatsMaterial = seatsMaterial
    
    def getSeatsMaterial(self):
        return self.__SeatsMaterial
    
    def printDataCar(self):
        super().printDataCar()
        for item in self.typeCarAccepted:
            print(item)
        for item in self.setSeatsMaterial:
            print(item)
        