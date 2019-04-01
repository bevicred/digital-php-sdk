# digital-php-sdk
SDK em PHP para integração com a API da Bevicred Digital.  
Compatível com PHP >= 5.6

# Instalação  
```composer require bevicred-digital/php-sdk ```  
Ou apenas baixe e copie o Client.php para onde for usar.  

# Exemplo de utilização
```php
$client = new Client();  
$client->setEnvironment(Environment::PRODUCTION);  
$client->setAuthorization('tokenIntegracaoComBevicredDigital');  

$result = $client->post('/', []);  

$result->getStatusCode();  
$result->getContent();  
```
