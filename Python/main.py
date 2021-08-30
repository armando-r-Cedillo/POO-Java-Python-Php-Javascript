
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
    #car3= Car("assc123", Account("armando","arc121242","12 ","12 "))
    #car3.printDataCar()
    #print(vars(car3))
    uberx = UberX("b1","f1-12f",2,Account(124,"armand","document-213","12jsaidj"),"A2",4)
    print("variables en UBERX: ", vars(uberx))

    uberx.printdataCar()

    car2 = UberBlack(1,"uberBlack", Account(124,"armand","document-213",
    "12jsaidj"),4,["piel","suave"],["piel","suave"])
    print("variables en UberBlack: ",vars(car2))

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



   