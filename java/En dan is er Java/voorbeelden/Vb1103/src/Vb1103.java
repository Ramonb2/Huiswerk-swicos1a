// Voorbeeld 1103  Grafiek
// Met ArrayList
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.util.*;

public class Vb1103 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1103();
    frame.setSize( 500, 300 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1103  Grafiek" );
    frame.setContentPane( new Grafiekpaneel() );
    frame.setVisible( true );
  }
}


class Grafiekpaneel extends JPanel {
  private JPanel bedieningspaneel; 
  private Grafiek grafiek;
  private Functie f1, f2;

  public Grafiekpaneel() {
    setLayout( new BorderLayout() );
    grafiek = new Grafiek( -3, -4, 5, 10 );
    f1 = new Derdegraads();
    f2 = new ExpPlusSin();

    bedieningspaneel = new Bedieningspaneel( grafiek, f1, f2 );
    add( grafiek, BorderLayout.CENTER );
    add( bedieningspaneel, BorderLayout.SOUTH );
  }
}


class Grafiek extends JPanel {
  private double links = -10, onder = -10,
                 rechts = 10, boven = 10;
  private Functie functie;

  private int assenBreedte, assenHoogte;
  private double xFactor, yFactor;
  private ArrayList<Double> xWaarden, yWaarden;

  public Grafiek() {
    xWaarden = new ArrayList<Double>();
    yWaarden = new ArrayList<Double>();
  }

  public Grafiek( double links, double onder,
                  double rechts, double boven ) {
    this();
    this.links = links;
    this.onder = onder;
    this.rechts = rechts;
    this.boven = boven;
  }

  public void paintComponent( Graphics g ) {
    super.paintComponent( g );

    assenBreedte = getBounds().width - 1;
    assenHoogte = getBounds().height - 1;
    xFactor = assenBreedte / ( rechts - links );
    yFactor = assenHoogte / ( boven - onder );

    setBackground( Color.WHITE );
    tekenAssen( g );

    if( functie != null ) {
      xWaarden.clear();
      yWaarden.clear();
      // Bereken de functiewaarden
      for( double x = links; x <= rechts; x += 0.1 ) {
        xWaarden.add( x );
        yWaarden.add( functie.f( x ) );
      }
      // Teken de grafiek
      g.setColor( Color.black );
      for( int i = 1; i < xWaarden.size(); i++ ) {
        tekenLijn( g, xWaarden.get( i-1 ), yWaarden.get( i-1 ),
                      xWaarden.get( i ), yWaarden.get( i ) );
      }
    }
  }

  public void setFunctie( Functie functie ) {
    this.functie = functie;
  }

  private void tekenAssen( Graphics g ) {
    g.setColor( Color.BLACK );
    tekenLijn( g, links, 0, rechts, 0 );
    tekenLijn( g, 0, onder, 0, boven );
  }

  private void tekenLijn( Graphics g, double x1, double y1,
    double x2, double y2 ) {
    g.drawLine( xPxl( x1 ), yPxl( y1 ),
    xPxl( x2 ), yPxl( y2 ) );
  }

  private int xPxl( double x ) {
    return (int) Math.round( (x - links ) * xFactor );
  }

  private int yPxl( double y ) {
    return (int) Math.round( (boven - y ) * yFactor );
  }
}


interface Functie {
  public double f( double x );
}

class Derdegraads implements Functie {
  public double f( double x ) {
    return -0.5 * (x + 2) * (x - 1) * (x - 2);
  }
}

class ExpPlusSin implements Functie {
  public double f( double x ) {
    return Math.exp( x ) + Math.sin( 3*x );
  }
}


class Bedieningspaneel extends JPanel {
  private JButton knop1, knop2;
  private Grafiek grafiek;
  private Functie f1, f2;

  public Bedieningspaneel( Grafiek grafiek, Functie f1, Functie f2 ) {
    this.grafiek = grafiek;
    this.f1 = f1;
    this.f2 = f2;
    knop1 = new JButton( "f1" );
    knop1.addActionListener( new KnopHandler() );
    knop2 = new JButton( "f2" );
    knop2.addActionListener( new KnopHandler() );
    add( knop1 );
    add( knop2 );
    setBackground( Color.BLUE );
  }

  class KnopHandler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      if( e.getSource() == knop1 ) {
        grafiek.setFunctie( f1 );
        grafiek.repaint();
      }
      if( e.getSource() == knop2 ) {
        grafiek.setFunctie( f2 );
        grafiek.repaint();
      }
    }
  }
}
