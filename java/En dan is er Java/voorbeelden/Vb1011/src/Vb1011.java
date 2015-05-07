// Voorbeeld 1011  Anonieme inwendige klasse
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;


public class Vb1011 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1011();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1011  Anonieme inwendige klasse" );
    frame.setContentPane( new Paneel() );
    frame.setVisible( true );
  }
}

class Paneel extends JPanel {
  private int aantal;
  private JButton knop;

  public Paneel() {
    knop = new JButton( "Klik" );
    // Anonieme inwendige klasse
    ActionListener handler = new ActionListener() {
      public void actionPerformed( ActionEvent e ) {
        aantal++;
        repaint();
      } 
    };
    
    knop.addActionListener( handler );
    add( knop );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    for( int i = 0; i < aantal; i++ )
      g.drawOval( 50 + i * 10, 50, 50, 50 );
  }
}
