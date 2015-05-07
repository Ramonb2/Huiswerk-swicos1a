// Voorbeeld 0305
// Applicatie die een driehoek tekent
import javax.swing.*;
import java.awt.*;   
   
public class Vb0305 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0305();
    frame.setSize( 400, 280 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0305" );
    frame.setContentPane( new Tekenpaneel() );
    frame.setVisible( true );
  }
}



class Tekenpaneel extends JPanel {
  public Tekenpaneel() {
    setBackground( Color.WHITE );
  }

  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    g.drawLine( 140, 40, 220, 220 );
    g.drawLine( 220, 220, 270, 70 );
    g.drawLine( 270, 70, 140, 40 );
  }
}

/*

class Tekenpaneel extends JPanel {
  private Color roze;
  
  public Tekenpaneel() {
    setBackground( Color.WHITE );
    roze = new Color( 230, 180, 150 );
  }

  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    g.setColor( roze );
    g.drawLine( 20, 20, 200, 100 );
    g.setColor( Color.BLUE );
    g.drawLine( 40, 40, 220, 120 );
  }
}
*/
