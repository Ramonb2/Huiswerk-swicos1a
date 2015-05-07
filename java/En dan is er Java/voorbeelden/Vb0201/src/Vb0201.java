// Voorbeeld 0201
// Opstartklasse voor een applicatie
import javax.swing.*;

public class Vb0201 extends JFrame
{
  public static void main( String[] args )
  {
    // Maak een frame
    JFrame frame = new Vb0201();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Eerste applicatie" );
    frame.setVisible( true );
  }
}
