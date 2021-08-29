from account import Account

class Driver(Account):
    def __init__(self, id, name, document, password):
        super().__init__(id, name, document, password)