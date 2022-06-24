<?php

//Demonstrate the Creation Method  replacement of Constructors

Public class FootballPlayer{
	
	private double passerRating;
	private int rushingYards;
	private int receivingYards;
	private int totalTackles;
	private int interceptions;
	private int fieldGoals;
	private double avgPunt;
	private double avgKickoffReturn;
	private double avgPuntReturn;
	
	
	private FootballPlayer(double passerRating ,int rushingYards ,int receivingYards,
						    int totalTackles , int interceptions ,int fieldGoals, double avgPunt, double avgKickoffReturn, double avgPuntReturn){
								
        this.passerRating = passerRating;
		this.rushingYards = rushingYards;
		this.receivingYards = receivingYards;	
		this.totalTackles = totalTackles;
		this.interceptions = interceptions;
		this.fieldGoals = fieldGoals;
		this.avgPunt = avgPunt;
		this.avgKickoffReturn = avgKickoffReturn;
		this.avgPuntReturn = avgPuntReturn;
		
						
		}
	
	
	public double getPasserRating()
	{
		return passerRating;
	}
	public static FootballPlayer createQB(double passerRating ,int rushingYards){
		
		return new FootballPlayer(passerRating ,rushingYards ,0,0,0,0,0.0,0.0,0.0)
	}
	
	public static FootballPlayer createRB(double passerRating ,int rushingYards){
		
		return new FootballPlayer(passerRating ,rushingYards ,0,0,0,0,0.0,0.0,0.0)
	}

    public static void main(string [] args){
		
	   FootballPlayer aaronRodgers = FootballPlayer.createQB(108.0 ,259);
	   
	   system.out.println("Aaron Rodgers passer Rating: " + aaronRodgers.getPasserRating());
		
	}

	/*FootballPlayer(double passerRating ,int rushingYards)`
	{
		this.passerRating = passerRating;
		this.rushingYards = rushingYards;
	}
	
	FootballPlayer(int rushingYards){
		
		this.rushingYards = rushingYards;
		
	}
	
	FootballPlayer(int receivingYards){
	
	 this.receivingYards = receivingYards;
	
	}*/

	
}


?>