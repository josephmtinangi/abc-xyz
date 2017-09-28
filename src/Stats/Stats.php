<?php

namespace Stats;

class Stats
{
  protected $text;
  
  public function setText($text)
  {
    $this->text = $text;
  }
  
  public function getText()
  {
    return $this->text;
  }
  
  public function characters()
  {
    return strlen($this->text);
  }
  
  public function words()
  {
    return str_word_count($this->text);
  }
  
  public function spaces()
  {
    return substr_count($this->text, ' ');
  }
  
  public function vowels()
  {
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    for($i = 0; $i < strlen($this->text); $i++)
    {
      if(in_array($this->text[$i], $vowels))
      {
        $count++;
      }
    }
    
    return $count;
  }
  
  public function consonants()
  {
    return strlen($this->text) - ($this->vowels() + $this->spaces());
  }
  
  public function countCharacter($character)
  {
    $count = 0;
    $characters = [$character];
    
    for($i = 0; $i < strlen($this->text); $i++)
    {
      if(in_array($this->text[$i], $characters))
      {
        $count++;
      }
    }
    
    return $count;
  }
}