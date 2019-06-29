/*
 * 6/28/2019
 *
 * Java is to JavaScript as car is to carpet.
 * 
 * https://codegolf.stackexchange.com/questions/132272/java-is-to-javascript-as-car-is-to-carpet
 * 
 * Write a program which takes in a string as input. Return car if the string begins with "Java" 
 * and does not include "JavaScript". Otherwise, return carpet.
 * 
 */
class JavaIsToJavascript {
	
	public static void main(String[] args) {
		// Create array of test strings.
		String[] inputStrings = {"java", "javafx", "javabeans", "JavaBeanS", "java-stream", "java-script", "java-8", 
				"java.util.scanner", "java-avascript", "JAVA-SCRIPTING", "javacarpet", "javascript", "javascript-events",
				"facebook-javascript-sdk", "javajavascript", "jquery", "python", "rx-java", "java-api-for-javascript",
				"not-java", "JAVASCRIPTING"};
		
		
		for (String inputStr : inputStrings) {
			System.out.println(inputStr);
			System.out.println(checkString(inputStr));			
		}
	}
	
	static String checkString(String inputStr) {
		inputStr = inputStr.toLowerCase();
		if (inputStr.substring(0, 4).equals("java")) {
			if (inputStr.indexOf("javascript") == -1) {
				// String began with "java" and did not include "javascript".
				return "car";
			}
			
			// String did not contain "javascript".
			return "carpet";
		}
		
		// String did not begin with "java".
		return "carpet";
	}
	
}


