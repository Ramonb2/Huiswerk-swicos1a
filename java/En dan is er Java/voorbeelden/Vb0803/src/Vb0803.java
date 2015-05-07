// Voorbeeld 0803 Array met int
public class Vb0803 {
    
  public static void main(String[] args) {
    Leeftijdenlijst lijst = new Leeftijdenlijst();
    lijst.print();
  }
}


class Leeftijdenlijst {
  private int[] leeftijdArray;

  public Leeftijdenlijst() {
    leeftijdArray = new int[ 5 ];
    leeftijdArray[ 0 ] = 10;
    leeftijdArray[ 1 ] = 10;
    leeftijdArray[ 2 ] = 20;
    leeftijdArray[ 3 ] = 30;
    leeftijdArray[ 4 ] = 50;
  }

  public void print() {
    System.out.println( "De leeftijden zijn:" );
    for( int i = 0; i < leeftijdArray.length; i++ )
      System.out.println( leeftijdArray[ i ] );
  }
}

