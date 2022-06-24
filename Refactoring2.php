<?php

public class FootballPlayer2{
	private string playerName ="";
	private string college ="";
	private double fortyYardDash=0.0;
	private int resBenchPress =0;
	private double sixtyYardDash =0.0;
	
	
	public string getplayerName(){ return playerName;}
	public string getcollege() { return college;}
	public double get40YdDash() {return fortyYardDash;}
	public int getRepsBenchPress() {return resBenchPress;}
	public double get60YdDash() { return sixtyYardDash;}
	
	
	public FootballPlayer2(string playerName, string college,double fortyYardDash , int resBenchPress ,double sixtyYardDash){
		this.playerName = playerName;
		this.college =college;
		this.fortyYardDash =fortyYardDash;
		this.resBenchPressv=resBenchPress;
		this.sixtyYardDash = sixtyYardDash;
		
	}
	
	public FootballPlayer2(string playerName, string college,double fortyYardDash , int resBenchPress ){
		
		this{playerName ,college ,fortyYardDash ,resBenchPress,0.0);
	}
	
	public FootballPlayer2(string playerName, string college,double fortyYardDash ,double sixtyYardDash){
		
		this{playerName ,college ,fortyYardDash ,0,sixtyYardDash);

		
	}
	
	public static void main(String[] args){
    FootballPlayer2 jamellFleming = new FootballPlayer2("jamel Fleming","oklahoma",4.53,10.75);
    system.out.println(jamelFleming.getplayerName());
	system.out.println(jamelFleming.getcollege());
	system.out.println(jamelFleming.get40YdDash());
	system.out.println(jamelFleming.getRepsBenchPress());
	system.out.println(jamelFleming.get60YdDash());		
	}
	
	
	
	
}

?>