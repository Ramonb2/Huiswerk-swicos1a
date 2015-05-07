// Voorbeeld 1401 Invoer van getallen in console-applicatie
import java.io.*;

public class Vb1401 {
  public static void main( String[] args ) {
    BufferedReader toetsenbord =
      new BufferedReader( new InputStreamReader( System.in) );    
    int i = 0;
    double d = 0.0;
    System.out.println( "Typ een geheel getal:" );

    try {
      // Lees een regel van het toetsenbord
      String s = toetsenbord.readLine();
      i = Integer.parseInt( s );
      System.out.println( "Typ een gebroken getal:" );

      // Lees nog een regel van het toetsenbord
      s = toetsenbord.readLine();
      d = Double.parseDouble( s );
      System.out.println( "Je tikte " + i + " en " + d );      
    }
    catch( IOException ioe ) {
      System.out.println( "Fout bij inlezen");
    }
    catch( NumberFormatException nfe ) {
      System.out.println( "Fout bij omzetten van invoer naar getal");
    }
  }
}
