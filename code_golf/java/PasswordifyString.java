/*
 * 2/7/2021
 * 
 * Passwordify the string
 * 
 * https://codegolf.stackexchange.com/questions/76486/passwordify-the-string
 * 
 * Take a string as input. This string will only contain uppercase letters, lowercase letters, 
 * digits, and spaces.
 * 
 * You must replace all spaces with underscores and move all numbers to the end of the string in
 * the order that they appear from left to right. Then, for every letter in the string, randomly
 * change it to uppercase or lowercase.
 * 
 */
public class PasswordifyString {
	
	public static void main(String[] args) {
		String[] inputStrings = {"1pass 2word3 ", "Jessie Edmisten", "12asdfg34qwert56zx", "Hello world", "pa55w0rd", "14 35", "0971", " "};
		
		for (String inputStr : inputStrings) {
			System.out.println(inputStr);
			System.out.println(passwordifyString(inputStr) + "\n");
		}
	}
	
	public static String passwordifyString(String inputStr) {
		String digitStr = ""; 
		String charStr = "";
		
		inputStr = inputStr.replace(" ", "_");
		
		for (int i = 0; i < inputStr.length(); i++) {
			if (Character.isDigit(inputStr.charAt(i))) {
				digitStr += inputStr.charAt(i);
			} else {			
				int randValue = (int) Math.round(Math.random());
				charStr += (randValue == 0) ? Character.toLowerCase(inputStr.charAt(i)) : Character.toUpperCase(inputStr.charAt(i)); 
			}
		}
		
		return charStr + digitStr;
	}
}