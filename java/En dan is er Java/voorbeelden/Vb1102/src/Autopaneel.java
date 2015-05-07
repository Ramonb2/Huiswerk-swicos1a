import java.awt.*;
import javax.swing.*;

class Autopaneel extends JPanel {
  private Auto auto;
  
  public Autopaneel() {
    auto = new Auto( 20, 150, 80, 30 );
  }
  
  public void paintComponent( Graphics g ) {
    super.paintComponent( g );
    setBackground( Color.WHITE );     
    auto.teken( g );
  }
}
  