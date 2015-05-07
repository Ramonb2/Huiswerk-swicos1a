import java.awt.*;
import java.util.*;

public class Auto {
  private ArrayList<Onderdeel> onderdelenlijst;
  
  public Auto( int links, int onder, int breedte, int hoogte ) {
    onderdelenlijst = new ArrayList<Onderdeel>();
    int wielgrootte = 20;
    int carosOnder = onder - wielgrootte/2;

    // De carosserie
    onderdelenlijst.add(
      new Rechthoek( Color.BLUE, links, onder-10, breedte, hoogte ) );

    // De cabine
    onderdelenlijst.add(
      new Rechthoek( Color.CYAN, links, onder-10-hoogte,
                     4*breedte/5, 4*hoogte/5 ) );

    // Het achterwiel
    onderdelenlijst.add(
      new Cirkel( Color.YELLOW, links+5, onder, wielgrootte ) );

    // Het voorwiel
    onderdelenlijst.add(
      new Cirkel( Color.YELLOW, links+breedte-30, onder, wielgrootte ) );
  }


  public void teken( Graphics g ) {
    for( Onderdeel part : onderdelenlijst ) 
      part.teken( g );                            // polymorfie
  }
}
  