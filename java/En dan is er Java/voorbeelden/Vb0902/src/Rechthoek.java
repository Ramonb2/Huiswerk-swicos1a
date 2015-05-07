public class Rechthoek {
  protected int breedte;
  protected int hoogte;

  public Rechthoek( int hoogte, int breedte ) {
    this.hoogte = hoogte;
    this.breedte = breedte;
  }

  public void print() {
    // Maak eerst een regel
    String regel = "";
    for( int i = 1; i <= breedte; i++ )
      regel += "x ";

    // Zet daarna de regels op het scherm
    for( int i = 1; i <= hoogte; i++ )
      System.out.println( regel );
  }
}
