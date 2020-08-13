<?php

namespace GoogleAPI;
use Google_Client;
//use Google\Auth\ApplicationDefaultCredentials;
//use Google\Auth\Cache\MemoryCacheItemPool;
//use Google\Auth\CredentialsLoader;
//use Google\Auth\HttpHandler\HttpHandlerFactory;
//use Google\Auth\OAuth2;
//use Google\Auth\Credentials\ServiceAccountCredentials;
//use Google\Auth\Credentials\UserRefreshCredentials;
//use GuzzleHttp\Client;
//use GuzzleHttp\ClientInterface;
//use GuzzleHttp\Ring\Client\StreamHandler;
//use Psr\Cache\CacheItemPoolInterface;
//use Psr\Http\Message\RequestInterface;
//use Psr\Log\LoggerInterface;
//use Monolog\Logger;
//use Monolog\Handler\StreamHandler as MonologStreamHandler;
//use Monolog\Handler\SyslogHandler as MonologSyslogHandler;

class GoogleAPIClient {
    public function getClient() {
//        echo 'test';
//        $tsrst = 'rstrst';
        $config = config('service');
        $client =  new Google_Client();
        putenv('GOOGLE_APPLICATION_CREDENTIALS=/path/to/service-account.json');
        $client->useApplicationDefaultCredentials();
        $client->addScope(Google_Service_Drive::DRIVE);
        $client->setSubject('');
        //return 'Hello world';
        return $client;
    }
}