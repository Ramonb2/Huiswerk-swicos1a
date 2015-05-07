// Voorbeeld 1407  Bestand maken met bytestream
import java.io.*;
import java.awt.*;
import javax.swing.*;

public class Vb1407 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1407();
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setBounds( 100, 100, 350, 100 );
    frame.setTitle( "Maak een bestand met een byte-stream" );
    frame.setContentPane( new Bestandpaneel() );
    frame.setVisible( true );
  }
}

class Bestandpaneel extends JPanel {
  public Bestandpaneel() {
    try {
      DataOutputStream uit = 
        new DataOutputStream(
          new FileOutputStream( "geboorteGegevens.dat" )
        );

      // Schrijf gegevens
      uit.writeUTF( "Welmer");
      uit.writeInt( 1973 );
      uit.writeDouble( 3.020 );

      // Sluit de stream
      uit.close();
    }
    catch( IOException e ) {
      System.out.println( "IO-exceptie" );
    }
  }

  public void paintComponent( Graphics g ) {
    super.paintComponents( g );
    g.drawString( "Bestand is klaar", 20, 50 );
  }
}
