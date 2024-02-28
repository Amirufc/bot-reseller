<?php

namespace app\Classes\Telegram;

use GuzzleHttp\Client;

class Telegram{
    private $base_url = 'https://api.telegram.org/bot';
    private $token;
    private $client;
    private $data = array();
    public function __construct($token) {
        $this->token = $token;
        $this->client = new Client(['base_uri' => $this->base_url . $this->token . '/']);
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
    /* Methods used to define the webhook set */
    public function Certificate ($value = null){
        $this->data['certificate'] = $value;
        return $this;
    }
    public function IpAddress ($value = null){
        $this->data['ipaddress'] = $value;
        return $this;
    }
    public function MaxConnections ($value = null){
        $this->data['maxconnections'] = $value;
        return $this;
    }
    public function AllowedUpdates ($value = null){
        $this->data['allowedupdates'] = $value;
        return $this;
    }
    public function DropPending ($value = null){
        $this->data['droppending'] = $value;
        return $this;
    }
    public function SecretToken ($value = null){
        $this->data['secrettoken'] = $value;
        return $this;
    }
    public function setWebhook($url) {
        $response = $this->client->post('setWebhook', [
            'form_params' => [
                'url' => $url,
                'certificate' => $this->data['certificate'] ? $this->data['certificate'] : null,
                'ip_address' => $this->data['ipaddress'] ? $this->data['ipaddress'] : null,
                'max_connections' => $this->data['maxconnections'] ? $this->data['maxconnections'] : null,
                'allowed_updates' => $this->data['allowedupdates'] ? $this->data['allowedupdates'] : null,
                'drop_pending_updates' => $this->data['droppending'] ? $this->data['droppending'] : null,
                'secret_token' => $this->data['secrettoken'] ? $this->data['secrettoken'] : null,
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    /* Methods used to define the webhook set */
    public function deleteWebhook() {
        $response = $this->client->post('deleteWebhook', [
            'form_params' => [
                'drop_pending_updates' => $this->data['droppending'] ? $this->data['droppending'] : null,
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function getWebhookInfo() {
        $response = $this->client->post('getWebhookInfo');
    
        return json_decode($response->getBody(), true);
    }
    /* Methods used to define the SendMessage set */
    public function ChatID ($chat_id){
        $this->data['chat_id'] = $chat_id;
        return $this;
    }
    public function Text ($text){
        $this->data['text'] = $text;
        return $this;
    }
    public function Thread ($value = null){
        $this->data['thread'] = $value;
        return $this;
    }
    public function ParseType ($value = null){
        $this->data['parse'] = $value;
        return $this;
    }
    public function Entities($type = null, $offset = null, $length = null, $url = null, $user = null, $language = null, $custom_emoji_id = null) {
        $this->data['entities'] = [
            'type' => $type,
            'offset' => $offset,
            'length' => $length,
            'url' => $url,
            'user' => $this->data['user'],
            'language' => $language,
            'custom_emoji_id' => $custom_emoji_id
        ];
        return $this;
    }
    public function User($id, $is_bot, $first_name, $last_name = null, $username = null, $language_code = null, $is_premium = false, $added_to_attachment_menu = false, $can_join_groups = null, $can_read_all_group_messages = null, $supports_inline_queries = null) {
        $this->data['user'] = [
            'id' => $id,
            'is_bot' => $is_bot,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'language_code' => $language_code,
            'is_premium' => $is_premium,
            'added_to_attachment_menu' => $added_to_attachment_menu,
            'can_join_groups' => $can_join_groups,
            'can_read_all_group_messages' => $can_read_all_group_messages,
            'supports_inline_queries' => $supports_inline_queries
        ];
        return $this;
    }
    public function LinkPreviewOptions($is_disabled = false, $url = null, $prefer_small_media = false, $prefer_large_media = false, $show_above_text = false) {
        $this->data['LinkPreviewOptions'] = [
            'is_disabled' => $is_disabled,
            'url' => $url,
            'prefer_small_media' => $prefer_small_media,
            'prefer_large_media' => $prefer_large_media,
            'show_above_text' => $show_above_text
        ];
        return $this;
    }
    public function Notification($value = false){
        $this->data['Notification'] = $value;
        return $this;
    }
    public function Protect($value = false){
        $this->data['Protect'] = $value;
        return $this;
    }
    public function Replay($message_id, $chat_id = null, $allow_sending_without_reply = false, $quote = null, $quote_parse_mode = null, $quote_entities = null, $quote_position = null) {
        $this->data['replay'] = [
            'message_id' => $message_id,
            'chat_id' => $chat_id,
            'allow_sending_without_reply' => $allow_sending_without_reply,
            'quote' => $quote,
            'quote_parse_mode' => $quote_parse_mode,
            'quote_entities' => $quote_entities,
            'quote_position' => $quote_position
        ];
        return $this;
    }
    public function ReplayMarkup($value = false) {
        $this->data['ReplayMarkup'] = $value;
        return $this;
    }
    public function sendMessage() {
        $response = $this->client->post('sendMessage', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'text' => $this->data['text'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'entities' => $this->data['entities'] ?? null,
                'link_preview_options' => $this->data['LinkPreviewOptions'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    /* Methods used to define the SendMessage set */
}
