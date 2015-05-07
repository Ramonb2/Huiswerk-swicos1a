// Voorbeeld 1005  GridLayout
import java.awt.*;
import javax.swing.*;

public class Vb1005 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1005();
    frame.setSize( 400, 200 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1005" );
    frame.setContentPane( new GridLayoutpaneel() );
    frame.setVisible( true );
  }
}


class GridLayoutpaneel extends JPanel {
  private JButton knop1, knop2, knop3,
                  knop4, knop5, knop6;
  
  public GridLayoutpaneel() {
    setLayout( new GridLayout( 2, 3 ) );

    knop1= new JButton( "Component 1" );
    knop2= new JButton( "Component 2" );
    knop3= new JButton( "Component 3" );
    knop4= new JButton( "Component 4" );
    knop5= new JButton( "Component 5" );
    knop6= new JButton( "Component 6" );
    
    add( knop1 );
    add( knop2 );
    add( knop3 );
    add( knop4 );
    add( knop5 );
    add( knop6 );
  }
} 
