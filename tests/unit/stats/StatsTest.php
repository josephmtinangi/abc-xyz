<?php

use PHPUnit\Framework\TestCase;

class StatsTest extends TestCase
{
  /** @test */
  public function we_can_get_text()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Hello');
    
    $this->assertEquals($stats->getText(), 'Hello');
  }
  /** @test */
  public function it_can_count_number_of_characters()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Mtinangi');
    
    $this->assertEquals(8, $stats->characters());
  }
  
  /** @test */
  public function it_can_return_the_number_of_words()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Joseph Mtinangi');
    
    $this->assertEquals(2, $stats->words());
  }
  
  /** @test */
  public function it_can_count_number_of_vowels()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Goodluck');
    
    $this->assertEquals(3, $stats->vowels());
  }
  
  /** @test */
  public function it_can_count_number_of_spaces()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Goodluck Joseph Mtinangi');
    
    $this->assertEquals(2, $stats->spaces());    
  }
  
  /** @test */
  public function it_can_count_number_of_consonants()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Goodluck Joseph Mtinangi');
    
    $this->assertEquals(14, $stats->consonants());
  }
  
  /** @test */
  public function it_can_get_the_count_of_passed_character()
  {
    $stats = new \Stats\Stats;
    
    $stats->setText('Goodluck Joseph Mtinangi');
    
    $this->assertEquals(3, $stats->countCharacter('o'));     
  }
}