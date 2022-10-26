<?php

$modelData= [['id' => 1,
        'order' => 4,
        'label' => 'Nom',
        'value' => 'Alfred Hitchcock' ],
    [
        'id' => 2,
        'order' => 5,
        'label' => 'Date de naissance',
        'value' => '1899-08-13'],
    [
        'id' => 3,
        'order' => 1,
        'label' => 'Titre',
        'value' => 'Vertigo'
    ],
    [
        'id' => 4,
        'order' => 2,
        'label' => 'Année',
        'value' => '1985'
    ],
    [
        'id' => 5,
        'order' => 3,
        'label' => 'Durée',
        'value' => '128',
    ]
];

class Movie
{
    protected string $titre;
    protected int $annee;
    protected int $duree;
    public function __construct($titre, $annee, $duree)
    {
        $this->annee = $annee;
        $this->titre = $titre;
        $this->duree = $duree;
    }
}

$dataModelConverter = new DataModelConverter();

$movie = new Movie('Vertigo', 1985, 128);

echo $dataModelConverter->convert($movie, $modelData);

class DataModelConverter
{
    public function convert($movie, $modelData)
    {
        return "Titre : " .$modelData[2]['value']."</br>".
        "Année : " .$modelData[3]['value']."</br>".
        "Durée : " .$modelData[4]['value']."</br>".
        "Nom : " .$modelData[0]['value']."</br>".
        "Date de naissance : " .$modelData[1]['value'];
    }
}
