<?php

class Pokemon {
    public $nom;
    public $PV;
    public $PVmax;
    public $PC;
    public $type;

    function __construct($nom, $PV, $PC, $type) {
        $this->nom = $nom;
        $this->PV = $PV;
        $this->PVmax = $PV;
        $this->PC = $PC;
        $this->type = $type;
    }

    function EstVivant() {
        return $this->PV > 0;
    }

    function BoitPotion($gain) {
        $this->addPV($gain);
    }

    function Attaque($pokemon) {
        echo $this->nom . " attaque " . $pokemon->nom . "<br>";
        $degats = $this->CalculeDegats($pokemon);
        echo $this->nom . " inflige " . $degats . " dégâts à " . $pokemon->nom . "<br>";
        $pokemon->subPV($degats);
    }

    function addPV($gain) {
        $this->PV += $gain;
        if ($this->PV > $this->PVmax) {
            $this->PV = $this->PVmax;
        }
        echo $this->nom . " a " . $this->PV . " PV <br>";
    }

    function subPV($degats) {
        $this->PV -= $degats;
        if ($this->PV <= 0) {
            echo $this->nom . " est KO <br>";
        } else {
            echo "Il reste " . $this->PV . " PV à " . $this->nom . "<br>";
        }
    }

    function CalculeDegats($pokemon) {
        $multiplieur = 1;
        if ($this->type == "FEU") {
            if ($pokemon->type == "PLANTE") {
                $multiplieur = 2;
            } else if ($pokemon->type == "EAU" || $pokemon->type == "FEU") {
                $multiplieur = 0.5;
            }
        } else if ($this->type == "EAU") {
            if ($pokemon->type == "FEU") {
                $multiplieur = 2;
            } else if ($pokemon->type == "PLANTE" || $pokemon->type == "EAU") {
                $multiplieur = 0.5;
            }
        } else if ($this->type == "ELECTRIK") {
            if ($pokemon->type == "EAU") {
                $multiplieur = 2;
            } else if ($pokemon->type == "ELECTRIK" || $pokemon->type == "PLANTE") {
                $multiplieur = 0.5;
            }
        } else if ($this->type == "PLANTE") {
            if ($pokemon->type == "EAU") {
                $multiplieur = 2;
            } else if ($pokemon->type == "PLANTE" || $pokemon->type == "FEU") {
                $multiplieur = 0.5;
            }
        }
        return $multiplieur * $this->PC;
    }
}
