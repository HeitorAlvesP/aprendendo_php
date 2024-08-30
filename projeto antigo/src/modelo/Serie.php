<?php 
    
    class Serie{

        public string $nomeSerie;
        public int $anoLancamento;
        public int $numeroEp;
        public int $genero;
        public array $notasSerie;
        
        };
        
        function criaSerie(string $nomeSerie, int $anoDeLancamento, int $genero, int $numeroEp, array $notasSerie): Serie {
        
        $Serie = new Serie();
        $Serie->numeroEp = $numeroEp;
        $Serie->nomeSerie = $nomeSerie;
        $Serie->anoLancamento = $anoDeLancamento;
        $Serie->genero = $genero;
        $Serie->notasSerie = $notasSerie;
        return $Serie;
        
        };
    
    
?>