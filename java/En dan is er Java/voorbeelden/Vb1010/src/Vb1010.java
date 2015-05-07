// Voorbeeld 1010  Inwendige klasse
public class Vb1010 {
  public static void main(String[] args) {
    Buiten buiten = new Buiten();
    System.out.println( buiten.laatZien() );
  }  
}

// Uitwendige klasse
class Buiten {
  private int a = 5;
  private double x = 3.2;
  private Intern internObject;

  public Buiten() {
    internObject = new Intern();
  }

  public String laatZien() {
    return internObject.toString() + "\n" +
           "y = " + internObject.y;
  }


  // Inwendige klasse
  private class Intern {
    private int a = 20;
    private double y = 10.4;

    public String toString() {
      return "a_in = "     + a + "\n" + 
             "a_buiten = " + Buiten.this.a + "\n" + 
             "x = " + x;
    }
  }  // Einde inwendige klasse
}  // Einde buitenklasse
