import javax.swing.*;


import java.awt.*;

public class vraag2 extends JFrame{

	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		JFrame frame = new vraag2();
		frame.setSize(400, 600);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setTitle("Toets vraag 2");
		JPanel paneel = new Vraag2Paneel();
		frame.setContentPane(paneel);
		frame.setVisible(true);
	}
}

class Vraag2Paneel extends JPanel{
		private int diameter;


	public Vraag2Paneel(){
		setBackground(Color.WHITE);
		diameter= 200;
	}

	public void paintComponent1(Graphics g){
		super.paintComponent(g);
		g.setColor(Color.RED);
		g.fillOval(150, 100, diameter, diameter);
		g.setColor(Color.WHITE);
		g.fillRect(150, 100, 180, 50);
	
}
}

