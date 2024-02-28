<?php

namespace App\Classes\Telegram;

class TelegramAction extends Telegram{
    public function getUpdates($options = []) {
        $response = $this->request()->get('getUpdates', [
            'query' => [
                'offset' => $this->data['offset'] ?? null,
                'limit' => $this->data['limit'] ?? null,
                'timeout' => $this->data['timeout'] ?? null,
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function setWebhook($url) {
        $response = $this->request()->post('setWebhook', [
            'form_params' => [
                'url' => $url,
                'certificate' => $this->data['certificate'] ?? null,
                'ip_address' => $this->data['ipaddress'] ?? null,
                'max_connections' => $this->data['maxconnections'] ?? null,
                'allowed_updates' => $this->data['allowedupdates'] ?? null,
                'drop_pending_updates' => $this->data['droppending'] ?? null,
                'secret_token' => $this->data['secrettoken'] ?? null,
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function deleteWebhook() {
        $response = $this->request()->post('deleteWebhook', [
            'form_params' => [
                'drop_pending_updates' => $this->data['droppending'] ?? null,
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function getWebhookInfo() {
        $response = $this->request()->post('getWebhookInfo');
    
        return json_decode($response->getBody(), true);
    }
    public function sendMessage($options = []) {
        $response = $this->request()->post('sendMessage', [
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
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function forwardMessage($options = []) {
        $response = $this->request()->post('forwardMessage', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'from_chat_id' => $this->data['fromchatid'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'message_id' => $this->data['messageid'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function forwardMessages($options = []) {
        $response = $this->request()->post('forwardMessages', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'from_chat_id' => $this->data['fromchatid'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'message_ids' => $this->data['messageids'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function copyMessage($options = []) {
        $response = $this->request()->post('copyMessage', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'from_chat_id' => $this->data['fromchatid'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'message_id' => $this->data['messageid'] ?? null,
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function copyMessages($options = []) {
        $response = $this->request()->post('copyMessages', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'from_chat_id' => $this->data['fromchatid'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'message_ids' => $this->data['messageids'] ?? null,
                'remove_caption' => $this->data['removecaption'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendAudio($options = []) {
        $response = $this->request()->post('sendAudio', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'audio' => $this->data['audio'],
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'duration' => $this->data['duration'] ?? null,
                'performer' => $this->data['performer'] ?? null,
                'title' => $this->data['title'] ?? null,
                'thumbnail' => $this->data['thumbnail'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendDocument($options = []) {
        $response = $this->request()->post('sendDocument', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'document' => $this->data['document'],
                'thumbnail' => $this->data['thumbnail'] ?? null,
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'disable_content_type_detection' => $this->data['disablecontenttypedetection'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendVideo($options = []) {
        $response = $this->request()->post('sendVideo', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'video' => $this->data['video'],
                'duration' => $this->data['duration'] ?? null,
                'width' => $this->data['width'] ?? null,
                'height' => $this->data['height'] ?? null,
                'thumbnail' => $this->data['thumbnail'] ?? null,
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'has_spoiler' => $this->data['spoiler'] ?? null,
                'supports_streaming' => $this->data['streaming'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendAnimation($options = []) {
        $response = $this->request()->post('sendAnimation', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'animation' => $this->data['animation'],
                'duration' => $this->data['duration'] ?? null,
                'width' => $this->data['width'] ?? null,
                'height' => $this->data['height'] ?? null,
                'thumbnail' => $this->data['thumbnail'] ?? null,
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'has_spoiler' => $this->data['spoiler'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendVoice($options = []) {
        $response = $this->request()->post('sendVoice', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'voice' => $this->data['voice'],
                'duration' => $this->data['duration'] ?? null,
                'caption' => $this->data['caption'] ?? null,
                'parse_mode' => $this->data['parse'] ?? null,
                'caption_entities' => $this->data['captionentities'] ?? null,
                'has_spoiler' => $this->data['spoiler'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendVideoNote($options = []) {
        $response = $this->request()->post('sendVideoNote', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'video_note' => $this->data['videonote'],
                'length' => $this->data['length'] ?? null,
                'thumbnail' => $this->data['thumbnail'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendMediaGroup($options = []) {
        $response = $this->request()->post('sendMediaGroup', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'media' => $this->data['media'],
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendLocation($options = []) {
        $response = $this->request()->post('sendLocation', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'latitude' => $this->data['latitude'],
                'longitude' => $this->data['longitude'],
                'horizontal_accuracy' => $this->data['horizontalaccuracy'] ?? null,
                'live_period' => $this->data['liveperiod'] ?? null,
                'heading' => $this->data['heading'] ?? null,
                'proximity_alert_radius' => $this->data['proximityalertradius'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendVenue($options = []) {
        $response = $this->request()->post('sendVenue', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'latitude' => $this->data['latitude'],
                'longitude' => $this->data['longitude'],
                'title' => $this->data['title'],
                'address' => $this->data['address'],
                'heading' => $this->data['heading'] ?? null,
                'foursquare_id' => $this->data['foursquareid'] ?? null,
                'foursquare_type' => $this->data['foursquaretype'] ?? null,
                'google_place_id' => $this->data['googleplaceid'] ?? null,
                'google_place_type' => $this->data['googleplacetype'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
    
        return json_decode($response->getBody(), true);
    }
    public function sendContact($options = []) {
        $response = $this->request()->post('sendContact', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'phone_number' => $this->data['phonenumber'],
                'first_name' => $this->data['firstname'],
                'last_name' => $this->data['lastname'],
                'vcard' => $this->data['vcard'] ?? null,
                'disable_notification' => $this->data['Notification'] ?? null,
                'protect_content' => $this->data['Protect'] ?? null,
                'reply_parameters' => $this->data['replay'] ?? null,
                'reply_markup' => $this->data['ReplayMarkup'] ?? null,
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function sendChatAction($options = []) {
        $response = $this->request()->post('sendChatAction', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'message_thread_id' => $this->data['thread'] ?? null,
                'action' => $this->data['action'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function getUserProfilePhotos($options = []) {
        $response = $this->request()->post('getUserProfilePhotos', [
            'form_params' => [
                'user_id' => $this->data['userid'],
                'offset' => $this->data['offset'] ?? null,
                'limit' => $this->data['limit'] ?? null,
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function getFile() {
        $response = $this->request(true)->get($this->data['filepath']);
        return json_decode($response->getBody(), true);
    }
    public function exportChatInviteLink($options = []) {
        $response = $this->request()->post('exportChatInviteLink', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function createChatInviteLink($options = []) {
        $response = $this->request()->post('createChatInviteLink', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'name' => $this->data['name'] ?? null,
                'expire_date' => $this->data['expireday'] ?? null,
                'member_limit' => $this->data['totalmember'] ?? null,
                'creates_join_request' => $this->data['activewaitinglist'] ?? null,
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function revokeChatInviteLink($options = []) {
        $response = $this->request()->post('revokeChatInviteLink', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'invite_link' => $this->data['invitelink'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function approveChatJoinRequest($options = []) {
        $response = $this->request()->post('approveChatJoinRequest', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'user_id' => $this->data['userid'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function declineChatJoinRequest($options = []) {
        $response = $this->request()->post('declineChatJoinRequest', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                'user_id' => $this->data['userid'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function leaveChat($options = []) {
        $response = $this->request()->post('leaveChat', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
    public function getChat($options = []) {
        $response = $this->request()->post('getChat', [
            'form_params' => [
                'chat_id' => $this->data['chat_id'],
                ...$options
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
}