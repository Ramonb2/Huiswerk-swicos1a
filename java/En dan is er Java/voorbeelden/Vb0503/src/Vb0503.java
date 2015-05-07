// Voorbeeld 0503 Twee knoppen en tekstvak
// Event handling met if-statment
import javax.swing.*;
import java.awt.event.*;

public class Vb0503 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0503();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0503" );
    JPanel paneel = new Paneel();
    frame.setContentPane( paneel );
    frame.setVisible( true );
  }
}

// Paneel met twee knoppen en een tekstvak
class Paneel extends JPanel {
  private JButton knop, herstelknop;
  private JTextField tekstvak;

  public Paneel() {
    ActionListener handler= new KnopHandler();
    
    knop = new JButton( "Klik" );
    knop.addActionListener( handler );
    
    herstelknop = new JButton( "Veeg uit" );
    herstelknop.addActionListener( handler );
    
    tekstvak = new JTextField( 10 );
    add( knop );
    add( tekstvak );
    add( herstelknop );
  }
  
  // Inwendige klasse
  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      if( e.getSource() == knop )
        tekstvak.setText( "Je hebt geklikt!" );
        
      if( e.getSource() == herstelknop )
        tekstvak.setText( "" );
    }
  }
} 
