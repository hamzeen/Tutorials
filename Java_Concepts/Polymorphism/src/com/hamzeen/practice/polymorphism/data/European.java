package com.hamzeen.practice.polymorphism.data;

/**
 * @author Hamzeen. H.
 * @created: Sunday 2nd, August 2015
 * 
 * A concrete implementation of Human interface for Europeans.
 */
public class European extends HumanBase {
	private int age = 19;
	private String colour = "White";

	public European(String name) {
		super(name);
	}
	
	public European() {
		super();
	}

	@Override
	public int getAge() {
		return this.age;
	}

	@Override
	public String getColour() {
		return "[European] "+this.colour;
	}

	@Override
	public String getGender() {
		return "[European] "+ super.getGender();
	}
}
