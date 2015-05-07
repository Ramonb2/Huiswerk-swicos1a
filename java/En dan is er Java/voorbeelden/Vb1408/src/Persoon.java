import java.io.*;

public class Persoon implements Serializable {
  private String naam;
  private Datum gebDatum;
  private double gewicht;

  public Persoon( String naam, Datum gebDatum, double gewicht ) {
    this.naam = naam;
    this.gebDatum = gebDatum;
    this.gewicht = gewicht;
  }

  public String toString() {
    return naam + ", geb: "+ gebDatum + ", gew: " + gewicht + " kilo";
  }
}


