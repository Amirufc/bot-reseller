<?php

namespace app\Classes\Telegram;

use App\Classes\Classes;
use GuzzleHttp\Client;

class Telegram extends Classes{
    private $base_url = 'https://api.telegram.org/bot';
    protected $data = array();

    public function request($useFileUrl = false) {
        $baseUrl = $useFileUrl ? $this->base_url . 'file/bot' : $this->base_url . 'bot';
        return new Client(['base_uri' => $baseUrl . $this->token . '/']);
    }
    public function getData(): array {
        return $this->data;
    }
    
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
    
    public function Entities(Entities $entities): self {
        $this->data['entities'] = $entities->toArray();
        return $this;
    }
    public function User(User $user): self{
        $this->data['user'] = $user->toArray();
        return $this;
    }
    public function LinkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): self {
        $this->data['LinkPreviewOptions'] = $linkPreviewOptions->toArray();
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
    public function Replay(Replay $replay): self {
        $this->data['replay'] = $replay->toArray();
        return $this;
    }
    public function ReplayMarkup($value = false) {
        $this->data['ReplayMarkup'] = $value;
        return $this;
    }
    
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
    
    public function Document ($value = null){
        $this->data['document'] = $value;
        return $this;
    }
    public function DisableContentTypeDetection ($value = false){
        $this->data['disablecontenttypedetection'] = $value;
        return $this;
    }
    
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
    
    public function Animation ($value = null){
        $this->data['animation'] = $value;
        return $this;
    }
    
    public function Voice ($value = null){
        $this->data['voice'] = $value;
        return $this;
    }
    
    public function Media ($value = null){
        $this->data['media'] = $value;
        return $this;
    }
    
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
    public function Name ($value = null){
        $this->data['name'] = $value;
        return $this;
    }
    public function ExpireDay ($value = null){
        $this->data['expireday'] = $value * 86400;
        return $this;
    }
    public function TotalMember ($value = null){
        $this->data['totalmember'] = $value;
        return $this;
    }
    public function ActiveWaitingList ($value = false){
        $this->data['activewaitinglist'] = $value;
        return $this;
    }
    public function InviteLink ($value = false){
        $this->data['invitelink'] = $value;
        return $this;
    }
}