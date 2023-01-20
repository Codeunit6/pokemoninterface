<?php
// Path: pokemon.php|
include_once("interface.php");

class Pokemon implements Funciones{
    // Atributos
    public string $nombre;
    public float $vida;
    public float $ataque;
    public float $defensa;
    public float $velocidad;
    public string $imagen;
    // Constructor
    public function __construct($nombre, $vida, $ataque, $defensa, $velocidad, $imagen){
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defensa = $defensa;
        $this->velocidad = $velocidad;
        $this->imagen = $imagen;
    }

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        echo "<div class='pokemon' >";
        echo "<img src='$this->imagen' alt='$this->nombre'>";
        echo "<h2>$this->nombre</h2>";
        echo "<p><strong>Vida:</strong> $this->vida</p>";
        echo "<p><strong>Ataque:</strong> $this->ataque</p>";
        echo "<p><strong>Defensa:</strong> $this->defensa</p>";
        echo "<p><strong>Velocidad:</strong> $this->velocidad</p>";
        echo "</div>";
    }
}

function mostrarPokemonAtributos($imagen, $nombre, $tipo, $habilidades, $vida, $ataque, $defensa, $velocidad){
        echo "<article class='zoom'> <a href='detalle.php?nombre=$nombre&tipo=$tipo&habilidades=$habilidades&imagen=$imagen&vida=$vida&ataque=$ataque&defensa=$defensa&velocidad=$velocidad' class='image featured'><img src='$imagen' alt='' /></a>";
        echo "<header> <h3><a href='#'>'$nombre'</a></h3> </header>";
        echo "<p><strong>Tipo:</strong> $tipo</p>";
        echo "<p><strong>Habilidades:</strong> $habilidades</p>";
        echo "<p><strong>Vida:</strong> $vida</p>";
        echo "<p><strong>Ataque:</strong> $ataque</p>";
        echo "<p><strong>Defensa:</strong> $defensa</p>";
        echo "<p><strong>Velocidad:</strong> $velocidad</p>";
        
}

function debilidadPokemon($tipo){
    if ($tipo == "Agua"){
        echo "<p><strong>Debilidad:</strong> Planta</p>";
    }elseif ($tipo == "Fuego"){
        echo "<p><strong>Debilidad:</strong> Agua</p>";
    }elseif ($tipo == "Planta"){
        echo "<p><strong>Debilidad:</strong> Acero</p>";
    }elseif ($tipo == "Electrico"){
        echo "<p><strong>Debilidad:</strong> Roca</p>";
    }elseif($tipo == "Tierra"){
        echo "<p><strong>Debilidad:</strong> Agua o volador</p>";
    }elseif($tipo == "Psiquico"){
        echo "<p><strong>Debilidad:</strong> Fantasma</p>";
    }elseif($tipo == "Volador"){
        echo "<p><strong>Debilidad:</strong> Electrico</p>";
    }elseif($tipo == "Roca"){
        echo "<p><strong>Debilidad:</strong> Agua</p>";
    }elseif($tipo == "Acero"){
        echo "<p><strong>Debilidad:</strong> Electrico</p>";
    }elseif($tipo == "Fantasma"){
        echo "<p><strong>Debilidad:</strong> Siniestro</p>";
    }elseif($tipo == "Siniestro"){
        echo "<p><strong>Debilidad:</strong> Hada</p>";
    }elseif($tipo == "Hada"){
        echo "<p><strong>Debilidad:</strong> Acero</p>";
    }elseif($tipo == "Dragon"){
        echo "<p><strong>Debilidad:</strong> Hada</p>";
    }elseif($tipo == "Hielo"){
        echo "<p><strong>Debilidad:</strong> Fuego</p>";
    }elseif($tipo == "Bicho"){
        echo "<p><strong>Debilidad:</strong> Fuego</p>";
    }elseif($tipo == "Normal"){
        echo "<p><strong>Debilidad:</strong> Lucha</p>";
    }
}

class PokemonAgua extends Pokemon{
    // Atributos
    public $tipo = "Agua";
    public $habilidades = "Hidrobomba, Hidropulso, Surf, Cascada";
    public $ataque_especial = "Hidrobomba";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }

    public function debilidadPokemon(){
       debilidadPokemon($this->tipo);
    }
}

class PokemonFuego extends Pokemon{
    // Atributos
    public $tipo = "Fuego";
    public $habilidades = "Lanzallamas, Ascuas, Fuego Fatuo, Fuego Lento";
    public $ataque_especial = "Llamarada";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonPlanta extends Pokemon{
    // Atributos
    public $tipo = "Planta";
    public $habilidades = "Latigo Cepa, Hoja Afilada, Hoja Aguda, Hoja Mágica";
    public $ataque_especial = "Latigo Cepa";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonElectrico extends Pokemon{
    // Atributos
    public $tipo = "Electrico";
    public $habilidades = "Impactrueno, Trueno, Rayo Carga, Rayo Hielo";
    public $ataque_especial = "Impactrueno";

    public function mostrarPokemon(){
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonTierra extends Pokemon{
    // Atributos
    public $tipo = "Tierra";
    public $habilidades = "Terremoto, Excavar, Tierra Viva, Tierra Viva";
    public $ataque_especial = "Terremoto";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial
        echo "<p><strong>Ataque especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonPsiquico extends Pokemon{
    // Atributos
    public $tipo = "Psiquico";
    public $habilidades = "Psicocarga, Psicorrayo, Psicorrayo, Psicorrayo";
    public $ataque_especial = "Psicocarga";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonDragon extends Pokemon{
    // Atributos
    public $tipo = "Dragon";
    public $habilidades = "Dragoaliento, Dragociclón, Dragopulso, Dragopulso";
    public $ataque_especial = "Dragoaliento";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonHada extends Pokemon{
    // Atributos
    public $tipo = "Hada";
    public $habilidades = "Doble Rayo, Doble Rayo, Doble Rayo, Doble Rayo";
    public $ataque_especial = "Doble Rayo";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class  PokemonNormal extends Pokemon{
    // Atributos
    public $tipo = "Normal";
    public $habilidades = "Ataque Rápido, Ataque Rápido, Ataque Rápido, Ataque Rápido";
    public $ataque_especial = "Ataque Rápido";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonVolador extends Pokemon{
    // Atributos
    public $tipo = "Volador";
    public $habilidades = "Ataque Ala, Ataque Ala, Ataque Ala, Ataque Ala";
    public $ataque_especial = "Ataque Ala";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonLucha extends Pokemon{
    // Atributos
    public $tipo = "Lucha";
    public $habilidades = "Puño Fuego, Puño Fuego, Puño Fuego, Puño Fuego";
    public $ataque_especial = "Puño Fuego";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonVeneno extends Pokemon{
    // Atributos
    public $tipo = "Veneno";
    public $habilidades = "Bomba Lodo, Bomba Lodo, Bomba Lodo, Bomba Lodo";
    public $ataque_especial = "Bomba Lodo";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonHielo extends Pokemon{
    // Atributos
    public $tipo = "Hielo";
    public $habilidades = "Rayo Hielo, Rayo Hielo, Rayo Hielo, Rayo Hielo";
    public $ataque_especial = "Rayo Hielo";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonRoca extends Pokemon{
    // Atributos
    public $tipo = "Roca";
    public $habilidades = "Pedrada, Pedrada, Pedrada, Pedrada";
    public $ataque_especial = "Pedrada";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }
    
    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonFantasma extends Pokemon{
    // Atributos
    public $tipo = "Fantasma";
    public $habilidades = "Bola Sombra, Bola Sombra, Bola Sombra, Bola Sombra";
    public $ataque_especial = "Bola Sombra";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonBicho extends Pokemon{
    // Atributos
    public $tipo = "Bicho";
    public $habilidades = "Picadura, Picadura, Picadura, Picadura";
    public $ataque_especial = "Picadura";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonAcero extends Pokemon{
    // Atributos
    public $tipo = "Acero";
    public $habilidades = "Cabezazo Zen, Cabezazo Zen, Cabezazo Zen, Cabezazo Zen";
    public $ataque_especial = "Cabezazo Zen";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

class PokemonSiniestro extends Pokemon{
    // Atributos
    public $tipo = "Siniestro";
    public $habilidades = "Golpe Bajo, Golpe Bajo, Golpe Bajo, Golpe Bajo";
    public $ataque_especial = "Golpe Bajo";

    public function mostrarPokemon(){
        // Mostrar los datos del pokemon
        mostrarPokemonAtributos($this->imagen, $this->nombre, $this->tipo, $this->habilidades, $this->vida, $this->ataque, $this->defensa, $this->velocidad);
    }

    public function ataqueEspecial(){
        // Ataque especial del pokemon
        echo "<p><strong>Ataque Especial:</strong> $this->ataque_especial</p>";
    }
    public function debilidadPokemon(){
        debilidadPokemon($this->tipo);
     }
}

?>