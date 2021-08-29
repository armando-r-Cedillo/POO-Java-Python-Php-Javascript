class Account:
    id = int
    name = str
    document = str
    email = str
    password = str
    
    def __init__(self,id,name,document,password):
        self.id = id
        self.name=name
        self.password=password
        self.document=document