// Voorbeeld 1012  Naamloos object van anonieme inwendige klasse
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;


public class Vb1012 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1012();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1012  Naamloos object van anonieme inwendige klasse" );
    frame.setContentPane( new Paneel() );
    frame.setVisible( true );
  }
}

class Paneel extends JPanel {
  private int aantal;
  private JButton knop;

  public Paneel() {
    knop = new JButton( "Klik" );
    // Naamloos object van anonieme nonieme inwendige klasse
    ActionListener handler = new ActionListener() {
      public void actionPerformed( ActionEvent e ) {
        aantal++;
        repaint();
      } 
    };
    
    knop.addActionListener(
      new ActionListener() {
        public void actionPerformed( ActionEvent e ) {
          aantal++;
          repaint();
        } 
      }
    );
    add( knop );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    for( int i = 0; i < aantal; i++ )
      g.drawOval( 50 + i * 10, 50, 50, 50 );
  }
}
