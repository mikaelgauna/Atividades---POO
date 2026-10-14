<?php
class UtilitarioTexto {
    public static function paraMaiusculas($texto) {
        return strtoupper($texto);
    }

    public static function contarCaracteres($texto) {
        return strlen($texto);
    }
}
