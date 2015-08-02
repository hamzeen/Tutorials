package com.hamzeen.practice.polymorphism;

import com.hamzeen.practice.polymorphism.data.African;
import com.hamzeen.practice.polymorphism.data.European;

/**
 * @author Hamzeen. H.
 * @created: Sunday 2nd, August 2015
 * 
 * A simple program that explores Polymorphism in Java
 * 
 * Polymorphism => mulitple faces
 * 
 * In java: same method call on different objects
 * respond differently. There are conditions, let's keep it simple here! :)
 * 
 * Features of the Program
 * 1. When a name is not set, a person named "Adam" is created.
 * 
 * 2. Europeans have a default age of 19 which is 20 for africans.
 * 
 * 3. getColour() method always gives white for Europeans yet, Black for Africans.
 * 
 * 4. getGnender() method too prints their gender with the continent prefixed in square braces
 * Ex: 'Gender: [European] male', 'Gender: [African] Female'
 */
public class PracticeDriver {

	/**
	 * This class is used hold global variables of this program.
	 * 
	 * ! Class "Constants" is a nested inner class which Java supports.
	 * 
	 * ! It's not obligatory to define each class in their own file 
	 * Java Runtime knows handle this.
	 */
	public class Constants {
		public static final String NAME = "Adam";
	}

	public static void main(String[] args) {

		African unnamed = new African();
		European eu = new European("hamberg");

		African af = new African("abioye");
		af.setGender("Female");

		Human[] humans = {unnamed, eu, af};

		/**
		 * <!> Here is P O L Y M O R P H I S M in Action
		 * Look for same method call yet, different behavior or output.
		 * 
		 * 1. have a look at what getColour() method prints
		 *  > 1.1. First (statement) prints "[African] Black" which comes from the getColour method of African Class
		 *  > 1.2. Second (statement) prints "[European] White" which comes from the getColur() method of European Class
		 */
		System.out.println("\t:: 1. Ploymorphism ::");
		System.out.println(humans[0].getColour()); // [African] Black
		System.out.println(humans[1].getColour()); // [European] White


		/**
		 * <|> Here is P O L Y M O R P H I S M again
		 * Look for same method call yet, different behavior or output.
		 * 
		 * 1. toString() => prints Colour and gender differently for African & European
		 *  > 1.1. Also the Colour of African and European are different which wasn't set above.
		 *  > 1.2. However in all these cases, the toString() method found in 
		 *         HumanBase class is what gets executed.
		 */
		System.out.println("\n\t:: 2. Simple Loop ::");
		for(int i=0;i<3;i++) {
			System.out.println(humans[i].toString());
		}

		
		/** ! The same for loop as above but in a different style. */
		/*System.out.println("\n\t:: 3. Slightly Advanced Loop ::");
		for(Human person: humans) {
			System.out.println(person.toString());
		}*/
	}
}
