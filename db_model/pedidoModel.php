<?php
class Pedido {
    public int $id;
    public function __construct(
        public Cliente $cliente,
        public Cozinheiro $cobrado,
        public Prato $rato,
        ){}
}
?>