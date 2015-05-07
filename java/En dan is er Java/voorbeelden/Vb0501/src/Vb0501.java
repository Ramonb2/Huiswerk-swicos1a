// Voorbeeld 0501, Console-applicatie
// Testen van boolean uitdrukkingen
public class Vb0501 {
  public static void main( String[] args ) {
    System.out.println( "Dit is voorbeeld 0501" );
    int jaartal = 2025;
    System.out.print( jaartal + " > 2000? " );
    System.out.println( jaartal > 2000 );
    
    System.out.print( jaartal + " tussen 2000 en 2010? " );
    System.out.println( jaartal >= 2000 && jaartal <= 2010 );
  }
}
