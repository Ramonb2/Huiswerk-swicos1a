// Voorbeeld 0702  Lesrooster met uitvoer in JTextArea
import javax.swing.*;
import java.awt.*; 
import java.awt.event.*; 
   
public class Vb0702 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb0702();
    frame.setSize( 400, 280 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 0702 Lesrooster" );
    frame.setContentPane( new Roosterpaneel() );
    frame.setVisible( true );
  }
}

class Roosterpaneel extends JPanel {
  private Lesrooster rooster;
  private JTextArea tekstgebied;
  private JButton knop;
  
  public Roosterpaneel() {
    rooster = new Lesrooster();
  
    Les les = new Les( "Java", new Tijdstip( "maandag", 3 ), "D021" );
    rooster.voegtoe( les );

    les = new Les( "Java", new Tijdstip( "maandag", 4 ), "D021" );
    rooster.voegtoe( les );
    
    les = new Les( "Wiskunde", new Tijdstip( "dinsdag", 6 ), "A505" );
    rooster.voegtoe( les );
    
    tekstgebied = new JTextArea( 10, 30 );
    add( new JScrollPane( tekstgebied ) );
    
    knop = new JButton( "rooster" );
    knop.addActionListener( new KnopHandler() );
    add( knop );
  }
   
  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      tekstgebied.setText( rooster.toString() );
    }
  }
}


  
/*  
public class Vb0702 {
  public static void main( String[] args ) {
    System.out.println( "Voorbeeld 0702  Testen van Lesrooster" );

    Lesrooster rooster = new Lesrooster();

    Les les = new Les( "Java", new Tijdstip( "maandag", 3 ), "D021" );
    rooster.voegtoe( les );

    les = new Les( "Java", new Tijdstip( "maandag", 4 ), "D021" );
    rooster.voegtoe( les );
    
    les = new Les( "Wiskunde", new Tijdstip( "dinsdag", 6 ), "A505" );
    rooster.voegtoe( les );
    
    System.out.println( rooster );
  }
}

*/