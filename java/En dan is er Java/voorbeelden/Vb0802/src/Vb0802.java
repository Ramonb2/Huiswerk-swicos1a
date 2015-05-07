// Voorbeeld 0802 Tabel met uitkomsten van tafels 1 tot en met 5
public class Vb0802 {
    
  public static void main(String[] args) {
    Tabel tabel = new Tabel();
    tabel.print();
    System.out.println();
    tabel.printTabel();
  }
}


class Tabel {
  public void print() {
    for( int r = 1; r <= 5; r++ ) {
      printRij( r );
      System.out.println();
    }
  }

  public void printRij( int rijnr ) {
    for( int kol = 1; kol <= 10; kol++ ) {
      System.out.print( String.format( "%3d", rijnr * kol ) );
    }
  }
  
  public void printTabel() {
    for( int rij = 1; rij <= 5; rij++ ) {
      for( int kol = 1; kol <= 10; kol++ ) {
        System.out.print( String.format( "%3d", rij * kol ) );
      }
      System.out.println();
    }
  }
}
