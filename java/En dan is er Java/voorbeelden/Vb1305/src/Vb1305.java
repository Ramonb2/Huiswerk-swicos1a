// Voorbeeld 1305  Twee draden van subklasse van Thread
public class Vb1305 {
  public static void main(String[] args) {
    Printdraad draad1 = new Printdraad( "!");
    Printdraad draad2 = new Printdraad( "_");
    draad1.start();
    draad2.start();
  }
}

// Subklasse van Thread
class Printdraad extends Thread {
  private String s;
  private boolean doorgaan;
  
  public Printdraad( String s ) {
    this.s = s;
    doorgaan = true;
  }
  
  public void run() {
    while( doorgaan ) {
      System.out.print( s );
      slaap( 200 );
    }
  }
  
  public void slaap( int millisec ) {
    try { Thread.sleep( millisec ); }
    catch( InterruptedException e ) {}
  }
}