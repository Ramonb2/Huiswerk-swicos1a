import java.util.*;

/**
 * De klasse <code>Lesrooster</code> representeert een lesrooster,
 * waaraan je instanties van <code>Les</code> 
 * kunt toevoegen.
 * @author Gertjan Laan
 * @version 1.0
 * @see Les
 */

public class Lesrooster {
  private ArrayList<Les> lijst;
  
  /**
   * Initialiseert een lesrooster
   */
  public Lesrooster() {
    lijst = new ArrayList<Les>();
  }
  
  /**
   * Voegt een <code>Les</code>-object toe aan het rooster
   * @param les de les die je toevoegt
   */
  public void voegtoe( Les les ) {
    lijst.add( les );
  }

  /**
   * Print de lessen van het lesrooster naar console-venster
   */
  public void print() {
    for( Les les : lijst ) 
      System.out.println( les );
  }
}
