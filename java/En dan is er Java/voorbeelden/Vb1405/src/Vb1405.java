// Voorbeeld 1405  Tekstbestand lezen met 
// BufferedReader en FileReader
import java.io.*;

public class Vb1405 {
  public static void main( String[] args ) {
    BufferedReader in;
    String regel;
    try {  
      in = new BufferedReader( new FileReader( "dagen.txt" ) );
      while ( ( regel = in.readLine() ) != null ) {
        System.out.println( regel );
      }
      in.close();
    }
    catch( FileNotFoundException e ) {
      System.out.println( "Kan bestand niet vinden" );
    }
    catch( IOException e ) {
      System.out.println( "Fout bij het lezen of sluiten bestand" );
      e.printStackTrace();
    }
  }
}
