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
   * Levert de lessen van het lesrooster als string
   */
  public String toString() {
    StringBuffer buffer = new StringBuffer();
    for( Les les : lijst ) {
      buffer.append( les );
      buffer.append( "\n" );
    }
    return buffer.toString();
  }
}
