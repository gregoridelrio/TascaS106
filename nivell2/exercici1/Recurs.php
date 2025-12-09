<?php
class Recurs
{
  private string $nom;
  private Tema $tema;
  private string $url;
  private TipusRecurs $tipusRecurs;
}

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
  case Article = 'Article';
  case Web = 'Web';
  case Video = 'Video';
}
