import javax.swing.*;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Zwembad extends JFrame{
	public Zwembad() {
		
	}
	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		JFrame frame = new Zwembad();
		frame.setSize(850, 400);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setTitle("Zwembad");
		JPanel paneel = new ZwembadPaneel();
		frame.setContentPane(paneel);
		frame.setVisible(true);
	}
}
	class ZwembadPaneel extends JPanel{
		private static final long serialVersionUID = 1L;
		private JButton knop;
		private JButton knop2;
		private JButton knop3;
		private JLabel label1;
		private JLabel label2;
		private JLabel label3;
		private JLabel label4;
		private JLabel label5;
		private int x;
		private int y;
		private int breedte;
		private int hoogte;
		JTextField invoervak1;
		JTextField invoervak2;
		JTextField invoervak3;
		JTextField invoervak4;
		  
		  public ZwembadPaneel() {
		     setBackground( Color.GREEN );
		     
		     knop = new JButton( "Nieuwe Tekening" );
		     invoervak1 = new JTextField( 10 );
		     label1 = new JLabel("x");
		     invoervak2 = new JTextField( 10 );
		     label2 = new JLabel("y");
		     invoervak3 = new JTextField( 10 );
		     label3 = new JLabel("breedte");
		     invoervak4 = new JTextField( 10 );
		     label4 = new JLabel("hoogte");
		     label5 = new JLabel("Oppervlakte: ");
		     
		     
		     knop.addActionListener( new KnopHandler1() );
		     add (label1);
		     add (invoervak1);
		     add (label2);
		     add (invoervak2);
		     add (label3);
		     add (invoervak3);
		     add (label4);
		     add (invoervak4);
		     add( knop );
		     add( label5 );
		  }
		  
		  public void paintComponent(Graphics g) {
			  
		        super.paintComponent(g); 
		        g.setColor( Color.GRAY );
		        g.fillRect(x - 5, y - 5, breedte + 10, hoogte + 10);
		        g.setColor( Color.BLUE );
		        g.fillRect(x, y, breedte, hoogte);
		        label5.setLocation(x,y); 
		        
		        
		        
		        
		    }

	 class KnopHandler1 implements ActionListener {
		    public void actionPerformed( ActionEvent e ) {
		    
		    	
		        
		    	
		    	
		    	 x = Integer.parseInt(invoervak1.getText());
		    	 y = Integer.parseInt(invoervak2.getText());
		    	 breedte = Integer.parseInt(invoervak3.getText());
		    	 hoogte = Integer.parseInt(invoervak4.getText());
		    	 label5.setText("Oppervlakte: " + (hoogte * breedte));
		    	 
		    	 repaint();
		    	 
		      
		    }
	 }
	}
	
	
	
	

