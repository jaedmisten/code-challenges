/*
 * 7/25/2019
 * 
 * Alphabet Staircase
 * 
 * https://codegolf.stackexchange.com/questions/147469/alphabet-staircase
 * 
 * Create a program or function that outputs the following with no input.
 * 
 * a
 * bb
 * ccc
 * dddd
 * eeeee
 * ffffff
 * ggggggg
 * ...
 */
public class AlphabetStaircase {
	public static void main(String[] args) {
		// Using a string of the alphabet.
		String alphabet = "abcdefghijklmnopqrstuvwxyz";
		
		for (int i = 0; i < alphabet.length(); i++) {
			for (int j = 0; j <= i; j++) {
				System.out.print(alphabet.charAt(i));
			}
			System.out.println();
		}
		
		System.out.println();
		
		// Incrementing java characters.
		int counter = 1;
		
		for (char letter = 'a'; letter <= 'z'; letter++) {
			for (int j = 1; j <= counter; j++) {
				System.out.print(letter);
			}
			System.out.println();
			counter++;
		}
		
		System.out.println();
		
		// Using a char array of letters.
		char[] letters = {'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z'};	
		
		for (int i = 0; i < letters.length; i++) {
			for (int j = 0; j <= i; j++ ) {
				System.out.print(letters[i]);
			}
			System.out.println();
		}
	}
}
