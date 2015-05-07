// Voorbeeld 0403  Uitgeschakelde lay-outmanager
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;  
   
public class Vb0403 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0403();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0403" );
    frame.setContentPane( new BTWPaneel() );
    frame.setVisible( true );
  }
}

// Het paneel 
class BTWPaneel extends JPanel {
  private JTextField invoerVak, uitvoerVak;
  private JLabel invoerLabel, uitvoerLabel;
  final double PERCENTAGE_BTW = 19.0;

  public BTWPaneel() {
    // Schakel lay-outmanager uit
    setLayout( null ); 
    
    // Maak de tekstvakken
    invoerVak = new JTextField( 10 );
    invoerVak.setHorizontalAlignment( JTextField.RIGHT );
    invoerVak.addActionListener( new InvoerVakHandler() );

    uitvoerVak = new JTextField( 10 );
    uitvoerVak.setHorizontalAlignment( JTextField.RIGHT );
    uitvoerVak.setBackground( Color.YELLOW );
    // Schakel wijzigen door gebruiker in tekstvak uit
    uitvoerVak.setEditable( false );
    
    // Maak de labels
    invoerLabel = new JLabel( "Prijs zonder BTW" );
    uitvoerLabel = new JLabel( "Prijs met BTW" );
    
    // Bepaal van alle componenten de plaats en afmeting
    invoerLabel.setBounds( 80, 50, 120, 20 );
    invoerVak.setBounds( 200, 50, 90, 20 );
    
    uitvoerLabel.setBounds( 80, 80, 120, 20 );
    uitvoerVak.setBounds( 200, 80, 90, 20 );

    // Voeg de componenten toe aan het paneel
    add( invoerLabel);
    add( invoerVak );
    add( uitvoerLabel );
    add( uitvoerVak );
  }

  class InvoerVakHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      String invoer = invoerVak.getText();
      double invoerGetal = Double.parseDouble( invoer );

      double uitvoerGetal = (1 + PERCENTAGE_BTW/100 ) * invoerGetal;
      // Formatteer de uitvoer
      uitvoerVak.setText( String.format( "%.2f", uitvoerGetal ) );
    }
  }
}
