// Voorbeeld 0701 Lesrooster
/**
 * Opstartklasse voor testen van <code>Lesrooster</code>, <code>Les</code> en <code>Tijdstip</code>
 * @author Gertjan Laan
 * @version 1.0
 * @see Lesrooster
 * @see Les
 * @see Tijdstip
 */
  
public class Vb0701 {
  public static void main( String[] args ) {
    System.out.println( "Voorbeeld 0701  Testen van Lesrooster" );

    Lesrooster rooster = new Lesrooster();

    Les les = new Les( "Java", new Tijdstip( "maandag", 3 ), "D021" );
    rooster.voegtoe( les );

    les = new Les( "Java", new Tijdstip( "maandag", 4 ), "D021" );
    rooster.voegtoe( les );
    
    les = new Les( "Wiskunde", new Tijdstip( "dinsdag", 6 ), "A505" );
    rooster.voegtoe( les );
    
    rooster.print();
  }
}
