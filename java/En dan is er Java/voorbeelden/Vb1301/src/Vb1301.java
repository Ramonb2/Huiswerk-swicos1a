// Voorbeeld 1301  Tellen met een timer
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Vb1301 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1301();
    frame.setSize( 320, 120 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1301  Tellen met een timer" );
    frame.setContentPane( new Tellerpaneel() );
    frame.setVisible( true );
  }
}

class Tellerpaneel extends JPanel {
  private Timer timer;
  private int teller;
  
  public Tellerpaneel() {
    teller = 0;
    timer = new Timer( 1000, new TimerHandler() );
    timer.start();
  }

  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    g.setColor( Color.BLUE );
    g.setFont( new Font( "SansSerif", Font.BOLD, 14 ) );
    g.drawString( "Teller = " + teller, 80, 50 );
  }

  class TimerHandler implements ActionListener{
    public void actionPerformed( ActionEvent e ) {
      teller++;
      repaint();
    }
  }
}
