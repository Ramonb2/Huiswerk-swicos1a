// Een paneel met een knop, tekstvak en event-afhandeling
import javax.swing.*;
import java.awt.event.*;

public class Paneel extends JPanel {
  private JButton knop;
  private JTextField tekstvak;

  public Paneel() {
    knop = new JButton( "Klik" );
    KnopHandler kh = new KnopHandler();
    knop.addActionListener( kh );
    tekstvak = new JTextField( 10 );
    add( knop );
    add( tekstvak );
  }
  
  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      tekstvak.setText( "Je hebt geklikt!" );
    }
  }
}
