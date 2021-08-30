public class UberX extends Car{
    private String brand;
    private String model;
   // private Integer passenger;
    public UberX(String license, Account driver, Integer passengers,String brand, String model){
        super(license, driver,passengers);
        this.brand = brand;
        this.model = model;

        super.printDataCar();
    }

    @Override
    public Integer getPassenger() {
        return super.getPassenger();
    }

    @Override
    public void setPassenger(Integer passenger) {
        if (passenger == 4){
            super.setPassenger(passenger);
            }else{
                System.out.println("el numero de pasajeros debe ser de 4");
            }
       
    }

    @Override
    void printDataCar() {
        System.out.println("Estas en un UberX");
        super.printDataCar();
    }
    
    
}
