<?php

namespace app\Classes\Telegram;

use App\Classes\Classes;
use GuzzleHttp\Client;

class Telegram extends Classes{
    private $base_url = 'https://api.telegram.org/bot';
    protected $client;
    protected $fileurl;
    protected $data = array();
    public function __construct() {
        $this->client = new Client(['base_uri' => $this->base_url . $this->token . '/']);
        $this->fileurl = new Client(['base_uri' => 'https://api.telegram.org/file/bot' . $this->token . '/']);
    }
    /* Methods used to define the getUpdates set */
    public function Offset ($value = null){
        $this->data['offset'] = $value;
        return $this;
    }
    public function Limit ($value = null){
        $this->data['limit'] = $value;
        return $this;
    }
    public function Timeout ($value = null){
        $this->data['timeout'] = $value;
        return $this;
    }
    /* Methods used to define the getUpdates set */
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
    /* Methods used to define the webhook set */
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
    public function User($id, $is_bot, $username = null, $language_code = null, $is_premium = false, $added_to_attachment_menu = false, $can_join_groups = null, $can_read_all_group_messages = null, $supports_inline_queries = null) {
        $this->data['user'] = [
            'id' => $id,
            'is_bot' => $is_bot,
            'first_name' => $this->data['firstname'],
            'last_name' => $this->data['lastname'] ?? null,
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
    /* Methods used to define the SendMessage set */
    /* Methods used to define the forwardMessage set */
    public function FromChatID ($value = null){
        $this->data['fromchatid'] = $value;
        return $this;
    }
    public function MessageId ($value = null){
        $this->data['messageid'] = $value;
        return $this;
    }
    public function MessageIds ($value = null){
        $this->data['messageids'] = $value;
        return $this;
    }
    /* Methods used to define the forwardMessage set */
    /* Methods used to define the copyMessage set */
    public function Caption ($value = null){
        $this->data['caption'] = $value;
        return $this;
    }
    public function CaptionEntities ($value = null){
        $this->data['captionentities'] = $value;
        return $this;
    }
    public function RemoveCaption ($value = false){
        $this->data['removecaption'] = $value;
        return $this;
    }
    /* Methods used to define the copyMessage set */
    /* Methods used to define the sendAudio set */
    public function Audio ($value = null){
        $this->data['audio'] = $value;
        return $this;
    }
    public function Duration ($value = null){
        $this->data['duration'] = $value;
        return $this;
    }
    public function Performer ($value = null){
        $this->data['performer'] = $value;
        return $this;
    }
    public function Title ($value = null){
        $this->data['title'] = $value;
        return $this;
    }
    public function Thumbnail ($value = null){
        $this->data['thumbnail'] = $value;
        return $this;
    }
    /* Methods used to define the sendAudio set */
    /* Methods used to define the sendDocument set */
    public function Document ($value = null){
        $this->data['document'] = $value;
        return $this;
    }
    public function DisableContentTypeDetection ($value = false){
        $this->data['disablecontenttypedetection'] = $value;
        return $this;
    }
    /* Methods used to define the sendDocument set */
    /* Methods used to define the sendVideo set */
    public function Video ($value = null){
        $this->data['video'] = $value;
        return $this;
    }
    public function Width ($value = null){
        $this->data['width'] = $value;
        return $this;
    }
    public function Height ($value = null){
        $this->data['height'] = $value;
        return $this;
    }
    public function Spoiler ($value = false){
        $this->data['spoiler'] = $value;
        return $this;
    }
    public function Streaming ($value = false){
        $this->data['streaming'] = $value;
        return $this;
    }
    public function VideoNote ($value = null){
        $this->data['videonote'] = $value;
        return $this;
    }
    public function Length ($value = null){
        $this->data['length'] = $value;
        return $this;
    }
    /* Methods used to define the sendVideo set */
    /* Methods used to define the sendAnimation set */
    public function Animation ($value = null){
        $this->data['animation'] = $value;
        return $this;
    }
    /* Methods used to define the sendAnimation set */
    /* Methods used to define the sendVoice set */
    public function Voice ($value = null){
        $this->data['voice'] = $value;
        return $this;
    }
    /* Methods used to define the sendVoice set */
    /* Methods used to define the sendMediaGroup set */
    public function Media ($value = null){
        $this->data['media'] = $value;
        return $this;
    }
    /* Methods used to define the sendMediaGroup set */
    /* Methods used to define the sendLocation set */
    public function Latitude ($value = null){
        $this->data['latitude'] = $value;
        return $this;
    }
    public function Longitude ($value = null){
        $this->data['longitude'] = $value;
        return $this;
    }
    public function HorizontalAccuracy ($value = null){
        $this->data['horizontalaccuracy'] = $value;
        return $this;
    }
    public function LivePeriod ($value = null){
        $this->data['liveperiod'] = $value;
        return $this;
    }
    public function Heading ($value = null){
        $this->data['heading'] = $value;
        return $this;
    }
    public function ProximityAlertRadius ($value = null){
        $this->data['proximityalertradius'] = $value;
        return $this;
    }
    public function Address ($value = null){
        $this->data['address'] = $value;
        return $this;
    }
    public function FoursquareID ($value = null){
        $this->data['foursquareid'] = $value;
        return $this;
    }
    public function FoursquaretType ($value = null){
        $this->data['foursquaretype'] = $value;
        return $this;
    }
    public function GooglePlaceID ($value = null){
        $this->data['googleplaceid'] = $value;
        return $this;
    }
    public function GooglePlaceType ($value = null){
        $this->data['googleplacetype'] = $value;
        return $this;
    }
    /* Methods used to define the sendLocation set */
    /* Methods used to define the sendContact set */
    public function PhoneNumber ($value = null){
        $this->data['phonenumber'] = $value;
        return $this;
    }
    public function FirstName ($value = null){
        $this->data['firstname'] = $value;
        return $this;
    }
    public function LastName ($value = null){
        $this->data['lastname'] = $value;
        return $this;
    }
    public function VCard ($value = null){
        $this->data['vcard'] = $value;
        return $this;
    }
    /* Methods used to define the sendContact set */

    public function Action ($value = null){
        $this->data['action'] = $value;
        return $this;
    }
    public function USerID ($value = null){
        $this->data['userid'] = $value;
        return $this;
    }
    public function FilePath ($value = null){
        $this->data['filepath'] = $value;
        return $this;
    }
}