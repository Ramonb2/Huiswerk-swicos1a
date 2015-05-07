// Paneel met twee knoppen en een tekstvak
import javax.swing.*;
import java.awt.event.*;

public class Paneel extends JPanel {
  private JButton knop, herstelknop;
  private JTextField tekstvak;

  public Paneel() {
    knop = new JButton( "Klik" );
    knop.addActionListener( new KnopHandler() );
    
    herstelknop = new JButton( "Veeg uit" );
    herstelknop.addActionListener( new HerstelknopHandler() );
    
    tekstvak = new JTextField( 10 );
    add( knop );
    add( tekstvak );
    add( herstelknop );
  }
  
  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      tekstvak.setText( "Je hebt geklikt!" );
    }
  }
  
  class HerstelknopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      tekstvak.setText( "" );
    }
  }  
}
