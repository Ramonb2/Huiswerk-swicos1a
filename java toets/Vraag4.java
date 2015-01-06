import javax.swing.*;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Vraag4 extends JFrame{

	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		JFrame frame = new Vraag4();
		frame.setSize(400, 600);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setTitle("Toets vraag 4");
		JPanel paneel = new Vraag3Paneel();
		frame.setContentPane(paneel);
		frame.setVisible(true);
	}
}

class Vraag3Paneel extends JPanel{
private JTextField invoervak, resultaatvak;
private JButton deelknop;

public Vraag3Paneel(){
	invoervak = new JTextField(10);
	resultaatvak = new JTextField(10);
	deelknop = new JButton ("Reken om");
	deelknop.addActionListener(new DeelKnopHandler());
	
	add(invoervak);
	add(deelknop);
	add(resultaatvak);
}
class DeelKnopHandler implements ActionListener{
	public void actionPerformed(ActionEvent e){
		String invoerstring = invoervak.getText();
		int getal1 = Integer.parseInt(invoerstring);
		
		int resultaat = getal1/10;
		
		resultaatvak.setText(""+resultaat);
	}
}
	
}