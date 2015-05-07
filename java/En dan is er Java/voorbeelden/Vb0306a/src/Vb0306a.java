// Voorbeeld 0306a
// Figuren met rondingen
import javax.swing.*;
import java.awt.*;   
   
public class Vb0306a extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0306a();
    frame.setSize( 400, 280 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0306a" );
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
    g.drawRoundRect( 10, 10, 100, 50, 20, 20 );
    g.drawArc( 10, 80, 100, 50, 15, 75 );

    g.fillRoundRect( 130, 10, 100, 50, 20, 20 );
    g.fillArc( 130, 80, 100, 50, 15, 75 );
  }
}
