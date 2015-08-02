package com.hamzeen.practice.polymorphism.data;

/**
 * @author Hamzeen. H.
 * @created: Sunday 2nd, August 2015
 * 
 * A concrete implementation of Human interface for Africans.
 */
public class African extends HumanBase {
	private int age = 20;
	private String colour = "Black";

	public African(String name) {
		super(name);
	}
	
	public African() {
		super();
	}

	@Override
	public int getAge() {
		return this.age;
	}

	@Override
	public String getColour() {
		return "[African] "+this.colour;
	}

	@Override
	public String getGender() {
		return "[African] "+ super.getGender();
	}
}
