package com.hamzeen.practice.polymorphism.data;

import com.hamzeen.practice.polymorphism.Human;
import com.hamzeen.practice.polymorphism.PracticeDriver.Constants;

/**
 * @author Hamzeen. H.
 * @created: Sunday 2nd, August 2015
 * 
 * An abstract class which provides default implementations for method protypes found in 
 * Human interface.
 */
public abstract class HumanBase implements Human {
	private String name;
	private String gender = "male";

	public HumanBase(String name) {
		this.name = name;
	}

	public HumanBase() {
		this.name = Constants.NAME;
	}

	public void setGender(String gender) {
		this.gender = gender;
	}

	@Override
	public String getName(){
		return this.name;
	}

	@Override
	public String getGender(){
		return this.gender;
	}

	public String toString(){
		return "About " + this.name + 
				"\nAge: " + getAge() + 
				"\nColour: " + getColour() + 
				"\nGender: " + getGender() + "\n";
	}
}
