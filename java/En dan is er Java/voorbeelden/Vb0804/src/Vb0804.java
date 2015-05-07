// Voorbeeld 0804 Array als argument van een methode
public class Vb0804 {
    
  public static void main(String[] args) {
    int[] lijst = { 1, 1, 2, 3, 5, 8, 13, 21 };
    System.out.println( "De getallen zijn" );
    print( lijst );
  }

 
  public static void print( int[] rij ) {
    for( int getal : rij )
      System.out.println( getal );
  }
}

