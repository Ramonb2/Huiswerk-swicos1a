import javax.swing.*;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Main extends JFrame{

	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		JFrame frame = new Main();
		frame.setSize(400, 600);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setTitle("Kassa");
		JPanel paneel = new MainPaneel();
		frame.setContentPane(paneel);
		frame.setVisible(true);
	}
}

class MainPaneel extends JPanel{
	private static final long serialVersionUID = 1L;
	private JButton knop;
	  private double bedrag;
	 
	  JTextField invoervak1;
	  JLabel sub;
	  
	  public MainPaneel() {
	     setBackground( Color.WHITE );
	    
	     knop = new JButton( "Add" );
	     invoervak1 = new JTextField( 10 );
	     sub = new JLabel();
	     
	     knop.addActionListener( new KnopHandler() );
	     add (invoervak1);
	     add( knop );
	     add(sub);
	    
	    
	  }

	 
	  class KnopHandler implements ActionListener {
	    public void actionPerformed( ActionEvent e ) {
	    	Kassa kassa = new Kassa();   
	    	
	    	bedrag = Double.parseDouble(invoervak1.getText());
	    	kassa.bedrag(bedrag);
	    	
	    	sub.setText("Subtotaal: " + kassa.getsub()); 
	    	
	      
	    }
	  }
	

	
		}






