<?php

namespace app\Classes\Telegram;

use GuzzleHttp\Client;

class Telegram{
    private $base_url = 'https://api.telegram.org/bot';
    private $token;
    private $client;
    private $chat_id;
    private $text;
    public function __construct($token) {
        $this->token = $token;
        $this->client = new Client(['base_uri' => $this->base_url . $this->token . '/']);
    }
    public function SetChatID ($chat_id){
        $this->chat_id = $chat_id;
    }
    public function SetText ($text){
        $this->text = $text;
    }
    public function getUpdates($offset = null, $limit = null, $timeout = null) {
        $params = [];
        
        if ($offset) { $params['offset'] = $offset; }
        if ($limit) { $params['limit'] = $limit; }
        if ($timeout) { $params['timeout'] = $timeout; }

        $response = $this->client->get('getUpdates', [
            'query' => $params
        ]);
        return json_decode($response->getBody(), true);
    }
    public function setWebhook($url, $certificate = null, $ip_address = null, $max_connections = null, $allowed_updates = null, $drop_pending_updates = null, $secret_token = null) {
        $params = [
            'url' => $url,
        ];
        if ($certificate) { $params['certificate'] = $certificate; }
        if ($ip_address) { $params['ip_address'] = $ip_address; }    
        if ($max_connections) { $params['max_connections'] = $max_connections; }
        if ($allowed_updates) { $params['allowed_updates'] = $allowed_updates; }
        if ($drop_pending_updates) { $params['drop_pending_updates'] = $drop_pending_updates; }
    
        if ($secret_token) { $params['secret_token'] = $secret_token; }
        $response = $this->client->post('setWebhook', [
            'form_params' => $params
        ]);
        return json_decode($response->getBody(), true);
    }
    public function deleteWebhook($drop_pending_updates = false) {
        $params = [
            'drop_pending_updates' => $drop_pending_updates
        ];
    
        $response = $this->client->post('deleteWebhook', [
            'form_params' => $params
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function getWebhookInfo() {
        $response = $this->client->post('getWebhookInfo');
    
        return json_decode($response->getBody(), true);
    }
    public function sendMessage($message_thread_id = null,$parse_mode = null, $entities = null, $link_preview_options = null, $disable_notification = false, $protect_content = false, $reply_parameters = null, $reply_markup = null) {
        $params = [
            'chat_id' => $this->chat_id,
            'text' => $this->text,
        ];

        if ($message_thread_id) { $params['message_thread_id'] = $message_thread_id; }
        if ($parse_mode) { $params['parse_mode'] = $parse_mode; }
        if ($entities) { $params['entities'] = $entities; }
        if ($link_preview_options) { $params['link_preview_options'] = $link_preview_options; }
        if ($disable_notification) { $params['disable_notification'] = $disable_notification; }
        if ($protect_content) { $params['protect_content'] = $protect_content; }
        if ($reply_parameters) { $params['reply_parameters'] = $reply_parameters; }
        if ($reply_markup) { $params['reply_markup'] = $reply_markup; }
    
        $response = $this->client->post('sendMessage', [
            'form_params' => $params
        ]);
    
        return json_decode($response->getBody(), true);
    }
}
