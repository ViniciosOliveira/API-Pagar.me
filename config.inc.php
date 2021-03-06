<?php

define('BASE_URL', 'https://v8-01/Treinamentos/Integração%20com%20Pagar.me'); //Url Base do Sistema

/*
 * API PAGAR.ME
 * Configuração API de comunicação com a pagarme
 */
define('PAGARME_SANDBOX', 1); //ATIVA MODO SANDBOX
define('PAGARME_SANDBOX_API_KEY', "INFORME SUA API KEY SANDBOX"); //API_KEY MODO SANDBOX
define('PAGARME_SANDBOX_ENCRYPTION_KEY', "INFORME SUA ENCRYPTION KEY SANDBOX"); //API_KEY MODO SANDBOX

define('PAGARME_API_KEY', "INFORME SUA API KEY PRODUCAO"); //API_KEY MODO PRODUÇÂO
define('PAGARME_ENCRYPTION_KEY', "INFORME SUA ENCRYPTION KEY PRODUCAO"); //API_KEY MODO PRODUÇÂO

define('PAGARME_MAX_PARC', 11); //Numero Maximo de Parcelas
define('PAGARME_TX_JUROS', 3.99); //Taxas de Juros


require __DIR__ . '/_gtw/pagarme/autoload.php'; //LIB PAGAR.ME
require __dir__ . '/_gtw/PagarmeBS.class.php'; //class Pagar.ME
