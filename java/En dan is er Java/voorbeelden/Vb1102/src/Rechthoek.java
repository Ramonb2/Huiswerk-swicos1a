import java.awt.*;

public class Rechthoek extends AbstractOnderdeel implements Onderdeel  {
  private int breedte, hoogte;

  public Rechthoek( Color kleur, int links, int onder,
                    int breedte, int hoogte ) {
    super( kleur, links, onder );    
    this.breedte = breedte;
    this.hoogte = hoogte;
  }

  public void teken( Graphics g ) {
    g.setColor( kleur ) ;
    g.fillRect( links, onder-hoogte, breedte, hoogte );
    g.setColor( Color.black );
    g.drawRect( links, onder-hoogte, breedte, hoogte );

  }
}
  