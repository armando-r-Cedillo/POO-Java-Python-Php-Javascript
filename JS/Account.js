/*function Account(name, document){
this.id;
this.name = name;
this.document = document;
this.email;
this.password;
}*/


/*NUEVA SINTASIX PARA CREAR CLASES EN JAVASCRIPT POR EMACS6*/
class Account{
    constructor(id,name,document,email,password){
        this.id = id;
        this.name = name;
        this.document = document;
        this.email = email;
        this.password = password;
    }
}