// Voorbeeld 0505  Tafel van 13
// for statement 
import javax.swing.*;
import java.awt.*;
   
public class Vb0505 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0505();
    frame.setSize( 300, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0505" );
    frame.setContentPane( new TafelPaneel() );
    frame.setVisible( true );
  }
}


// Het paneel met niet proportionele letter
class TafelPaneel extends JPanel {
  
  public TafelPaneel() {
    setBackground( Color.WHITE );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    g.setFont( new Font( "Courier", Font.BOLD, 14 ) );

    String regel;
    int y = 15;

    for( int i = 1; i <= 10; i++ ) {
      //regel = String.format( "%2d", i ) + " * 13 = " + String.format( "%3d", i*13 );
      //regel = String.format( "%2d * 13 = %3d", i, i*13 );
      regel = i + " * 13 = " + i*13;
      g.drawString( regel, 10, y += 15 );
    }
  }
}



/*
// Het paneel met proportionele letter
class TafelPaneel extends JPanel {
  
  public TafelPaneel() {
    setBackground( Color.WHITE );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    String regel;
    int y = 15;

    for( int i = 1; i <= 10; i++ ) {
      regel = i + "*13=" + i*13;
      g.drawString( regel, 10, y += 15 );
    }
  }
}
*/