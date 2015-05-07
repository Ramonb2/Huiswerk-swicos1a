// Voorbeeld 0504  if-else statement
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
   
public class Vb0504 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0504();
    frame.setSize( 300, 150 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0504" );
    frame.setContentPane( new KlikPaneel() );
    frame.setVisible( true );
  }
}

// Het paneel 
class KlikPaneel extends JPanel {
  private JButton knop;
  private boolean geklikt;
  
  public KlikPaneel() {
    setBackground( Color.WHITE );
    knop = new JButton( "Klik" );
    knop.addActionListener( new KnopHandler() );
    add( knop );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    
    if( !geklikt ) {
      g.drawString( "Er is nog niet geklikt", 100, 70 );
    }
    else {
      g.drawString( "Nu is er wel geklikt", 100, 70 );
    }
  }
  
  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      geklikt = true;
      repaint();
    }
  }
}
