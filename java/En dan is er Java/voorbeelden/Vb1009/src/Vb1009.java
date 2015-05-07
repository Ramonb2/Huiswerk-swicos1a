// Voorbeeld 1009  Verkeerslicht
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Vb1009 extends JFrame {
  public static void main( String args[] ) {
    JFrame frame = new Vb1009();
    frame.setSize( 400, 400 );
    frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );
    frame.setTitle( "Voorbeeld 1009  Gescheiden model en view" );
    frame.setContentPane( new Verkeerslichtpaneel() );
    frame.setVisible( true );
  }
}


class Verkeerslichtpaneel extends JPanel {
  private Verkeerslicht model;
  private JPanel view;
  private JPanel bedieningspaneel;

  public Verkeerslichtpaneel() {
    setLayout( new BorderLayout() );
    
    model = new Verkeerslicht( true, true, true );

    view = new Verkeerslichtview( model );
    bedieningspaneel = new Bedieningspaneel( model, view );
    
    add( view, BorderLayout.CENTER );
    add( bedieningspaneel, BorderLayout.SOUTH );
  }
}


class Verkeerslichtview extends JPanel {
  private Verkeerslicht model;

  // Constructor
  public Verkeerslichtview( Verkeerslicht model ) {
    this.model = model;
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    g.setColor( Color.GRAY );
    int midden = getBounds().width / 2;

    // De kast voor de lampen
    g.fillRect( midden - 30, 50, 60, 160 );
    // De paal
    g.fillRect( midden - 5, 210, 10, 120 );
    
    // Teken de lampen
    if( model.isRood() )
      g.setColor( Color.RED );
    else 
      g.setColor( Color.LIGHT_GRAY );
    g.fillOval( midden - 20, 60, 40, 40 );

    if( model.isOranje() )
      g.setColor( Color.ORANGE );
    else
      g.setColor( Color.LIGHT_GRAY );
    g.fillOval( midden - 20, 110, 40, 40 );

    if( model.isGroen() )
      g.setColor( Color.GREEN );
    else
      g.setColor( Color.LIGHT_GRAY );
    g.fillOval( midden - 20, 160, 40, 40 );
  }
}


class Bedieningspaneel extends JPanel {
  private Verkeerslicht model;
  private JPanel view;
  private JButton roodKnop, oranjeKnop, groenKnop;

  // Constructor
  public Bedieningspaneel( Verkeerslicht model, JPanel view ) {
    this.model = model;
    this.view = view;

    setBackground( Color.DARK_GRAY );

    roodKnop   = new JButton( "rood" );
    oranjeKnop = new JButton( "oranje" );
    groenKnop  = new JButton( "groen" );

    ActionListener handler = new Handler();
    roodKnop.addActionListener( handler );
    oranjeKnop.addActionListener( handler );
    groenKnop.addActionListener( handler );

    add( roodKnop );
    add( oranjeKnop );
    add( groenKnop );
  }

  class Handler implements ActionListener {
    public void actionPerformed( ActionEvent e ) {
      if( e.getSource() == roodKnop )
        model.setRood();
      else
      if( e.getSource() == oranjeKnop )
        model.setOranje();
      else
      if( e.getSource() == groenKnop )
        model.setGroen();
      
      view.repaint();
    }
  }
}

// Model
class Verkeerslicht {
  private boolean rood, oranje, groen;

  public Verkeerslicht( boolean rood, boolean oranje, boolean groen ) {
    this.rood = rood;
    this.oranje = oranje;
    this.groen = groen;
  }

  public void setRood() {
    reset();
    rood = true;
  }

  public void setOranje() {
    reset();
    oranje = true;
  }

  public void setGroen() {
    reset();
    groen = true;
  }
  
  public void reset() {
    rood   = false;
    oranje = false;
    groen  = false;
  }
  
  public boolean isRood() {
    return rood;
  }

  public boolean isOranje() {
    return oranje;
  }

  public boolean isGroen() {
    return groen;
  }
}
