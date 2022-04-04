<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPSSLConnection;
use PhpAmqpLib\Message\AMQPMessage;

class AMQController
{
    private $connection;
    private $channel;
    public function __construct()
    {

        $sslOptions = array(
            'cafile' => realpath('/isrgrootx1.pem'),
        );

        $this->connection = new AMQPSSLConnection($_ENV["RABBITMQ_HOST"], 5671, 'admin', $_ENV["RABBITMQ_PASS"], '/', $sslOptions);

        $this->channel = $this->connection->channel();
    }
    public function publishEvent()
    {
        $this->channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage('Hello World!');
        $this->channel->basic_publish($msg, '', 'hello');

        echo " [x] Sent 'Hello World!'\n";

        $this->channel->close();
        $this->connection->close();
    }
}
