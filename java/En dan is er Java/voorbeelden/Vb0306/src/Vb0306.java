// Voorbeeld 0306
// Applicatie met kleur en opgevulde figuren
import javax.swing.*;
import java.awt.*;   
   
public class Vb0306 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0306();
    frame.setSize( 400, 280 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0306" );
    frame.setContentPane( new Tekenpaneel() );
    frame.setVisible( true );
  }
}


class Tekenpaneel extends JPanel {
  public Tekenpaneel() {
//    setBackground( Color.YELLOW );    // gele achtergrond
     setBackground( Color.WHITE );
  }

  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    // Teken met blauw
    g.setColor( Color.BLUE );

    // Teken twee open figuren
    g.drawRect( 10, 10, 100, 50 );
    g.drawOval( 10, 80, 100, 50 );

    // Teken vanaf hier met rood
    g.setColor( Color.RED );

    // Teken twee gevulde figuren
    g.fillRect( 130, 10, 100, 50 );
    g.fillOval( 130, 80, 100, 50 );
  }
}
