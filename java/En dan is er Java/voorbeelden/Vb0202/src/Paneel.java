// Een paneel met een knop en een tekstvak
import javax.swing.*;

public class Paneel extends JPanel {
  private JButton knop;
  private JTextField tekstvak;

  public Paneel() {
    knop = new JButton( "Klik" );
    tekstvak = new JTextField( 10 );
    add( knop );
    add( tekstvak );
  }
}
