from payment import Payment
class Card (Payment):
    cvu=str
    date=str

    def __init__(self,id,cvu,date):
        super().__init__(id)
        self.cvu=cvu
        self.date=date
