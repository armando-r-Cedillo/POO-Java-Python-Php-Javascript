
/*ANTIGUA SINTASIX PARA CREAR CLASES EN JAVASCRIPT POR PROTOTIPOS*/

/*function Car(license, driver){
this.id;
this.license=license;
this.driver=driver;
this.passenger;
}

Car.prototype.printDataCar = function(){
    console.log(this.driver)
    console.log('licencia del carro ',this.license)
}*/

/*NUEVA SINTASIX PARA CREAR CLASES EN JAVASCRIPT POR EMACS6*/
class Car{
    constructor(license, driver){
        this.id
        this.license = license
        this.driver = driver
        this.passanger
    }
    printDataCar = ()=>{
        console.log(this.driver)
        console.log('licencia del carro ',this.license)
    }
}