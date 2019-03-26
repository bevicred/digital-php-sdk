# Bevicred Digital PHP SDK
SDK em PHP para integração com a API da Bevicred Digital.
Compatível com PHP > 5.6

# Exemplo de utilização
$client = new Client();
$client->setEnvironment(Environment::PRODUCTION);
$client->setAuthorization('tokenIntegracaoComBevicredDigital');

$result = $client->post('/', []);

$result->getStatusCode();
$result->getContent();
