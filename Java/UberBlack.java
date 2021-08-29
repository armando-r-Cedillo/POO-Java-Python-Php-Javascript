import java.util.ArrayList;
import java.util.Map;

public class UberBlack extends Car {
    Map <String, Map <String,Integer>> typeCarAccepted;
    ArrayList <String> SeatsMaterial;

    public UberBlack(String license, Account driver, Integer passenger, 
    Map <String, Map <String,Integer>> typeCarAccepted,
    ArrayList<String> SeatsMaterial ){
        super(license, driver,passenger);
        this.typeCarAccepted = typeCarAccepted;
        this.SeatsMaterial =SeatsMaterial;
    }
}
