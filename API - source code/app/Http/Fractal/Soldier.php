<?php

  namespace App\Http\Fratcal;

  Class Soldier {

    public function($data) {
      return [
        [
          'id'                => (int)    $Data['id'],
          'Voornaam'          => (string) $Data['Voornaam'],
          'Achternaam'        => (string) $Data['Achternaam'],
          'Burgerlijke stand' => (string) $Data['Burgerlijke_stand'],
          'Dienst nr'         => (string) $Data['Stam_nr'],
          'Regiment ID'       => (int)    $Data['regiment_id'],
          'Regiment'          => (string) $Data['regiment']['Regiment'],
        ],
      ];
    }

  }
