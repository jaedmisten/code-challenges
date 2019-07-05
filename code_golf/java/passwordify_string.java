/*
 * 7/3/2019
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
		String randStr = "";
		
		inputStr = inputStr.replace(" ", "_");
		
		// Create string of digits from input string in the order they appeared from left to right.
		for (int i = 0; i < inputStr.length(); i++) {
			if (Character.isDigit(inputStr.charAt(i))) {
				digitStr += inputStr.charAt(i);
			}
		}
		
		// Remove digits from input string.
		inputStr = inputStr.replaceAll("([0-9])", "");
		
		// Randomly make letters in input string upper or lower case.
		for (int i = 0; i < inputStr.length(); i++) {
			int randValue = (int) Math.round(Math.random());
			if (randValue == 0) {
				randStr += Character.toLowerCase(inputStr.charAt(i));
			} else {
				randStr += Character.toUpperCase(inputStr.charAt(i));
			}
		}
		
		return randStr + digitStr;
	}

}
