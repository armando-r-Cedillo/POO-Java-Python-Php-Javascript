public class Card extends Payment{
   String csv; 

   public Card(Integer id,String csv){
       super(id);
    this.csv = csv;
   }
}