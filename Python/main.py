
from car import Car
from account import Account
from UberX import UberX
from uberBlack import UberBlack
from Card import Card
from Cash import Cash
from Paylpal import Paypal
from driver import Driver
from User import User
if __name__ == "__main__":
    print('Hola mundo')
    #car = Car()
    #car.license = "AMSS"
    #car.driver = "Andres herrera"
    #print(vars(car))

    #car2 = Car()
    #car2.id=1
    #car2.driver="armando"
    #car2.license="120idf"
    #print(vars(car2))

    car3= Car("assc123", Account("armando","arc121242","12 ","12 "))
    #car3.printDataCar()
    print(vars(car3))

    car1 = UberX("b1",Account("armand",124,"document-213","12jsaidj"),"12"," 12")
    print(vars(car1))

    car1.printdata()

    car2 = UberBlack("uberBlack", Account("armando","type234"," 12","21 "),['premium','2013'],["piel","suave"])
    print(vars(car2))

    card = Card(id=1,cvu="12",date="123");
    print(vars(card))
    
    cash=Cash(3)
    print(vars(cash))
    
    ppl = Paypal(2,"armand")
    print(vars(ppl))

    user1 = User(1,"arman","sd13f","12345")
    conductor1 = Driver(2,"raf","cond124","31938dfa")

print(vars(user1))
print(vars(conductor1))

   