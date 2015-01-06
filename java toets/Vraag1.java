
import javax.swing.*;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Vraag1 extends JFrame{

	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		JFrame frame = new Vraag1();
		frame.setSize(400, 600);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setTitle("Toets vraag 1");
		JPanel paneel = new Vraag1Paneel();
		frame.setContentPane(paneel);
		frame.setVisible(true);
	}
}

class Vraag1Paneel extends JPanel{
	private JButton knop;
	private int diameter;


public Vraag1Paneel(){
	setBackground(Color.WHITE);
	diameter= 100;
	knop= new JButton ("Smaller");
	knop.addActionListener(new KnopHandler());
	add(knop);

}

public void paintComponent(Graphics g){
	super.paintComponent(g);
	g.setColor(Color.GREEN);
	g.fillOval(150, 100, diameter, diameter);
	
}

class KnopHandler implements ActionListener{ 
	public void actionPerformed(ActionEvent e){
		diameter--;
		repaint();
	}
	
}
}
