package com.hamzeen.processing.opengl;

import processing.core.PApplet;

/**
 * @version 1.0.0
 * LightsGL. Modified from an example by Simon Greenwold. 
 * Display a box with three different kinds of lights.
 * 
 * @version 1.0.1
 * @author Hamzeen. H.
 * modified to work within Eclipse.
 */
public class OpenGLExample extends PApplet {

	public void setup() {
		size(840, 600, OPENGL);
		noStroke();
	}

	public void draw() {
		defineLights();
		background(0);

		for (int x = 0; x <= width; x += 100) {
			for (int y = 0; y <= height; y += 100) {
				pushMatrix();
				translate(x, y);
				rotateY(map(mouseX, 0, width, 0, PI));
				rotateX(map(mouseY, 0, height, 0, PI));
				box(90);
				popMatrix();
			}
		}
	}

	void defineLights() {
		pointLight(150, 100, 0, 200, -150, 0);
		directionalLight(0, 102, 255, 1, 0, 0);
		spotLight(255.0f, 255.0f, 1090.f, 0.0f, 40.0f, 200.0f,
				0.0f, -0.5f, -0.5f, PI / 2, 2);
	}
}
