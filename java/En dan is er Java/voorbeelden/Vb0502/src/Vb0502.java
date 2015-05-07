// Voorbeeld 0502
import javax.swing.*;
import java.awt.event.*;
   
public class Vb0502 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0502();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0502" );
    frame.setContentPane( new CijferPaneel() );
    frame.setVisible( true );
  }
}


// Het paneel 
class CijferPaneel extends JPanel {
  private JLabel label;
  private JTextField tekstvak;
  private double cijfer;
  
  public CijferPaneel() {
    label = new JLabel( "Voer een cijfer in" );
    tekstvak = new JTextField( 10 );
    tekstvak.addActionListener( new TekstvakHandler() );
    add( label );
    add( tekstvak );
  }
  
  class TekstvakHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      String invoer = tekstvak.getText();
      cijfer = Double.parseDouble( invoer );
      
      System.out.println( "Het ingevoerde cijfer is: " + cijfer );
      if( cijfer >= 6 ) {
        System.out.println( "Dat is een voldoende" );
      }
      System.out.println( "Dank u!" );
      System.out.println();
    }
  }
}
