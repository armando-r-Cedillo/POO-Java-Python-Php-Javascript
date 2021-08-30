import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
public class Main{
        public static void main(String[] args) {
               System.out.println("Hello world"); 
               Car car = new Car("12029d",new Account("Armando","w9jwdf","as","123"),3);
               //car.id=1;
               //car.driver="Andres perewz";
               //car.license="12029d";
               //car.passenger=4;
               //System.out.println("car license: " + car.license);
               System.out.println("car license: " + car.getLicense());
               
               
               Card cc = new Card(1,"arc");
               System.out.println(cc.csv);

              User usuario = new User("Armand","1soka","arm@g.com","123");
              System.out.println(usuario.name);
              Driver conductor = new Driver("Karla","1f1aa","ckar@gm.com","13fas");
              System.out.println(conductor.name);

              Car car2 = new Car("a1c229d", new Account("Andrea perez","azq123","as","123"),4);
               //car2.id=2;
               //car2.driver="Andrea perez";
               //car2.license="a1c229d";x
               //car2.passenger=1;
               car2.setLicense("asdd");
               car.printDataCar();
               car2.printDataCar();

               UberX uberNuevo = new UberX("afc213", 
               new Account("Armando", "document-1d", "a@g.com", "azx"), 
               3,
               "chevro", 
               "chrevolte");
               
               uberNuevo.printDataCar();
               System.out.println("pasajeros = "+ uberNuevo.getPassenger());

               //UberX uberx = new UberX(license, driver, brand, model)
               uberNuevo.setPassenger(2);
               uberNuevo.printDataCar();

               Map <String, Map <String,Integer>> typeCarAccepted;
               Map <String,Integer> seconMap;
               ArrayList <String> SeatsMaterial;
               typeCarAccepted = new HashMap <String, Map <String,Integer>>();
               seconMap = new HashMap <String,Integer>();
               
               seconMap.put("BBVA",15);   
               typeCarAccepted.put("VISA", seconMap);

               SeatsMaterial = new ArrayList<>();
               SeatsMaterial.add("Piel");
               
               UberVan uberCamioneta = new UberVan("afc213", 
               new Account("Armando", "document-1d", "a@g.com", "azx"), 
               3,
               typeCarAccepted, 
               SeatsMaterial);
               
               uberCamioneta.printDataCar();
        }
}