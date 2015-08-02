package com.hamzeen.practice.polymorphism;


/**
 * @author admin
 * 
 * This Interface, Human, defines the behaviors of a Human 
 * which are universal to all human beings on this planet 
 * regardless of their differences in ethnicity, class or gender.
 * 
 * ! Interfaces in Java can only hold method prototypes
 * they could never be implemented inside an interface.
 * 
 */
public interface Human {

	public abstract String getName();

	public abstract String getColour();

	public abstract int getAge();

	/** by default, all these prototypes in an interface are public and abstact
	 * So whether you state it as "public abstract" or not has the same effect :) 
	 * 
	 * ! So here's a proof
	 */
	String getGender();
}
