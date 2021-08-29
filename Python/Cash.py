from payment import Payment as p
class Cash(p):
    def __init__(self, id):
        super().__init__(id)