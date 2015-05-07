// Voorbeeld 1006  BoxLayout met strut, glue of rigid area
import java.awt.*;
import javax.swing.*;

public class Vb1006 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1006();
    frame.setSize( 400, 150 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1006" );
    frame.setContentPane( new BoxEnStrutpaneel() );
//    frame.setContentPane( new BoxEnGluepaneel() );
    frame.setVisible( true );
  }
}


class BoxEnStrutpaneel extends JPanel {  
  private JButton knop1, knop2, knop3;
  
  public BoxEnStrutpaneel() {
    // Horizontale BoxLayout
    setLayout( new BoxLayout( this, BoxLayout.X_AXIS) );
    
    // Maak een strut
    Component hStrut100 = Box.createHorizontalStrut( 100 );
  
    knop1 = new JButton( "knop1" );
    knop2 = new JButton( "knop2" );
    knop3 = new JButton( "knop3" );

    // Stop alles in de box
    add( knop1 );
    add( hStrut100 );
    add( knop2 );
    add( knop3 );
  }
}



class BoxEnGluepaneel extends JPanel {  
  private JButton knop1, knop2, knop3;
  
  public BoxEnGluepaneel() {
    // Verticale BoxLayout
    setLayout( new BoxLayout( this, BoxLayout.Y_AXIS) );
    
    // Maak glue
    Component vGlue = Box.createVerticalGlue();
  
    knop1 = new JButton( "knop1" );
    knop2 = new JButton( "knop2" );
    knop3 = new JButton( "knop3" );

    // Stop alles in de box
    add( knop1 );
    add( vGlue );
    add( knop2 );
    add( knop3 );
  }
}

