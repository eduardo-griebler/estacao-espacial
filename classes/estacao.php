<?php

class Estacao
{
        public string $nome;
        public float $energia;
        public float $oxigenio;
        public int $integridade;

        public function __construct(string $nome, float $energia, float $oxigenio, int $integridade)
        {
                $this->nome = $nome;
                $this->energia = $energia;
                $this->oxigenio = $oxigenio;
                $this->integridade = $integridade;
        }

        public function ConsumirEnergia(float $consumo = 0.5): void
        {
                $this->energia = $this->energia - $consumo;
        }
}
