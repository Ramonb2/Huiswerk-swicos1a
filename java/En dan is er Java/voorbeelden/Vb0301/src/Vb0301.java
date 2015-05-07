// Voorbeeld 0301
// Declaratie en gebruik van drie int-variabelen 
import javax.swing.*;
import java.awt.*;   // Nodig voor Graphics
   
public class Vb0301 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0301();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0301" );
    frame.setContentPane( new Paneel() );
    frame.setVisible( true );
  }
}


// Het paneel 
class Paneel extends JPanel {
  private int a;
  private int b;
  private int antwoord;
  
  public Paneel() {
    setBackground( Color.WHITE );
    a = 174;
    b = 26;
    antwoord = a + b;
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    // Zet de waarden van a, b en antwoord op het scherm:
    g.drawString( "Overzicht van de berekening:", 40, 20 ); 
    g.drawString( "a = " + a, 40, 40 );
    g.drawString( "b = " + b, 40, 60 );
    g.drawString( "De som is: " + antwoord, 40, 80 );
  }
}
