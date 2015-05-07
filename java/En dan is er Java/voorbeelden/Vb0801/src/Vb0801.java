// Voorbeeld 0801 Tabel met uitkomsten van tafels 1 tot en met 5
public class Vb0801 {
    
  public static void main( String[] args ) {
    Stempel stempel  = new Stempel();
    stempel.printRechthoek( 3, 7 );
    System.out.println();
    stempel.printRechthoek( 5, 10 );
    System.out.println();
    stempel.printDriehoek();
  }
}


class Stempel {

  public void printRechthoek( int aantalRegels, int regellengte ) {
    // Maak eerst een regel
    StringBuffer buffer = new StringBuffer( regellengte );
    for( int i = 1; i <= regellengte; i++ )
      buffer.append( "*" );
    String regel = buffer.toString();
    
    // Zet daarna de regels op het scherm
    for( int i = 1; i <= aantalRegels; i++ )
      System.out.println( regel );
  }
  
  public void printDriehoek() {
    for( int r = 0; r < 10; r++ ) {
      for( int k = 0; k < r; k++ ) {
        System.out.print( "*" );
      }
      System.out.println();
    }
  }
}
