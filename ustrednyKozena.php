<?php
declare (strict_types = 1);

/**
     * abstraktni trida implementujici rozhrani
     * @autor Kozena
     */
abstract class ustrednyKozena implements iustrednyKozena{
    
    // interni hodnota, ktera uklada hodnotu napetiKozena, jinak vraci NULL
    protected $napetiKozena;
    
    /**
     * vraci hodnotu z interni promenne napetiKozena
     * @return type
     */
    public function getNapetiKozena(): int
    {
        return $this->napetiKozena; 
    }
    
    /**
     * vklada hodnotu z value do interni promenne napetiKozena
     * @param type $value
     */
    public function setNapetiKozena(int $value)
    {
        $this->napetiKozena = $value;     
    }
};
?>
