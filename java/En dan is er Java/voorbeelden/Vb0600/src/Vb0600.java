// Voorbeeld 0600
// Klasse datum zonder methode toString()
public class Vb0600 {
  public static void main( String[] args ) {
    //System.out.println( "Voorbeeld 0600  Datum zonder toString()" );

    Datum datum;
    
    datum = new Datum( 18, 7, 2008 );
    
    // Hier wordt toString() automatisch aangeroepen
    System.out.println( datum );
  }
}


class Datum {
  private int dag;
  private int maand;
  private int jaar;

  // Constructors
  public Datum() {
    this( 1, 1, 2000 );     
  }

  public Datum( int dag, int maand, int jaar ) {
    this.dag = dag;
    this.maand = maand;
    this.jaar = jaar;
  }

  // Getters
  public int getDag() {
    return dag;
  }

  public int getMaand() {
    return maand;
  }

  public int getJaar() {
    return jaar;
  }
    
  // Setters
  public void setDag( int dag ) {
    this.dag = dag;
  }

  public void setMaand( int maand ) {
    this.maand = maand;
  }

  public void setJaar( int jaar ) {
    this.jaar = jaar;
  }

  // Overige methoden
  //public String toString() {
  //  return String.format( "%02d-%02d-%04d",
  //                 getDag(), getMaand(), getJaar() );
  //}
}
