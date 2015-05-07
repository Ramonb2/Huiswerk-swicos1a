// Voorbeeld 0901
// Bank, Overerving: Rekening, Bankrekening, Spaarrekening
public class Vb0901 {
   
  public static void main(String[] args) {
    Bank javaBank = new Bank();
    
    Spaarrekening rekening1 = new Spaarrekening( "123", 3.0 );
    javaBank.voegRekeningToe( rekening1 );

    Bankrekening rekening2 = new Bankrekening( "987", 500 );
    javaBank.voegRekeningToe( rekening2 );

    rekening1.stort( 100 );
    rekening1.schrijfRenteBij();
    rekening2.neemOp( 45 );

    javaBank.printOverzicht();
  }
}
