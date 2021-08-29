import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
    Map <String, Map <String,Integer>> typeCarAccepted;
    ArrayList <String> SeatsMaterial;

    public UberVan(String license, Account driver, Integer passenger, 
    Map <String, Map <String,Integer>> typeCarAccepted,
    ArrayList <String> SeatsMaterial ){
        super(license, driver,passenger);
        this.typeCarAccepted = typeCarAccepted;
        this.SeatsMaterial =SeatsMaterial;
    }

    @Override
    public Integer getPassenger() {
        // TODO Auto-generated method stub
        return super.getPassenger();
    }

    @Override
    public void setPassenger(Integer passenger) {
        // TODO Auto-generated method stub
        if(passenger==6)
            super.setPassenger(passenger);
        else{
            System.out.println("El numero de pasajeros debe ser de 6");
        }

    }

    
}
