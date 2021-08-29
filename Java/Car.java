class Car{
    private Integer id;
    private String license;
    private Account driver;
    private Integer passenger;
    
    public Car(String license, Account driver, Integer passenger ){
        this.license = license;
        this.driver = driver;
        if (passenger != 4){
        System.out.println("los pasajeros tienen que ser 4");
        }
        this.passenger = passenger;
        System.out.println("Constructor del carro"); 
    }

    public void setPassenger(Integer passenger){
     
    }
    public Integer getPassenger(){
        return this.passenger;
    }


    public void setLicense(String license){
        this.license=license;
    }
    public String getLicense(){
        return this.license;
    }

    void printDataCar(){
        if (passenger != null){
            System.out.println("licencia " + license + " conductor " + driver +  " pasajero " + passenger );
            }else{
                System.out.println("error de cupo");
            }
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

}