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

    @Override
    void printDataCar() {
        // TODO Auto-generated method stub
        System.out.println("Estas en una UberVan");
        this.SeatsMaterial.iterator().next();

        for(int i=0; i < this.typeCarAccepted.size(); i++){
            ArrayList<Object> a = new ArrayList<Object>(this.typeCarAccepted.keySet());
            Object o=a.get(i);
            System.out.println("all together: " + this.typeCarAccepted.size() + "each element is:  " + o + " value: " + this.typeCarAccepted.get(o));        }
       
        for (int i = 0; i < this.SeatsMaterial.size(); i++) {
            System.out.println(this.SeatsMaterial.get(i).toString());
        }
        super.printDataCar();

    }

    
}
