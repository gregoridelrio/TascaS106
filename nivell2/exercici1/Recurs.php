<?php
enum Tema: string
{
  case PHP = 'PHP';
  case CSS = 'CSS';
  case HTML = 'HTML';
  case SQL = 'SQL';
  case LARAVEL = 'Laravel';
};

enum TipusRecurs: string
{
  case Fitxer = 'Fitxer';
  case Article = 'Article web';
  case Video = 'Video';
}

class Recurs
{
  private string $nom;
  private Tema $tema;
  private string $url;
  private TipusRecurs $tipusRecurs;

  function __construct(string $nom, Tema $tema, string $url, TipusRecurs $tipusRecurs)
  {
    $this->nom = $nom;
    $this->tema = $tema;
    $this->url = $url;
    $this->tipusRecurs = $tipusRecurs;
  }

  function __get($value)
  {
    return $this->$value;
  }
}
